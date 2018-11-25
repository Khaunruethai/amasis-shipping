<?php
session_start();
$_SESSION["message"] = $_GET["message"];
session_write_close();

header("location:Home.php");
?>
