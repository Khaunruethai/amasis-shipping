<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");



  $message73 = $_POST["message73"];
  $sqli73 ="UPDATE eng SET  message= '$message73' 
  WHERE id=75";
  mysqli_query($objCon,$sqli73); 

 

  
//////////////////////////
  $message74= $_POST["message74"];

  $sqli74 ="UPDATE eng SET  message= '$message74' 
  WHERE id=77";
  mysqli_query($objCon,$sqli74); 

  ///////////////////////////////
    $message75 = $_POST["message75"];
    $sqli75="UPDATE eng SET  message= '$message75' 
    WHERE id=79";
 mysqli_query($objCon,$sqli75); 


////////////////////////////////

    $message76= $_POST["message76"];
    $sqli76 ="UPDATE eng SET  message= '$message76' 
    WHERE id=81";
    mysqli_query($objCon,$sqli76); 



 
 


  header("Location:../fontend/contact.php");


  ?>
     