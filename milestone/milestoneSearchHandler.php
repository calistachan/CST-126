<?php

//Milestone 8, Calista Ahlstrom: 05/27/21
//Searches for a post based off of user input
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow


require_once('milestoneUtility.php');

$searchPattern = $_POST["search"];

$posts = getPosts($searchPattern);

include('milestone_displayPosts.php');

?>
