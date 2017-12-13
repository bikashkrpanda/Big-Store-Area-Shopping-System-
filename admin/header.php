<?php session_start();
 //error_reporting('0');
 include('dbcon.php'); 
 $qrys=mysqli_query($db,"select * from regis where remail='$_SESSION[textfield]' ");
  while($fetch=mysqli_fetch_assoc($qrys))
  {
  ?>


  <head>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <style>
        .st {
            
           
            margin-top:-25px;
            height:70px;
            background: #001a00;
            font-family:verdana;
            color: white;
            padding-top:10px;
            font-size:60px;
        }
		
    </style>


</head>


 <div class="jumbotron st" style="margin-top:-70px;">
    
         <h1 style="font-size: 30px;margin-left:100px;float:left;">BIG STORE</h1>
        <h1 style="font-size: 25px;margin-left:800px;float:left;">My Account</h1>
       
      </div>
      <table width="1111" height="41" border="2" style="margin-left:100px;margin-top:-52px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <tbody>
          <tr>
          	
            <td width="253" height="35"><span>Catagory:</span><b><?php echo $fetch['shop_catagory'] ?></b></td>
           
            <td width="523"><span>Your Shop:</span><b><?php echo $fetch['pro_cat'] ?></b></td>
        
            <td width="309"><span>Address:</span><b><?php echo $fetch['rshop_add'] ?></b></td>
           
          </tr>
        </tbody>
        <?php 
		}
		?>
      </table>
       