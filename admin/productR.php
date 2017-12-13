<?php

include('dbcon.php');

$nice=mysqli_query($db,"select * from product where remail='$_SESSION[textfield]'");

while($way=mysqli_fetch_array($nice))

{

?>
<html>
<img src="images/<?php echo $way['image1']; ?>" height="100px" width="100px">
<?php }
?>
</html>
