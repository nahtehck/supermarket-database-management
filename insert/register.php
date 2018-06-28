<!DOCTYPE html>
<html>
<head>
   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="564835.jpg" >
  <div id="frm" >
       <h3>SUPERMARKET DATABASE</h3>

  	<h4>Not a user??Register to continue</h4>
     <form action="process1.php" method="POST">
     	 <p>
	   <label>Name:</label><br>
	   <input type="text" id="name" name="name"/>
	   </p>
	 <p>
	   <label>Username:</label><br>
	   <input type="text" id="username" name="username"/>
	   </p>
        <p>
			<label>Password:</label><br>
			<input type="password" id="password" name="password"/>
	    </p>
	    <p>
			<label>Re-enter Password:</label><br>
			<input type="password" id="password1" name="password1"/>
	    </p>
		<p>
		  <input type="submit" id="btn" value="Register"/>
		 </p>
      </form>
      <p>Already registered?? Login <a href="login.php">here...</a></p>
	</div>
</body>
</html>