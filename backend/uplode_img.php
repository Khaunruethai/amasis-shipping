<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");

  //ขั้นตอนการเตรียมการอัปโหลด//

$ext= pathinfo(basename($_FILES['pro_image']['name']),PATHINFO_EXTENSION);
$new_image_name = 'img_' .uniqid().".".$ext;
$image_path = "../img_logis/";

$uplode_path = $image_path.$new_image_name ;

//เริ่มอัปโหลด//

$success = move_uploaded_file($_FILES['pro_image']['tmp_name'],$uplode_path);
 if($success==FALSE){
     echo"ไม่สามารถอัปโหลดได้";
     exit();
 }
 $pro_image = $new_image_name;

  $sqli ="INSERT INTO  img_logis (pro_image) VALUES ('$pro_image')";

  mysqli_query($objCon,$sqli); 



header("Location:uplode_img1.php");


  ?>
     