<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM emp_details";
	$sql1="CREATE TRIGGER t4name BEFORE INSERT ON emp_details FOR EACH ROW
	BEGIN
	SET NEW.emp_name=UPPER(NEW.emp_name);
	END;
	";
	$rd=mysqli_query($conn,$sql1);
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Employee Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Employee_Id</th>
<th>Employee_Name</th>
<th>Age</th>
<th>Sex</th>
<th>Address</th>
<th>Designation</th>
<th>Salary</th>
<th>Department_Name</th>
<th>Action</th>
<tr>

<?php
while($emp_details=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$emp_details['e_id']."</td>";
	
	echo "<td>".$emp_details['emp_name']."</td>";
	
	echo "<td>".$emp_details['age']."</td>";
	
	echo "<td>".$emp_details['sex']."</td>";

	echo "<td>".$emp_details['address']."</td>";

	echo "<td>".$emp_details['designation']."</td>";

	echo "<td>".$emp_details['salary']."</td>";

	echo "<td>".$emp_details['dept_name']."</td>";

	echo "<td><a href=delete.php?no=".$emp_details['e_id']."><font color=black>DELETE</a></td></font>";

    echo "</tr>";
}
?>
</table>
<br>
<button><a href="sample.html"><font color="black">Go back</font></a></button>
</body>
</html>



