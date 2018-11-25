<?php
	session_start();
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM member WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtusername'])."' 
    and Password = '".mysqli_real_escape_string($objCon,$_POST['txtpassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "username and password Incorrect!";
	}
	else
	{
			$_SESSION["userid"] = $objResult["userid"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:admin.php");
			}

	}
	
	mysqli_close($objCon);
?>