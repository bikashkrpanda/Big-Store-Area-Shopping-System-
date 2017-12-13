<?php
session_start();
//Include db configuration file
include 'dbcon.php';
$email=$_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big store/Bill</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<style>

</style>
</head>
	<body>
		<div class="container">
		<div class="container-fluid" style="margin-top:30px;width:500px;box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table" border="1">
    	<h3 style="color:blue;font-weight:bold;text-align:center;">Big Store</h3>
    	<span class="sp1"><b>Date:</b><?php echo date("d/m/y");?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<span class="sp2"><b>Time:</b><?php date_default_timezone_set("Asia/Kolkata");

echo date("h:i:sa"); ?></span>
        <thead>
            
           
            <th>Product Name</th>
             <th>Product Code</th>
            <th>Price</th>
        </thead>
   
<?php
	//Fetch products from the database
	$results = mysqli_query($db,"select * from shopping_cart where email='".$email."'");
	$amt=0;
	while($row = mysqli_fetch_assoc($results)){
		$price1=$row['price']*$row['quantity'];
?>

    
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_code']; ?></td>
        <td><?php echo $row['price']; ?><br/></td></tr>
  
  <?php
  $amt=$amt+$price1;
$_SESSION['amt']=$amt;
}
  ?>
  
</table>
<span style=""><b>Total Amount:</b><?php echo $price1; ?>/-<br/>
	<center><button class="btn btn-success" onclick="window.print();">Please Save Your Bill</button></center>
</div>

</div>
	</body>
</html>