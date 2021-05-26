<!DOCTYPE html>
<!-- Milestone 7, Calista Ahlstrom: 05/25/21 -->
<!-- Script that allows the user to view the posts they searched for in a table. -->
<!-- References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow -->
<html>
<head>
<meta charset="UTF-8">
<title>Posts</title>
</head>
<body>
<table>
	<tr>
 		<th>ID</th>
 		<th>Email</th>
 		<th>Title</th>
 		<th>Content</th>
 	</tr>
 <?php
 		for($x=0;$x < count($posts);$x++)
 		{
 		echo "<tr>";
 	    echo "<td>" . $posts[$x][0] . "</td>" . "<td>" . 
        $posts[$x][1] . "</td>" . "<td>" . 
 	    $posts[$x][2] . "</td>" . "<td>" . $posts[$x][3] . "</td>";
 		echo "</tr>";
 		}
 ?>

</table>

<br><a href="milestoneFeed.php">Return to Feed</a><br>

</body>
</html>
