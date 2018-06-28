<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT* from items_sold WHERE date_of_purchase='2017-09-20'AND cust_id IN (SELECT cust_id FROM customer_details WHERE name='mahesh')";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Customer_ID</th>
<th>Item_Id</th>
<th>Department_Id</th>
<th>Item_Name</th>
<th>Exp_Date</th>
<th>MRP</th>
<th>No_Of_Units</th>
<th>Date_Of_Purchase</th>
<th>Total</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['cust_id']."</td>";
	
	echo "<td>".$row['item_id']."</td>";
	
	echo "<td>".$row['dept_id']."</td>";

	echo "<td>".$row['item_name']."</td>";

	echo "<td>".$row['exp_date']."</td>";
	
	echo "<td>".$row['mrp']."</td>";

	echo "<td>".$row['no_of_units']."</td>";

	echo "<td>".$row['date_of_purchase']."</td>";

	echo "<td>".$row['total']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	