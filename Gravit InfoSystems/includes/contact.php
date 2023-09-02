<?php
require('../db.php');
mysqli_select_db($db, 'gravit');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userMessages` (`id`, `name`, `email`, `message` )
VALUES (NULL, '$name', '$email', '$message')";

if (mysqli_query($db, $query)) {
    echo "<script>alert('Your message was sent successfully!');</script>";
    echo "<script>window.location.href='/';</script>";
    exit;
} else {
    echo "<script>alert('There was an error sending the message, Please try again.');</script>";
    echo "<script>window.location.href='/';</script>";
    exit;
}
?>
