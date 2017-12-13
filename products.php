<?php
session_start();
//Include db configuration file
include 'dbcon.php';
$email=$_SESSION['email'];
//echo $_SESSION['email']=$email;

//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'bikash25panda@gmail.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayPal Standard Payment Gateway Integration by CodexWorld</title>
<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#ffffff;border:0px solid #caf5f6;">

  <?php include 'header.php'; ?>

   </div>
   <div class="container-fluid" style="margin-top:30px">
    <table class="table" border="1">
        <thead>
            
            <th>Product image</th>
            <th>Product Name</th>
            <th>Price</th>
        </thead>
   
<?php
	//Fetch products from the database
	$results = mysqli_query($db,"select * from shopping_cart where email='".$email."'");

	while($row = mysqli_fetch_assoc($results)){
?>
    <tr><td><img src="images/<?php echo $row['image1'];?>" height:"150" width="150"/></td>
    <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['price']; ?><br/></td></tr>
   
        
    <form action="bill.php<?php //echo $paypalURL; ?>" method="post" >
        <!-- Identify your business so that you can collect the payments. -->
        
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
    
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        
          
        <input type="hidden" name="item_name" value="<?php echo $row['product_name']; ?>">
            
        <input type="hidden" name="item_number" value="<?php echo $row['product_code']; ?>">
            
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
            
        
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
        <?php } ?>
        <!-- Display the payment button. -->
       <tr> <input type="submit" name="submit" border="0" class="btn btn-success" value="PAY" 
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" ></tr>
    </form>

    </table>
</div>
</body>
</html>
