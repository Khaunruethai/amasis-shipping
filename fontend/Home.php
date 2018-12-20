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

    $sqli3 = "SELECT * FROM select_img where id = 1 ";
    $objQuery3 = mysqli_query($objCon,$sqli3);
      $Result3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
      $res1= $Result3['id_image'];

    $sqli4 = "SELECT * FROM img_logis  where id =$res1" ;
    $objQuery4 = mysqli_query($objCon,$sqli4);
    $Result4= mysqli_fetch_array($objQuery4,MYSQLI_ASSOC);

    $sqli5 = "SELECT * FROM select_img where id = 3 ";
    $objQuery5 = mysqli_query($objCon,$sqli5);
      $Result5 = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC);
      $res2= $Result5['id_image'];

    $sqli6 = "SELECT * FROM img_logis  where id =$res2" ;
    $objQuery6 = mysqli_query($objCon,$sqli6);
    $Result6= mysqli_fetch_array($objQuery6,MYSQLI_ASSOC);

    $sqli7 = "SELECT * FROM select_img where id = 4 ";
    $objQuery7 = mysqli_query($objCon,$sqli7);
      $Result7 = mysqli_fetch_array($objQuery7,MYSQLI_ASSOC);
      $res3= $Result7['id_image'];

    $sqli8 = "SELECT * FROM img_logis  where id =$res3" ;
    $objQuery8 = mysqli_query($objCon,$sqli8);
    $Result8= mysqli_fetch_array($objQuery8,MYSQLI_ASSOC);

    $sqli9 = "SELECT * FROM select_img where id = 5 ";
    $objQuery9 = mysqli_query($objCon,$sqli9);
    $Result9 = mysqli_fetch_array($objQuery9,MYSQLI_ASSOC);
      $res4= $Result9['id_image'];

    $sqli10 = "SELECT * FROM img_logis  where id =$res4" ;
    $objQuery10 = mysqli_query($objCon,$sqli10);
    $Result10= mysqli_fetch_array($objQuery10,MYSQLI_ASSOC);

    $sqli11 = "SELECT * FROM select_img where id = 6 ";
    $objQuery11 = mysqli_query($objCon,$sqli11);
      $Result11 = mysqli_fetch_array($objQuery11,MYSQLI_ASSOC);
      $res5= $Result11['id_image'];

    $sqli12 = "SELECT * FROM img_logis  where id =$res5" ;
    $objQuery12 = mysqli_query($objCon,$sqli12);
    $Result12= mysqli_fetch_array($objQuery12,MYSQLI_ASSOC);

    $sqli13 = "SELECT * FROM select_img where id = 7 ";
    $objQuery13 = mysqli_query($objCon,$sqli13);
      $Result13 = mysqli_fetch_array($objQuery13,MYSQLI_ASSOC);
      $res6= $Result13['id_image'];

    $sqli14 = "SELECT * FROM img_logis  where id =$res6" ;
    $objQuery14 = mysqli_query($objCon,$sqli14);
    $Result14= mysqli_fetch_array($objQuery14,MYSQLI_ASSOC);

    $sqli15 = "SELECT * FROM select_img where id = 8 ";
    $objQuery15 = mysqli_query($objCon,$sqli15);
      $Result15 = mysqli_fetch_array($objQuery15,MYSQLI_ASSOC);
      $res7= $Result15['id_image'];

    $sqli16 = "SELECT * FROM img_logis  where id =$res7" ;
    $objQuery16 = mysqli_query($objCon,$sqli16);
    $Result16= mysqli_fetch_array($objQuery16,MYSQLI_ASSOC);

    $sqli17 = "SELECT * FROM select_img where id = 9 ";
    $objQuery17 = mysqli_query($objCon,$sqli17);
      $Result17 = mysqli_fetch_array($objQuery17,MYSQLI_ASSOC);
      $res8= $Result17['id_image'];

    $sqli18 = "SELECT * FROM img_logis  where id =$res8" ;
    $objQuery18 = mysqli_query($objCon,$sqli18);
    $Result18= mysqli_fetch_array($objQuery18,MYSQLI_ASSOC);

    $sqli19 = "SELECT * FROM select_img where id = 10 ";
    $objQuery19 = mysqli_query($objCon,$sqli19);
      $Result19 = mysqli_fetch_array($objQuery19,MYSQLI_ASSOC);
      $res9= $Result19['id_image'];

    $sqli20 = "SELECT * FROM img_logis  where id =$res9" ;
    $objQuery20 = mysqli_query($objCon,$sqli20);
    $Result20= mysqli_fetch_array($objQuery20,MYSQLI_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</head>
<div class ="container">
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
<br><br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators ">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img  src="../img_logis/<?php echo $Result4['pro_image'];?>" class="responsive"width="1300" height="300">
      <div class="carousel-caption">
        </div>      
      </div>
      <div class="item">
      <img src="../img_logis/<?php echo $Result6['pro_image'];?>"class="responsive" width="1300" height="300"> 
      <div class="carousel-caption">
        </div>          
      </div>
      <div class="item">
      <img  src="../img_logis/<?php echo $Result8['pro_image'];?>" class="responsive" width="1300" height="300"> 
      <div class="carousel-caption">
        </div>      
      </div>
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
<div class="row text-center">
    <div class="col-sm-5 text-center " style=" height:550px; background-color:#E0FFFF;"><br><br><br><br><br><br><br><br><br>
    <div class ="bbb"><p><font color="#000000">&nbsp;&nbsp;<?php echo $var8;?></font></p></div></div><br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5"><br><br><br><br>
         <p><?php echo $var9;?></div></p>
     </div>
   <div class="col-sm-2"></div>
      <div  class="responsive" style=" height:500px; background-color:#123456;">
         <br><br><br><br><br>
          <div class="row">
              <div class="col-sm-12 text-center ">
              <div class ="ff"><p><font color="#ffffff"><?php echo $var10;?>&nbsp;&nbsp;<?php echo $var12;?>&nbsp;&nbsp;<?php echo $var14;?></p></div>
              <div class ="ee"><p><?php echo $var11;?></p></div>
              <div class ="ee"><p><?php echo $var13;?></p></div>
              <div class ="ee"><p><?php echo $var15;?></font></p></div>
                 <br><br>
              </div>
          </div>
      </div>
      <div class="parallax-1"></div>
<div class="parallax-1">
<div class="container" class="responsive ">
<div class="bg-1">
    <h3 class="text-center"><font color="#ffffff"><?php echo $var20;?></font></h3>
    <br>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
        <img src="../img_logis/<?php echo $Result12['pro_image'];?>" class="responsive" width="400" height="300"><br>
        <div class ="ee"><p><?php echo $var21;?></p></div>
          <p><?php echo $var22;?></p>
          <button class="btn" data-toggle="modal" data-target="#myModal1">View</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
        <img src="../img_logis/<?php echo $Result14['pro_image'];?>"class="responsive" width="400" height="300"><br>
        <div class ="ee"> <p><?php echo $var23;?></p></div>
          <p><?php echo $var24;?></p>
          <button class="btn" data-toggle="modal" data-target="#myModal2">View</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
        <img src="../img_logis/<?php echo $Result16['pro_image'];?>"class="responsive" width="400" height="300"><br>
        <div class ="ee"><p><?php echo $var25;?></p></div>
          <p><?php echo $var26;?></p>
          <button class="btn" data-toggle="modal" data-target="#myModal3">View</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br><br>
  </div>
  <div class="modal fade" id="myModal1" role="dialog">
  <div class="container" class="responsive">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
           <div class ="ee"></span><?php echo $var21;?></p></div>
          </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <p><label for="psw"></span><?php echo $var16;?></label></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
  <div class="container" class="responsive">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <div class ="ee"><p></span><?php echo $var23;?></p>  </div>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"></span><?php echo $var17;?></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="myModal3" role="dialog">
  <div class="container" class="responsive">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <div class ="ee"><p></span><?php echo $var25;?></p></div>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"></span><?php echo $var18;?></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
<div class="bg-2"><br>
<div class ="container"><br><br>
<div class="thumbnail" style="opacity: 0.92">
      <div  class="container " class="responsive">
        <center>
            <div class="bb"><p><?php echo $var27;?></p><div>
            <div class="aa"><p><?php echo $var28;?></p><div></center>
</div><br><br>
      <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-3 ">
         <div class="thumbnail">
           <img  src="../img_logis/<?php echo $Result18['pro_image'];?>"  class="responsive" width="350" height="250"><br>
         <center>
            <div class="cc"> <p><?php echo $var29;?></p></div>
            <div class="dd"><p><?php echo $var30;?></p></div>
            <p><span class="glyphicon glyphicon-phone"></span>Phone:&nbsp;&nbsp;<?php echo $var31;?></p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email:&nbsp;&nbsp; <?php echo $var37;?></p>
            </center>
            </div></div>
                <div class="col-md-3">
                         <div class="thumbnail">
           <img  src="../img_logis/<?php echo $Result20['pro_image'];?>"  class="responsive" width="350" height="250"><br>
          <center> <div class="cc"> <p><?php echo $var32;?></p></div>
            <div class="dd"><p><?php echo $var33;?></p></div>
            <p><span class="glyphicon glyphicon-phone"></span>Phone:&nbsp;&nbsp;<?php echo $var34;?></p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email:&nbsp;&nbsp;<?php echo $var37;?></p>
            </center>
                  </div>
                  </div>
                <div class="col-md-3"></div>
              </div>
              <br>
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
</div>
</body>
</html>
