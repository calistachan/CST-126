<?php
//Milestone 8, Calista Ahlstrom: 05/27/21
//Connect to the posts database table and generates all posts for the Admin
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow


echo '<h1>Delete a Post</h1>';

echo '<form action="/milestone/milestoneDeletePostHandler.php" method="post">
		<label for="title">Post Title:</label>
		<input type="text" id="title" name="title"><br><br>
		<label for="email">User Email:</label>
		<input type="text" id="email" name="email"><br><br>
		<input type="submit" value="Delete">
	  </form>	<br>';
	
include "milestoneMyfuncs.php";
	
$conn = dbConnect();
session_start();
	
$query = "SELECT EMAIL_ADDRESS, TITLE, CONTENT FROM posts";
	
$sql = mysqli_query($conn, $query);

foreach ($sql as $post) {
    echo "<h2>" . $post["EMAIL_ADDRESS"] . "</h2>";
    echo "<h3>" . $post["TITLE"] . "</h3>";
    echo "<p>" . $post["CONTENT"] . "</p>" . "<br><br>";
}

echo '<br><a href="index.html">Log Out</a>';

?>