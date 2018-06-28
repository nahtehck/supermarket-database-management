<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
$floor=$_POST['floor'];
$mgr_id=$_POST['mgr_id'];

$query="INSERT INTO department(dept_id,dept_name,floor,mgr_id) VALUES ('$dept_id','$dept_name','$floor','$mgr_id')";

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