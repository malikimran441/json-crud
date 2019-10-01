<?php
include("config.php");

if(isset($_GET['order'])){
	$order = $_GET['order'];
}
else{
	$order = 'asset_num';
} 

if(isset($_GET['sort'])){
	$sort = $_GET['sort'];
}
else{
	$sort = 'ASC';
} 

$result = mysqli_query($conn,"SELECT * FROM employee ORDER BY $order $sort");

if(mysqli_num_rows($result)>0)
{
	$sort == 'DESC' ? $sort ='ASC' : $sort == 'DESC';
echo"
          <table>
                  <tr>
     <th><a href='?order=name&&sort=$sort'>Name</th>
     <th><a href='?order=dob&&sort=$sort'>DOB</th>
     <th>Gender</th>
     <th>Department</th>
     <th>Manager</th>
     <th>salary</th>
     <th>Join Date</th>
    </tr> "; 


    while($row = mysqli_fetch_array($result)) {
          
          $Name = $row['name'];
$Dob = $row['dob'];
$Gender = $row['gender'];
$Department = $row['department'];
$Dmanager = $row['dmanager'];
$Salary = $row['salary'];
$join_date =$row['date'];

echo"
	<tr>
    <td>$Name</td>
    <td>$Dob</td>
    <td>$Gender</td>
    <td>$Department</td>
    <td>$Dmanager</td>
    <td>$Salary ?></td>
    <td>$join_date</td>
    
     </tr>";

}
          echo "</table>
	";
}
echo "No record";
?>