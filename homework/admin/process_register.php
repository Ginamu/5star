<?php
extract($_POST);
include 'connect.php';
$sql = "INSERT INTO admin_login (firstname,secondname,email,password) VALUES ('$firstname','$secondname',$email', '$password')";
$result = mysqli_query($db,$sql);
header('location:login.php');