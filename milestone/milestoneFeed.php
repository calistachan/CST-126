<?php
//Milestone 8, Calista Ahlstrom: 05/27/21
//Connect to the posts database table and generates the blog feed
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

$c_form1 = "<form action='/milestone/milestoneCommentHandler.php' method='post'>
		<input type='text' id='comment_body' name='comment_body'>
		<br>
		<input type = 'submit' value = 'Submit' /> 
        <input type = 'hidden' id = 'post_id' name = 'post_id' value = '%d'></form>";

$query = "SELECT EMAIL_ADDRESS, TITLE, CONTENT, ID FROM posts";
$c_query = "SELECT AUTHOR, COMMENT FROM comments WHERE POST_ID = %d";
$sql = mysqli_query($conn, $query);

foreach ($sql as $post) {
    echo "<h2>" . $post["EMAIL_ADDRESS"] . "</h2>";
    echo "<h3>" . $post["TITLE"] . "</h3>";
    echo "<p>" . $post["CONTENT"] . "</p>";
    
    $sql2 = mysqli_query($conn, sprintf($c_query, $post["ID"]));
    foreach ($sql2 as $post2) {
        echo "<div><p>" . $post2["AUTHOR"] . ": " . $post2["COMMENT"] . "</p></div>";
    }
    //New query from comments where post_id = $post["ID"]
    //Nested for each same as above
    
    //After for each, commenting box
    
    echo sprintf($c_form1, $post["ID"]);
    echo "<br><br>";
}

echo '<br><a href="index.html">Log Out</a>';

?>