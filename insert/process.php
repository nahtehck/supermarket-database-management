<?php
 $conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
     $username=$_POST['user'];
	 $password=$_POST['pass'];
	 
	 
	 $username=stripcslashes($username);
	 $password=stripcslashes($password);
	 $username=mysqli_real_escape_string($conn,$username);
	 $password=mysqli_real_escape_string($conn,$password);
	
$paa="";	
	$result=mysqli_query($conn,"select *from login where username= '$username' and password='$password'")
	or die("failed to query database".mysqli_error());
	
	$row=mysqli_fetch_array($result);
	if($row['username']==$username && $row['username']==!$paa && $row['password']==$password){
		header("refresh:0; url=index.html");
	}
	else
	{
		prompt("check your username or password");
		echo"check your username or password";
		header("refresh:00; url=login.php");
	}
	?>