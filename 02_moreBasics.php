<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>


    
</head>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: gray;
        color: white;
        margin: auto;
        padding:23px;
    }
</style>

<body>

    <div class="container">

        <h1> More basics </h1>

        <p> Decision</p>

        <?php

        $age = 24;

        if($age>18) {
            echo "You are an adult";
        }
        else {
            echo " You are a child";
        }



        // array in php;

        $lang = array("python", "c++", "php", "c");

        echo $lang[0];

        // array methods:

        echo count($lang);


        // Loops in php:
        $a = 0;
        while($a<=10 ){
            echo "the value of a is: ";
            echo $a;
            $a++;
            echo "<br>";


        }

        // array using loop

        $a = 0;

        while($a < count($lang)) {

            echo "<br>";
            echo $lang[$a];

            $a++;
        }

        // do while loop.....
        //for


        // foreach loop::::: used in array;


        foreach ($lang as $value) {

            echo "<br>the value is ";
            echo $value;

        }


        // Strings in php (IMP)

        // strlen
        //strrev
        //str_word_count
        // strpos($str,'pak');  :-> returns position.

        //str_replace("is" , "as" , 3);

        echo "<br>";

        $str ="Dipak Jadhav";

        $lenn = strlen($str);

        echo " length is : ". $lenn . "thank you <br>";   // . is a stirng concatination operator
        echo $lenn;

        echo "the num of words are". str_word_count($str). "Thank you";

        echo "rev string is". strrev($str);




        ?>
    </div>
    
</body>
</html>