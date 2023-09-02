<?php

require('../db.php');
mysqli_select_db($db, 'gravit');

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$query = "INSERT INTO `users` (`id`, `Name`, `Email`, `Dob`, `Age`, `Mobile`, `Password`,`Country`, `State`, `City` )
VALUES (NULL, '$name', '$email', '$dob', '$age', '$mobile', '$password', '$country', '$state', '$city')";

if (mysqli_query($db, $query)) {
    echo "<script>alert('Registration successful!');</script>";
    echo "<script>window.location.href='/';</script>";
    exit;
} else {
    echo "<script>alert('Registration failed. Please try again.');</script>";
    echo "<script>window.location.href='../signup.php';</script>";
    exit;
}
?>
