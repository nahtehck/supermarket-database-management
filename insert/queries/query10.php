<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="UPDATE items_sold set total=total-total*0.30 WHERE dept_id='toy8x'";
	$records=mysqli_query($conn,$sql);

echo "affected rows: ".
	mysqli_affected_rows($conn);


?>
	
    <html>

	<form action="query10a.php"><button id="btn1">Result</button></form>
	</html>





	