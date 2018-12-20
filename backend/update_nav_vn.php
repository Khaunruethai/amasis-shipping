<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

$message1 = $_POST["message1"];
echo $message1;

 $sqli1 ="UPDATE vn SET message1= '$message1' 
 WHERE id=5";
 mysqli_query($objCon,$sqli1); 
/////////////////////////

$message2 = $_POST["message2"];
echo $message2;

 $sqli2 ="UPDATE vn SET message1= '$message2' 
 WHERE id=6";
 mysqli_query($objCon,$sqli2); 
//////////////////////////
 
$message3 = $_POST["message3"];
echo $message3;

 $sqli3 ="UPDATE vn SET message1= '$message3' 
 WHERE id=7";
 mysqli_query($objCon,$sqli3); 
 ///////////////////////////////
 
$message4 = $_POST["message4"];
echo $message4;

 $sqli4 ="UPDATE vn SET message1= '$message4' 
 WHERE id=8";
 mysqli_query($objCon,$sqli4); 
////////////////////////////////


header("Location:../fontend/Home.php");


?>

