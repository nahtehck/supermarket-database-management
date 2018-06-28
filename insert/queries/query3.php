<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT cust_id,name,grades FROM customer_details GROUP BY grades ORDER BY grades desc LIMIT 1";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Customer_Id</th>
<th>Customer_Name</th>
<th>Grades</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['cust_id']."</td>";
	
	echo "<td>".$row['name']."</td>";
	
	echo "<td>".$row['grades']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	