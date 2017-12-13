
<style>
 a:hover {;
   	color:black;
}
.anker{
	text-decoration:none;font-size:17px;margin-left:17px;color:#7A7A7A;
	}
	.anker:hover{
	text-decoration:none;font-size:17px;margin-left:17px;color:red;
	}
</style>
<div  style="width:180px;box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.1); height:auto; float:left; margin-left:30px;color:#271CFB; border:1px #CCCCCC solid;border-radius:17px;;background-color:white;">

<table >

 <tr><td>

  <a href="logout.php"  class="anker">Logout </a>
  <hr></td></tr>
 

 <tr><td><a href="changepassword.php" class="anker" style="font-size:17px;margin-left:17px;">ChangePassword</a><hr /></td></tr></table>

 



<form action="left.php" method="post">



<table>

<?php 

include('dbcon.php');

$nice=mysqli_query($db,"select * from static");

while($way=mysqli_fetch_array($nice))

{

?>

<tr>

<td><a href="page.php?id=<?php echo $way['static_id'];?>" style="font-family:Tahoma, Geneva, sans-serif;font-size:17px;margin-left:17px;" class="anker" ><?php echo $way['page'];?></a><hr/></td>

</tr>

<?php 

}?>

</table>







</form>

<table style="border:0px solid #330033; margin-top:10px;">

         

<tr><td><a href="insert.php" style="text-decoration:none;margin-left:20px;font-size:20px;">Product</a></td></tr>
<tr><td><a href="orders.php" style="text-decoration:none;margin-left:20px;font-size:20px;">Orders</a></td></tr>

   </table>   



         

       

     

</div>