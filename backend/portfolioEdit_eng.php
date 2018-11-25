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
<div class = "font"><p>HOME / IMG</p></div>
<hr>
<center>
<div class = "well">
<!-- ********************************************************************************************** -->
<form action="select_img.php"  method="POST">
<div class = "fontt"><p>LOGO heroku_582a87dceadee92</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image">
            <option value="" >--Select--</option>
        <?php
          $sqli1 = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli1);
                while($row = mysqli_fetch_array($objQuery)){
        ?>       
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>
        <?php
                }            
        ?>        
        </select>
        </div><br>
<!-- ********************************************************************************************** -->
<div class = "fontt"><p>Slider 1</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image1">
            <option value="" >--Select--</option>
        <?php
          $sqli2 = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli2);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>
<!-- ********************************************************************************************** -->
<div class = "fontt"><p>Slider 2</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image2">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>
<!-- ********************************************************************************************** -->
<div class = "fontt"><p>Slider 3</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image3">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>


<!-- ********************************************************************************************** -->

<div class = "font"><p> NEW PROJECT</p></div>
<div class = "fontt"><p>PROJECT 1</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image5">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>
             

<!-- ********************************************************************************************** -->


<div class = "fontt"><p>PROJECT 2</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image6">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>
<!-- ********************************************************************************************** -->


<div class = "fontt"><p>PROJECT 3</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image7">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>


        <!-- ********************************************************************************************** -->

<div class = "fontt"><p>MANAGER AMY</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image8">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        

        </select>
        </div><br>
 <!-- ********************************************************************************************** -->

<div class = "fontt"><p>MANAGER VINCENT</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image9">
            <option value="" >--Select--</option>
        <?php
          $sqli = "SELECT * FROM img_logis ";
          $objQuery = mysqli_query($objCon, $sqli);
                while($row = mysqli_fetch_array($objQuery)){
        ?>
                
                <option value="<?php echo $row['id']?>"><?php echo $row['pro_image']?></option>

        <?php
                }
                
        ?>        
        </select>
        </div><br>
        <button type="submit" class="btn btn-primary">submit</button>
        
</div>

<footer class="container-fluid text-center">
<p><font color="#000">Copyright @ 2018 Amasis Shipping co.,ltd</font></p>
</footer>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</center>
 </div>
 <div>
 </div>
 <div>
  <div>
<?php
	mysqli_close($objCon);
?>
</body>
</html>