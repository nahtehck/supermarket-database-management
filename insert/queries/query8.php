<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="(SELECT item_id,item_name from items WHERE item_units<=20) UNION (SELECT item_id,item_name from storage WHERE item_units<=20)";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Item_Id</th>
<th>Item_Name</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['item_id']."</td>";
	
	echo "<td>".$row['item_name']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	