<?php session_start(); ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>BIg Store</title>



<link rel="stylesheet" href="style.css" type="text/css" />


<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">


</head>

<body>

<?php include('header.php');?>

  <!--middle-->

     

	   

<!--left-->

<div style="margin-left:10px;"><?php include('left.php'); ?></div>

<!--right-->

<div style="width:400px; height:auto;box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19); float:left; margin-left:100px; border:1px solid #999999; border-radius:5px; margin-top:5px; ">



 <div style=" width:400px; float:left; height:60px;  border:solid 0px #999900; " >



<link rel="stylesheet" href="css_middle/style.css" type="text/css" />

<style type="text/css">

._css3m{display:none}

</style>

<ul id="css3menu11" class="topmenu" style="margin-top:18px; margin-left:8px;">

	<li><a href="insert.php" style="height:40px;line-height:40px; font-size:11px; width:105px; border-radius:10px 10px 1px 1px; border:#000000 0px solid;"><center><div style="padding-left:2px;"><b>Insert</b></div></center></a></li>



	<li class="toplast"><a href="update.php" style="height:40px;font-size:11px;line-height:40px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px;"><center><div style="padding-left:2px;background-color:#000000; color:#FFFFFF; "><b>Update</b></div></center></a></li>



    <li class="topmenu"><a href="delete.php" style="height:40px;line-height:40px;font-size:11px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px; "><center><div style="padding-left:2px;"><b>Delete</b></div></center></a></li>

 

</ul></div>

    

<div style=" width:400px; float:left; height:auto;  border:solid 0px #999900;" align="center">

<form name="form2" class="form-group" action="delete1.php" method="post" style="margin:auto;" >

              <table width="300" style="margin-top:20px;" border="0">

            

              

               <tr >

             <?php   $qrys=mysqli_query($db,"select * from regis where remail='$_SESSION[textfield]' ");
  while($fetch=mysqli_fetch_assoc($qrys))
  {
 ?>
                <td  style="width:10px; font-size:14px;">Your Shop: </td>

                <td > <input type="text" class="form-control" name="pcat" value="<?php echo $fetch['pro_cat'];?>" readonly/>
				<?php } ?>

					</td>

                            

      

             </tr>

         <td colspan="2" align="center"> <input type="submit" name="submit" value="submit" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;"></td></tr>

            

     </table>

</form>





</div>    

    

    

    

    </div>

</div>





</div>

</div>

</body>

</html>

