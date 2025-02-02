<!DOCTYPE html>
<html>
<?php
$con=mysqli_connect("localhost","root","","project")or die("database Error....!!!");
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="insert.php" method="POST">
	name:<input type="text" name="farmer_name">
	email:<input type="email" name="farmer_email"><br><br>
	adhar:<input type="number" name="farmer_adhar"></textarea>
	photo:<input type="file" name="farmer_photo">
	username:<input type="text" name="user_name">
	pass:<input type="passwrd" name="pass_word">
	<input type="submit" value="save" name="ok">

</form>
</body>
</html>
<?php
	if(isset($_POST['ok']))
	{
		$name=$_POST['farmer_name'];
		$email=$_POST['farmer_email'];
		$adhar=$_POST['farmer_adhar'];
		$photo=$_POST['farmer_photo'];
		$username=$_POST['user_name'];
		$pass=$_POST['pass_word'];

		if(mysqli_query($con,"INSERT INTO farm_data VALUES('','".$name."','".$email."','".$adhar."','".$photo."','".$username."', '".$pass."')"))
		{
			echo "
			<script>
			alert('data inserted');
			window.location.href='insert1.php';
			</script>
			";
		}
		else
		{
		    echo "
		    <script>
		    alert('Try Again');
		    window.location.href='insert1+.php';
		    </script>
		    ";
	}
}
?>