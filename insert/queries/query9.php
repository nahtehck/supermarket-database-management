<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="UPDATE emp_details set salary=salary+salary*0.3 WHERE sex='female'";
	
	$record=mysqli_query($conn,$sql);
	echo "affected rows: ".
	mysqli_affected_rows($conn);


?>
	
    <html>

	<form action="query9a.php"><button id="btn1">Result</button></form>
	</html>