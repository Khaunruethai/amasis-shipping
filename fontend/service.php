<?php
session_start();

if(empty($_SESSION["message"])){
    header('Location:check_lang.php?message=EN');
}
if($_SESSION["message"] == "EN")
{
	include("eng.php");
}
else
{
	include("vn.php");
}
?>
<?php
	$serverName = "us-cdbr-iron-east-01.cleardb.net";
	$userName = "bc31b9f07b0dea";
	$userPassword = "5904a8d2";
	$dbName = "heroku_582a87dceadee92";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");
/////////////////////////////logo heroku_582a87dceadee92////////////////////////////////////////////

      $sqli1 = "SELECT * FROM select_img  where id = 0 ";
      $objQuery1 = mysqli_query($objCon,$sqli1);
      $Result1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
      $res= $Result1['id_image'];


      $sqli2 = "SELECT * FROM img_logis where id = $res " ;
      $objQuery2 = mysqli_query($objCon,$sqli2);
      $Result2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);

      $sqli31 = "SELECT * FROM select_img where id = 16 ";
      $objQuery31 = mysqli_query($objCon,$sqli31);
      $Result31 = mysqli_fetch_array($objQuery31,MYSQLI_ASSOC);
      $res15= $Result31['id_image'];


    $sqli32 = "SELECT * FROM img_logis where id = $res15 " ;
    $objQuery32 = mysqli_query($objCon,$sqli32);
    $Result32 = mysqli_fetch_array($objQuery32,MYSQLI_ASSOC);

    $sqli33 = "SELECT * FROM select_img where id = 17 ";
    $objQuery33 = mysqli_query($objCon,$sqli33);
      $Result33 = mysqli_fetch_array($objQuery33,MYSQLI_ASSOC);
      $res16= $Result33['id_image'];

    $sqli34 = "SELECT * FROM img_logis  where id =$res16" ;
    $objQuery34 = mysqli_query($objCon,$sqli34);
    $Result34= mysqli_fetch_array($objQuery34,MYSQLI_ASSOC);

    $sqli35 = "SELECT * FROM select_img where id = 18 ";
    $objQuery35 = mysqli_query($objCon,$sqli35);
      $Result35 = mysqli_fetch_array($objQuery35,MYSQLI_ASSOC);
      $res17= $Result35['id_image'];

    $sqli36 = "SELECT * FROM img_logis  where id =$res17" ;
    $objQuery36 = mysqli_query($objCon,$sqli36);
    $Result36= mysqli_fetch_array($objQuery36,MYSQLI_ASSOC);

    $sqli37 = "SELECT * FROM select_img where id = 19 ";
    $objQuery37 = mysqli_query($objCon,$sqli37);
    $Result37 = mysqli_fetch_array($objQuery37,MYSQLI_ASSOC);
    $res18= $Result37['id_image'];

    $sqli38 = "SELECT * FROM img_logis  where id =$res18" ;
    $objQuery38 = mysqli_query($objCon,$sqli38);
    $Result38= mysqli_fetch_array($objQuery38,MYSQLI_ASSOC);

    $sqli39 = "SELECT * FROM select_img where id = 20";
    $objQuery39 = mysqli_query($objCon,$sqli39);
    $Result39 = mysqli_fetch_array($objQuery39,MYSQLI_ASSOC);
      $res19= $Result39['id_image'];

    $sqli40 = "SELECT * FROM img_logis  where id =$res19" ;
    $objQuery40 = mysqli_query($objCon,$sqli40);
    $Result40= mysqli_fetch_array($objQuery40,MYSQLI_ASSOC);

    $sqli41 = "SELECT * FROM select_img where id = 21";
    $objQuery41 = mysqli_query($objCon,$sqli41);
    $Result41 = mysqli_fetch_array($objQuery41,MYSQLI_ASSOC);
      $res20= $Result41['id_image'];

    $sqli42 = "SELECT * FROM img_logis  where id =$res20" ;
    $objQuery42 = mysqli_query($objCon,$sqli42);
    $Result42= mysqli_fetch_array($objQuery42,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/stylehome.css">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/service.css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600x) {
      .carousel-caption {
        display: none; 
      }
    }
    </style>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
