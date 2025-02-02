<!DOCTYPE html>

<?php
$con=mysqli_connect("localhost","root","","auction_system_data")or die("Database Error....!");

session_start();
    if(isset($_SESSION['farmer']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../login.php";
        </script>
        ';
    }
    $fdata=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM farmer2_data WHERE id='".$_SESSION['farmer']."'"));
?>

<html lang="en-us"><head>
  <meta charset="utf-8">
  <title>Reader | Hugo Personal Blog Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->
  
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css" media="screen">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>
<body>
  <!-- navigation -->
<?php
	include('top2.php');
?>
<!-- /navigation -->

<div class="author">
	<div class="container">
		<div class="row no-gutters justify-content-center">
			<div class="col-lg-3 col-md-4 mb-4 mb-md-0">
				
				<img class="author-image" src="main/<?php echo $fdata[7]?>">
				
			</div>
			<div class="col-md-8 col-lg-6 text-center text-md-left">
				<h3 class="mb-2"><?php echo $fdata[1]?></h2>
					<strong class="mb-2 d-block"><?php echo $fdata[6]?> </strong>
					<div class="content">
						<p><?php echo $fdata[5]?></p>

					</div>
					
					<!-- <a class="post-count mb-1" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span
							class="text-primary">2</span> Posts by this farmer</a> -->
					<ul class="list-inline social-icons">
						
						<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
						
					</ul>
			</div>
		</div>
	</div>
	

	
</div>

<div style="margin-top: -150px;">
<?php
	include('footer.php');
?>
</div>
</html>