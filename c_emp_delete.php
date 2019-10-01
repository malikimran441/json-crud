<?php
include("connection.php");
$id = $_GET['emp_no'];
echo $id;
$query= mysqli_query($conn,"DELETE FROM `employees` WHERE emp_no='$id'");
header('Location:c_employee.php');
?>

