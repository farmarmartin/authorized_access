<?php
include 'dbh.php';

$first = $_POST['name'];
$last = $_POST['surname'];
$user = $_POST['username'];
$passw = sha1($_POST['password']);
$role = 'user';


$insert = "INSERT INTO logins (loginName, loginSurname, loginUsername, loginPassw) VALUES ('$first', '$last', '$user', '$passw');INSERT INTO my_role (rName) VALUES ('$role');";
mysqli_multi_query($connect, $insert);



header("Location: ../index.php");