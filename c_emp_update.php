<?php
error_reporting(0);
include_once("connection.php");
if(isset($_POST['update']))
{
    $id = $_POST['emp_no'];
    $First_Name = $_POST['fname'];
    $Last_Name = $_POST['lname'];
    $DOB = $_POST['dob'];
    $Gender = $_POST['gender'];
    $Department = $_POST['department'];
    $Departmen_Manager = $_POST['dmanager'];
    $Join_Date = $_POST['date'];
    $Salary = $_POST['salary'];

        $result = mysqli_query($conn, "UPDATE `employees` SET `first_name`='$First_Name',`last_name`='$Last_Name',`dob`='$DOB',`gender`='$Gender',`join_date`='$Join_Date' where emp_no=$id ");
       
       echo "employees data successfully update.";
       header("Location:c_employee.php");
    
}
else{ 
	echo "";
}
?>

<?php

$id = $_GET['emp_no'];

$result = mysqli_query($conn, "SELECT * FROM `employees` WHERE emp_no=$id");

while($row = mysqli_fetch_array($result))
{
$First_Name = $row['first_name'];
$Last_Name = $row['last_name'];
$DOB = $row['dob'];
$Gender = $row['gender'];
$Department = $row['department'];
$Department_Manager = $row['department_manager'];
$Join_Date = $row['join_date'];
$Salary = $row['salary'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body><nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <h4>JSON CRUD</h4>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
              
                <form method="POST" action="c_emp_update.php">
					  <h2 style="padding-top:40px;">Update Employee Details</h2>
                    <div class="form-group">
                        <label>First_Name</label>
                        <input type="text" class="form-control" required="required" name="fname" placeholder="First_Name" value="<?php echo $First_Name;?>">

                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Last_Name</label>
                        <input type="text" class="form-control" required="required" name="lname" placeholder="Last_Name" value="<?php echo $Last_Name;?>">

                        <span class="help-block"></span>
                    </div>


                    <div class="form-group ">
                        <label for="inputLName">DOB</label>
                        <input type="date" class="form-control" required="required" name="dob" placeholder="Date Of Birth" value="<?php echo $DOB;?>" >
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <select class="form-control" name="gender">
						 <option value="">Gender</option>
                         <option value="M">Male</option>
                         <option value="F">Female</option>
                         
</select> <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAge">Department</label>
                        <select class="form-control" name="department">
						<option value="">Department</option>
						 <option value="">Development</option>
                         <option value="">Testing</option>
                         <option value="">Designing</option>
                         <option value="">Documentation</option>
                         <option value="">HR</option>
                        </select> <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="inputAge">Department_Manager</label>
                         <input type="text" class="form-control" required="required" name="dmanager" placeholder="Manager_Name" value="<?php echo $Department_Manager;?> ">
                        <span class="help-block"></span>
                    </div>
                    

                    <div class="form-group">
                        <label for="inputAge">Join_Date</label>
                       <input type="date" class="form-control" required="required" name="date" value="<?php echo $Join_Date;?>" >
                        <span class="help-block" ></span>
                    </div>
                    
                    <div class="form-group ">
                        <label for="inputLName">Salary</label>
                        <input type="text" class="form-control" required="required" name="salary" placeholder="Salary" value="<?php echo $Salary;?>">
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-actions">
                    	<input type="hidden" name="id" value=<?php echo $_GET['emp_no'];?> > </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                        <a class="btn btn btn-default" href="c_employee.php">Back</a>

                      
                    </div>
                </form>
            </div>
        </div>
    </div>
       
<?php include("footer.php");?>
</body>

</html>

