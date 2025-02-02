<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","auction_system_data")or die("Database Error....!");
session_start();
    if(isset($_SESSION['admin']))
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
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Crop Auction System </title>
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
   <?php
   include('top.php');
   ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php
     include('sidebar.php');
     ?>
      <!-- partial -->


      <div class="main-panel" style="margin-top: -30px;">        
        <div class="content-wrapper">
          <hr>
          <br>
          <div class="row">
            <div class="col-md-10 grid-margin stretch-card" >
              <div class="card">
                <div class="card-body" style="border-right: 3px solid #000;border-radius: 20px;">
                  <h4 class="card-title" style="color:blue">Farmer</h4>
                  
                  <form class="forms-sample" action="farmer.php" method="POST" enctype="multipart/form-data">
                    
                  <div class="form-group">
                   <div class="col-sm-3"></div>
                    <div class="row">
                      <div class="col-sm-3">
                        <lebel>Farmer Name</lebel>
                      </div>
                      <div class="col-sm-9" >
                        <input type="text" class="form-control" name="fname">
                      </div>
                     
                    </div><br>

                  <div class="row">
                    <div class="col-sm-3">
                      <lebel>Adhar</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="number" class="form-control" name="adhar">
                    </div>
                    <div class="col-sm-2">
                      <lebel>Photo</lebel>
                    </div>
                    <div class="col-sm-4" >
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-sm-3">
                      <lebel>User Name</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="text" class="form-control" name="uname">
                    </div>
                    <div class="col-sm-2">
                      <lebel>Password</lebel>
                    </div>
                    <div class="col-sm-4" >
                      <input type="password" class="form-control" name="pass">
                    </div>
                  </div><br>

                   <div class="row">
                    <div class="col-sm-3">
                      <lebel>Email</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="email" class="form-control" name="mail">
                    </div>
                    <div class="col-sm-2">
                      <lebel>Contact No</lebel>
                    </div>
                    <div class="col-sm-4" >
                      <input type="number" class="form-control" name="mobile">
                    </div>
                  </div><br>
                    <button type="submit" name="save" class="btn btn-primary" style="margin-left: 180px;">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         <?php
       include('footer.php');
       ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

<?php
  if(isset($_POST['save']))
  {
    $fname=$_POST['fname'];
    $adhar=$_POST['adhar'];
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $Email=$_POST['mail'];
    $ContactNo=$_POST['mobile'];

    $max_id=1;
 $max1=mysqli_query($con,"select MAX(ID) from farmer2_data");
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
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf","jfif");//file extenssions supported for upload 
        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); 
            </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_farmer."."png";//name of file name to be saved
                echo$targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');
           
                    </script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);// code img code
        




     if(mysqli_query($con,"INSERT INTO farmer2_data VALUES('','".$fname."','".$adhar."','".$username."','".$password."','".$Email."', '".$ContactNo."','".$targetfile."')"))
    {
      echo "
      <script>
      alert('Farmer photo Added Successfully');
      window.location.href='farmer.php';
      </script>
      ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='farmer.php';
        </script>
        ";
  }
}
}
}
}
?>