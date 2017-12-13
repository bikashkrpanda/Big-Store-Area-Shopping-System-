<?php
session_start();
include ("dbcon.php");

if(isset($_POST['submit']))
{
$em=$_POST['textfield'];
$_SESSION['textfield']=$em;
$pass=$_POST['textfield2'];
$sel=$_POST['select'];
$_SESSION['select']=$sel;
$_SESSION['textfield7']=$cat;


$check="select * from regis where remail='$em' and rpass='$pass' and shop_catagory='$sel'";

$query= mysqli_query($db,$check);
  // if(mysql_num_rows($query)>0){
      $f= mysqli_fetch_assoc($query);
      $_SESSION['id']=$f['id'];
	  if ($f['status']==0)
	  {
	  
   
   echo "<script type=text/javascript>alert('Waiting for approval');</script>";
   
   }
   else{
      header('Location:insert.php');
   }
  
}











?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BIG STORE/Retailer Login page</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color:#0066FF;
}
.container{
 box-shadow: 0 4px 8px 0 #00ccff, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
-->
 
</style>

</head>

<body style="background-image:url(images/bg.png)">
<div class="container-fluid">
 <?php include'iheader.php';?>
</div>
  <h2 style="font-size: 25px;margin-left:550px;float:left;color:black"><b>Retailer/Seller's Portal</b></h2>
<div class="container-fluid">
<div class="container" style="width:500px;margin-top:100px;background-color:#FFFFFF;" >
<table class="table" width="364" height="201"  align="center">
<thead>
  <tr>
    <td height="53" colspan="2"><div align="center" class="style1">Retailer Login</div></td>
  </tr>
  </thead>
  <form action="" method="post" class="form-group">
  <tr>
    <td width="115" height="35">Email : </td>
    <td width="233"><input type="email" name="textfield" class="form-control" autocomplete="off" placeholder="Enter your email" required/></td>
  </tr>
  <tr>
    <td height="33">Password : </td>
    <td><input type="password" name="textfield2" class="form-control" autocomplete="off" placeholder="Enter your password" required/></td>
  </tr>
  <tr>
    <td height="33">Catagory : </td>
    <td> <select  name="select" class="form-control" required>
        <option value="">Select</option>
        <?php
	$qry="select DISTINCT shop_catagory from shop_cata";
	$exe=mysqli_query($db,$qry);
	while($f=mysqli_fetch_assoc($exe))
	{
	?>
        <option value="<?php echo $f['shop_catagory']?>"> <?php echo $f['shop_catagory']?> </option>
        <?php 
	
	
	}
	?>
      </select>
    </td>
  </tr>
  <tr>
    <td height="33" colspan="2">
      
      <div align="right">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        <a href="rreg.php">Click Here For Register </a><br/>
        <a href="forgetpassR.php" style="color:red">Forgot your password.... </a>
      </div></td>

  </tr>
  </form>
  
</table>
</div>
<div style="align:center"></div>
</div>
</body>
<?php include 'ifooter.php';?>
</html>
