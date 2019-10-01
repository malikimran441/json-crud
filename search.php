<html>
	<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
	<body >
			<?php
	 
	include("header.php");
	 
	?>
		</br></br></br></br>
<div class="container" >
 <div class="jumbotron" >
  <h3>Welcome to Search Page</h3>      
  <p>Show only Single Employee Data below</p>      
 </div>
</div>
		<form action="" method="GET" class="text-center">
			<input type="text" name="name" placeholder="Enter name">
			<input type="submit" name="search">
		</form>
		<div >
		<table class="table table-striped table-bordered table-hover"style="width:60%; margin:auto;" >
			<tr><th>Name</th>
				<th>DOB</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Manager</th>
				<th>Salary</th>
				<th>Join Date</th>
				<tr>
            <?php
            include("config.php");
             if(isset($_GET['name'])){
             	$naam = $_GET['name'];
             $query = mysqli_query( $conn ,"select * from employee where `name`='$naam'");
            while($row = mysqli_fetch_array($query)){
?>
	<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["dept_manager"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["join_date"]; ?></td>
     
     </tr>
     <?php
 }
}
     ?>
		</table></div>
		
<?php include("footer.php");?>
	</body>
</html>
