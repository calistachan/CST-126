<!DOCTYPE html>
<!-- Milestone 7, Calista Ahlstrom: 05/25/21 -->
<!-- Generate an HTML Form for a successful Login response -->
<!-- References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow -->
<html>
<head>
<meta charset="UTF-8">
<title>Login Response</title>
</head>
<body>
	<h2>Login was successful: <?php echo " " . $email ?></h2>
	
	<form action="/milestone/milestonePostHandler.php" method="post">
		What's on your mind?
		<br>
		<label for="title">Title:</label>
		<input type="text" id="title" name="title">
		<br>
		<textarea rows = "5" cols = "60" id = "content" name = "content">
			Write here!
		</textarea><br>
		<input type = "submit" value = "Submit" />
	</form>
	
	<br><a href="milestoneFeed.php">Go to Feed</a>
		<a href="index.html">Log Out</a>
</body>
</html>
