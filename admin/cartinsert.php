<?php

@$code=$_GET['code1'];







?>



<?php 

include('dbcon.php');

$que="insert into product1 ('product_code','product_name','price','image1') select product_code, product_name,price,image1 where product_code='$code'" ;

			 $res=mysqli_query($db,$que);

			 if($res)

			 {

			 echo "";

			 			 }







 ?>

