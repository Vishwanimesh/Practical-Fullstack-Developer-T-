<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="re.css" type="text/css">
<title>Success</title>
<link href="Style1.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div align="right" >
  <a href="log.php">
    <input type="image" name="update" id="update" src="gh.jpg" width="40" height="40"  value="Logout" /> </a></div>
  

<?php
if(isset($_POST['update'])){
include('DBcon.php');
$name=$_POST['name'];
$Adminname=$_POST['Adminname'];
$adminpass=$_POST['Password'];
//echo $name;
echo "Successfully Updated the Username and Password in ".$name ;
//echo "<br>";
//echo "this ".$Adminname;
$sql="UPDATE admin SET AD_Name='$Adminname',Password='$adminpass' WHERE FULLName ='$name'";;
$result=mysqli_query($conn,$sql);
// if successfully updated.
if($result){
// if(mysqli_num_rows($result) > 0){
// $row = mysqli_fetch_array($result);
//echo $row['Password'];
//echo "Successfully updated ";
echo "<BR>";

}
}
else {
echo "ERROR";
}
?>


</body>
</html>
