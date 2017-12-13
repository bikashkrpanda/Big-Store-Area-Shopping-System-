 

<?php

include('dbcon.php');
//$qu=mysql_query("select * from regis");
$qu=mysqli_query($db,"select * from product");
$fe=mysqli_fetch_assoc($qu);

  $ph=mysqli_query($db,"select * from regis where shop_catagory='mobile'");
			  $fh=mysqli_fetch_assoc($ph);
			 // {
 $pj=mysqli_query($db,"select * from regis where shop_catagory='jwellers'");
			  $fj=mysqli_fetch_assoc($pj);  


?>
<head>

<link rel="stylesheet" href="himanshu/vallenato.css" type="text/css" media="screen">

<link rel="stylesheet" href="himanshu/menu.css" type="text/css" media="screen">
</head>

<div class="topnav_main" style="border:0px solid #CC0000;">

 











<ul id="menu" style="width:1049px; border:0px solid #0000FF; ">

     

<li style=""><a href="#" class="drop"><?php echo $fe['shop_catagory'];?></a><!-- Begin 4 columns Item -->

    

        <div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  
			  <?php
			  $que=mysqli_query($db,"select * from regis where shop_catagory='Electronics' ");
			  while($f=mysqli_fetch_assoc($que))
			  {
			  ?>

                <h3><a href="entertainment.php?pro_cat=<?php echo $f['pro_cat'];?>"><?php echo $f['pro_cat'];?></a></h3>
               
				<?php
				}
				?>
              
              <!-- <h3><a href="fan.php">Raj electronic shop</a></h3>
                 <h3><a href="entertainment.php">Shiv electronic shop</a></h3>
                   <h3><a href="entertainment.php">Rahul electronic shop</a></h3>-->
                
               
               
               
              </div> 

                             <div class="col_1">  

                  </div> 

</div>

<div class="menu_add">
    
<a href="#"><img src="images/electronic/Electronic-showrooms-in-Jodhpur.jpg" width="298" height="300" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />-->

</div>

        </div><!-- End 4 columns container -->

    </li>

        
<li style=" width:60px;"><a href="#" class="drop"><?php echo $fh['shop_catagory'];?></a><!-- Begin 4 columns Item -->
		<?php //} ?>
    

        <div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          
  <?php
			  $que=mysqli_query($db,"select * from regis where shop_catagory='mobile' ");
			  while($f=mysqli_fetch_assoc($que))
			  {
			  ?>

              <div class="col_1">  

                <h3><a href="entertainment.php?pro_cat=<?php echo $f['pro_cat'];?>"><?php echo $f['pro_cat'];?></a></h3>

                <ul>

                </ul>  
				 </div> 
<?php }?>
                             <div class="col_1">  

                <h3><a href="#">Divakar mobile Shop</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Airtel Mobile Shop</a></h3>

                <ul>

                </ul>   </div> 


                          

                          

</div>

<div class="menu_add">
    
<a href="#"><img src="images/mobile/nokia-a1-exclusive.jpg" width="298" height="300" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />-->

</div>

        </div><!-- End 4 columns container -->

    </li>

         

<li style=" width:80px;"><a href="#" class="drop">JeWellers<?php //echo $fj['shop_catagory'];?></a><!-- Begin 4 columns Item -->

    

        <div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

                
			  <?php
			   $jw=mysqli_query($db,"select * from regis where shop_catagory='jwellers' ");
			  while($j=mysqli_fetch_assoc($jw))
			  {
			  ?>
        <div class="col_1">

                <h3><a href="entertainment.php?pro_cat=<?php echo $j['pro_cat'];?>"><?php echo $j['pro_cat'];?></a></h3>

                <ul>

                </ul>   </div> 
				<?php }?>

                             <div class="col_1">  

                <h3><a href="#">Neelkanth Sweets</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Manoranjan Sweet House</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Madhurima Sweets</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

               </div> 
               
          


</div>
<div class="menu_add">

<a href="#"><img src="images/jewelley/images;j;jn.jpg" width="298" height="300" border="0"></a>
<!--<img src="images/01.png" width="225" height="345" />-->


</div>


        </div><!-- End 4 columns container -->

    </li>

         

<li style=" width:70px;"><a href="#" class="drop">CycleShop</a>

    

        <div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="cameras.php">Agarwal Cycles Pvt Ltd</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Ashok Cycle Store</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Dwarika Cycle Store</a></h3>

                <ul>

                </ul>   </div> 

                             

</div>

<div class="menu_add">
    
<a ><img src="images/cycle/blackburn-2_11-1-2017-18039.jpg" width="298" height="300" ></a>



</div>

        </div>

    </li>

         

<li><a href="#" class="drop">Medical Shop</a><!-- Begin 4 columns Item -->

    

        <div class="dropdown_5columns align_right" style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="music.php">Manju Medical Store</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Rajesh Medicine Shop</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">KAMADHENU MEDICALS</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Shakun Medical Store</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                 </div> 

</div>

<div class="menu_add">
    
<a><img src="images/medical/colourbox1760420_42a18927.jpg" width="298" height="300" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />-->

</div>

        </div><!-- End 4 columns container -->

    </li>

         

<li><a href="#" class="drop">Computer Shop</a><!-- Begin 4 columns Item -->

    

     
        <div class="dropdown_5columns align_right" style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="music.php">Bansal Computers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Sai Laptop Technology</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Abc Computers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Reliable Computers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                 </div> 

</div>

<div class="menu_add">
    
<a><img src="images/computer/Lenovo-B480-Laptop-Intel-Core-1854225-1-76ab4.jpg" width="298" height="300" border="0"></a>

</div>

        </div><!-- End 4 columns container -->

    </li>

         


<!--<img src="images/01.png" width="225" height="345" />-->

</div>

        </div><!-- End 4 columns container -->

    </li>

         


         



  </ul>



 

  

      

  </div>

  

  </html>

  