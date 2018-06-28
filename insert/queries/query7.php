<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT DISTINCT name from items_sold s,customer_details c,department d where s.dept_id=d.dept_id AND s.cust_id=c.cust_id AND d.dept_name='groceries'";
	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Name</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['name']."</td>";
	
    echo "</tr>";
}
?>
</table>
</body>
</html>
