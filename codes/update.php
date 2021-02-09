<?php
include "config.php";
$id = $_POST['pre_id'];
$link = $_POST['new_link'];
$desc = $_POST['new_descr'];



$sql_query = "UPDATE videos SET link = '$link',description='$desc' WHERE id=$id";
if (mysqli_query($con,$sql_query) === TRUE) {
$message =  " Record Update Successfully";
echo "<script type='text/javascript'>alert('$message');window.location.replace('home.php');</script>";

} else {
$message =  "Error!!!";
echo "<script type='text/javascript'>alert('$message');window.location.replace('home.php');</script>";
}

?>