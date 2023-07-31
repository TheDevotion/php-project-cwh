<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
    die("Connection to this database failed due to ". mysqli_connect_error());

}

//echo "Database successfully connected";

 // You should validate and sanitize the data before using it in the query.
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $other = isset($_POST['other']) ? $_POST['other'] : '';

$sql = "INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name ', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";


echo $sql;

if($con->query($sql) == true) {
    echo "Successfully inserted";
}
else {
    echo "ERROR:: $sql <br> $con->error";
}

$con-> close();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Welcome to travel Form</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&family=Sriracha&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <img class="background" src="kkw.jpg" alt="KKW" />
        <div class="container">
            <h1>Welcome to K.K.W. Senior College, Nashik</h1>

            <h3>
                Enter your details to confirm your participation in the trip
            </h3>
            <p class="sub-msg">Thank you!</p>

            <form action="index.php" method="post">
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your name"
                />
                <input
                    type="text"
                    name="age"
                    id="Enter your age"
                    placeholder="Enter your age"
                />
                <p>Gender:</p>
                <label>
                    <input type="radio" name="gender" id="male" />Male
                </label>
                <label>
                    <input type="radio" name="gender" id="female" />Female
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                />
                <input
                    type="phone"
                    name="phone"
                    id="phone"
                    placeholder="Enter your phone"
                />

                <textarea
                    name="other"
                    id="other"
                    cols="50"
                    rows="10"
                    placeholder="Enter any other info here"
                ></textarea>
                <button class="btn">Submit</button>
            </form>
        </div>
        <script src="index.js"></script>
    </body>
</html>
