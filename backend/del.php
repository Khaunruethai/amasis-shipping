<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");


        $query1 = "DELETE FROM contact_us WHERE id = '".$_GET["id"]."' ";
        $res1 = mysqli_query($objCon,$query1);


        header("Location:./admin.php");
?>