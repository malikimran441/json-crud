<?php

include('connection.php');


$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$Department = $_POST['dept_no'];
$Department_Manager = $_POST['dmanager'];
$Join_Date = $_POST['date'];
$Salary = $_POST['salary'];

 

$query ="INSERT INTO `employees`(`first_name`, `last_name`, `dob`, `gender`, `join_date`) 
VALUES ('$First_Name','$Last_Name','$DOB','$Gender','$Join_Date')";

//echo $query;die;
$conn->query($query) or die($conn->error);
$data = $conn->insert_id;


if($data)
{
	$query1 = "INSERT INTO `salaries`(`emp_no`, `salary`) VALUES ('$data','$Salary')";
}
$conn->query($query1) or die($conn->error);

$query2="INSERT INTO `dept_manager`(`dept_no`, `emp_no`) VALUES ('$Department',$data)";
$conn->query($query2) or die($conn->error);

header('location:c_employee.php');

?>
