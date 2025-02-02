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
    <div class="row">
      <div class="col-lg-8 mx-auto">
        
        <div class="content mb-5">
          <h4 id="we-would-love-to-hear-from-you" style="color: orange;">Add Product</h4>
        </div>
        
        <form method="POST" action="product.php" enctype="multipart/form-data">

          <div class="row">
            <div class="col-lg-6">
            	<label for="name">Product Name</label>
            	<input type="text" style="background-color: gray;" name="name" id="name" class="form-control" >
            </div>

            <div class="col-lg-6">
            	<label for="name">Product Image</label>
            	<input type="file" style="background-color: gray;" name="image" id="name" class="form-control" >
            </div>
          </div>

          <div class="row">

          	<div class="col-lg-4">
            	<label for="name">Category</label>
            	<select class="form-control" style="background-color: gray;" name="cid">
            		<option>Select Category</option>
            		<?php
                         
                        $res=mysqli_query($con,"SELECT * FROM category");
                        while($row=mysqli_fetch_row($res))
                        {

                        echo'<option value='.$row[0].'>'.$row[1].'</option>';
                        }
                        ?>
            	</select>
            </div>

            <div class="col-lg-4">
            	<label for="name">Sub Category Name</label>
            	<select class="form-control" style="background-color: gray;" name="sid">
            		<option>Select Sub Category</option>
            		<?php
                         
                        $res2=mysqli_query($con,"SELECT * FROM subcategory");
                        while($scat=mysqli_fetch_row($res2))
                        {

                        echo'<option value='.$scat[0].'>'.$scat[2].'</option>';
                        }
                        ?>
            	</select>
            </div>
            <div class="col-lg-4">
            	<label for="name">Price</label>
            	<input type="number" style="background-color: gray;" name="price" id="name" class="form-control" >
            </div>
          </div>
          


           <div class="row">
            <div class="col-lg-6">
            	<label for="name">Unit</label>
            		<select class="form-control" name="uid" style="background-color: gray;">
            		<option>Select Unit</option>
            		<?php
                         
                        $unit1=mysqli_query($con,"SELECT * FROM unit");
                        while($unit=mysqli_fetch_row($unit1))
                        {

                        echo'<option value='.$unit[0].'>'.$unit[1].'</option>';
                        }
                        ?>
            	</select>
            </div>
            <div class="col-lg-6">
            	<label for="name">Stock</label>
            	<input type="number" style="background-color: gray;" name="stock" id="name" class="form-control" >
            </div>
          </div>
          
           <div class="row">
            <div class="col-lg-6">
            	<label for="name">Start Date</label>
            	<input type="date" style="background-color: gray;" name="sdate" id="name" class="form-control" >
            </div>
            <div class="col-lg-6">
            	<label for="name">End Date</label>
            	<input type="date" style="background-color: gray;" name="edate" id="name" class="form-control" >
            </div>
          </div>
          <br>
         
          <button type="submit" name="save" class="btn btn-primary">Post</button>
        </form>
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
<?php
  if(isset($_POST['save']))
  {
    $name=$_POST['name'];
    $cid=$_POST['cid'];
    $sid=$_POST['sid'];
    $price=$_POST['price'];
    $uid=$_POST['uid'];
    $stock=$_POST['stock'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
   
    $max_id=1;
 $max1=mysqli_query($con,"select MAX(ID) from product");
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
             $newname="$max_id"."_product."."png";//name of file name to be saved
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
        
     if(mysqli_query($con,"INSERT INTO product VALUES('','".$name."','".$targetfile."','".$cid."','".$sid."','".$price."', '".$uid."','".$stock."', '".$sdate."','".$edate."','".$_SESSION['farmer']."','','')"))
    {
      echo "
      <script>
      alert('Post Added Successfully');
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
}
}
}
?>