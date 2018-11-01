<?php 
extract($_POST);
include 'connect.php';
$sql= "INSERT INTO projects (name,email,topic,category,deadline,pages,instructions,style) VALUES ('$name','$email',
'$topic','$category','$deadline','$pages','$instructions','$style') ";
$results = mysqli_query($db,$sql) or die(mysqli_error($db));
header('location:home.php');
 ?>