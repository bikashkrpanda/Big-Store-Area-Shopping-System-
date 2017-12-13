<?php
session_start();
include ("dbcon.php");

if(isset($_POST['submit']))
{
$n=$_POST['textfield'];
//$_SESSION['textfield']=$n;
$e=$_POST['textfield2'];
//$_SESSION['textfield2']=$e;
$cata=$_POST['select'];
//$_SESSION['select']=$cata;




$m=$_POST['textfield3'];
//$_SESSION['textfield3']=$m;
$p=$_POST['textfield4'];
//$_SESSION['textfield4']=$p;
$a=$_POST['textfield5'];
//$_SESSION['textfield5']=$a;
$pin=$_POST['textfield6'];
//$_SESSION['textfield6']=$pin;

$sa=$_POST['textfield8'];
//$_SESSION['textfield8']=$sa;
$cat=$_POST['textfield7'];
$_SESSION['textfield7']=$cat;
$status=$_POST['status'];
//$_SESSION['status']=$status;




$res1=mysqli_query($db,"select * from regis where remail='$e'");

  $count=mysqli_num_rows($res1);

  

  if($count!=0)

  {

      

           echo "<script>alert('You Have Already Registered Please Login..');</script>";       

  

  }

   else

  {

  

         $insert="INSERT INTO `regis`(`rname`, `remail`, `shop_catagory`, `rmobile`, `rpass`, `rarea`, `rpicode`, `rshop_add`, `pro_cat`, `status`) VALUES ('$n','$e','$cata','$m','$p','$a','$pin','$sa','$cat','$status')";
     $result=mysqli_query($db,$insert);

     if($result)

    {

       

       header('location:newINDEX.php');

    }

  }



}

/*$ins=mysqli_query($db,$insert);

if($ins=1)
{

echo "you are successfilly Registered";

}
else 
{
echo "something went wrong";
}
}*/



?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Big Store/Retailer Registration</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color:#0066FF;
}
.container{
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
-->
</style>
</head>

<?php include 'iheader.php';?>
 <h2 style="font-size: 25px;margin-left:550px;float:left;color:black"><b>Retailer/Seller's Portal</b></h2>
<body style="background-image:url(images/bg.png)">
<div class="container-fluid">
<div class="container" style="width:700px;background-color:#FFFFFF">
<table class="table"  align="center">
<thead>
  <tr>
    <td height="49" colspan="2"><div align="center" class="style1">Register Here </div></td>
  </tr>
  <thead>
  <form action="" method="post" class="form-group" >
  <tr>
    <td width="60">Name : </td>
    <td width="124"><input type="text" name="textfield" pattern="[a-zA-Z]{5,}" class="form-control" width="50px" autocomplete="off" placeholder="Enter your name" required/></td>
  </tr>
  <tr>
    <td>Email : </td>
    <td><input type="name" name="textfield2" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" autocomplete="off" placeholder="Enter your email" required/></td>
  </tr>
  <tr>
    <td>Shop Catagory: </td>
    <td>
      <select  name="select" class="form-control" required>
        <option value="">Select</option>
        <?php
	$qry="select * from shop_cata";
	$exe=mysqli_query($db,$qry);
	while($f=mysqli_fetch_assoc($exe))
	{
	?>
        <option value="<?php echo $f['shop_catagory']?>"> <?php echo $f['shop_catagory']?> </option>
        <?php 
	
	
	}
	?>
      </select></td></td>
  </tr>
  <tr>
    <td>Mobile : </td>
    <td><input type="text" pattern="[7-9]{1}[0-9]{9}"  name="textfield3"  class="form-control" autocomplete="off" placeholder="Enter your contact number" required/></td>
  </tr>
  <tr>
    <td>Password : </td>
    <td><input type="password" name="textfield4" class="form-control" autocomplete="off" placeholder="Make a password" required/></td>
  </tr>
  <tr>
    <td>Area : </td>
    <td><input type="text" name="textfield5" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+" class="form-control" autocomplete="off" placeholder="Enter area name" required/></td>
  </tr>
  <tr>
    <td>Pincode : </td>
    <td><input type="text" name="textfield6" pattern="[2-2]{1}[0-9]{5}" class="form-control" autocomplete="off" placeholder="Enter area pincode" required/></td>
  </tr>
  
  <tr>
    <td>Shop Address : </td>
    <td><input type="text" name="textfield8" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+" class="form-control" autocomplete="off" placeholder="Enter your shop address" required/></td>
  </tr>
  <tr>
    <td>Shop Name: 
     </td>
	 <td><input type="text" name="textfield7" class="form-control" pattern="[a-zA-Z]{2,}" autocomplete="off" placeholder="Enter your shop name" required/></td>
  </tr>
  <input type="hidden" name="status" value="0" id="st" readonly/>
  <tr>
    <td colspan="2"><div align="right">
      <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
      Already Register <a href="newINDEX.php">Click Here </a></div></td>
  </tr>
  </form>
</table>
</div>
</div>
</body>
<?php include 'ifooter.php';?>
</html>

rreg.php
Displaying rreg.php.