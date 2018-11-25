<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


////////////////////////////////////eng home/////////////////////////////////////
$message200 = $_POST["message200"];
echo $message200;

 $sqli200 ="UPDATE eng SET message= '$message200' 
 WHERE id=5";
 mysqli_query($objCon,$sqli200); 

/////////////////////////
 $message201 = $_POST["message201"];
 echo $message201;

 $sqli201 ="UPDATE eng SET  message= '$message201' 
 WHERE id=6";
 mysqli_query($objCon,$sqli201); 
//////////////////////////
 $message202 = $_POST["message202"];
 echo $message202;

 $sqli202 ="UPDATE eng SET  message= '$message202' 
 WHERE id=7";
 mysqli_query($objCon,$sqli202); 
 ///////////////////////////////
 $message203 = $_POST["message203"];
 echo $message3;

$sqli203 ="UPDATE eng SET message= '$message203' 
WHERE id=8";
mysqli_query($objCon,$sqli203); 
////////////////////////////////


header("Location:../fontend/Home.php");


?>

