<?php
//Milestone 7, Calista Ahlstrom: 05/25/21
//Connect to the posts database table and generates the user's feed based off of the session email
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow

echo '<h1>Blog Feed</h1>';
echo '<br><a href="milestoneLoginResponse.php">Create a new post</a><br><br>';

echo '<h3>Search for a Post<h3>';
echo '<form action="/milestone/milestoneSearchHandler.php" method="post">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Search"/>
      </form><br><br>';
    
include_once "milestoneMyfuncs.php";

$conn = dbConnect();
session_start();

$query = "SELECT EMAIL_ADDRESS, TITLE, CONTENT FROM posts";
$sql = mysqli_query($conn, $query);

foreach ($sql as $post) {
    echo "<h2>" . $post["EMAIL_ADDRESS"] . "</h2>";
    echo "<h3>" . $post["TITLE"] . "</h3>";
    echo "<p>" . $post["CONTENT"] . "</p>" . "<br><br>";
    
    //New query from comments where post_id = $post["ID"]
    //Nested for each same as above
    
    //After for each, commenting box
}

echo '<br><a href="index.html">Log Out</a>';

?>