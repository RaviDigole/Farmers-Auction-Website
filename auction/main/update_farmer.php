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
    $farmer=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM farmer2_data WHERE id='".$_GET['id']."'"));
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
                  <h4 class="card-title" style="color:blue">Update Farmer</h4>
                  
                  <form class="forms-sample" action="update_farmer.php?id=<?php echo $farmer[0]?>" method="POST" enctype="multipart/form-data">
                    
                  <div class="form-group">
                   <div class="col-sm-3"></div>
                    <div class="row">
                      <div class="col-sm-3">
                        <lebel>Farmer Name</lebel>
                      </div>
                      <div class="col-sm-9" >
                        <input type="text" value="<?php echo $farmer[1]?>" class="form-control" name="fname">
                        <input type="hidden" value="<?php echo $farmer[0]?>" class="form-control" name="id">
                      </div>
                     
                    </div><br>

                  <div class="row">
                    <div class="col-sm-3">
                      <lebel>Adhar</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="number" value="<?php echo $farmer[2]?>"  class="form-control" name="adhar">
                    </div>
                 
                  </div><br>
                  <div class="row">
                    <div class="col-sm-3">
                      <lebel>User Name</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="text" value="<?php echo $farmer[3]?>" class="form-control" name="uname">
                    </div>
                    <div class="col-sm-2">
                      <lebel>Password</lebel>
                    </div>
                    <div class="col-sm-4" >
                      <input type="password" value="<?php echo $farmer[4]?>" class="form-control" name="pass">
                    </div>
                  </div><br>

                   <div class="row">
                    <div class="col-sm-3">
                      <lebel>Email</lebel>
                    </div>
                    <div class="col-sm-3" >
                      <input type="email" value="<?php echo $farmer[5]?>" class="form-control" name="mail">
                    </div>
                    <div class="col-sm-2">
                      <lebel>Contact No</lebel>
                    </div>
                    <div class="col-sm-4" >
                      <input type="number" value="<?php echo $farmer[6]?>" class="form-control" name="mobile">
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
    $id=$_POST['id'];

   
     if(mysqli_query($con,"UPDATE farmer2_data SET fname='".$fname."',adhar='".$adhar."',uname='".$username."',pass='".$password."',mail='".$Email."',mobile='".$ContactNo."' WHERE id='".$id."'"))
    {
      echo "
      <script>
      alert('Updated Successfully');
      window.location.href='farmer_details.php';
      </script>
      ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='farmer_deatails.php';
        </script>
        ";
  }
}

?>