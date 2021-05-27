<?php

//Milestone 8, Calista Ahlstrom: 05/27/21
//A PHP file with reusable functions
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow


function dbConnect(){
    
    $servername = "127.0.0.1:50393";
    $username = "azure";
    $password = "6#vWHD_$";
    $database = "milestoneproject";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if($conn) return $conn;
    else echo "DB Connect Error";
    echo '<br><a href="index.html">Back to Main Menu</a>';
}

?>