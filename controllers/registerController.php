<?php

session_start();

include '../config/config.php';

if (isset($_POST['register'])) {

    $student_name = $_POST['name'];
    $student_email = $_POST['email'];
    $student_password =$_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "SELECT * FROM  auth WHERE student_email = '$student_email'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);


    if ($count > 0) {
        $_SESSION['errMsg'] = "<strong>Email</strong> alreay taken";
        header("location:../screens/registerScreen.php");

    } elseif (strlen($student_password) < 3) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 3 characters long";
        header("location:../screens/registerScreen.php");

    } elseif (!preg_match("/\d/", $student_password)) {
        $_SESSION['errMsg'] = " <strong>Password</strong> at least 1 digit";
        header("location:../screens/registerScreen.php");

    } elseif (!preg_match("/\W/", $student_password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../screens/registerScreen.php");

    } elseif ($student_password != $cpassword) {
        $_SESSION['errMsg'] = "<strong>Password</strong> doesn't match";
        header("location:../screens/registerScreen.php");

    } else {

        $hash_password = md5($student_password);

        $sql2 = "INSERT INTO auth (student_name, student_email, student_password) VALUES ('$student_name','$student_email','$hash_password')";
        $result = mysqli_query($conn, $sql2);

        //success msg
        $_SESSION['sucMsg'] = "Registered Successful!. Login here.";
        header("location:../index.php");
    }
}




?>