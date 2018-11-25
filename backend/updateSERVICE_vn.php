<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

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


 


  header("Location:../fontend/service.php");


  ?>
     