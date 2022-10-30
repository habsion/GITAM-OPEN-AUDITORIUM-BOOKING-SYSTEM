<?php
include 'connect.php';
$email = $_POST['mail'];
$password = $_POST['password'];
$login_select_query="SELECT userid FROM userdetails WHERE mail='$email' && password='$password'";
$login_select_result=mysqli_query($con,$login_select_query);
$total_rows= mysqli_num_rows($login_select_result);
if($total_rows==0){
    header('location:index.php?password_error=Invalid details!!!!!');
   
}
else{
    $array=mysqli_fetch_array($login_select_result);
    $_SESSION['id']=$array['userid'];
  header("location:booking.php");
}
 ?>