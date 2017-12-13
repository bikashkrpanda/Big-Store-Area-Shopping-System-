<?php

session_start();
include('dbcon.php');
 $url=$_GET['id'];
 $_SESSION['id']=$url;




if (isset($_POST['Submit'])) {
  # code...

//if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $sql="UPDATE regis SET status = '1' WHERE id = '$_SESSION[id]'";
    mysqli_query($db,$sql);
  
    //}
if($sql=1)
{

//echo "<script type=text/javascript>alert('successful')</script>";
  //header('location:detailsR.php');

include 'Aalert.php';



}

}
elseif (isset($_POST['Submit2'])) {
  # code...
  //if($_SERVER['REQUEST_METHOD']=='POST'){
$qry=mysqli_query($db,"UPDATE regis SET status = '0' WHERE id = '$_SESSION[id]'");
//}
if ($qry=1)
{

//echo "New retailer have successfully Deactivate";
include 'reject.php';
}
}
else
{
  echo " ";
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<head>
  <style>
  script{

  }
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Big Store/Retailer Details</title>
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
    <center><h3 style="font-size:25px;color:blue;font-weight:20px" >Retailer Details</h3></center>
<form id="form1" name="form1" method="post" action="" class="form-group">
  <table width="621" height="73" border="1" align="center" class="table">
    <?php
  
  

  //$remail=$_POST['remail'];

//       echo"$cate";

      $q="select * from regis where id=$_REQUEST[id] ";
  
     $exe=mysqli_query($db,$q);
  while($f=mysqli_fetch_assoc($exe))

        {

    ?>
    <tr>
      <td><span class="style1">Retailer id </span>
        <td><?php echo $f['id']?></td>
      </td>
    </tr>
    <tr>
      <td><span class="style1">Retailer Name </span>
         <td><?php echo $f['rname']?></td>
      </td>
    </tr>
    <tr>
      <td><span class="style1">Email</span><td><?php echo $f['remail']?></td></td></tr>
      
      <tr><td><span class="style1">Mobile</span> <td><?php echo $f['rmobile']?></td></td></tr>
      <tr><td><span class="style1">Password</span><td><?php echo $f['rpass']?></td></td></tr>
      <tr><td><span class="style1">Area</span><td><?php echo $f['rarea']?></td></td></tr>
      <tr><td><span class="style1">Pincode</span><td><?php echo $f['rpicode']?></td></td></tr>
      <tr><td><span class="style1">Catagory </span> <td><?php echo $f['shop_catagory']?></td></td></tr>
      <tr><td><span class="style1">Address</span>
         <td><?php echo $f['rshop_add']?></td>
      </td></tr>
      <tr><td><span class="style1">Shop Name</span> <td><?php echo $f['pro_cat']?></td></td></tr>
      <?php $em=$f['pro_cat'];?>
	  <tr><td><span class="style1">Status</span><td><?php echo $f['status']?></td></td></tr>
    
	
	 <?php
}
			?>
  </table>
  
    
      
        <input type="submit" name="Submit" value="Accept"  class="btn btn-success"/>
       <input type="submit" name="Submit2" value="Reject" class="btn btn-danger"/>

</form>

		</table>
  </div>

<div class="container-fluid">

    <center><h3 style="font-size:25px;color:blue;font-weight:20px" >Availabe Products</h3></center>

  <table class="table" border="1">

       <tr>
      <td><strong>Ser No.</strong></td>
      <td><strong>Product Image </strong></td>
      <td><strong>Product Name</strong></td>
      <td><strong>Product Code</strong></td>
      <td><strong>Product Price</strong></td>
    </tr>
<?php



$query="select * from product where pro_cat='$em'";

       $result=mysqli_query($db,$query);

       $i=1;

            $amt=0;   

      while($row=mysqli_fetch_array($result))

      {

    

        ?>

        <tr>
          <td><?php echo $i;?></td>

             <!--<td ><a href="cartdel.php?code2=<?php //echo $row['ser_no'];?>" style="text-decoration:none;"><img src="images/icon_cart.png"></a></td>-->

            <td ><img src="../images/<?php echo $row['image1'];?>" height="80" width="110" style="border:0px solid #000000;" ></td>

            <td ><?php echo $row['product_name'];?></td>

            <td ><?php echo $row['product_code'];?></td>

             
             <td ><?php echo $row['product_price'];?></td>

            

             </tr>

            <?php

      

    }

    

    ?> 

        
            </table>
          </div>



</body>

</html>
