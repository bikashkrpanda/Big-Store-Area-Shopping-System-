<?php session_start(); ?>



<?php

	include('dbcon.php');

	 $code1=$_GET['x'];

	$query="delete from product where ser_no='".$code1."'";

	$rs=mysqli_query($db,$query);

	if($rs)

	{

		header('location:delete1.php');

	}

?>

