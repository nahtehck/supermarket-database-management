<?php
 $conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	$name=$_POST['name'];
     $username=$_POST['username'];
	 $password=$_POST['password'];
	 $password1=$_POST['password1'];
	 
	 
	 $username=stripcslashes($username);
	 $password=stripcslashes($password);
	 $username=mysqli_real_escape_string($conn,$username);
	 $password=mysqli_real_escape_string($conn,$password);
	
$paa="";	
if($password==$password1)
{
$query="INSERT INTO login(name,username,password,password1) VALUES ('$name','$username','$password','$password1')";

$result=mysqli_query($conn,$query);
}

if($result)
{
	$result=mysqli_query($conn,"select *from login where username= '$username' and password='$password'")
	or die("failed to query database".mysqli_error());
	
	$row=mysqli_fetch_array($result);
	if($row['username']==$username && $row['username']==!$paa && $row['password']==$password && $password==$password1){
		header("refresh:0; url=index.html");
	}
	else
	{
		prompt("check your username or password");
		echo"check your username or password";
		header("refresh:00; url=login.php");
	}
}
else
	{
		prompt("check your username or password");
		echo"check your username or password";
		header("refresh:03; url=register.php");
	}
	?>