<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT * from customer_details c,items_sold s WHERE c.cust_id=s.cust_id and date_of_purchase>'2017/09/01'";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Customer_Id</th>
<th>Customer_Name</th>
<th>Sex</th>
<th>Phone_number</th>
<th>Address</th>
<th>Grades</th>
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