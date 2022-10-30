<?php 
include 'connect.php'; 
$regno = $_SESSION['reg_no'];
$rowno = $_SESSION['row_no'];

$query = "INSERT INTO tickets(reg_no, row_no) VALUES ('$regno','$rowno')";
$run=mysqli_query($con,$query);
header("location:confirm.html");
?>