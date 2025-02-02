<?php
$con=mysqli_connect("localhost","root","","auction_system_data")or die("database Error....!!");
$id=$_GET['id'];
if (mysqli_query($con,"DELETE FROM unit WHERE id='".$id."'"))
{
	echo"
	<script>
	alert('UNIT DELETED SUCCESSFULLY....!!!!');
	window.location.href='unit_details.php';
	</script>
	";
}
else  
{
	echo"
	<script>
	alert('Please Try Again...!!!!');
	window.location.href='unit_details.php';
	</script>
	";

	}	


?>