<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

//////////////////////////////////////incoterm//////////////////////////////////////////////////////////////

  
$pro_image10 =$_POST["pro_image10"];
$sqli10 = "UPDATE select_img SET id_image = '$pro_image10' where id = 11 ";
mysqli_query($objCon,$sqli10); 
echo $sqli10;



$pro_image11 =$_POST["pro_image11"];
$sqli11 = "UPDATE select_img SET id_image = '$pro_image11' where id = 12 ";
mysqli_query($objCon,$sqli11); 
echo $sqli11;




$pro_image12 =$_POST["pro_image12"];
$sqli12 = "UPDATE select_img SET id_image = '$pro_image12' where id = 13 ";
mysqli_query($objCon,$sqli12); 
echo $sqli12;




$pro_image13 =$_POST["pro_image13"];
$sqli13 = "UPDATE select_img SET id_image = '$pro_image13' where id = 14 ";
mysqli_query($objCon,$sqli13); 
echo $sqli13;




$pro_image14 =$_POST["pro_image14"];
$sqli14 = "UPDATE select_img SET id_image = '$pro_image14' where id = 15 ";
mysqli_query($objCon,$sqli14); 
echo $sqli14;

  


header("Location:../fontend/incoterm.php");


?>
   