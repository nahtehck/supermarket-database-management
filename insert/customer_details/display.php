<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM customer_details";
	$sql1="CREATE TRIGGER cusname BEFORE INSERT ON customer_details FOR EACH ROW
	BEGIN
	set NEW.name=UPPER(NEW.name);
	END;
	";
	$rd=mysqli_query($conn,$sql1);
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Customer Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Customer_Id</th>
<th>Customer_Name</th>
<th>Sex</th>
<th>Phone_Number</th>
<th>Address</th>
<th>Grades</th>
<tr>

<?php
while($customer_details=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$customer_details['cust_id']."</td>";
	
	echo "<td>".$customer_details['name']."</td>";
	
	echo "<td>".$customer_details['sex']."</td>";
	
	echo "<td>".$customer_details['phone_no']."</td>";

	echo "<td>".$customer_details['address']."</td>";

	echo "<td>".$customer_details['grades']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>



