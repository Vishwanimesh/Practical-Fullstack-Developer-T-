
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vishwa Login Form</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
     <!-- Bootstrap Start -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity=  "sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
  
 
  
 
 
  
  
  <!-- Bootstrap Finish -->
  
  </head>
  
  <body>
<?php
session_start();
$message="";

if(isset($_POST['urlog'])){ 

if(count($_POST)>0) {
 include 'DBcon.php';
 
 
$result = mysqli_query($conn,"SELECT * FROM useraccount WHERE Username='". $_POST["uuuname"] . "' and Password = '". $_POST["ppppword"]."'");


$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["iid"] = $row['U_ID'];
$_SESSION["nname"] = $row['email'];
} 
else {
$message ="Invalid Username or Password!";

}
}
if(isset($_SESSION["iid"])) {
header("Location:index.php");
}

}

?>
<Center>
 <a href="log.php">
    <input type="image" name="update" id="update" src="images/bt.png" width="40" height="40"  value="Logout" />
  </a>
</Center>
  <form class="box" action="" method="POST">
  <h1>Login</h1>
  <input type="text" name="uuuname" placeholder="Username">
  <input type="password" name="ppppword" placeholder="Password">
  
  <input type="submit" name="urlog" value="Login">
  <input type="submit" name="" value="Reset">
    <!-- <a href ="resetpass.html"> <p>Change Password</p></a> -->

</form>

  </body>
</html>
