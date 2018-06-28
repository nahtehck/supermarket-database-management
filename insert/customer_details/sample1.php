<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$cust_id=$_POST['cust_id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];
$grades=$_POST['grades'];

$query="INSERT INTO customer_details(cust_id,name,sex,phone_no,address,grades) VALUES ('$cust_id','$name','$sex','$phone_no','$address','$grades')";

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