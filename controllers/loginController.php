<?php

session_start();

include '../config/config.php';


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = md5($_POST['password']);


    $sql= "SELECT * FROM  auth WHERE student_email = '$email' and student_password = '$pass'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        header("location:../screens/dashboardScreen.php");
    } else {
        $_SESSION['errMsg'] = "Invalid <strong>Email</strong> or <strong>Password</strong>";
        header("location:../index.php");
    }
}

?>