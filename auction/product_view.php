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
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-4">
        <h1 class="h2 mb-4">Post Result 
        </h1>
      </div>

      <div class="col-lg-10">


        <?php
                        $sr_no=1;
                        $res=mysqli_query($con,"SELECT * FROM product WHERE FARMER_ID='".$_SESSION['farmer']."'");
                        while($row=mysqli_fetch_row($res))
                        {
                          $cat=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM category WHERE id='".$row[3]."'"));
                          $subcat=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM subcategory WHERE id='".$row[4]."'"));

                          $ut=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM unit WHERE id='".$row[6]."'"));

                          $far_data=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM farmer2_data WHERE id='".$row[11]."'"));


                      echo'
                      <article class="card mb-4">
                        <div class="row card-body">
                          <div class="col-md-4 mb-4 mb-md-0">
                            <div class="post-slider slider-sm">
                              <img src="'.$row[2].'" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <h3 class="h4 mb-3"><a class="post-title" href="post-elements.html">'.$row[1].'</a></h3>
                            <ul class="card-meta list-inline">
                              <li class="list-inline-item">
                                <a href="#" class="card-meta-author">
                                  <span>'.$cat[1].'</span>
                                </a>
                              </li>

                              <li class="list-inline-item">
                                <a href="#" class="card-meta-author">
                                  ||<span>&nbsp;'.$subcat[2].'</span>
                                </a>
                              </li>
                             
                              <li class="list-inline-item">
                                <i class="ti-calendar"></i>'.$row[8].'
                              </li>

                               <li class="list-inline-item">
                                <i class="ti-timer"></i>'.$row[9].'
                              </li>


                              <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                  <li class="list-inline-item"><a href="#">Rs - '.$row[5].'</a></li>
                                  <li class="list-inline-item"><a href="tags.html">'.$ut[1].'</a></li>
                                  <li class="list-inline-item"><a href="#">Qty - '.$row[7].'</a></li>

                                </ul>
                              </li>


                            </ul>
                            <b>
                            Purchased By - <span>'.$far_data[1].'
                            <b style="color:green">
                             <i>'.$far_data[6].'</i>
                             </b></span>
                            </b>



                            <b style="color:blue">
                             <i>'.$far_data[5].'</i>
                             </b></span>
                            </b>
                            <img src="main/'.$far_data[7].'" style="height:100px;width:100px;border-radius:100px">


                            <br>
                              <b style="color:purple">[Sold at Rs- '.$row[12].']</b>
                            <br>
                          
                            
                          </div>
                        </div>
                      </article>';
                    }

        ?>


      
      
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