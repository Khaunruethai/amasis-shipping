<html>
<head>
<title>Amasis-login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/stylehome">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=El Messiri' rel='stylesheet'>
</head>
<style>
  body {
    background-image: url("../IMG/home/login1.jpg");
    font-family: 'El Messiri';font-size: 25px;

}
.padding {
    padding-top: 150px;
    padding-right:50px;
    padding-bottom: 100px;
    padding-left: 50px;
}
img {
  border-radius: 50%;
}
  </style>
<body>
<center>
<div class="w3-container">
<div class="padding">
  <span class="w3-tag w3-padding w3-round-large  w3-center" style="background-color:#708090;">
<form name="form1" method="post" action="check_login.php">
<img src=../IMG/home/11.jpg   alt="Avatar" style="width:100px" ></a><br><h1>ADMIN</h1>
<div class="form-group row">
<div class="col-sm-2">
       <i class="fa fa-users" style="font-size:20px" >&nbsp;:</i></div>
       <div class="col-sm-10">
      <input name="txtusername" type="text" class="form-control"  id="txtusername" placeholder="user name" >
</div>
</div>

      <div class="form-group row">
      <div class="col-sm-2">
      <i class="fa fa-key" style="font-size:20px">&nbsp;:</i></div>
      <div class="col-sm-10">
      <input name="txtpassword" type="password" class="form-control"  id="txtpassword"  placeholder="password" >
      </div>
</div>
  <input type="submit" name="Submit" value="Login" class="btn btn-primary mb-2">
</form>
</span>
</div>
</div>
</center>
</body>
</html>