<?php
$conn=mysqli_connect('localhost','root','','supermarket');
mysqli_select_db($conn,'supermarket');
$sql="CREATE PROCEDURE deleted()
BEGIN
DELETE FROM emp_details WHERE e_id='$_GET[no]';
END;
";
if(mysqli_query($conn,"DROP PROCEDURE IF EXISTS deleted"))
{
	if(mysqli_query($conn,$sql))
	{
		$query="CALL deleted()";
		$result=mysqli_query($conn,$query);
		header("refresh:0; url=display.php");
	}
	else
	{
		echo "Not deleted";
	}
}