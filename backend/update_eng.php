<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

////////////////////////////////////eng home/////////////////////////////////////
  $message = $_POST["message"];
  echo $message;

   $sqli ="UPDATE eng SET message= '$message' 
   WHERE id=10";
   mysqli_query($objCon,$sqli); 

/////////////////////////
   $message1 = $_POST["message1"];
   echo $message1;

   $sqli1 ="UPDATE eng SET  message= '$message1' 
   WHERE id=12";
   mysqli_query($objCon,$sqli1); 
//////////////////////////
   $message2 = $_POST["message2"];
   echo $message2;

   $sqli2 ="UPDATE eng SET  message= '$message2' 
   WHERE id=14";
   mysqli_query($objCon,$sqli2); 
   ///////////////////////////////
   $message3 = $_POST["message3"];
   echo $message3;
 
	$sqli3 ="UPDATE eng SET message= '$message3' 
	WHERE id=16";
	mysqli_query($objCon,$sqli3); 
 ////////////////////////////////
 
	$message4 = $_POST["message4"];
	echo $message4;
 
	$sqli4 ="UPDATE eng SET  message= '$message4' 
	WHERE id=22";
	mysqli_query($objCon,$sqli4); 
	/////////////////////////////
	$message5 = $_POST["message5"];
	echo $message5;
 
	$sqli5 ="UPDATE eng SET  message= '$message5' 
	WHERE id=23";
	mysqli_query($objCon,$sqli5); 
/////////////////////////////////
	$message6 = $_POST["message6"];
	echo $message6;
  
	 $sqli6 ="UPDATE eng SET message= '$message6' 
	 WHERE id=24";
	 mysqli_query($objCon,$sqli6); 
  
  /////////////////////////////////
	 $message7 = $_POST["message7"];
	 echo $message7;
  
	 $sqli7 ="UPDATE eng SET  message= '$message7' 
	 WHERE id=25";
	 mysqli_query($objCon,$sqli7); 
///////////////////////////////////////////// 
	 $message8 = $_POST["message8"];
	 echo $message8;
  
	 $sqli8 ="UPDATE eng SET  message= '$message8' 
	 WHERE id=26";
	 mysqli_query($objCon,$sqli8); 
////////////////////////////////////////////////

$message9 = $_POST["message9"];
echo $message9;

$sqli9 ="UPDATE eng SET  message= '$message9' 
WHERE id=27";
mysqli_query($objCon,$sqli9); 
///////////////////////////////
$message10 = $_POST["message10"];
echo $message10;

 $sqli10 ="UPDATE eng SET message= '$message10' 
 WHERE id=30";
 mysqli_query($objCon,$sqli10); 
////////////////////////////////

 $message11 = $_POST["message11"];
 echo $message11;

 $sqli11 ="UPDATE eng SET  message= '$message11' 
 WHERE id=31";
 mysqli_query($objCon,$sqli11); 
 /////////////////////////////
 $message12 = $_POST["message12"];
 echo $message12;

 $sqli12 ="UPDATE eng SET  message= '$message12' 
 WHERE id=32";
 mysqli_query($objCon,$sqli12); 
/////////////////////////////////
 $message13 = $_POST["message13"];
 echo $message13;

  $sqli13 ="UPDATE eng SET message= '$message13' 
  WHERE id=33";
  mysqli_query($objCon,$sqli13); 

/////////////////////////////////
  $message14 = $_POST["message14"];
  echo $message7;

  $sqli14 ="UPDATE eng SET  message= '$message14' 
  WHERE id=34";
  mysqli_query($objCon,$sqli14); 
///////////////////////////////////////////// 
  $message15 = $_POST["message15"];
  echo $message15;

  $sqli15 ="UPDATE eng SET  message= '$message15' 
  WHERE id=35";
  mysqli_query($objCon,$sqli15); 
////////////////////////////////////////////////
$message1000 = $_POST["message1000"];
  echo $message1000;

$sqli1000 ="UPDATE eng SET  message= '$message1000' 
WHERE id=17";
mysqli_query($objCon,$sqli1000); 
////////////////////////////////////////////////
$message1001 = $_POST["message1001"];
  echo $message1001;

$sqli1001 ="UPDATE eng SET  message= '$message1001' 
WHERE id=18";
mysqli_query($objCon,$sqli1001); 

////////////////////////////////////////////////
$message1002 = $_POST["message1002"];
  echo $message1002;

$sqli1002 ="UPDATE eng SET  message= '$message1002' 
WHERE id=19";
mysqli_query($objCon,$sqli1002); 

////////////////////////////////////////////////
$message1003 = $_POST["message1003"];
  echo $message1003;

$sqli1003 ="UPDATE eng SET  message= '$message1003' 
WHERE id=38";
mysqli_query($objCon,$sqli1003); 
////////////////////////////////////////////////
$message1004 = $_POST["message1004"];
  echo $message1004;

$sqli1004 ="UPDATE eng SET  message= '$message1004' 
WHERE id=1";
mysqli_query($objCon,$sqli1004); 



header("Location:../fontend/Home.php");


?>
   