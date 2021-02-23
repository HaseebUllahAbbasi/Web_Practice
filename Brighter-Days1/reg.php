<?php
session_start ();

$email = $_POST['email'];
$psw = $_POST['psw'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];

include("connect.php");
//checks to see if the details entered in the login are the same as the details stored in the database
$sql = "INSERT INTO login (username, mypass, first_name, surname) VALUES ('$email', '$psw', '$fname', '$sname')";

$userresult = mysqli_query($connect, $sql) or die(mysqli_error($connect));


header("Location: SecureHome.php");
?>


