<?php
session_start();
include ("dbcon.php");
//error_reporting('0');


if(isset($_POST['submit']))
{
	$e=$_POST['remail'];
	$m=$_POST['mobile'];
	$c=$_POST['select'];


	$for=mysqli_query($db,"select * from regis where remail='$e' and rmobile='$m' and shop_catagory='$c'");
	
}


?>
<html>
<head>
	<title>Big Store/Retailer Forget Password</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
b {
  color:red;
  font-size: 20px;
}
-->
 
</style>

</head>
<?php include('iheader.php');?>
<body style="background-image:url(images/bg.png)">
<div class="container-fluid">
<div class="container" style="width:500px;margin-top:100px;background-color:#FFFFFF;" >
<table class="table" width="364" height="201"  align="center">
<?php
	while($fetch=mysqli_fetch_assoc($for))
	{
?>
<thead>
	<th>Your Name :<tr><td><b><?php echo $fetch['rname'];?></b></td></tr>
</th>
	<th>Your Password :<tr><td><b><?php echo $fetch['rpass'];?></b></td></tr></th>
</thead>

<?php } ?>
<tr>
	<a href="newINDEX.php" class="btn btn-success">Click Here For Login....</a>
</tr>
</table>
</html>