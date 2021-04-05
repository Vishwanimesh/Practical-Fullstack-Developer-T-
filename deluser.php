<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
</head>

<body>
<?php
session_start();
$mysqli = new mysqli('localhost','root','','codewox') or die(mysqli_error($mysqli));
  if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM useraccount WHERE U_ID=$id") or die ($mysqli->error());
  
    // $_SESSION['massage'] = "Record has been deleted!!!!!!!";
     //$_SESSION['mas_type'] = "denger";
      header("location:deel.php");

}


?>
</body>
</html>