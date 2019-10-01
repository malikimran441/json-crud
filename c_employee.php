<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
	
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class=""><a href="index.php">Home</a></li>
     <li class=""><a href="employee.php">Employee</a></li>
     <li class="clr1 active"><a href="c_employee.php">New Employee</a></li>
     
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to New Employee Page</h3>      
  <p>All Employee List Show below</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar"> 
  <a class="btn btn-primary" href="c_emp_add.php"><i class="icon-plus"></i> Add New Employee</a>
  
 
  
 </div>
</div>

<br>
<br>

<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM employees 
JOIN salaries 
	ON employees.emp_no = salaries.emp_no 
JOIN dept_manager
 ON employees.emp_no=dept_manager.emp_no 
 JOIN department
  ON dept_manager.dept_no=department.dept_no");
?>
<div class="container">
 <div class ="row">
  <div class="col-md-11">
	  <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>First_Name</th>
     <th>Last_Name</th>
     <th>DOB</th>
     <th>Gender</th>
     <th>Department</th>
     <th>Department_Manager</th>
     <th>Join_Date</th>
     <th>Salary</th>
     <th>Action</th>
    </tr>  
    <?php
       
while($row = mysqli_fetch_array($result)) {
?>
	<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["dept_name"]; ?></td>
    <td><?php echo $row["department_manager"]; ?></td>
    <td><?php echo $row["join_date"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
     <td>
     <a class="btn btn-xs btn-primary" href="c_emp_update.php?emp_no=<?php echo $row['emp_no'] ?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="c_emp_delete.php?emp_no=<?php echo $row['emp_no'] ?>">Delete</a>
     </td>
</tr>
<?php
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div></div></div>

<?php include("footer.php");?>
 </body>
</html>


