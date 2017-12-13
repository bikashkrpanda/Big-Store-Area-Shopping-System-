<?php  session_start();
// $url=$_GET['id'];
// $_SESSION['id']=$url;

include ('dbcon.php');
//$status=$_POST['status'];
//$_SESSION['id']=$url;
//$qry=mysql_query("Update regis set status='$status' where id='$_SESSION[id]'") or die(mysql_error());
 if($_SERVER['REQUEST_METHOD']=='POST'){
 	
  $sql="UPDATE regis SET status = '1' WHERE id = '$_SESSION[id]'";
    mysql_query($db,$sql);
	
    }
if($sql=1)
{

echo "successful";
	//header('location:detailsR.php');

}
//x;
?>



















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


</head>

<body>
<form method="post" action="">
<input type="hidden" name="status" value="1">
</form>

</body>
</html>
