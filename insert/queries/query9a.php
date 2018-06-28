<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT*from emp_details  WHERE sex='female'";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>e_Id</th>
<th>emp_Name</th>
<th>age</th>
<th>sex</th>
<th>date_of_join/th>
<th>address</th>
<th>designation</th>
<th>salary</th>
<th>dept_name</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['e_id']."</td>";
	echo "<td>".$row['emp_name']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "<td>".$row['sex']."</td>";
	echo "<td>".$row['date_of_join']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['designation']."</td>";
	echo "<td>".$row['salary']."</td>";
	echo "<td>".$row['dept_name']."</td>";
	
    echo "</tr>";
}
?>
</table>
</body>
</html>




	