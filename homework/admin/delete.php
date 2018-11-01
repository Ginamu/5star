<?php
extract($_GET);
include 'connect.php';
$sql = "DELETE  FROM projects WHERE id= '$id'";
$results = mysqli_query($db,$sql) or die(mysqli_error($db));
header('location:status.php');
?>