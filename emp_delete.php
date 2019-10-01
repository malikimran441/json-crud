<?php
include("config.php");
$id = $_GET['id'];
echo $id;
$query= mysqli_query($conn,"DELETE FROM `employee` WHERE id='$id'");
header('Location:employee.php');
?>
