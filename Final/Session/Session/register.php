<?php
include "config.php";  //db connection

$success = $error = "";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
     $password = $_POST["password"];
      $email = $_POST["email"];


    if(empty($username) || empty($password)  || empty($email)) {
        $error = "All the field must be filled up"
    }

    else{
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username,password,email) VALUES ('$username','$hashPassword','$email')"

        if($conn->query($sql)===TRUE)
            {
            $success = "Registration complete";
         } 
        
        else {

            $error = "Error :". $conn->error;
        }
    }
}












<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location:login.php");
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Welcome, <b><?php echo $_SESSION["username"]; ?></b></p>

<p>This page is only for logged-in users.</p>

<a href="index.php">Home</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
