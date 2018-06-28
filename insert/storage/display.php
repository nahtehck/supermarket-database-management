<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT *FROM storage";
	$records=mysqli_query($conn,$sql);
	
	
?>
<html>
<head> 
<title>Storage Details</title>
</head>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Item_units</th>
<th>Item_ID</th>
<th>Item_name</th>
<th>Departmemt_name</th>
<th>Exp_date</th>
<tr>

<?php
while($storage=mysqli_fetch_assoc($records)){
	echo "<tr>";
	
	echo "<td>".$storage['item_units']."</td>";
	
	echo "<td>".$storage['item_id']."</td>";
	
	echo "<td>".$storage['item_name']."</td>";
	
	echo "<td>".$storage['dept_name']."</td>";

	echo "<td>".$storage['exp_date']."</td>";


    echo "</tr>";
}
?>
</table>
</body>
</html>



