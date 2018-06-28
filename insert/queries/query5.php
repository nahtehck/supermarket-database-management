<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql1="SELECT item_id,item_name from items where exp_date='2017/10/17'";
	$sql="DELETE from items where exp_date='2017/10/17'";
	$records1=mysqli_query($conn,$sql1);
	$records=mysqli_query($conn,$sql);

	?>
<html>
<p>Items to be deleted are....</p>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Item_Id</th>
<th>Item_Name</th>
<tr>

<?php
while($row1=mysqli_fetch_assoc($records1)){
	
	echo "<td>".$row1['item_id']."</td>";
	
	echo "<td>".$row1['item_name']."</td>";
	
    echo "</tr>";
}
?>
</table>


<p>The above elements are deleted!!!</p>
</body>
</html>




	