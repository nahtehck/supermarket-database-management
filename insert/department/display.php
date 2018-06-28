<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM department";
	$sql1="CREATE TRIGGER d4name BEFORE INSERT ON department FOR EACH ROW
	BEGIN
	SET NEW.dept_name=UPPER(NEW.dept_name);
	END;
	";
	$rd=mysqli_query($conn,$sql1);
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Department Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Dept_Id</th>
<th>Dept_Name</th>
<th>Floor</th>
<th>Manager_ID</th>
<tr>

<?php
while($department=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$department['dept_id']."</td>";
	
	echo "<td>".$department['dept_name']."</td>";
	
	echo "<td>".$department['floor']."</td>";
	
	echo "<td>".$department['mgr_id']."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>



