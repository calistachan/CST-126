<?php
//Milestone 7, Calista Ahlstrom: 05/25/21
//Connects to database and deletes selected row from posts table
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow

include "milestoneMyfuncs.php";

$conn = dbConnect();

$email = $_POST["email"];
$title = $_POST["title"];

$conn = dbConnect();

$sql = "DELETE FROM posts WHERE EMAIL_ADDRESS = '" . $email . "' AND
                    TITLE = '" . $title . "'";

if($conn->query($sql) === TRUE) {
    echo "<p>Deletion successful</p>";
    echo '<a href="milestoneAdminFeed.php"> Return to Feed </a>';
    include('mliestoneAdminFeed.php');
} else {
    echo $_SESSION["emailAddress"] . $_POST["title"] . $_POST["content"];
}

?>