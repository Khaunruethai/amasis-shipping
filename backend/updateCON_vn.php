<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

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
   