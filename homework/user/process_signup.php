<?php
extract($_POST);
include 'connect.php';
$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email', '$password')";
$result = mysqli_query($db,$sql);
header('location:login.php');
?>