<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Insert</title>
</head>

<body>
<?php
if(isset($_POST['ssubmit'])) {
	include("DBcon.php");
	
	$errorMessage ="";
	
	if(empty($_POST['flName']))
	{
		$errorMessage .= "<li>Enter your Email!</li>";
	}
    if(empty($_POST['llName']))
	{
		$errorMessage .= "<li>Enter User Name !</li>";
	}
	if(empty($_POST['lEmail']))
	{
		$errorMessage .= "<li>Enter Password !</li>";
	}

	if(empty($_POST['mobile']))
	{
		$errorMessage .= "<li>Enter Mobile !</li>";
	}

	if(empty($_POST['bday']))
	{
		$errorMessage .= "<li>Enter Birthday !</li>";
	}

	
	
	
 $email=$_POST['email'];
 $useNmame=$_POST['llName'];
 $useEmail=$_POST['lEmail'];
 $mobile=$_POST['mobile'];
 $bday=$_POST['bday'];
;
 
 if(!empty($errorMessage))
 {
	 echo("<p>There was an error with your form:</p>\n");
	 
	 echo("<ul>" . $errorMessage . "</ul>\n");
 }
 



$sql="INSERT INTO useraccount"."(email,Username,Password,mobile,bday)"."VALUES('$email','$useNmame','$useEmail','$mobile','$bday')";

                   $results=mysqli_query($conn,$sql);
                   if(!$results){
	                   die('could not enter data:'.mysqli_error($conn));
                 }
 
              else
              {
	
		      echo"Entered data successfully\n";
			  header("location:UserRegistration.html");
	          }
     } else//(isset($_POST['submit']))

       {
	         echo 'submit the form first';

	   }

 


?>
</body>
</html>