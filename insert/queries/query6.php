<?php
$conn=mysqli_connect('localhost','root','','supermarket');
	
	mysqli_select_db($conn,'supermarket');
	
	$sql="UPDATE items_sold set total=total-total*0.3 where cust_id in(select cust_id from customer_details where sex='female')";
	$records=mysqli_query($conn,$sql);

	
echo "affected rows: ".
	mysqli_affected_rows($conn);

?>
	
    <html>

	<form action="query6a.php"><button id="btn1">Result</button></form>
	</html>




	