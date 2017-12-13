

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BIG STORE/product page</title>
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
<thead>
  <tr>
    <td height="53" colspan="2"><div align="center" class="style1">Forget password</div></td>
  </tr>
  </thead>
  <form action="forgetpassR1.php" method="post" class="form-group">
  <tr>
    <td width="115" height="35">Email : </td>
    <td width="233"><input type="email" name="remail" class="form-control" autocomplete="off" placeholder="Enter your email" required/></td>
  </tr>
  <tr>
    <td height="33">Mobile : </td>
    <td><input type="number" name="mobile" class="form-control" autocomplete="off" placeholder="Enter your Contact number" required/></td>
  </tr>
  <tr>
    <td height="33">Catagory : </td>
    <td> <input type="text"  name="select" class="form-control" placeholder="Enter your catagory" required>
    	<tr>
    		<td align="right">
      <input type="submit" name="submit" class="btn btn-primary" value="Click Here"> 
  </td>
</tr>
        
  </form>
</table>
</div>
</div>
</body>
</html>
