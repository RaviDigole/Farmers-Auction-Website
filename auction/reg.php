<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","auction_system_data")or die("Database Error....!");
?>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Kisan Hub</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 1100px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    margin-top: 220px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="reg.php" method="POST" method="POST" enctype="multipart/form-data">
        <h3>Login Here</h3>
         
            
       <label for="username">Farmer name</label>
       <input type="text" autocomplete="false" name="fname" placeholder="" id="username">
        <label for="adhar">Adhar</label>
        <input type="number" name="adhar" placeholder="" id="password">
        <label for="uname">username</label>
        <input type="text" name="uname" placeholder="" id="password">
        <label for="password">Password</label>
        <input type="password" name="pass" placeholde="" id="password">
        <label for="mail">Gmail</label>
        <input type="mail" name="mail" placeholder="" id="password">
        <label for="mobile">Mobile</label>
        <input type="number" name="mobile" placeholder="" id="password">
        <label for="photo">Photo</label>
        <input type="file" name="image" placeholder="" id="password">
        
        
        
        
        <br>
       <a href="login2.php">Already An Account</a>

        <button name="save" type="sumbit">submit</button>
    </form>
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
                echo$targetfile='main/upload/'.$newname;//location of folder with target file name 

                echo$targetfile2='upload/'.$newname;//location of folder with target file name 



                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');
           
                    </script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);// code img code
        




     if(mysqli_query($con,"INSERT INTO farmer2_data VALUES('','".$fname."','".$adhar."','".$username."','".$password."','".$Email."', '".$ContactNo."','".$targetfile2."')"))
    {
      echo "
      <script>
      alert('Account Created Successfully');
      window.location.href='reg.php';
      </script>
      ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='reg.php';
        </script>
        ";
  }
}
}
}
}
?>
