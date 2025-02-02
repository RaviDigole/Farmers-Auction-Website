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
  <link rel="shortcut icon" href="logo2.jfif" />
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
          <br>
          <br>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6 grid-margin stretch-card" >
              <div class="card">
                <div class="card-body" style="border-right: 3px solid #000;border-radius: 20px;">
                  <h4 class="card-title" style="color:blue">Product</h4>
                  
                  <form class="forms-sample" action="product.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Produt Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="productname">
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary me-2" style="margin-left: 80px;" name="save">Submit</button>
                    <button class="btn btn-danger" name="cancel">Cancel</button>
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
    $productname=$_POST['productname'];
   
     if(mysqli_query($con,"INSERT INTO product VALUES('','".$productname."')"))
    {
      echo "
      <script>
      alert('data inserted');
      window.location.href='product.php';
      </script>
      ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='product.php';
        </script>
        ";
  }
}
?>
