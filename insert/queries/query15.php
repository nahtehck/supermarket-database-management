<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT * from customer_details c,items_sold s WHERE c.cust_id=s.cust_id and date_of_purchase>'2017/09/01'";
		$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Department Name</th>
<th>Department_Id</th>
<th>Manager_Id</th>
<th>Manager_Name</th>
<th>Sum(no_of_units)</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['dept_name']."</td>";
	
	echo "<td>".$row['dept_id']."</td>";
	
	echo "<td>".$row['mgr_id']."</td>";

	echo "<td>".$row['mgr_name']."</td>";

	echo "<td>".$row['sum(no_of_units)']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	