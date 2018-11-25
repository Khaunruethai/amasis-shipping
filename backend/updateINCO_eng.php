<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


  $message32 = $_POST["message32"];
  $sqli32 ="UPDATE eng SET  message= '$message32 ' 
  WHERE id=41";
  mysqli_query($objCon,$sqli32); 

 


//////////////////////////
  $message33 = $_POST["message33"];

  $sqli33 ="UPDATE eng SET  message= '$message33 ' 
  WHERE id=43";
  mysqli_query($objCon,$sqli33); 

  ///////////////////////////////
    $message34 = $_POST["message34"];
    $sqli34 ="UPDATE eng SET message= '$message34' 
    WHERE id=45";
 mysqli_query($objCon,$sqli34); 


////////////////////////////////

    $message35 = $_POST["message35"];
    $sqli35 ="UPDATE eng SET  message= '$message35' 
    WHERE id=47";
    mysqli_query($objCon,$sqli35); 



 /////////////////////////////
 $message36 = $_POST["message36"];
 

 $sqli36 ="UPDATE eng SET  message= '$message36' 
 WHERE id=49";
 mysqli_query($objCon,$sqli36); 


 
/////////////////////////////////
 $message37 = $_POST["message37"];
 
 
  $sqli37 ="UPDATE eng SET message= '$message37' 
  WHERE id=51";
  mysqli_query($objCon,$sqli37); 
 


 /////////////////////////////////
  $message38 = $_POST["message38"];
  
 
  $sqli38 ="UPDATE eng SET message= '$message38' 
  WHERE id=53";
  mysqli_query($objCon,$sqli38); 
  


///////////////////////////////////////////// 
  $message39 = $_POST["message39"];
  
 
  $sqli39 ="UPDATE eng SET  message= '$message39' 
  WHERE id=55";
  mysqli_query($objCon,$sqli39); 




////////////////////////////////////////////////
$message40 = $_POST["message40"];


$sqli40 ="UPDATE eng SET  message= '$message40' 
WHERE id=57";
mysqli_query($objCon,$sqli40); 



///////////////////////////////
$message41 = $_POST["message41"];


$sqli41 ="UPDATE eng SET message= '$message41' 
WHERE id=59";
mysqli_query($objCon,$sqli41); 





////////////////////////////////

$message42 = $_POST["message42"];


$sqli42 ="UPDATE eng SET  message= '$message42' 
WHERE id=61";
mysqli_query($objCon,$sqli42); 




/////////////////////////////
$message43 = $_POST["message43"];


$sqli43 ="UPDATE eng SET  message= '$message43' 
WHERE id=63";
mysqli_query($objCon,$sqli43); 


header("Location:../fontend/incoterm.php");


?>
   