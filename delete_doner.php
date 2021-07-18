<?php 
include 'header.php';
include 'dbconn.php';
$delete_id=$_SESSION['username'];

$sql="DELETE FROM `register` WHERE `phone`='$delete_id'";
$result=mysqli_query($conn , $sql);


header('location:logout.php');

?>