<!DOCTYPE html>
<html lang="en">
<head>

  <title>Cus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
 

<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		header("location:log.php");
	}
	$name=$_SESSION['name'];
?>

<div class="jumbotron text-center" style="background-image: url('Wood.jpg'); background-size: 100%;"> 

<h1>Vishwa Development</h1>
<p>Powerded by Vishwa Nimesh <p/>  
 

  <a href="logout.php">
    <input type="image" name="update" id="update" src="Images/bt.png" width="40" height="40"  value="Logout" />
  </a>
    


      <div align="left">
      <h2>Welcome  <?php echo $name;?></h2>
      </div>


         
    
<div class="container-fluid" style="background-image: url('Images/blury.jpg'); background-size: 100%;">
<br/>


<div class="row">

<br/>
<br/>


      <div class="col-sm-4">
      <h3>Users</h3>
      <p>View Users</p>
      
      <a href="User.php">
      <button type="button" class="btn btn-primary"  > VIEW</button>
      </a>
    
      </div> 

       <br/>
       
    
         <div class="col-sm-4">
      <h3> Users</h3>        
      <p>Add New Users</p>
      <a href="UserRegistration.html">
      <button type="button" class="btn btn-primary">ADD </button>
      </a>
    </p>
    
    <br>
    <br>
    
         </div>
          </div>
           </div>
            
            
            
        
  
        

  
  
 



     <div class="container-fluid" style="background-image: url('Wood.jpg'); background-size: 100%;">   
 
  <div class="media border p-3">
    <div class="media border p-3">       
    <img src="Images/vi.jpg" alt="VVV" height="61" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class align="left"="media-body">
      <h4>Vishwa Nimesh Charuka</h4>
     
      <h6>vishwanimeshcharuka@gmail.com</h6>
       
              
       
     
   </div>
  </div>
   
 
       
         </div> 
          

 <!--  
<div class="footer">
  <marquee direction="right"  id= "com" >Powered by Vishwa<img src=""  height="50" ></marquee>
       </div>
       -->

       <div class  align="right"="footer">
  Powered by Vishwa<img src=""  height="50" >
       </div>

</body>
</html>
