<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM items";
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Employee Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Item_Id</th>
<th>Item_Name</th>
<th>Quantity</th>
<th>Manufactured_Date</th>
<th>Expiry_Date</th>
<th>Brand</th>
<th>Item_Units</th>
<th>MRP</th>
<th>Department_Id</th>
<tr>

<?php
while($items=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$items['item_id']."</td>";
	
	echo "<td>".$items['item_name']."</td>";
	
	echo "<td>".$items['quantity']."</td>";
	
	echo "<td>".$items['mfd_date']."</td>";

	echo "<td>".$items['exp_date']."</td>";

	echo "<td>".$items['brand']."</td>";

	echo "<td>".$items['item_units']."</td>";

	echo "<td>".$items['mrp']."</td>";

	echo "<td>".$items['dept_id']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>



