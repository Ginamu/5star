<?php
//processes the login information
extract($_POST);
include 'connect.php';
$sql= "select * from admin_login WHERE email = '$email' and password = '$password'";
$result= mysqli_query($db,  $sql) or die(mysqli_error($db, $sql));
//echo $sql;
$count = mysqli_num_rows($result);
if($count == 1)
{
    $row = mysqli_fetch_row($result);
    $names = $row[1];
    session_start();
    $_SESSION['name'] = $names;
    $_SESSION['email'] = $email;
    header('location:index.php');
}
else
{
    echo "Wrong username or Password";
}


