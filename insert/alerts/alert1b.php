<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT*from storage where item_units<20";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>item_units</th>
<th>item_id/th>
<th>item_name</th>
<th>dept_name</th>
<th>exp_date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['item_units']."</td>";
	echo "<td>".$row['item_id']."</td>";
	echo "<td>".$row['item_name']."</td>";
	echo "<td>".$row['dept_name']."</td>";
	echo "<td>".$row['exp_date']."</td>";
	
    echo "</tr>";
}
?>
</table>
</body>
</html>