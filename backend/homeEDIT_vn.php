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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/backend.css">
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
          <a class="navbar-brand" href="../fontend/home.php">
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
          <div class="container">
          <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8"> <br>
          <div class = "font"><p>HOME&nbsp;/&nbsp;VN</p></div>
          <hr>
          <div class="container" class="responsive ">
          <form action="update_vn.php"   method="POST">
          <div class = "fontt"><p> COMPANY  OVERVIEW</p> </div>
          <textarea type="text16" name="message16" style="height:100px"><?php echo $variable1[9];?></textarea><br><br>
          <div class = "fontt"><p>Mission</p> </div>
          <textarea type="text17"  name="message17" style="height:50px"><?php echo $variable1[11];?></textarea><br><br>
          <div class = "fontt"><p>Values</p> </div>
          <textarea  type="text18" name="message18" style="height:50px"><?php echo $variable1[13];?></textarea><br><br>
          <div class = "fontt"><p>Vision</p> </div>
          <textarea type="text19"  name="message19"style="height:50px"><?php echo $variable1[15];?></textarea><br><br>
          <div class = "font"><p>New Project 1</p> </div>
          <div class = "fontt"><p>Topics</p> </div>
          <textarea  type="text20" name="message20"  style="height:50px"><?php echo $variable1[21];?></textarea><br><br>
          <div class = "fontt"><p>Date</p> </div>
          <textarea type="text21" name="message21" style="height:50px" ><?php echo $variable1[22];?></textarea><br><br>
          <div class = "fontt"><p>Message</p> </div>
          <textarea type="text2000" name="message2000"  style="height:50px"><?php echo $variable1[16];?></textarea><br><br>
          <div class = "font"><p>New Project 2</p> </div>
          <div class = "fontt"><p>Topics</p> </div>
          <textarea  type="text22" name="message22"  style="height:50px"><?php echo $variable1[23];?></textarea><br><br>
          <div class = "fontt"><p>Date</p> </div>
          <textarea  type="text23" name="message23"  style="height:50px"><?php echo $variable1[24];?></textarea><br><br>
          <div class = "fontt"><p>Message<p> </div>
          <textarea type="text2001"  name="message2001"  style="height:50px"><?php echo $variable1[17];?></textarea><br><br>
          <div class = "font"><p>New Project 3</p> </div>
          <div class = "fontt"><p>Topics</p> </div>
          <textarea  type="text24" name="message24"  style="height:50px"><?php echo $variable1[25];?></textarea><br><br>
          <div class = "fontt"><p>ฺDate</p> </div>
          <textarea  type="text25" name="message25"  style="height:50px"><?php echo $variable1[26];?></textarea><br><br>
          <div class = "fontt"><p>Message</p> </div>
          <textarea type="text2002" name="message2002"  style="height:50px"><?php echo $variable1[18];?></textarea><br><br>
          <div class = "font"><p>Profile Miss. Amy</p> </div>
          <div class = "fontt"><p>Position</p> </div>
          <textarea  type="text26" name="message26"  style="height:50px"><?php echo $variable1[29];?></textarea><br><br>
          <div class = "fontt"><p>data</p> </div>
          <textarea  type="text27" name="message27"  style="height:50px"><?php echo $variable1[30];?></textarea><br><br>
          <div class = "fontt"> <p>Telephone number</p> </div>
          <textarea  type="text28" name="message28"  style="height:50px"><?php echo $variable1[31];?></textarea><br><br>
          <div class = "font"><p>Profile Mr. Vinh</p> </div>
          <div class = "fontt"><p>Position</p> </div>
          <textarea  type="text29" name="message29"  style="height:50px"><?php echo $variable1[32];?></textarea><br><br>
          <div class = "fontt"><p>data</p> </div>
          <textarea  type="text30" name="message30"  style="height:50px"><?php echo $variable1[33];?></textarea><br><br>
          <div class = "fontt"><p>Telephone number</p> </div>
          <textarea  type="text31" name="message31"  style="height:50px"><?php echo $variable1[34];?></textarea><br><br>

          <button type="submit" class="btn btn-primary">submit</button> 
          </form>


          </div>
          <div class="col-sm-2"></div>
          </div>
          </div>
          </div>

          </div>
          </div>
          </div>
          </div>

          <footer class="container-fluid text-center">
          <p><font color="#000">Copyright @ 2018 Amasis Shipping co.,ltd</font></p>
          </footer>
          </body>
          </html>
