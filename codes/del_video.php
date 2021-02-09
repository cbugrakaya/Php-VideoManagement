<?php
include "config.php";
$id = $_GET['id']; 
echo $id;

$sql_query = "update videos set is_deleted= 1 where id=$id";

if (mysqli_query($con,$sql_query) === TRUE) {
    $message =  "Record Delete successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
    $message =  "Error!!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
header('Location: ' . $_SERVER['HTTP_REFERER'])
?>