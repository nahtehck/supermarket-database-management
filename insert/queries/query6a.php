<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT*from items_sold  where cust_id in(select cust_id from customer_details where sex='female')";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>cust_Id</th>
<th>item_id</th>
<th>dept_id</th>
<th>item_name</th>
<th>exp_date</th>
<th>mrp</th>
<th>no_of_units</th>
<th>date_of_purchase</th>
<th>total</th>
</tr>

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




	