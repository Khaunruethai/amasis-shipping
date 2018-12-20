<?php
    $serverName = "us-cdbr-iron-east-01.cleardb.net";
    $userName = "bc31b9f07b0dea";
    $userPassword = "5904a8d2";
    $dbName = "heroku_582a87dceadee92";

    $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($objCon,"utf8");

    $pro_image =$_POST["pro_image"];
    $sqli = "UPDATE select_img SET id_image = '$pro_image' where id = 0 ";
    mysqli_query($objCon,$sqli); 
    echo $sqli;

    $pro_image1 =$_POST["pro_image1"];
    $sqli1 = "UPDATE select_img SET id_image = '$pro_image1' where id = 1 ";
    mysqli_query($objCon,$sqli1); 
    echo $sqli1;

    $pro_image2=$_POST["pro_image2"];
    $sqli2 = "UPDATE select_img SET id_image = '$pro_image2' where id = 3";
    mysqli_query($objCon,$sqli2); 
    echo $sqli2;

    $pro_image3 =$_POST["pro_image3"];
    $sqli3 = "UPDATE select_img SET id_image = '$pro_image3' where id = 4 ";
    mysqli_query($objCon,$sqli3); 
    echo $sqli3;

    $pro_image4 =$_POST["pro_image4"];
    $sqli4 = "UPDATE select_img SET id_image = '$pro_image4' where id = 5 ";
    mysqli_query($objCon,$sqli4); 
    echo $sqli4;

    $pro_image5 =$_POST["pro_image5"];
    $sqli5 = "UPDATE select_img SET id_image = '$pro_image5' where id = 6 ";
    mysqli_query($objCon,$sqli5); 
    echo $sqli5;

    $pro_image6 =$_POST["pro_image6"];
    $sqli6 = "UPDATE select_img SET id_image = '$pro_image6' where id = 7 ";
    mysqli_query($objCon,$sqli6); 
    echo $sqli6;

    $pro_image7 =$_POST["pro_image7"];
    $sqli7 = "UPDATE select_img SET id_image = '$pro_image7' where id = 8 ";
    mysqli_query($objCon,$sqli7); 
    echo $sqli7;

    $pro_image8 =$_POST["pro_image8"];
    $sqli8 = "UPDATE select_img SET id_image = '$pro_image8' where id = 9 ";
    mysqli_query($objCon,$sqli8); 
    echo $sqli8;

    $pro_image9 =$_POST["pro_image9"];
    $sqli9 = "UPDATE select_img SET id_image = '$pro_image9' where id = 10 ";
    mysqli_query($objCon,$sqli9); 
    echo $sqli9;

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


    header("Location:../fontend/home.php");


?>
   