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
/////////////////////////////1////////////////////////////////////////////
    $sqli21 = "SELECT * FROM select_img  where id = 11 ";
    $objQuery21 = mysqli_query($objCon,$sqli21);
      $Result21 = mysqli_fetch_array($objQuery21,MYSQLI_ASSOC);
      $res10= $Result21['id_image'];
  

    $sqli22 = "SELECT * FROM img_logis where id = $res10 " ;
    $objQuery22 = mysqli_query($objCon,$sqli22);
    $Result22 = mysqli_fetch_array($objQuery22,MYSQLI_ASSOC);



    
////////////////////////////////slider 1//////////////////////////////////////////
    $sqli23 = "SELECT * FROM select_img where id = 12 ";
    $objQuery23 = mysqli_query($objCon,$sqli23);
      $Result23 = mysqli_fetch_array($objQuery23,MYSQLI_ASSOC);
      $res11= $Result23['id_image'];

    $sqli24 = "SELECT * FROM img_logis  where id =$res11" ;
    $objQuery24 = mysqli_query($objCon,$sqli24);
    $Result24= mysqli_fetch_array($objQuery24,MYSQLI_ASSOC);

    //////////////////////////////slider 2////////////////////////////////////////////
    $sqli25 = "SELECT * FROM select_img where id = 13 ";
    $objQuery25 = mysqli_query($objCon,$sqli25);
      $Result25 = mysqli_fetch_array($objQuery25,MYSQLI_ASSOC);
      $res12= $Result25['id_image'];

    $sqli26 = "SELECT * FROM img_logis  where id =$res12" ;
    $objQuery26 = mysqli_query($objCon,$sqli26);
    $Result26= mysqli_fetch_array($objQuery26,MYSQLI_ASSOC);

    ////////////////////////////////slider 3//////////////////////////////////////////
    $sqli27 = "SELECT * FROM select_img where id = 14 ";
    $objQuery27 = mysqli_query($objCon,$sqli27);
      $Result27 = mysqli_fetch_array($objQuery27,MYSQLI_ASSOC);
      $res13= $Result27['id_image'];

    $sqli28 = "SELECT * FROM img_logis  where id =$res13" ;
    $objQuery28 = mysqli_query($objCon,$sqli28);
    $Result28= mysqli_fetch_array($objQuery28,MYSQLI_ASSOC);

    //////////////////////////////mission ////////////////////////////////////////////
    $sqli29 = "SELECT * FROM select_img where id = 15 ";
    $objQuery29 = mysqli_query($objCon,$sqli29);
    $Result29 = mysqli_fetch_array($objQuery29,MYSQLI_ASSOC);
      $res14= $Result29['id_image'];

    $sqli30 = "SELECT * FROM img_logis  where id =$res14" ;
    $objQuery30 = mysqli_query($objCon,$sqli30);
    $Result30= mysqli_fetch_array($objQuery30,MYSQLI_ASSOC);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>incoterm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/stylehome.css">
  <link rel="stylesheet" href="../css/font.css">
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>

