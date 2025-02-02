<?php

$con=mysqli_connect("localhost","root","","auction_system_data")or die("database Error....!!!");
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
  
   
     if(mysqli_query($con,"UPDATE product SET auc_price='".$_GET['newprice']."',purchase_farmer_id='".$_SESSION['farmer']."' WHERE ID='".$_GET['pid']."'"))
    {
      echo "
      <script>
      alert('You have added new price for this auction');
      window.location.href='auction.php';
      </script>
      ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='auction.php';
        </script>
        ";
  }
?>

?>
