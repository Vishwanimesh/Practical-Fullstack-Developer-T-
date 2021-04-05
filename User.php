<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  

<title>CUSTOMER INFO</title>

<?php include 'DBcon.php';?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 

</head>

<body>

<div style="background-image: url('Ywood.jpg');">

<div class="container">

  <h2>User Details</h2>
  <hr >
  <div align="right" ><a  href="index.php">
    <input type="image" name="update" id="update" src="Images/home.jpg" width="40" height="40"  value="Home" />
  </a></div>
    
            

  <a href="addcuss.html"> 
      <button type="button" class="btn btn-primary"  >ADD User </button> 
    </a>
    
     <a href="deel.php"> 
      <button type="button" class="btn btn-primary"  >Delete </button> 
    </a>  
     <a href="cusupser.html"> 
      <button type="button" class="btn btn-primary"  >Update </button> 
    </a>    
     
 
</div>
<br/>
<br/>

<?php


$sql = "SELECT U_ID, email, Username,Password,mobile,bday FROM useraccount";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=table table-dark table-striped><tr><th>USER ID</th><th>EMAIL</th><th>USERNAME</th><th>PASSWORD</th><th>MOBILE</th><th>BIRTH</th></tr>"; 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["U_ID"]. "</td><td>" . $row["email"]. "</td> <td>" . $row["Username"]. "</td><td>" . $row["Password"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["bday"]. "</td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>
<br/>
<br/>
<br/>
<br/>

</div></div>
</body>
</html>
