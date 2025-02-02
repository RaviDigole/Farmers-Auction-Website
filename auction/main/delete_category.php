<?php
$con=mysqli_connect("localhost","root","","auction_system_data")or die("database Error....!!");
$id=$_GET['id'];
if (mysqli_query($con,"DELETE FROM category WHERE id='".$id."'"))
{
	echo"
	<script>
	alert('CATEGORY DELETED SUCCESSFULLY....!!!!');
	window.location.href='category_details.php';
	</script>
	";
}
else  
{
	echo"
	<script>
	alert('Please Try Again...!!!!');
	window.location.href='category_details.php';
	</script>
	";

	}	


?>