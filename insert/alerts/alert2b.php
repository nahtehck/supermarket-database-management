<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT * FROM storage where exp_date in (SELECT CURRENT_DATE())";
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
<h3>DELETE THIS ITEM</h3>
<form action="deletea1.php"><button id="btn1">CLICK HERE </button></form>
</body>
</html>