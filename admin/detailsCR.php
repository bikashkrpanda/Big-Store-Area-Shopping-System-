<?php

session_start();
include('dbcon.php');
 $url=$_GET['id'];
 $_SESSION['id']=$url;


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Big Store/Customer Details</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
  <div class="container-fluid">


    <center><h3 style="font-size:25px;color:blue;font-weight:20px" >Customer Details</h3></center>
<form id="form1" name="form1" method="post" action="accept.php" class="form-group">
  <table width="621" height="73" border="1" align="center" class="table">
    <?php
  
  

  //$remail=$_POST['remail'];

//       echo"$cate";

      $q="select * from user_details where ser_no=$_REQUEST[id] ";
  
     $exe=mysqli_query($db,$q);
  while($f=mysqli_fetch_assoc($exe))

        {

    ?>
    <tr>
      <td><span class="style1">Customer id </span>
        <td><?php echo $f['ser_no']?></td>
      </td>
    </tr>
    <tr>
      <td><span class="style1">Customer Name </span>
         <td><?php echo $f['name']?></td>
      </td>
    </tr>
    <tr>
      <td><span class="style1">Email</span><td><?php echo $f['email']?></td></td></tr>
      <?php $em=$f['email'];?>
      <tr><td><span class="style1">Address</span> <td><?php echo $f['add']?></td></td></tr>
      <tr><td><span class="style1">Contact</span><td><?php echo $f['contact']?></td></td></tr>
     
	 <?php
}
			?>
  </table>
  
    
      
        <input type="submit" name="Submit" value="Accept"  class="btn btn-success"/>
       

</form>
<form action="reject.php" method="post">
        <input type="submit" name="Submit2" value="Reject" class="btn btn-danger"/>
		</form>
		</table>
  </div>

  <div class="container-fluid">

    <center><h3 style="font-size:25px;color:blue;font-weight:20px" >Purchased Products</h3></center>

  <table class="table" border="1">

       <tr>
      <td><strong>Ser No.</strong></td>
      <td><strong>Product Image </strong></td>
      <td><strong>Product Name</strong></td>
      <td><strong>Product Quantity</strong></td>
      <td><strong>Product Price</strong></td>
    </tr>
<?php



$query="select * from shopping_cart where email='$em'";

       $result=mysqli_query($db,$query);

       $i=1;

            $amt=0;   

      while($row=mysqli_fetch_array($result))

      {

      $price=$row['price']*$row['quantity'];

        ?>

        <tr>
          <td><?php echo $i;?></td>

             <!--<td ><a href="cartdel.php?code2=<?php //echo $row['ser_no'];?>" style="text-decoration:none;"><img src="images/icon_cart.png"></a></td>-->

            <td ><img src="images/<?php echo $row['image1'];?>" height="80" width="110" style="border:0px solid #000000;" ></td>

            <td ><?php echo $row['product_name'];?></td>

            <td ><?php echo $row['quantity'];?></td>

             <td ><?php echo'Rs.'.$price;?></td>

            

             </tr>

            <?php

      $i=$i+1;

$amt=$amt+$price;
$_SESSION['amt']=$amt;

    }

    

    ?> 

        <tr style="background-color:#7CE1D6; height:30px; ">

        <td width="100" style="background-color:#FFFFFF;"></td>

       <td width="100" style="background-color:#FFFFFF;"></td>

      <td width="300" style="background-color:#FFFFFF;"></td>

       <td width="350" style="background-color:#FFFFFF;"></td>

       <td width="100" align="center"><b>Total</b>

       <?php echo" <font color='#FF0000'> <b>Rs. </b></font>" .$amt;?></td>

            </tr></table>
          </div>


</body>
</html>
