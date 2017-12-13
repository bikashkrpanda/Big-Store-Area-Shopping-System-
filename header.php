<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style>
	#logo{
		
 
}

	</style>
</head>
<!--main--><div style="height:118px;background-color:; width:1150px; margin:auto; border:0px solid #990000;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.20), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

<!--logo--><div style="width:160px; height:115px; float:left; border:0px solid #FFF;"><a href="index.php"><img src="images/logo5.png" id="logo" style=" border-style: none;" height="118" width="250"/></a></div><!--logo close-->
<!--right--><div style="height:115px; width:990px; margin-top:0px; border:0px solid #FF0000; float:left;">
<!--menu--><div style="width:900px; height:30px; float:left; border:0px solid #CCCC00; font-size:12px;" align="right">
 <a href="index.php" style="text-decoration:none;color:#f1effd;"><img src="images/logo/index.png" height="40" width="63" /></a>&nbsp;  &nbsp;
 
<a href="signup.php" style="text-decoration:none;color:#FFFFFF;"> <img src="images/logo/sign.png"  width="60" height="45"/></a>&nbsp;   &nbsp;

<a href="myaccount.php" style="text-decoration:none;color:#f0f211;"><input type="button" value="MY ACCOUNT" class="btn btn-success" style="border-radius:10px; background-color:#ffffff;; border:0px solid #0033FF; font-family:'Monotype Corsiva'; height:40px; color:#f21160;"></a>&nbsp;   &nbsp;
<a href="cartdetails.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="MY CART" style="border-radius:10px; background-color:#ffffff;; border:0px solid #0033FF; font-family:'Monotype Corsiva'; height:40px; color:#f21160;"></a>&nbsp;   &nbsp;<br/>
<div><b> Retailers also manage their Shops here....<br/><a href="admin/rreg.php">Click Here for Registration.. </a></b></div>
<?php


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>


 <a href="logout.php" style="text-decoration:none;"><input type="button" name="signin" value="SIGN OUT" style="border-radius:10px;  color:#f0f211; border:0px solid #FFFFFF; background-color:#269FB2;;; font-family:'Monotype Corsiva';height:40px; box-shadow: 0px 0px 10px #CCCCCC;"></a>


 <?php
}
else
{
	?>
    <a href="login.php" style="text-decoration:none;"><input type="button" name="signin" value="SIGN IN" style="border-radius:10px; background-color:#f0f211;; border:0px solid #FFFFFF; font-family:'Monotype Corsiva'; height:40px; color:#f21160; box-shadow: 0px 0px 10px #CCCCCC;"></a>
   <?php
    }
?>


 
</div><!--menu close-->
<div style="float:left;width:600px;" align="center">
	<form method="post" class="form-group" action="search.php">  
  	<input type="text" class="form-control" name="srch" style="width:50%;" placeholder=" Enter whatever product you want to search">&nbsp;
  	<input type="submit" value="Search" name="search" class="btn btn-primary">
  </form>

</div>


<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:left;" align="right">

<?php
include 'dbcon.php';

if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))
{

$email=$_SESSION['email'];
    $query="select * from user_details where email='$email'";
			 $result=mysqli_query($db,$query);
			while($row=mysqli_fetch_array($result))

	      {
		  ?>
		  <p style=" color:#e6ffff; font-family:'veradana';margin-top:120px;margin-left:300px; font-size:40px;z-index:100;position:absolute;"><b>Welcome: <font style=" font-size:50px; color:White"> &nbsp; <?php echo $row['name'];?></font></b></p>


          <?php
}
}
?>
</div>


</div><!--right close-->

</div><!--main close-->