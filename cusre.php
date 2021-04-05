<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reset Password</title>
<link href="css/Style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
if(isset($_POST['Update'])){
include('DBcon.php');



if($_POST['name']){
$search=$_POST['name'];


$sql = 'SELECT * FROM useraccount WHERE Username = "'.$search.'"';
$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ".
mysqli_error($conn));
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_array($result);

?>
<form class="box" name="form" method="POST" action="userupdate.php">
<label for="Userfull"><b>User Full Name : <?php echo $search; ?></b></label>
<br />

<br />

<br />


<label for="Userfull"><b>Email</b></label>
<input type="text" name="clastname" value="<?php echo $row['email']?>"/>


<label for="Userfull"><b>Username</b></label>
<input type="text" name="cEmail" value="<?php echo $row['Username']?>"/>

<label for="Userfull"><b>Password</b></label>
<input type="text" name="cMobile" value="<?php echo $row['Password']?>"/>

<label for="Userfull"><b>Mobile</b></label>
<input type="text" name="cPurch" value="<?php echo $row['mobile']?>"/>

<label for="Userfull"><b>Birth</b></label>
<input type="text" name="cPurch" value="<?php echo $row['bday']?>"/>



<input type="hidden" name="name" value="<?php echo $search; ?>" />


<h1>
<input type="submit" name="update" id="update" value="UPDATE" />
</h1>
</form>

<?php
}
else{
echo " No results found ";
}
}
}
else{
header("Location: resetpass.html");
}
?>




</body>
</html>
