<?php 
//Milestone 2, Calista Ahlstrom: 04/25/21
//Connect to a database and insert user information into it
//References: Activity 2 Individual Assignment- CST-126, W3Schools, Stack Overflow

$servername = "localhost";
$username = "root";
$password = "root";
$database = "milestoneproject";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL_ADDRESS, PASSWORD)
VALUES ('" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "'
        , '" . $_POST["emailAddress"] . "', '" . $_POST["password"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "Hello " . $_POST["firstName"] . " " . $_POST["lastName"]
         . "! " . "Thank you for registering!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


