<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM items_sold";
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Items_Sold</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Customer_Id</th>
<th>Item_Id</th>
<th>Department_Id</th>
<th>Item_Name</th>
<th>Expiry_Date</th>
<th>MRP</th>
<th>Number_of_units</th>
<th>Date_of_purchase</th>
<th>Total</th>
<tr>

<?php
while($items_sold=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$items_sold['cust_id']."</td>";
	
	echo "<td>".$items_sold['item_id']."</td>";
	
	echo "<td>".$items_sold['dept_id']."</td>";
	
	echo "<td>".$items_sold['item_name']."</td>";

	echo "<td>".$items_sold['exp_date']."</td>";

	echo "<td>".$items_sold['mrp']."</td>";

	echo "<td>".$items_sold['no_of_units']."</td>";

	echo "<td>".$items_sold['date_of_purchase']."</td>";

	echo "<td>".$items_sold['total']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>



