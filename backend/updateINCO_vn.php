<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

  $message44 = $_POST["message44"];
  $sqli44 ="UPDATE vn SET  message1= '$message44 ' 
  WHERE id=41";
  mysqli_query($objCon,$sqli44); 

 


//////////////////////////
  $message45 = $_POST["message45"];

  $sqli45 ="UPDATE vn SET  message1= '$message45 ' 
  WHERE id=43";
  mysqli_query($objCon,$sqli45); 

  ///////////////////////////////
    $message46 = $_POST["message46"];
    $sqli46 ="UPDATE vn SET message1= '$message46' 
    WHERE id=45";
 mysqli_query($objCon,$sqli46); 


////////////////////////////////

    $message47= $_POST["message47"];
    $sqli47 ="UPDATE vn SET  message1= '$message47' 
    WHERE id=47";
    mysqli_query($objCon,$sqli47); 



 /////////////////////////////
 $message48 = $_POST["message48"];
 

 $sqli48 ="UPDATE vn SET  message1= '$message48' 
 WHERE id=49";
 mysqli_query($objCon,$sqli48); 


 
/////////////////////////////////
 $message49 = $_POST["message49"];
 echo $message49 ;
 
  $sqli49 ="UPDATE vn SET message1= '$message49' 
  WHERE id=51";
 mysqli_query($objCon,$sqli49); 
 


 /////////////////////////////////
  $message50 = $_POST["message50"];
  
 
  $sqli50  ="UPDATE vn SET message1= '$message50 ' 
  WHERE id=53";
  mysqli_query($objCon,$sqli50 ); 
  


///////////////////////////////////////////// 
  $message51= $_POST["message51"];
  
 
  $sqli51 ="UPDATE vn SET  message1= '$message51' 
  WHERE id=55";
  mysqli_query($objCon,$sqli51); 




////////////////////////////////////////////////
$message52 = $_POST["message52"];


$sqli52 ="UPDATE vn SET  message1= '$message52' 
WHERE id=57";
mysqli_query($objCon,$sqli52); 



///////////////////////////////
$message53 = $_POST["message53"];


$sqli53 ="UPDATE vn SET message1= '$message53' 
WHERE id=59";
mysqli_query($objCon,$sqli53); 





////////////////////////////////

$message54 = $_POST["message54"];


$sqli54 ="UPDATE vn SET  message1= '$message54' 
WHERE id=61";
mysqli_query($objCon,$sqli54); 

echo $sqli54;


/////////////////////////////
$message55 = $_POST["message55"];


$sqli55 ="UPDATE vn SET  message1= '$message55' 
WHERE id=63";
mysqli_query($objCon,$sqli55); 


header("Location:../fontend/incoterm.php");


?>
   