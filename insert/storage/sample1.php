<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$items_units=$_POST['item_units'];
$item_id=$_POST['item_id'];
$item_name=$_POST['item_name'];
$dept_name=$_POST['dept_name'];
$exp_date=$_POST['exp_date'];

$query="INSERT INTO storage(items_units,item_id,item_name,dept_name,exp_date) VALUES ('$items_units','$item_id','$item_name','$dept_name','$exp_date')";

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