.im img {
  border-radius: 50%;
}
body {
    background-color:#FAFAD2;
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
             <a class="navbar-brand" href="home.php">
                   <img src="../img_logis/<?php echo $Result2['pro_image'];?> " class="responsive" style="width:125px " >
                   </a></div></div>

    <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right"><br>
                
               <li><a href="INCOTERM.php"><?php echo $var4;?></a></li>
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
<br><br><br>
   <img src="../img_logis/<?php echo $Result22['pro_image'];?>" class="responsive" width="1300" height="340">
   <div class="parallax-2" style="opacity: 0.8">
<br>
<div class="container"  class="responsive">
<div class="row">
      <div class="col-sm-2 "></div>
      <div class="col-sm-8">
<div class="thumbnail"><br>
<center>
      <h3><?php echo $var39;?></h3>
      <div class="row">
      <div class="col-sm-12"><p><?php echo $var40;?></p></div>
</center><br></div></div>
<div class="col-sm-2 "></div>
<br><br></div></div>

<div class="row">
      <div class="col-sm-2"></div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen"><p><font color="#fff"><?php echo $var41;?></font></button>
  <button class="tablinks" onclick="openCity(event, '2')"><font color="#fff"><?php echo $var43;?></font></button>
  <button class="tablinks" onclick="openCity(event, '3')"><font color="#fff"><?php echo $var45;?></font></button>
  <button class="tablinks" onclick="openCity(event, '4')"><font color="#fff"><?php echo $var47;?></font></button>
  <button class="tablinks" onclick="openCity(event, '5')"><font color="#fff"><?php echo $var49;?></font></button>
  <button class="tablinks" onclick="openCity(event, '6')"><font color="#fff"><?php echo $var51;?></font></button>
  <button class="tablinks" onclick="openCity(event, '7')"><font color="#fff"><?php echo $var53;?></font></button>
  <button class="tablinks" onclick="openCity(event, '8')"><font color="#fff"><?php echo $var55;?></font></button>
  <button class="tablinks" onclick="openCity(event, '9')"><font color="#fff"><?php echo $var57;?></font></button>
  <button class="tablinks" onclick="openCity(event, '10')"><font color="#fff"><?php echo $var49;?></font></button>
  <button class="tablinks" onclick="openCity(event, '11')"><font color="#fff"><?php echo $var51;?></font></button>
</div>
<div class="col-sm-6">
<div id="1" class="tabcontent">
  <h3><?php echo $var41;?></font></h3>
  <p><p><?php echo $var42;?></p>
</div>

<div id="2" class="tabcontent">
  <h3><?php echo $var43;?></h3>
  <p><p><?php echo $var44;?></p> 
</div>

<div id="3" class="tabcontent">
  <h3><?php echo $var45;?></h3>
  <p><p><?php echo $var46;?></p>
</div>

<div id="4" class="tabcontent">
  <h3><?php echo $var47;?></h3>
  <p><p><?php echo $var48;?></p>
</div>

<div id="5" class="tabcontent">
  <h3><?php echo $var49;?></h3>
  <p><p><?php echo $var50;?></p> 
</div>

<div id="6" class="tabcontent">
  <h3><?php echo $var51;?></h3>
  <p><p><?php echo $var52;?></p>
</div>

<div id="7" class="tabcontent">
  <h3><?php echo $var53;?></h3>
  <p><p><?php echo $var54;?></p>
</div>

<div id="8" class="tabcontent">
  <h3><?php echo $var55;?></h3>
  <p><p><?php echo $var56;?></p> 
</div>

<div id="9" class="tabcontent">
  <h3><?php echo $var57;?></h3>
  <p><p><?php echo $var58;?></p>
</div>

<div id="10" class="tabcontent">
  <h3><?php echo $var59;?></h3>
  <p><p><?php echo $var60;?></p>
</div>

<div id="11" class="tabcontent">
  <h3><?php echo $var61;?></h3>
  <p><p><?php echo $var62;?></p> 
</div>
</div>
</div>
<br><br>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

     </div>
     </div>
</div>

<div class="container text-center">  
  <br>  
  <h3>Our Partners</h3>
  <br>
  <div class="row">
  <div class="col-sm-2"></div>
    <div class="col-sm-2">
    <div class="thumbnail"><img src="../img_logis/<?php echo $Result24['pro_image'];?>" class="img-responsive" style="width:100%" alt="Image">
      <br><p>factory</p></div>
    </div>
    <div class="col-sm-2"> 
    <div class="thumbnail"><img src="../img_logis/<?php echo $Result26['pro_image'];?>" class="img-responsive" style="width:100%" alt="Image">
    <br><p>first carrier</p>  </div>  
    </div>
    <div class="col-sm-2"> 
    <div class="thumbnail"><img src="../img_logis/<?php echo $Result28['pro_image'];?>" class="img-responsive" style="width:100%" alt="Image">
    <br><p>alongside ship</p></div>
    </div>
    <div class="col-sm-2"> 
    <div class="thumbnail"> <img src="../img_logis/<?php echo $Result30['pro_image'];?>" class="img-responsive" style="width:100%" alt="Image">
    <br><p>buyer warehouse</p></div>
    </div> 
    <div class="col-sm-2"></div>
  </div>
  </div>
</div><br>

   <footer>
<div class="col-sm-6">
<iframe width="300" height="240" src="https://www.youtube.com/embed/SKP8UfSvSoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
<center>
<a href ="https://www.facebook.com/Pacific-Star-Group-Vietnam-745001085551278/"><img src="../IMG/social/facebook.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;</a>
<img src="../IMG/social/ig.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
<img src="../IMG/social/twitter.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
</center><br>
<i class="material-icons">&#xe8b4;</i>&nbsp;&nbsp;&nbsp;<?php echo $var74;?><br>
<i class="material-icons">&#xe0cd;</i>&nbsp;&nbsp;&nbsp;<?php echo $var78;?><br>
<i class="material-icons">&#xe0e1;</i>&nbsp;&nbsp;&nbsp;<?php echo $var76;?><br>
</div>
<br>
<center><?php echo $var38;?></p></center>
</footer>
<!-- WhatsHelp.io widget -->
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
<!-- /WhatsHelp.io widget -->
</body>
</html>

