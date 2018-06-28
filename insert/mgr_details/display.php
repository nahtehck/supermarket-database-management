<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM mgr_details";
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Manager Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Manager_Id</th>
<th>Manager_Name</th>
<th>Phone_no</th>
<th>Address</th>
<th>Email_id</th>
<tr>

<?php
while($mgr_details=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$mgr_details['mgr_id']."</td>";
	
	echo "<td>".$mgr_details['mgr_name']."</td>";
	
	echo "<td>".$mgr_details['phone_no']."</td>";
	
	echo "<td>".$mgr_details['address']."</td>";

	echo "<td>".$mgr_details['email_id']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>



