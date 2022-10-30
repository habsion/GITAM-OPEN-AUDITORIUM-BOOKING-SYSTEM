<?php
include 'connect.php';
$regno = $_POST['regno'];
$mail=$_POST['mail'];
$name=$_POST['name'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$signup_insert_query="INSERT INTO `userdetails`( `name`, `mail`, `password`, `reg_no`, `phone`) VALUES ('$name','$mail','$password','$regno','$phone')";
$signup_insert_result=mysqli_query($con,$signup_insert_query)
        or die(mysqli_error($con));

$_SESSION['id']= mysqli_insert_id($con);
header("location:index.php");
?>
