<?php

session_start();
include 'dbcon.php';
$qry=mysqli_query($db,"select user_name from login where ser_no='1'");
$f=mysqli_fetch_assoc($qry);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BIG STORE/Admin page</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color:#0066FF;
}
.container{
  box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-top: 130px;
  height: 250px;
}

#b1{
  box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 250px;
  width: 200px;
  margin-top: 50px;
  float: left;
}
#b2{
  box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 170px;
  margin-top: 50px;
  width: 200px;
  float: left;
}
-->
 
</style>

</head>
<?php include('iheader.php');?>
<div style="margin-left:1220px"> <a href="index.php" class="btn btn-danger">logout</a></div>
<body style="background-image:url(images/bg.png)">
  <div class="container-fluid">
    <center><div class="container">
      <h2 style="color:red"><u>Welcome Admin , <?php echo $f['user_name'];?></u></h2>
<div id="b1" >
<b ><a href="addadmin.php" class="btn btn-primary">REGISTERED RETAILERS</a></b>
</div>
<div id="b2">
<b ><a href="addcustomer.php" class="btn btn-primary">REGISTERED CUSTOMERS</a></b>
</div>
</div></center>
</div>

</body>
</html>