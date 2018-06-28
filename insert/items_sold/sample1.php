<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$cust_id=$_POST['cust_id'];
$item_id=$_POST['item_id'];
$dept_id=$_POST['dept_id'];
$item_name=$_POST['item_name'];
$exp_date=$_POST['exp_date'];
$mrp=$_POST['mrp'];
$no_of_units=$_POST['no_of_units'];
$date_of_purchase=$_POST['date_of_purchase'];
$total=$_POST['total'];

$query="INSERT INTO items_sold(cust_id,item_id,dept_id,item_name,exp_date,mrp,no_of_units,date_of_purchase,total) VALUES ('$cust_id','$item_id','$dept_id','$item_name','$exp_date','$mrp','$no_of_units','$date_of_purchase','$total')";

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