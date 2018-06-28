<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="DELETE * FROM storage where exp_date in (SELECT CURRENT_DATE())";;
	
	$record=mysqli_query($conn,$sql);
	echo "affected rows: ".
	mysqli_affected_rows($conn);


?>