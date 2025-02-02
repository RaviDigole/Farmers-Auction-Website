<!doctype html>
<html class="no-js" lang="en">
<?php
    $con=mysqli_connect( "localhost","root","","drivingschool2021")or die (mysqli_error());
$id=$_GET['id'];
$row_a=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM application WHERE ID='".$id."'"));
?>
<head>
    <?php
    session_start();
    if(isset($_SESSION['branch']))
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

?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Driving School</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- nalika Icon CSS
============================================ -->
<link rel="stylesheet" href="css/nalika-icon.css">
<!-- owl.carousel CSS
============================================ -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- animate CSS
============================================ -->
<link rel="stylesheet" href="css/animate.css">
<!-- normalize CSS
============================================ -->
<link rel="stylesheet" href="css/normalize.css">
<!-- meanmenu icon CSS
============================================ -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- main CSS
============================================ -->
<link rel="stylesheet" href="css/main.css">
<!-- morrisjs CSS
============================================ -->
<link rel="stylesheet" href="css/morrisjs/morris.css">
<!-- mCustomScrollbar CSS
============================================ -->
<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
<!-- metisMenu CSS
============================================ -->
<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
<!-- calendar CSS
============================================ -->
<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
<!-- style CSS
============================================ -->
<link rel="stylesheet" href="style.css">
<!-- responsive CSS
============================================ -->
<link rel="stylesheet" href="css/responsive.css">
<!-- modernizr JS
============================================ -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script type="text/javascript">
    function delete_customer(val)
    {
        var r = confirm("Are you sure...?");
        if (r == true) {
         window.location.assign("delete_customer.php?id="+val);
           
        } else {
          txt = "Try Again!";
        }
    }
</script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php
include('nav.php');
?>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo-pro">
<a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
</div>
</div>
</div>
</div>
<div class="header-advance-area">
<div class="header-top-area">
<div class="container-fluid">
<div class="row">
<?php
include('header.php');
?>
</div>
</div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
<!-- <?php
include('mob.php');
?> -->
</div>
</div>
</div>
<!-- Mobile Menu end -->
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <?php
   include('screen.php');
   ?>
</div>
</div>
</div>
</div>
</div>


 <div class="single-pro-review-area">
                <div class="container-fluid">
                                        
                    <form action="add_cus.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#"><i class="icon nalika-edit" aria-hidden="true"></i>  Trainee Registration</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               

                <div class="review-content-section">
                    <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder=" Name" name="name" value="<?php echo$row_a[2]; ?>">
                        <input type="hidden" class="form-control" placeholder=" Name" name="id" value="<?php echo$row_a[0]; ?>">
                    </div>
                </div>

                <div class="review-content-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <textarea class="form-control" placeholder="Address" name="address"><?php echo$row_a[3]; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                             <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Number" name="number" value="<?php echo$row_a[4]; ?>">
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="review-content-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo$row_a[5]; ?>">
                            </div>
                        </div>
                          <div class="col-lg-6 col-md-8">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="file" class="form-control" placeholder="Photo" name="image">
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="review-content-section">
                    <div class="row">
                       
                        <div class="col-lg-6 col-md-4">
                             <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" placeholder="Age" name="age">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <select class="form-control" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>    
                </div>

                 <div class="review-content-section">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6">
                             <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" placeholder="Adhar" name="adhar">
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="review-content-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                           
                        </div>
                        <div class="col-lg-6 col-md-6">
                             <button type="submit" name="save" class="btn   m-r-10 btn-success">Save
                                </button>
                            <button type="button" class="btn  m-r-10 btn-danger">Discard
                            
                        </div>
                    </div>    
                </div>
            </div>

             

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-9">
                <div class="text-center custom-pro-edt-ds">
                   
                </div>
            </div>
        </div>
    </div>
                                   
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            

                                             <div class="product-status mg-b-30">
                                             </form>
         
        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>



<div class="product-sales-area mg-tb-30">

</div>
<div class="traffic-analysis-area">

</div>
<div class="product-new-list-area">

</div>
<div class="product-sales-area mg-tb-30">

</div>
<div class="author-area-pro">

</div>
<br>


<?php
include('footer.php');
?>
</div>
<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- float JS
============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/curvedLines.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
</body>

</html>
<?php
    $con=mysqli_connect( "localhost","root","","drivingschool2021")or die (mysqli_error());
    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $age=$_POST['age'];

        $experience=$_POST['experience'];
        $gender=$_POST['gender'];
        $adhar=$_POST['adhar'];
        $id=$_POST['id'];

        $max_id=1;
 $max1=mysqli_query($con,"select MAX(ID) from student");
 $max=mysqli_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 
        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); 
            window.location.href='application.php';
            </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_stu."."png";//name of file name to be saved
                echo$targetfile='../admin/upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');
            window.location.href='application.php';
                    </script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);// code img code
        if(mysqli_query($con,"INSERT INTO student VALUES('', '".$name."','".$address."','".$number."','".$email."','".$targetfile."','".$age."','".$gender."','".$adhar."')"))
        {
            $res_del=mysqli_query($con,"DELETE FROM application WHERE ID='".$id."'");
            echo"
            <script>
            alert('Admission successfully');
            window.location.href='application.php';
            </script>";
        }
        else
        {
            echo"
            <script>
            alert('Try Again...!');
            window.location.href='application.php';
            </script>";
        }
    }
}
}
}
    ?>