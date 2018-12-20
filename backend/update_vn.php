<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

$message16 = $_POST["message16"];
echo $message16;

 $sqli16 ="UPDATE vn SET message1= '$message16' 
 WHERE id=10";
 mysqli_query($objCon,$sqli16); 

/////////////////////////
 $message17 = $_POST["message17"];
 echo $message17;

 $sqli17 ="UPDATE vn SET  message1= '$message17' 
 WHERE id=12";
 mysqli_query($objCon,$sqli17); 
//////////////////////////
 $message18 = $_POST["message18"];
 echo $message18;

 $sqli18 ="UPDATE vn SET  message1= '$message18' 
 WHERE id=14";
 mysqli_query($objCon,$sqli18); 
 ///////////////////////////////
 $message19 = $_POST["message19"];
 echo $message19;

  $sqli3 ="UPDATE vn SET message1= '$message19' 
  WHERE id=16";
  mysqli_query($objCon,$sqli19); 
////////////////////////////////

  $message20 = $_POST["message20"];
  echo $message20;

  $sqli20 ="UPDATE vn SET  message1= '$message20' 
  WHERE id=22";
  mysqli_query($objCon,$sqli20); 
  /////////////////////////////
  $message21 = $_POST["message21"];
  echo $message1;

  $sqli21 ="UPDATE vn SET  message1= '$message21' 
  WHERE id=23";
  mysqli_query($objCon,$sqli21); 
/////////////////////////////////
  $message22= $_POST["message22"];
  echo $message22;

   $sqli22 ="UPDATE vn SET message1= '$message22' 
   WHERE id=24";
   mysqli_query($objCon,$sqli22); 

/////////////////////////////////
   $message23 = $_POST["message23"];
   echo $message23;

   $sqli7 ="UPDATE vn SET  message1= '$message23' 
   WHERE id=25";
   mysqli_query($objCon,$sqli23); 
///////////////////////////////////////////// 
   $message24 = $_POST["message24"];
   echo $message24;

   $sqli24 ="UPDATE vn SET  message1= '$message24' 
   WHERE id=26";
   mysqli_query($objCon,$sqli24); 
////////////////////////////////////////////////

//////////////////////////
$message25 = $_POST["message25"];
echo $message25;

$sqli25 ="UPDATE vn SET  message1= '$message25' 
WHERE id=27";
mysqli_query($objCon,$sqli25); 
///////////////////////////////
$message26= $_POST["message26"];
echo $message26;

$sqli26 ="UPDATE vn SET message1= '$message26' 
WHERE id=30";
mysqli_query($objCon,$sqli26); 
////////////////////////////////

$message27= $_POST["message27"];
echo $message27;

$sqli27 ="UPDATE vn SET  message1= '$message27' 
WHERE id=31";
mysqli_query($objCon,$sqli27); 
/////////////////////////////
$message28= $_POST["message28"];
echo $message28;

$sqli28 ="UPDATE vn SET  message1= '$message28' 
WHERE id=32";
mysqli_query($objCon,$sqli28); 
/////////////////////////////////
$message29= $_POST["message29"];
echo $message29;

$sqli29="UPDATE vn SET message1= '$message29' 
WHERE id=33";
mysqli_query($objCon,$sqli29); 

/////////////////////////////////
$message30= $_POST["message30"];
echo $message30;

$sqli30="UPDATE vn SET  message1= '$message30' 
WHERE id=34";
mysqli_query($objCon,$sqli30); 
///////////////////////////////////////////// 
$message31= $_POST["message31"];
echo $message31;

$sqli31 ="UPDATE vn SET  message1= '$message31' 
WHERE id=35";
mysqli_query($objCon,$sqli31); 
////////////////////////////////////////////////

$message2000 = $_POST["message2000"];
  echo $message2000;

$sqli2000 ="UPDATE vn SET  message1= '$message2000' 
WHERE id=17";
mysqli_query($objCon,$sqli2000); 
////////////////////////////////////////////////
$message2001 = $_POST["message2001"];
  echo $message2001;

$sqli2001 ="UPDATE vn SET  message1= '$message2001' 
WHERE id=18";
mysqli_query($objCon,$sqli2001); 

////////////////////////////////////////////////
$message2002 = $_POST["message2002"];
  echo $message1000;

$sqli2002 ="UPDATE vn SET  message1= '$message2002' 
WHERE id=19";
mysqli_query($objCon,$sqli2002); 

 


   header("Location:../fontend/Home.php");


?>
   