<div class = "container">
 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button> 
                <div class="zoom">
                <a class="navbar-brand" href="Home.php">
                <img src="../img_logis/<?php echo $Result2['pro_image'];?> " class="responsive" style="width:125px " >
                </a></div></div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right"><br>     
                <li><a href="incoterm.php"><?php echo $var4;?></a></li>
                <li><a href="service.php"><?php echo $var5;?></a></li>
                <li><a  href="contact.php"><?php echo $var6;?></a></li>
                <li><a  href="portfolio.php"><?php echo $var7;?></a></li>
                <a href="check_lang.php?message=EN"method="get" class ="active"><?php echo $var1;?>|</a>
                <a href="check_lang.php?message=VN"method="get"><?php echo $var2;?></a>
             </div>
           </ul>
      </div>
    </div>
  </nav>
  </div>
            <br><br><br><br>
            <div class="container">
            <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="../img_logis/<?php echo $Result34['pro_image'];?>"  alt="Image" >
            <div class="carousel-caption">
            <div class="thumbnail" style="opacity: 0.9">
            <div class = "dd"> <p><font color="#000000">  OUR  NVOCC  SERVICE</font></p></div>
            </div>      
            </div> 
            </div> 
            <div class="item">
            <img src="../img_logis/<?php echo $Result36['pro_image'];?>" alt="Image" >
            <div class="carousel-caption">
            <div class="thumbnail" style="opacity: 0.9">
            <div class = "dd"> <p><font color="#000000">  OUR  NVOCC  SERVICE</font></p></div>
            </div>      
            </div> 
            </div> 
            <div class="item">
            <img src="../img_logis/<?php echo $Result38['pro_image'];?>"alt="Image" >
            <div class="carousel-caption">
            <div class="thumbnail" style="opacity: 0.9">
            <div class = "dd"> <p><font color="#000000">  OUR  NVOCC  SERVICE</font></p></div>
            </div>      
            </div> 
            </div> 
            <div class="item">
            <img src="../img_logis/<?php echo $Result40['pro_image'];?>" alt="Image" >
            <div class="carousel-caption">
            <div class="thumbnail" style="opacity: 0.9">
            <div class = "dd"> <p><font color="#000000">  OUR  NVOCC  SERVICE</font></p></div>
            </div>      
            </div> 
            </div> 
            <div class="item">
            <img src="../img_logis/<?php echo $Result42['pro_image'];?>" alt="Image" >
            <div class="carousel-caption">
            <div class="thumbnail" style="opacity: 0.9">
            <div class = "dd"> <p><font color="#000000">  OUR  NVOCC  SERVICE</font></p></div>
            </div>      
            </div> 
            </div> 
            <div class="col-sm-1"></div>
            </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-3"></div>
</div>
<hr>
</div>
	<div id="body">
		<div id="contents">
			<ul id="articles">
				<li>
					<h1><?php echo $var63;?></h1>
					<p>
         <?php echo $var64;?>
					</p>
        </li>
				<li>
					<h1><?php echo $var65;?></h1>
					<p>
				<?php echo $var66;?>
					</p>
        </li>
        <li>
					<h1><?php echo $var67;?></h1>
					<p>
				<?php echo $var68;?>
					</p>
         </li>
         </ul>
    </div>
         <div id="contents">
         <div class ="row">
    <div class="col-sm-2"></div>
         <div class="col-sm-10">
			<ul id="articles">
        <li>
					<h1><?php echo $var69;?></h1>
					<p>
				<?php echo $var70;?>
					</p>
        </li>
				<li>
					<h1><?php echo $var71;?></h1>
					<p>
					<?php echo $var72;?>
					</p>
        </li>
      </ul>
		</div>
	</div>
  </div>
  </div>
        <footer>
<div class="col-sm-6">
<iframe width="300" height="240" src="https://www.youtube.com/embed/SKP8UfSvSoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<center>
<a href ="https://www.facebook.com/Pacific-Star-Group-Vietnam-745001085551278/"><img src="../IMG/Social/facebook.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;</a>
<img src="../IMG/Social/ig.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
<img src="../IMG/Social/twitter.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
</center><br>
<i class="material-icons">&#xe8b4;</i>&nbsp;&nbsp;&nbsp;<?php echo $var74;?><br>
<i class="material-icons">&#xe0cd;</i>&nbsp;&nbsp;&nbsp;<?php echo $var78;?><br>
<i class="material-icons">&#xe0e1;</i>&nbsp;&nbsp;&nbsp;<?php echo $var76;?><br>
</div>
<br>
<center><?php echo $var38;?></p></center>
</footer>
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "573046396208213", // Facebook page ID
            call_to_action: "contact us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>
</html>
