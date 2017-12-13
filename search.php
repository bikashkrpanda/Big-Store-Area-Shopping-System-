<?php include 'header.php';?>
<html>

  <?php
//session_start();
include 'dbcon.php';

if(isset($_POST['search']))
{
	$u=$_POST['srch'];

$s=mysqli_query($db,"select * from product where product_name LIKE '%$u%'");
while($fetch=mysqli_fetch_assoc($s))
{
?>
<head>
	<title>Big Store/Search page</title>
	 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	</head>
<div  class="container-fluid">
	<div class="container" style="width:600;height:auto;marging-left:200px">
		<table class="table">
			<thead>
			<th>Images</th>
			<th>Product Name </th>
			<th>Price</th>
		</thead>
			<td>
<img src=images/<?php echo $fetch['image1']?> height="100" width="100"></td>
<td><h4><?php echo $fetch['product_name']; ?> </h4></td>
<td><h4><?php echo $fetch['price']; ?> </h4></td>
  <td style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $fetch['product_code'];?>" style="text-decoration:none;">
                      <input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                  

<?php } }
?>
</table>
</div>
 <!--footer--><div style="width:100%; background-color:#414040;color:white; height:280px; border:1px solid #000000; ">   

             <?php include('footer.php'); ?>

         </div><!--footer close-->

</html>