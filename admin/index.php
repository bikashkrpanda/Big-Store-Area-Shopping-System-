<?php

session_start();

include('dbcon.php');	

 if(isset($_POST['submit']))

{	

$_SESSION['name']=$_POST['name'];

$password=$_POST['password'];



$qry=mysqli_query($db,"select * from login");

if($q=mysqli_fetch_array($qry))

{

	if($q[1]== $_SESSION['name'] && $q[2]== $password)

	{

		

		header('Location:addadmin1.php');

	}

	else

	{

		echo "<script>alert('User Id or Password does not match !!');</script>";

	}

}	

}

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
 box-shadow: 0 4px 8px 0 #00ccff, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
-->
 
</style>

</head>
<?php include('iheader.php');?>
<body style="background-image:url(images/bg.png)">
<div class="container-fluid">
<div class="container" style="width:500px;margin-top:100px;background-color:#FFFFFF;" >
<table class="table" width="364" height="201"  align="center">
<thead>
  <tr>
    <td height="53" colspan="2"><div align="center" class="style1">Admin Login</div></td>
  </tr>
  </thead>
  <form action="" method="post" class="form-group">
  <tr>
    <td width="115" height="35">Admin UserName : </td>
    <td width="233"><input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter your username" required/></td>
  </tr>
  <tr>
    <td height="33">Password : </td>
    <td><input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter your password" required/></td>
  </tr>
 
  <tr>
    <td height="33" colspan="2">
      
      <div align="right">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        <a href="../index.php">Click Here For go to portal... </a></div></td>
  </tr>
  </form>
</table>
</div>
</div>
</body>
</html>