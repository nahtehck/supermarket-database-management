<?php

if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","supermarket");
$e_id=$_POST['e_id'];
$emp_name=$_POST['emp_name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$dept_name=$_POST['dept_name'];

$query="INSERT INTO emp_details(e_id,emp_name,age,sex,address,designation,salary,dept_name) VALUES ('$e_id','$emp_name','$age','$sex','$address','$designation','$salary','$dept_name')";

$result=mysqli_query($conn,$query);
if($result)
{
	echo"data inserted";
}
else
{
	echo"data not inserted";
}
mysqli_close($conn);
}
?>