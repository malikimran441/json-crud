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
     <li class="clr1 active"><a href="employee.php">Employee</a></li>
     <li class=""><a href="c_employee.php">New Employee</a></li>
     
     
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Page</h3>      
  <p>All Employee List Show below</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar"> 
  <a class="btn btn-primary" href="emp_add.php"><i class="icon-plus"></i> Add New Employee</a>
  
  <a class="btn btn-primary" href="search.php"><i class="icon-plus"></i> Search Employee</a>
  <div class="btn-group"> </div>
  
 </div>
</div>

<br>
<br>

<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
	  <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>Name</th>
     <th>DOB</th>
     <th>Gender</th>
     <th>Department</th>
     <th>Manager</th>
     <th>salary</th>
     <th>Join Date</th>
     <th>Action</th>
    </tr>  
    <?php
       
while($row = mysqli_fetch_array($result)) {
?>
	<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["dept_manager"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["join_date"]; ?></td>
     <td>
     <a class="btn btn-xs btn-primary" href="emp_update.php?id=<?php echo $row['id'] ?>">Edit</a>


      <a class="btn btn-xs btn-danger" href="emp_delete.php?id=<?php echo $row['id'] ?>">Delete</a>
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

