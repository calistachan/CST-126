<?php
//Milestone 7, Calista Ahlstrom: 05/25/21
//Connects to database and inserts new post into posts table
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow

include "milestoneMyfuncs.php";

$conn = dbConnect();
session_start();
//echo $_SESSION["emailAddress"];
//echo $_SESSION["emailAddress"] . $_POST["title"] . $_POST["content"];

$sql = "INSERT INTO posts (EMAIL_ADDRESS, TITLE, CONTENT)
VALUES ('" . $_SESSION["emailAddress"] . "', '" . $_POST["title"] . "'
        , '" . $_POST["content"] . "')";

if($conn->query($sql) === TRUE) {
    echo "<p> Post was succesful </p>";
    echo "<a href='milestoneFeed.php'>Go to Feed</a>";
} else {
    echo $_SESSION["emailAddress"] . $_POST["title"] . $_POST["content"];
}

?>