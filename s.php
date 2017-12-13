<?php
session_start();

include 'dbcon.php';




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>BIG STORE</title>
 <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="themes32/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes32/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>

<style>
.select {
margin-left:500px;
margin-top:100px;
height:200px;
width:150px;
background:;
color:#000000;

}
</style>

</head>


<body>
<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#ffffff;border:0px solid #caf5f6;">

  <?php include ('header.php'); ?>
  <hr style="background:#666666;height:2px;" >

   </div>
   
    <!--sliderall--> <div style="height:328px; margin-top:35px;margin-left:200px; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

       

                  </div><!--sliderall close-->

<div class="select">

<form action="area.php" method="POST" class="form-group">
<span style="color:#666666;font-size:16px">Choose Your City....</span> <br/>
<select name="select" class="form-control">
<option value="" class="">Select</option>
        <?php
		
	$qry="select * from city1";
	$exe=mysqli_query($db,$qry);
	while($f=mysqli_fetch_assoc($exe))
	{
	?>
        <option value="<?php echo $f['city']?>"> <?php echo $f['city']?> </option>
        <?php 
	
	
	}
	
	?>
</select><br/>
<input type="submit" name="submit" class="btn btn-success" value="Click Here">
</form>
</div>
         <!--slider down close-->

        <div style="height:50px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         </div>

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">   

             <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->



</body>
</html>
