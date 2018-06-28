<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$mgr_id=$_POST['mgr_id'];
$mgr_name=$_POST['mgr_name'];
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];

$query="INSERT INTO mgr_details(mgr_id,mgr_name,phone_no,address,email_id) VALUES ('$mgr_id','$mgr_name','$phone_no','$address','$email_id')";

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