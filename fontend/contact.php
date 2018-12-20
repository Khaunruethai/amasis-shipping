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
          $sqli1 = "SELECT * FROM select_img  where id = 0 ";
          $objQuery1 = mysqli_query($objCon,$sqli1);
          $Result1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
          $res= $Result1['id_image'];
          $sqli2 = "SELECT * FROM img_logis where id = $res " ;
          $objQuery2 = mysqli_query($objCon,$sqli2);
          $Result2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
          ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
          <title>contact</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="../css/stylehome.css">
          <link rel="stylesheet" href="../css/font.css">
          <link rel="stylesheet" href="../css/stylecontact.css">
          <link rel="stylesheet" href="../css/style.css" type="text/css">
          <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="../dist/sweetalert2.all.js">
          <style>
          #map {
          height: 50%;
          }
          html, body {
          height: 100%;
          margin: 0;
          padding: 0;
          }
          </style>
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
          <br>
          <br><br><br>
          <body>
          <div class="col-sm-4"></div>
          <div class="bg-2">
          <div class="thumbnail" style="opacity: 0.92">
          <div  class="container " class="responsive">
          <center>
          <div class="bb"><p><?php echo $var90;?></p><div>
          <div class="aa"><p><?php echo $var28;?></p><div></center>
          </div><br><br>
          <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-md-4">
          <p><span ><i class="material-icons" >&#xe8b4; </i></span>&nbsp;&nbsp;<?php echo $var73;?>:<?php echo $var74;?></p>
          <p><span ><i class="material-icons">&#xe0e1;</i></span>&nbsp;&nbsp;<?php echo $var75;?>:<?php echo $var76;?></p>
          <p><span ><i class="material-icons">&#xe0cd;</i></span>&nbsp;&nbsp;<?php echo $var77;?>:<?php echo $var78;?></p>
          <p><span > <i class="fa fa-fax" style="font-size:24px"></i></span>&nbsp;&nbsp;<?php echo $var79;?>:<?php echo $var80;?></p>
          </div>
          <div class="col-md-4">
          <form action="Insert.php" name="frmAdd" method="post">
          <input type="text" name="FirstName" placeholder="Your name.."style="height:35px">
          <input type="text"  name="LastName" placeholder="Your last name.."style="height:35px"><br><br>
          <input type="text" name="Country" placeholder="Country.."style="height:35px">
          <input type="text"  name="Email" placeholder="E-mail.."style="height:35px"><br><br>
          <textarea type="text" name="Subject" placeholder="Write something.."style="width:345px"></textarea>
          </div>
          <div class="col-md-2">
          </div>
          <div class="row">
          <div class="col-sm-7"></div>
          <div class="col-sm-3">
          <button type="submit" class="btn btn-primary" onclick="Invite()">sent</button></div></div>
          <div class="col-sm-2">
          </form>
          </div>
          </div>
          </div>
          <br>
          </div>
          </div>
          <div id="map"></div>
          <script>
          function initMap() {
          var uluru = {lat: 10.745125, lng: 106.696836};
          var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 18, center: uluru});
          var marker = new google.maps.Marker({position: uluru, map: map});
          }
          </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcS06LDeKlwA8_CaCzAF7aGIVmTcIHWU4&callback=initMap">
          </script>      
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

          <script>
          function Invite(){
		swal({
				title:"lt's always better together! Send this team invite link to your teammates.",
				confirmButtonText: 'COPY',
				confirmButtonColor: "#d70026",
				showCloseButton: true,
				background: '#434343',
				padding:'2rem',
				html:'https://tog.com/xxxxxxx'
			});	 
    	$(".swal2-container.in").css('background-color', 'rgba(43, 165, 137, 0.45)');//changes the color of the overlay
	}
          </script>
          </body>
          </html>
