<?php

$con= mysqli_connect("localhost", "root","", "gitamites");
if(!isset($_SESSION['id'])){
    session_start();
}
?>

