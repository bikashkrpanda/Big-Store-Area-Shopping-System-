<?php session_start();
//error_reporting('0');
include ('dbcon.php');
//$sel=mysql_query("select * from regis");
if(!isset($_SESSION['textfield']))
{
  header('location:newINDEX.php');
}
 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Big Store/insert</title>



<link rel="stylesheet" href="style.css" type="text/css" />
<style>
span {
  color:#0099FF;
  font-size:18px;
  
}
</style>
</head>

<body>

<?php include('header.php');?>

  <!--middle-->

     

     

<!--left-->

<div >
<div>






 
  <?php
  $qrys=mysqli_query($db,"select * from regis where remail='$_SESSION[textfield]' ");
  while($fetch=mysqli_fetch_assoc($qrys))
  {

  ?>
    
  
  
</div>  
<?php include('left.php'); ?></div>

<!--right-->

<div  style="width:810px;box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19); height:auto; float:left; margin:auto; border:1px solid #999999; border-radius:10px; margin-top:5px; margin-left:50px; ">



 <div style=" width:800px; float:left; height:60px;  border:solid 0px #999900; ">



<link rel="stylesheet" href="css_middle/style.css" type="text/css" />

<style type="text/css">

._css3m{display:none}

</style>
<ul id="css3menu11" class="topmenu" style="margin-top:18px; margin-left:8px;">

  <li><a href="insert.php" style="height:40px;line-height:40px; font-size:11px; width:105px; border-radius:10px 10px 1px 1px; border:#000000 0px solid;background-color:black; color:#FFFFFF;"><center><div style="padding-left:2px;"><b>Insert</b></div></center></a></li>



  <li class="toplast"><a href="update.php" style="height:40px;font-size:11px;line-height:40px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px;"><center><div style="padding-left:2px; "><b>Update</b></div></center></a></li>



    <li class="topmenu"><a href="delete.php" style="height:40px;line-height:40px;font-size:11px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px; "><center><div style="padding-left:2px;"><b>Delete</b></div></center></a></li>

 

</ul></div>

    

<div style=" width:800px; float:left; height:auto;  border:solid 0px #999900;" align="center">

<form name="form2" class="form-group" method="post" enctype="multipart/form-data" style="margin:auto;" >

              <table width="780" class="table" style="margin-top:20px;" >

             

              

               <tr >
         
                <input type="hidden" class="form-control" name="Email" value="<?php echo $_SESSION['textfield'];?>" readonly/>
      
        <!-- <td>Product_Catagory</td>-->
            
              <input type="hidden" name="shop_catagory" value="<?php echo $_SESSION['select'];?>"> <?php //echo $_SESSION['select'];?> 

             </tr>
              

                <td  style="width:10px; font-size:14px;">Product_Code:</td>

                <td width="349"><input type="text" class="form-control" style="width:60%;" name="pcode"/></td>

              

              <td>Product_Name:</td>

               <td width="349"><input type="text" class="form-control" style="width:60%;" name="pname"/></td>

             </tr>

             

             <tr><td>Shop_Name:</td><td width="349">

             <input type="text" class="form-control" name="pro_cat" value="<?php echo $fetch['pro_cat'];?>" style="width:60%;" readonly/>
       
      
        <?php
         $pro_cat=$fetch['pro_cat'];
         $_SESSION['pro']=$pro_cat;
    // $_SESSION['pro_cat']=$fetch['pro_cat'];
  //$qry="select DISTINCT pro_cat from product  ";
  //$exe=mysql_query($qry);
  //while($f=mysql_fetch_assoc($exe))
  //{
  ?>
         
     <?php }?>
        <?php 
  
  
  //}
  ?>
            <!--<option value="-1">select one</option>
            <option  value="mobile">Mobile</option>
            <option value="tv">TeleVision</option>
            <option value="camera">Camera</option>
              <option value="music">Music<option>
            <option value="laptop">Laptop</option>
            <option value="game">Game</option>--></select>

</td>

              <td>Product_Price:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="pprice"/></td></tr>

              

               <tr><td>Description:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="desc"/></td>

                   <td>Brand:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="brand"/></td></tr>

                   

             <tr><td>Category:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="category" />

                      

             

             

             </td>

               <td>Features:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="features"/></td></tr>

               

               <tr><td>Plateform:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="plateform"/></td>

                 <td>Model:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="model"/></td></tr>

                 

                 <tr><td>Type:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="type"/></td>

                 <td>Display:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="display"/></td></tr>

                 

                 <tr><td>Waranty:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="waranty"/></td>

                    <td>Shipping_time:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="shipping_time"/></td></tr>

                    

                   <tr><td>Price:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="price"/></td>

                    <td>Offer_price:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="offer_price"/></td></tr>

                    

                <tr><td>Save:</td><td width="349"><input type="text" class="form-control" style="width:60%;" name="save"/></td>

               <td>Image:</td><td width="349"><input type="file" class="form-control" style="width:60%;" name="image" id="Iname"/></td></tr>

                

               <!--<tr style="margin-top:20px;"><td></td><td></td></tr>-->

               <tr>

               <td colspan="4" align="center"> <input type="submit" class="btn btn-primary" name="btninsert" value="Insert" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:; border-radius:5px;"></td></tr>



     </table>

</form>





</div>    

    

    

    

    </div>

</div>





</div>

</div>
</body>

</html>

<?php

include ('dbcon.php');

if(isset($_POST["btninsert"]))

{ 
$remail=$_POST['Email'];

$shop_catagory=$_POST['shop_catagory'];

$pcode=$_POST['pcode'];

$pname=$_POST['pname'];

$pro_cat=$_POST['pro_cat'];

$price=$_POST['pprice'];

$desc=$_POST['desc'];

$brand=$_POST['brand'];

$category=$_POST['category'];

$features=$_POST['features'];

$plateform=$_POST['plateform'];

$model=$_POST['model'];

$type=$_POST['type'];

$display=$_POST['display'];

$waranty=$_POST['waranty'];

$shipping_time=$_POST['shipping_time'];

$price=$_POST['price'];

$offer_price=$_POST['offer_price'];

$save=$_POST['save'];

/*$path="images/";
$image=$_FILES["Iname"]["tmp_name"];
$target=$_FILES['Iname']['name'];
move_uploaded_file($image,$path.$target);
$profile=$_FILES['Iname']['name'];*/


 // move_uploaded_file($_FILES["Iname"]["tmp_name"],"images/".$_FILES["Iname"]["name"]);
  
  //$location="images/" . $_FILES["Iname"]["name"];
  
/*$target_dir = "images/";
$target_file = basename($_FILES["Iname"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($target_dir .$_FILES["Iname"]["tmp_name"], $target_file);
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";*/
        
     $file=$_FILES['image']['tmp_name'];
  $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name= addslashes($_FILES['image']['name']);
      move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
      
      $img=$_FILES["image"]["name"];
       





echo  $query="INSERT INTO `product`(`remail`, `shop_catagory`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `plateform`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `image1`) VALUES ('$remail','$shop_catagory','$pcode','$pname','$pro_cat','$price','$desc','$brand','$category','$features','$plateform','$model','$type','$display','$waranty','$shipping_time','$price','$offer_price','$save','$img')" ;





$result=mysqli_query($db,$query);

if($result)

{

  echo "<script>alert('record inserted');</script>".'<br>';

}

else

{

echo "<script>alert('record not insert');</script>".'<br>';

}

}



  

  

?>

