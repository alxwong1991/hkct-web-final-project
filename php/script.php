<?php

include('config.php');

session_start();

if (isset($_SESSION["user_id"])) {
    header("Location: welcome-profile.php");
}

if (isset($_POST["signup"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email ='$email'"));

    if ($password !== $cpassword) {
        echo "<script>alert('Password did not match.');</script>";
    } elseif ($check_email > 0) {
        echo "<script>alert('Email exist in our database.');</script>";
    } else {
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_POST["signup_full_name"] = "";
            $_POST["signup_email"] = "";
            $_POST["signup_password"] = "";
            $_POST["signup_cpassword"] = "";
            echo "<script>alert('User registration sucessful.');</script>";
        } else {
            echo "<script>alert('User registration failed.');</script>";
        }
    }
}

if (isset($_POST["signin"])) {
    $email = mysqli_real_escape_string($conn, ($_POST["email"]));
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($check_email) > 0) {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['id'];
        header("Location: welcome-profile.php");
    } else {
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
    }
}
