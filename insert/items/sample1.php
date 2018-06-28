<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$item_id=$_POST['item_id'];
$item_name=$_POST['item_name'];
$quantity=$_POST['quantity'];
$mfd_date=$_POST['mfd_date'];
$exp_date=$_POST['exp_date'];
$brand=$_POST['brand'];
$item_units=$_POST['item_units'];
$mrp=$_POST['mrp'];
$dept_id=$_POST['dept_id'];

$query="INSERT INTO items(item_id,item_name,quantity,mfd_date,exp_date,brand,item_units,mrp,dept_id) VALUES ('$item_id','$item_name','$quantity','$mfd_date','$exp_date','$brand','$item_units','$mrp','$dept_id')";

$result=mysqli_query($conn,$query);
if($result)
{
	echo"data inserted";
}
else
{
	echo"data not inserted";
}
mysqli_free_result($result);
mysqli_close($conn);
}
?>