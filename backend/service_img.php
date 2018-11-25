<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

//////////////////////////////////////incoterm//////////////////////////////////////////////////////////////

  
$pro_image15 =$_POST["pro_image15"];
$sqli15 = "UPDATE select_img SET id_image = '$pro_image15' where id = 16 ";
mysqli_query($objCon,$sqli15); 
echo $sqli15;



$pro_image16 =$_POST["pro_image16"];
$sqli16  = "UPDATE select_img SET id_image = '$pro_image16' where id = 17 ";
mysqli_query($objCon,$sqli16); 
echo $sqli16;




$pro_image17 =$_POST["pro_image17"];
$sqli17 = "UPDATE select_img SET id_image = '$pro_image17' where id = 18 ";
mysqli_query($objCon,$sqli17); 
echo $sqli17;




$pro_image18 =$_POST["pro_image18"];
$sqli18 = "UPDATE select_img SET id_image = '$pro_image18' where id = 19 ";
mysqli_query($objCon,$sqli18); 
echo $sqli18;




$pro_image19 =$_POST["pro_image19"];
$sqli19 = "UPDATE select_img SET id_image = '$pro_image19' where id = 20 ";
mysqli_query($objCon,$sqli19); 
echo $sqli19;

  


$pro_image20 =$_POST["pro_image20"];
$sqli20 = "UPDATE select_img SET id_image = '$pro_image20' where id = 21 ";
mysqli_query($objCon,$sqli20); 
echo $sqli20;



header("Location:../fontend/service.php");


?>
   