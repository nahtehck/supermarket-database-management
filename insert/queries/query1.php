<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="SELECT dept_name,d.dept_id,m.mgr_id,mgr_name,sum(no_of_units) FROM items_sold s,department d,mgr_details m WHERE d.mgr_id=m.mgr_id and s.dept_id=d.dept_id GROUP BY dept_name ORDER BY sum(no_of_units) desc LIMIT 1";
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




	