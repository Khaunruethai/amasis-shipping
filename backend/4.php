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
          <li><a href="nav_edit.php">edit navbar</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">edit en<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a  href="admin.php">home</a></li>
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
       <div class = "font"><p>portfolio/img<p></div>
       <hr>
<form action="port_img.php"  method="POST">
<center>
<div class="well">
<div class = "fontt"><p>img 1</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image21">
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
        </div><br><br>
<!-- ********************************************************************************************** -->
<div class = "fontt"><p>img 2</p></div>
<!-- ********************************************************************************************** -->

<div class="custom-select" style="width:500px;">
        <select  name ="pro_image22">
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
<div class = "fontt"><p>img 3</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image23">
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
<div class = "fontt"><p>img 4</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image24">
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

<div class = "fontt"><p>img 5</p></div>
<div class="custom-select" style="width:500px;">
        <select  name ="pro_image25">
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

<div class = "fontt"><p>img 6</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image26">
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
     <div class = "fontt"><p>img 7</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image27">
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
</div>     <br> 
     <!-- ********************************************************************************************** -->

<div class = "fontt"><p>img 8</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image28">
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

<div class = "fontt"><p>img 9</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image29">
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

<div class = "fontt"><p>img 10</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image30">
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

<div class = "fontt"><p>img 11</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image31">
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
     <div class = "fontt"><p>img 12</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image32">
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
     <div class = "fontt"><p>img 13</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image33">
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

<div class = "fontt"><p>img 14</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image34">
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

<div class = "fontt"><p>img 15</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image35">
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
     <div class = "fontt"><p>img 16</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image36">
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
     <div class = "fontt"><p>img 17</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image37">
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
     <div class = "fontt"><p>img 18</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image38">
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
     <div class = "fontt"><p>img 19</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image39">
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
</div> <br> 
     <!-- ********************************************************************************************** -->
     <div class = "fontt"><p>img 20</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image40">
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
</div> <br> 
     <!-- ********************************************************************************************** -->
     <div class = "fontt"><p>img 21</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image41">
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
</div> <br> 
     <!-- ********************************************************************************************** -->
     <div class = "fontt"><p>img 22</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image42">
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
</div>  <br> 
     <!-- ********************************************************************************************** -->
     <div class = "fontt"><p>img 23</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image43">
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
     <div class = "fontt"><p>img 24</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image44">
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
     <div class = "fontt"><p>img 25</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image45">
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
     <div class = "fontt"><p>img 26</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image46">
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
     <div class = "fontt"><p>img 27</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image47">
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
     <div class = "fontt"><p>img 28</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image48">
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
<div class = "fontt"><p>img 29</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image49">
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
<div class = "fontt"><p>img 30</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image50">
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
<div class = "fontt"><p>img 31</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image51">
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
<div class = "fontt"><p>img 32</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
<select  name ="pro_image52">
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
<div class = "fontt"><p>img 33</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
<select  name ="pro_image53">
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
<div class = "fontt"><p>img 34</p></div>
<!-- ********************************************************************************************** -->
<div class="custom-select" style="width:500px;">
<select  name ="pro_image54">
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
<div class = "fontt"><p>img 35</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image55">
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
</div>   <br> 
     <!-- ********************************************************************************************** -->
     <div class = "fontt"><p>img 36</p></div>
     <div class="custom-select" style="width:500px;">
<select  name ="pro_image56">
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
<div class = "fontt"><p>img 37</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image57">
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
<div class = "fontt"><p>img 38</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image58">
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
<div class = "fontt"><p>img 39</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image59">
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
<div class = "fontt"><p>img 40</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image60">
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
<div class = "fontt"><p>img 41</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image61">
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
<div class = "fontt"><p>img 42</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image62">
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
<div class = "fontt"><p>img 43</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image63">
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
<div class = "fontt"><p>img 44</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image64">
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
<div class = "fontt"><p>img 45</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image65">
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
<div class = "fontt"><p>img 46</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image66">
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
<div class = "fontt"><p>img 47</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image67">
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
<div class = "fontt"><p>img 48</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image68">
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
<div class = "fontt"><p>img 49</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image69">
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
<div class = "fontt"><p>img 50</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image70">
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
<div class = "fontt"><p>img 51</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image71">
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
<div class = "fontt"><p>img 52</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image72">
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
<div class = "fontt"><p>img 53</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image73">
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
<div class = "fontt"><p>img 54</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image74">
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
<div class = "fontt"><p>img 55</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image75">
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
<div class = "fontt"><p>img 56</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image76">
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
<div class = "fontt"><p>img 57</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image77">
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
<div class = "fontt"><p>img 58</p></div>
<div class="custom-select" style="width:500px;">
<select  name ="pro_image78">
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