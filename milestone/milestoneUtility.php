<?php

//Milestone 8, Calista Ahlstrom: 05/27/21
//Connect to database and get posts from posts table that match the user input
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow


require_once('milestoneMyfuncs.php');

function getPosts($searchPattern){
    $conn = dbConnect();
    
    $query = "SELECT * FROM posts WHERE TITLE LIKE '%$searchPattern%'";
    
    $sql = mysqli_query($conn, $query);
    
    $posts = array();
    $index = 0;
    if (mysqli_num_rows($sql) > 0) {
        while($row = $sql->fetch_row()){
            $posts[$index] = array(
                $row[0], $row[1], $row[2], $row[3]
            );
            ++$index;
        }
    }
    
    $conn->close();
    
    return $posts;
    
}

?>