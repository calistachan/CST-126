<?php
//Milestone 7, Calista Ahlstrom: 05/25/21
//Check to see if the user/admin can log into the website
//References: Activity 6 Individual Assignment- CST-126, W3Schools, Stack Overflow

include 'milestoneMyfuncs.php';

$email = $_POST["emailAddress"];
$pass = $_POST["password"];

$conn = dbConnect();

$query = "SELECT EMAIL_ADDRESS, PASSWORD, IS_ADMIN FROM users
                 WHERE EMAIL_ADDRESS = '" . $email . "' AND
                    PASSWORD = '" . $pass . "'";

$sql = mysqli_query($conn, $query);

if (strlen($email) === 0){
    $message = "The Email is a required field and cannot be blank.";
    include('milestoneLoginFailed.php');
} else if (strlen($pass) === 0){
    $message = "The Password is a required field and cannot be blank.";
    include('milestoneLoginFailed.php');
} else {
    if (mysqli_num_rows($sql) === 1){
        session_start();
        $_SESSION["emailAddress"] = $email;
        echo $_SESSION["emailAddress"];
        foreach ($sql as $user) {
            if($user["IS_ADMIN"] == 1 || $user["IS_ADMIN"] == true) {
                include('milestoneAdminLoginResponse.php');
            } else {
                include('milestoneLoginResponse.php');
            } 
            break;
        }
       
    } else if (mysqli_num_rows($sql) === 0){
        $message = "Login Failed, no user found.";
        include('milestoneLoginFailed.php');
    } else if (mysqli_num_rows($sql) > 1){
        $message = "Login Failed, there are multiple users with these credentials.";
        include('milestoneLoginFailed.php');
    } else {
        $message = "Login Failed, general error.";
        include('milestoneLoginFailed.php');
    }
}

$conn->close();
?>