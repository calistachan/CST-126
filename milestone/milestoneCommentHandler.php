<?php

//Milestone 8, Calista Ahlstrom: 05/27/21
//Connect to the comments database table and inserts comment 
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow

include "milestoneMyfuncs.php";

$conn = dbConnect();
session_start();

$sql = "INSERT INTO comments (COMMENT, POST_ID, AUTHOR)
VALUES ('" . $_POST["comment_body"] . "', '" . $_POST["post_id"] . "'
        , '" . $_SESSION["emailAddress"] . "')";

if($conn->query($sql) === TRUE) {
    echo "<p> Comment was succesful </p>";
    echo "<a href='milestoneFeed.php'>Go to Feed</a>";
} else {
    echo $_SESSION["emailAddress"] . $_POST["comment_body"] . $_POST["post_id"];
}
?>