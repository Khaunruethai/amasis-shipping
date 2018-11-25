<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


        $query1 = "DELETE FROM contact_us WHERE id = '".$_GET["id"]."' ";
        $res1 = mysqli_query($objCon,$query1);


        header("Location:./admin.php");
?>