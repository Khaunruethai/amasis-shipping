<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");
   
   $id = $_POST["id"];
   $FirstName = $_POST["FirstName"];
   $LastName = $_POST["LastName"];
   $Country= $_POST["Country"];
   $Email = $_POST["Email"];
   $Subject = $_POST["Subject"];
   $query = "INSERT INTO contact_us (id,FirstName,LastName,Country,Email,Subject)
   VALUES('','$FirstName','$LastName','$Country','$Email','$Subject')";
   mysqli_query($objcon,$query);

   header("Location:contact.php");
?>