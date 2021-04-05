<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE USERS</title>
<!-- <link href="Style.css" rel="stylesheet" type="text/css"> -->

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
<style>
table, th, td {
    border: 2px solid black;
}
</style>
  
</head>

<body>
<?php require_once 'deluser.php'; ?>
<?php
   if  (isset($_SESSION['massage'])): ?> 
   
<div class="alert alert-<?=$_SESSION['mas_type']?>"> 

<?php 
   echo $_SESSION['massage'];
   unset ($_SESSION['massage']);
    ?>
    
</div>

<?php endif?>


    <?php
$mysqli = new mysqli('localhost','root','','codewox') or die(mysqli_error($mysqli));
$result  = $mysqli->query("SELECT * FROM useraccount") or die ($mysqli->erorr);
//pre_r($rersult); ?>

<div style="background-image: url('Pink.jpg');">

<div class="container-fluid">
  <h2>User Delete</h2>
  <hr >
 	<table class=table table-dark table-striped>
 		<thead>
 			<tr>
                <th>User ID</th>
 				<th>Email</th>
 				<th>User Name</th>
 				<th>Password </th>
 				<th>mobile</th>			
 				<th>Birth</th>
 			
               <th colspan="1">Action</th>

 			</tr>
 		</thead>
        
        
        
<?php 
 		while ($row= $result->fetch_assoc()):  ?>
        
 			<tr>
            	<td> <?php echo $row['U_ID']; ?> </td>
 				<td> <?php echo $row['email']; ?> </td>
 				<td> <?php echo $row['Username']; ?> </td>
 				<td> <?php echo $row['Password']; ?> </td>
 				<td> <?php echo $row['mobile']; ?> </td>
 				<td> <?php echo $row['bday']; ?> </td>
 				
 				<td> 

 				 <a href="delcus.php?delete=<?php echo $row['U_ID']; ?> "
 				 <button type="button"class="btn btn-primary">Delete </button> </a>
                
              



 				</td>			
 			</tr>
 			<?php endwhile; ?>
 	 </table>
 	</div>
    
 	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';

 	 }
 	 ?>
     
</body>
</html>