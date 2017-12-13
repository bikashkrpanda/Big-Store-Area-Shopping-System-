<?php
session_start();
include ('dbcon.php');

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BIG STORE/Retailers</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>

<body>
<form id="form1" name="form1" method="post" action="" class="form-group">
  <table width="467" height="151" border="1" align="center" class="table">
    <tr>
      <td height="59" colspan="3"><div align="center" class="style1">REGISTER RETAILERS</div></td>
    </tr>
    <tr>
      <td height="42"><strong>Retailer Id</strong></td>
      <td><strong>Shop Name </strong></td>
      <td><strong>Action</strong></td>
    </tr>
	<?php
	$m=mysqli_query($db,"select * from regis");
	while($f=mysqli_fetch_assoc($m))
	{
	?>
    <tr>
      <td height="40"><?php echo $f['id']?></td>
      <td><?php echo $f['pro_cat']?></td>
      <td><label>
        <a href="detailsR.php?id=<?php echo $f['id']?>" class="btn btn-success">Details</a>
		
		
      </label></td>
    </tr>
	<?php
	}
	?>
  </table>
 
</form>
</body>
</html>
