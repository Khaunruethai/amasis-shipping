<?php
   $con = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bc31b9f07b0dea", "","heroku_582a87dceadee92");
   mysqli_set_charset($con, "utf8");
   
   $id = $_POST["id"];
   $FirstName = $_POST["FirstName"];
   $LastName = $_POST["LastName"];
   $Country= $_POST["Country"];
   $Email = $_POST["Email"];
   $Subject = $_POST["Subject"];
   $query = "INSERT INTO contact_us (id,FirstName,LastName,Country,Email,Subject)
   VALUES('','$FirstName','$LastName','$Country','$Email','$Subject')";
   mysqli_query($con, $query);

   header("Location:contact.php");
?>