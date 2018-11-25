<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


  
  $message61 = $_POST["message61"];
  $sqli61 ="UPDATE vn SET  message1= '$message61' 
  WHERE id=65";
  mysqli_query($objCon,$sqli61); 

 

  
//////////////////////////
  $message62= $_POST["message62"];

  $sqli62 ="UPDATE vn SET  message1= '$message62' 
  WHERE id=67";
  mysqli_query($objCon,$sqli62); 

  ///////////////////////////////
    $message63 = $_POST["message63"];
    $sqli63="UPDATE vn SET  message1= '$message63' 
    WHERE id=69";
 mysqli_query($objCon,$sqli63); 


////////////////////////////////

    $message64= $_POST["message64"];
    $sqli64 ="UPDATE vn SET  message1= '$message64' 
    WHERE id=71";
    mysqli_query($objCon,$sqli64); 



 /////////////////////////////
 $message65= $_POST["message65"];
 

 $sqli65 ="UPDATE vn SET  message1= '$message65' 
 WHERE id=73";
 mysqli_query($objCon,$sqli65); 

 $message61 = $_POST["message61"];
 $sqli61 ="UPDATE vn SET  message1= '$message61' 
 WHERE id=65";
 mysqli_query($objCon,$sqli61); 



 
//////////////////////////
 $message66= $_POST["message66"];

 $sqli66 ="UPDATE vn SET  message1= '$message66' 
 WHERE id=64";
 mysqli_query($objCon,$sqli66); 

 ///////////////////////////////
   $message67 = $_POST["message67"];
   $sqli67="UPDATE vn SET  message1= '$message67' 
   WHERE id=66";
mysqli_query($objCon,$sqli67); 


////////////////////////////////

   $message68= $_POST["message68"];
   $sqli68 ="UPDATE vn SET  message1= '$message68' 
   WHERE id=68";
   mysqli_query($objCon,$sqli68); 



/////////////////////////////
$message69= $_POST["message69"];


$sqli69 ="UPDATE vn SET  message1= '$message69' 
WHERE id=70";
mysqli_query($objCon,$sqli69); 
/////////////////////////////
$message70= $_POST["message70"];


$sqli70 ="UPDATE vn SET  message1= '$message70' 
WHERE id=72";
mysqli_query($objCon,$sqli70); 






 


  header("Location:../fontend/service.php");


  ?>
     