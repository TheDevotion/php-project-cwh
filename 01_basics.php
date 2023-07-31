<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website

    </div>
    <?php 
    echo "hello World";

    $num1 = 11;
    $num2 = 22;

    echo "num1 + num2 is ";
    echo "<br>";
    echo $num1 + $num2;

    //Operators in php:
    // Arithmetic
    // Assignment
    // comparison
    echo "<h1>Comparison operators";
    echo "<br>";

    echo var_dump(1==4);
    // logical

    // and && or || xor     not !


    $myVar = (true) and (true);
    echo "<br>";
    echo var_dump($myVar);


    // what is xor ?
    // exclusive or    tf T   ft T TT f
    // increment / decrement

?>
    <?php 

    define('pi', 3.14);

    echo pi;

    // Data types:

    ?>
</body>
</html>