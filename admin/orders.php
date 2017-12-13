<?php
session_start();
include('dbcon.php');
$_SESSION['pro'];
//$q1=mysql_query("select * from product");
//$f1=mysql_fetch_assoc($q1);
//$pro_cat=$f1['pro_cat'];
$or=mysqli_query($db,"select * from shopping_cart where pro_cat='$_SESSION[pro]'");

			

			 $i=1;
       ?>

      



<html>
<head>
  <title>Big Store/Order check Page</title>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <style>
  .tr1{
    font-weight: bold;
  }
  </style>
</head>
<div class="container-fluid">
  <center><h2 style="color:blue">Orders of Your Shop</h2></center>
	<table widtd="200" border="1" class="table">
    <tbody>
      
    <tr class="tr1">
      <td>S.No</td>
      <td>User Name</td>
      <td>Email</td>
      <td>Address</td>
      <td>Product Image</td>
      <td>Product Code</td>
      <td>Details</td>
    </tr>
  <?php
while($ff=mysqli_fetch_assoc($or))
{
  $em=$ff['email'];
  $_SESSION['eml']=$em;
  ?>


  <?php
$add=mysqli_query($db,"select * from user_details where email='$_SESSION[eml]'");

$adf=mysqli_fetch_assoc($add);



?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $adf['name'];?></td>
      <td><?php echo $ff['email'];?></td>
      <td><?php echo $adf['add'];?></td>
      <td><img src="images/<?php echo $ff['image1'];?>" width="100px" height="100px"></td>
      <td><?php echo $ff['product_code'];?></td>
      <td><button class="btn btn-danger" name="btn1">Pending</button></td>
      <?php
      //if(isset($_POST['btn1']))

      ?>
    </tr>
   
  

<?php
	$i=$i+1;

 }
 
  ?>
  </tbody>
  </table>
</div>
  </html>