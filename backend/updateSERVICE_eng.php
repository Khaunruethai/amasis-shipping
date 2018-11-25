<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");



  $message56 = $_POST["message56"];
  $sqli56 ="UPDATE eng SET  message= '$message56' 
  WHERE id=65";
  mysqli_query($objCon,$sqli56); 

 

  
//////////////////////////
  $message57 = $_POST["message57"];

  $sqli57 ="UPDATE eng SET  message= '$message57' 
  WHERE id=67";
  mysqli_query($objCon,$sqli57); 

  ///////////////////////////////
    $message58 = $_POST["message58"];
    $sqli58 ="UPDATE eng SET  message= '$message58' 
    WHERE id=69";
 mysqli_query($objCon,$sqli58); 


////////////////////////////////

    $message59= $_POST["message59"];
    $sqli59 ="UPDATE eng SET  message= '$message59' 
    WHERE id=71";
    mysqli_query($objCon,$sqli59); 



 /////////////////////////////
 $message60 = $_POST["message60"];
 

 $sqli60 ="UPDATE eng SET  message= '$message60' 
 WHERE id=73";
 mysqli_query($objCon,$sqli60); 


 


  header("Location:../fontend/service.php");


  ?>
     