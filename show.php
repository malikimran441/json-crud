<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table> class="table table-striped table-bordered table-hover">
    <tr>
     <th>Name<th>
     <th>DOB</th>
     <th>Gender</th>
     <th>Department</th>
     <th>Manager</th>
     <th>salary</th>
     <th>Join Date</th>
    </tr>  
    
    <?php
       $i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["dmanager"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
