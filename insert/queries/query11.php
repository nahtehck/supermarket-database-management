<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT * FROM customer_details WHERE address='ecity'";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>cust_Id</th>
<th>name</th>
<th>Sex</th>
<th>phone_no</th>
<th>Address</th>
<th>grades</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['cust_id']."</td>";
	
	echo "<td>".$row['name']."</td>";
	
	echo "<td>".$row['sex']."</td>";

	echo "<td>".$row['phone_no']."</td>";

	echo "<td>".$row['address']."</td>";

	echo "<td>".$row['grades']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	