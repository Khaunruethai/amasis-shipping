<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");



  $message77 = $_POST["message77"];
  $sqli77 ="UPDATE vn SET  message1= '$message77' 
  WHERE id=75";
  mysqli_query($objCon,$sqli77); 

 


//////////////////////////
  $message78 = $_POST["message78"];

  $sqli78 ="UPDATE vn SET  message1= '$message78' 
  WHERE id=77";
  mysqli_query($objCon,$sqli78); 

  ///////////////////////////////
    $message79 = $_POST["message79"];
    $sqli79 ="UPDATE vn SET message1= '$message79' 
    WHERE id=79";
 mysqli_query($objCon,$sqli79); 


////////////////////////////////



header("Location:../fontend/contact.php");


?>
   