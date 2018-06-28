<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT DISTINCT name,grades,sum(total) from items_sold s,customer_details c where s.cust_id=c.cust_id and s.date_of_purchase='2017-09-20' GROUP BY name ORDER by sum(total) DESC LIMIT 1";

	$records=mysqli_query($conn,$sql);

	?>
<html>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Name</th>
<th>Grades</th>
<th>sum(Total)</th>
<tr>

<?php
while($row=mysqli_fetch_assoc($records)){
	
	echo "<td>".$row['name']."</td>";
	
	echo "<td>".$row['grades']."</td>";
	
	echo "<td>".$row['sum(total)']."</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>




	