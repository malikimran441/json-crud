<?php
include('connection.php');

$sql = "select * from department";
$records = mysqli_query($conn, $sql);
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
    
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd',
     changeMonth: true,
     changeYear: true
   });
  </script>
    
    
</head>

<body>
<nav class="navbar navbar-default">
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
              
                <form method="POST" action="c_emp.php">
					  <h2 style="padding-top:40px;">Add New Employee</h2>
                    <div class="form-group">
                        <label>First_Name</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" name="fname" placeholder="First_Name">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label>Last_Name</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" name="lname" placeholder="Last_Name">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">DOB</label>
                        <input type="date" class="form-control" required="required" id="datepicker" name="dob" placeholder="YYYY-MM-DD">
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
                        <label for="">Department</label>
                        <select class="form-control" name="dept_no">
						<option value="">Select_Department</option>
						 <?php while($row = mysqli_fetch_array($records)){ ?>
							 <option value="<?php echo $row['dept_no']; ?>"> <?php echo $row['dept_name'];?> </option>
							 <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Department_Manager</label>
                        <select class="form-control" name="dmanager">
							<option value="">Manager</option>
						<option value="M">Self</option>
						 
                        </select> <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Join_Date</label>
                 
                       <input type="date" class="form-control" id="datepicker" name="date"  placeholder="YYYY-MM-DD"></p>
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group ">
                        <label for="inputLName">Salary</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" name="salary" placeholder="Salary">
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-actions">
						
						<input type="submit" class="btn btn-primary" name="submit" value="Submit"></tr>
                    
                        <a class="btn btn btn-default" href="c_employee.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php include("footer.php");?>
</body>

</html>

