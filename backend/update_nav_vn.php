<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


////////////////////////////////////eng home/////////////////////////////////////

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

