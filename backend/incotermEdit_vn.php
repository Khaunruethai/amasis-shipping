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
          <div class="container">
          <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8"> <br>
          <div class = "font"><p>INCOTERM&nbsp;/&nbsp;VN</p></div>
          <hr>
          <div class="container" class="responsive ">
        <form action="updateINCO_vn.php"  method="POST">
        <div class = "fontt"><p>Hilight</p></div>
           <textarea type="text44=" name="message44" style="height:100px"><?php echo $variable1[40];?></textarea><br><br>

          <div class = "fontt"><p>FOB (Free on Board)</p></div>
          <textarea type="text45"  name="message45" style="height:100px"><?php echo $variable1[42];?></textarea><br><br>

           <div class = "fontt"><p>FAS (Free Alongside Ship)</p></div>
           <textarea  type="text46" name="message46"  style="height:100px"><?php echo $variable1[44];?></textarea><br><br>

           <div class = "fontt"><p>CFR (Cost and Freight)</p></div>
           <textarea type="text47"  name="message47" style="height:100px"><?php echo $variable1[46];?></textarea><br><br>

           <div class = "fontt"><p>CIF (Cost Insurance and Freight)</p></div>
           <textarea  type="text48" name="message48"  style="height:100px"><?php echo $variable1[48];?></textarea><br><br>

           <div class = "fontt"><p>DES (Delivered ex Ship)</p></div>
           <textarea  type="text49" name="message49" style="height:100px"><?php echo $variable1[50];?></textarea><br><br>

           <div class = "fontt"><p>DEQ (Delivered ex Quay)</p></div>
           <textarea  type="text50" name="message50"  style="height:100px"><?php echo $variable1[52];?></textarea><br><br>

           <div class = "fontt"><p>DAF (Delivered at Frontier)</p></div>
           <textarea  type="text51" name="message51" style="height:100px"><?php echo $variable1[54];?></textarea><br><br>

           <div class = "fontt"><p>CPT (Carriage Paid to)DAF (Delivered at Frontier)</p></div>
           <textarea   type="text52" name="message52"  style="height:100px"><?php echo $variable1[56];?></textarea><br><br>

           <div class = "fontt"><p>CIP (Carriage and Insurance Paid to)</p></div>
           <textarea    type="text53" name="message53" style="height:100px"><?php echo $variable1[58];?></textarea><br><br>

           <div class = "fontt"><p>DDU (Delivered Duty Unpaid)</p></div>
           <textarea  type="text54" name="message54" style="height:100px"><?php echo $variable1[60];?></textarea><br><br>

           <div class = "fontt"><p>DDP (Delivered Duty Paid)</p></div>
           <textarea   type="text55"name="message55" style="height:100px"><?php echo $variable1[62];?></textarea><br><br>
           <button type="submit" class="btn btn-primary">submit</button>


</form>
 
</div>
<div class="col-sm-2"></div>
</div>
</div> 
</div>
    </div>
    <footer class="container-fluid text-center">
    <p><font color="#000">Copyright @ 2018 Amasis Shipping co.,ltd</font></p>
</footer>
</body>
</html>
<?php
	mysqli_close($objCon);
?>