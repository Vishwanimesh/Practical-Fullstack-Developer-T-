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
  <a href="Customer.php">
    <input type="image" name="update" id="update" src="gh.jpg" width="40" height="40"  value="Logout" /> </a></div>
  

<?php
if(isset($_POST['update'])){
include('DBcon.php');
$name=$_POST['name'];
$lsname=$_POST['clastname'];
$cuemail=$_POST['cEmail'];
$cumobile=$_POST['cMobile'];
$cupurch=$_POST['cPurch'];
//echo $name;
echo "Successfully Updated the Customer Ditails in ".$name ;
//echo "<br>";
//echo "this ".$Adminname;
$sql="UPDATE customer SET C_ln='$lsname',E_mail='$cuemail',m_mobi='$cumobile',pur_ch='$cupurch' WHERE c_fn='$name'";;
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
