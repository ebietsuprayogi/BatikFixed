<?php 
include '../controller/connection.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if(!empty($username) && !empty($password)){
    $sql = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");
    $result = mysqli_num_rows($sql);
    if($result){
        session_start();
        $_SESSION['username'] = $username;
        header("location:../dashboard.php");
    } else{
        header("location:../login.php");
    }
}

?>