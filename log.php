<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vishwa Login </title>
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

if(isset($_POST['log'])){ 

if(count($_POST)>0) {
 include 'DBcon.php';
 
 
$result = mysqli_query($conn,"SELECT * FROM admin WHERE AD_Name='". $_POST["uname"] . "' and Password= '". $_POST["pword"]."'");


$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['Ad_ID'];
$_SESSION["name"] = $row['FULLName'];
} 
else {
$message ="Invalid Username or Password!";

}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}

}

?>
 
    
  <form class="box" action="" method="POST">
  <h1>Login</h1>
  <input type="text" name="uname" placeholder="Username">
  <input type="password" name="pword" placeholder="Password">
  
  <input type="submit" name="log" value="Login">
  <input type="submit" name="" value="Reset">
    <!-- <a href ="resetpass.html"> <p>Change Password</p></a> -->
    
    <a href="resetpass.html"> 
      <button type="button" class="btn btn-primary">Change Password </button> 
    </a>
    <br/>
    <br/>
  <a href="userlog.php"> 
      <button type="button" class="btn btn-primary">User Login </button> 
    </a>

</form>

  </body>
</html>
