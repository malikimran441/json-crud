<?php

include('config.php');


$Name = $_POST['name'];
$Dob = $_POST['dob'];
$Gender = $_POST['gender'];
$Department = $_POST['department'];
$Dmanager = $_POST['dmanager'];
$Salary = $_POST['salary'];
$join_date = $_POST['date'];

$query = mysqli_query($conn, "INSERT INTO `employee`(`name`, `dob`, `gender`, `department`, `dept_manager`, `salary`, `join_date`) 
VALUES ('$Name','$Dob','$Gender','$Department','$Dmanager','$Salary','$join_date')");
if($query == true)
{
//	echo "insert data";
header("location:employee.php");
}
else
{
	header("location:emp_add.php");
}

?>



