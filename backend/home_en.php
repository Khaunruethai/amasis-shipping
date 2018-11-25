<?php
        session_start();
        if($_SESSION['userid'] == "")
        {
          echo "Please Login!";
          exit();
        }
        if($_SESSION['status'] != "admin")
        {
          echo "This page for Admin only!";
          exit();
        }	
        $message= null;
        if(isset($_GET["message"]))
        {
          $message = $_GET["message"];
        }
        $serverName = "us-cdbr-iron-east-01.cleardb.net";
        $userName = "bc31b9f07b0dea";
        $userPassword = "5904a8d2";
        $dbName = "heroku_582a87dceadee92";
        $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
        mysqli_set_charset($objCon,"utf8");
        $strSQL = "SELECT * FROM member WHERE userid = '".$_SESSION['userid']."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        $sqli ="SELECT * from eng";
        $variable = array();
        $result = mysqli_query($objCon,$sqli);
        while($ms=mysqli_fetch_array($result)) {
          $variable[] = $ms["message"];
        }
        $sqli ="SELECT * from vn";
        $variable1 = array();
        $result1 = mysqli_query($objCon,$sqli);
        while($mss1=mysqli_fetch_array($result1)) {
          $variable1[] = $mss1["message1"];
        }
  ?>
   <!DOCTYPE html>
        <html lang="en">
          <head>
              <title>ADMIN</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
              <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="../css/font.css">
              <link rel="stylesheet" href="../css/backend.css">
              <link rel="stylesheet" href="../css/stylecontact.css">
              <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
              <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
              <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
              <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
              <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
              <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href='https://fonts.googleapis.com/css?family=Hammersmith One' rel='stylesheet'>
                <style>
                    img {
                      border-radius: 50%;
                    }
                    textarea {
                        width: 850px;
                        height:auto;
                    }
                </style>
          </head>
          <body>
          <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
          </button>
          <div class="div">
          <a class="navbar-brand" href="../fontend/Home.php">
          <img src=../IMG/home/11.jpg   alt="Avatar" style="width:60px"></a>
          </a>
          </div>
          </div>
          <div class="container">
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right"><br>
          <a href="logout.php"><span class="glyphicon glyphicon-log-in">&nbsp;Logout</span></a></li>
          </ul>
          </nav>
          </div> 
          <br><br>
          <div class="container-fluid ">
          <div class="row content">
          <div class="col-sm-2 sidenav">
          <ul class="nav nav-pills nav-stacked"><br><br><br><br><br>
          <li><a href="admin.php">customer contact</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">edit navbar<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="nav_edit.php">navbar en</a></li>
          <li><a href="nav_vn.php">navbar vn</a></li>
          </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">edit en<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a  href="home_en.php">home</a></li>
          <li><a  href="incotermEdit_eng.php">incoterm</a></li>
          <li><a  href="serviceEdit_eng.php">service</a></li>
          <li><a  href="contactEdit_eng.php">contact</a></li>
          </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">edit vn<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="homeEDIT_vn.php">home</a></li>
          <li><a  href="incotermEdit_vn.php">incoterm</a></li>
          <li><a  href="serviceEdit_vn.php">service</a></li>
          <li><a  href="contactEdit_vn.php">contact</a></li>
          </ul>
          <li><a href="uplode_img1.php">uplode image</a></li>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">edit image<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a  href="portfolioEdit_eng.php">image home</a></li>
          <li><a href="2.php">image  incoterm</a></li>
          <li><a href="3.php">image  service</a></li>
          <li><a href="4.php">image  portfolio</a></li>
          </ul>
          </li>
          </div>
          <br>
        <div class="container" class="responsive ">
          <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8"><br>
          <div class = "font"><p>HOME&nbsp;/&nbsp;ENG</p></div>
           <hr>
          <div class="container" class="responsive ">
          <form action="update_eng.php"method="POST">
          <div class = "fontt"> <p> COMPANY  OVERVIEW</p></div>
          <textarea type="text" name="message" style="height:150px"><?php echo $variable[9];?></textarea><br><br>
         <div class = "fontt"><p>Mission</p></div>
          <textarea type="text1"  name="message1" style="height:50px"><?php echo $variable[11];?></textarea><br><br>
          <div class = "fontt"><p>Values</p></div>
          <textarea  type="text2" name="message2" style="height:50px"><?php echo $variable[13];?></textarea><br><br>
          <div class = "fontt"><p>Vision</p></div>
          <textarea type="text3"  name="message3"style="height:50px"><?php echo $variable[15];?></textarea><br><br>
          <div class = "font"><p>New Project 1</p></div>
          <div class = "fontt"><p>Topics</p></div>
          <textarea  type="text4" name="message4"  style="height:50px"><?php echo $variable[21];?></textarea><br><br>
          <div class = "fontt"><p>Date</p></div>
          <textarea type="text5" name="message5" style="height:50px" ><?php echo $variable[22];?></textarea><br><br>
          <div class = "fontt"><p>Message</p></div>
          <textarea  type="text4" name="message1000"  style="height:50px"><?php echo $variable[16];?></textarea><br><br>
          <div class = "font"><p>New Project 2</p></div>
          <div class = "fontt"><p>Topics</p></div>
          <textarea  type="text6" name="message6"  style="height:50px"><?php echo $variable[23];?></textarea><br><br>
          <div class = "fontt"> <p>Date</p></div>
          <textarea  type="text7" name="message7"  style="height:50px"><?php echo $variable[24];?></textarea><br><br>
          <div class = "fontt"><p>Message</p></div>
          <textarea  type="text4" name="message1001"  style="height:50px"><?php echo $variable[17];?></textarea><br><br>
          <div class = "font"><p>New Project 3</p></div>
          <div class = "fontt"><p>Topics</p></div>
          <textarea  type="text8" name="message8"  style="height:50px"><?php echo $variable[25];?></textarea><br><br>
          <div class = "fontt"><p>Date</p></div>
          <textarea  type="text9" name="message9"  style="height:50px"><?php echo $variable[26];?></textarea><br><br>
          <div class = "fontt"> <p>Message</p></div>
          <textarea  type="text4" name="message1002"  style="height:50px"><?php echo $variable[18];?></textarea><br><br>
          <div class = "font"><p>Profile Miss. Amy</p></div>
          <div class = "fontt"> <p>Position</p></div>
          <textarea  type="text10" name="message10"  style="height:50px"><?php echo $variable[29];?></textarea><br><br>
          <div class = "fontt"><p>data</p></div>
          <textarea  type="text11" name="message11"  style="height:50px"><?php echo $variable[30];?></textarea><br><br>
          <div class = "fontt"><p>Telephone number</p></div>
          <textarea  type="text12" name="message12"  style="height:50px"><?php echo $variable[31];?></textarea><br><br>
          <div class = "fontt"><p>e-mail</p></div>
          <textarea  type="text15" name="message1004"  style="height:50px"><?php echo $variable[0];?></textarea><br><br>
          <div class = "font"><p>Profile Mr. Vinh</p></div><br>
          <div class = "fontt"><p>Position</p></div>
          <textarea  type="text13" name="message13"  style="height:50px"><?php echo $variable[32];?></textarea><br><br>
          <div class = "fontt"><p>data</p></div>
          <textarea  type="text14" name="message14"  style="height:50px"><?php echo $variable[33];?></textarea><br><br>
          <div class = "fontt"><p>Telephone number</p></div>
          <textarea  type="text15" name="message15"  style="height:50px"><?php echo $variable[34];?></textarea><br><br>
          <div class = "fontt"><p>e-mail</p></div>
          <textarea  type="text15" name="message1003"  style="height:50px"><?php echo $variable[37];?></textarea><br><br>
          <button type="submit" class="btn btn-primary">submit</button>
          </form>
          </div>
          <div class="col-sm-2"></div>

<div><div><div>
<footer class="container-fluid text-center">
<p><font color="#000">Copyright @ 2018 Amasis Shipping co.,ltd</font></p>
</footer>
</body>
</html>