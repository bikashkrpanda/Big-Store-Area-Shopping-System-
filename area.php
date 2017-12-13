<?php


session_start();
inclued 'dbcon.php';




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

 $cate=$_POST['select'];

//			 echo"$cate";

			 $query="select * from shop_add where city="."'$cate'";

//			 echo"<br>$query";



			 $r=mysqli_query($db,$query);

			 $i=1;

				while($f=mysqli_fetch_array($r))

				{

		?>
<a href="index.php?id=<?php echo $f['area']?>"><?php echo $f['area']?></a>




<?php
 }
 
?>


</form>
</body>
</html>
