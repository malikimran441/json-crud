<?php
include('connection.php');
//echo "<pre>";print_r($_POST);

$id = $_REQUEST['emp_no'];
$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$Join_Date = $_POST['date'];

if(!empty($_POST['fname'])){
	
	$result = "UPDATE `employees` SET `first_name`='$First_Name',`last_name`='$Last_Name',`dob`='$DOB',`gender`='$Gender',`join_date`='$Join_Date' where emp_no= $id ";        
	
	
                $conn->query($result) or die(mysqli_error($conn));
                      header("Location:c_employee.php");
}

?>




<?php

$result = mysqli_query($conn, "SELECT * FROM `employees` WHERE emp_no=$id");

while($row = mysqli_fetch_array($result))
{
$FirstName = $row['first_name'];
$LastName = $row['last_name'];
$Dob = $row['dob'];
$Gender = $row['gender'];
$JoinDate = $row['join_date'];
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
    .navbar-default { error
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
                        <input type="text" class="form-control" required="required" autocomplete="off" name="fname" placeholder="First_Name" value="<?php echo $FirstName;?>">

                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Last_Name</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" name="lname" placeholder="Last_Name" value="<?php echo $LastName;?>">

                        <span class="help-block"></span>
                    </div>


                    <div class="form-group ">
                        <label for="inputLName">DOB</label>
                        <input type="text" class="form-control" id="datepicker"  required="required" name="dob" placeholder="Date Of Birth" value="<?php echo $Dob;?>" >
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <select class="form-control" name="gender">
						 <option value="">Gender</option>
                         <option value="M" <?php echo $Gender=='M'?"selected":"";?>>Male</option>
                         <option value="F" <?php echo $Gender=='F'?"selected":"";?>>Female</option>
                         
</select> <span class="help-block"></span>
                    </div>
                    
              

                    <div class="form-group">
                        <label for="inputAge">Join_Date</label>
                       <input type="text" class="form-control" id="datepicker" required="required" name="date" value="<?php echo $JoinDate;?>" >
                        <span class="help-block" ></span>
                    </div>
   
                    
                    <div class="form-actions">
                    	<input type="hidden" name="emp_no" value="<?php echo $id;?>"> </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                        <a class="btn btn btn-default" href="c_employee.php">Back</a>

                      
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>


