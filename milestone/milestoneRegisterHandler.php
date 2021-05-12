<?php 
//Milestone 3, Calista Ahlstrom: 05/02/21
//Connect to a database and insert user information into it
//References: Activity 3 Individual Assignment- CST-126, W3Schools, Stack Overflow

include 'milestoneMyfuncs.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["emailAddress"];
$pass = $_POST["password"];

$conn = dbConnect();

$sql = "INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL_ADDRESS, PASSWORD)
VALUES ('" . $firstName . "', '" . $lastName . "'
        , '" . $email . "', '" . $pass . "')";

if ($conn->query($sql) === TRUE) {
    echo "Hello " . $firstName . " " . $lastName
         . "! " . "Thank you for registering!";
    echo '<br><a href="milestoneIndex.html">Back to Main Menu</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<br><a href="milestoneRegister.html">Try Again</a>';
}

$conn->close();
?>


