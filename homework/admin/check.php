<?php
extract($_GET);
include "connect.php";
$sql = "UPDATE projects SET status = 'cleared' WHERE id='$id'";
$results = mysqli_query($db, $sql) or die(mysqli_error($db));
header('location:tables.php');

?>