<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT*from items where item_units<20";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>item_id</th>
<th>item_name</th>
<th>quantity</th>
<th>mfd_date</th>
<th>exp_date</th>
<th>brand</th>
<th>item_units</th>
<th>mrp</th>
<th>dept_id</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['item_id']."</td>";
	echo "<td>".$row['item_name']."</td>";
	echo "<td>".$row['quantity']."</td>";
	echo "<td>".$row['mfd_date']."</td>";
	echo "<td>".$row['exp_date']."</td>";
	echo "<td>".$row['brand']."</td>";
	echo "<td>".$row['item_units']."</td>";
	echo "<td>".$row['mrp']."</td>";
	echo "<td>".$row['dept_id']."</td>";
	
    echo "</tr>";
}
?>
</table>
</body>
</html>



	