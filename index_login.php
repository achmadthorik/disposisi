<?php
include('proses_login.php');
include ('session.php');

if ($_SESSION['LEVEL']=="Operator"){
  header('Location: ./operator/dashboard.php'); // Mengarahkan ke Home Page Operator
  } else if ($_SESSION['LEVEL']=="Administrator"){
  header('Location: ./admin/index.php'); // Mengarahkan ke Home Page Admin
  } else if ($_SESSION['LEVEL']=="Kurir") {
   header('Location: ./kurir/table_keluar.php');
  } 
?>

  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Arsip</title>
  
  
  
      <link rel="stylesheet" href="admin/login/css/style.css">

  
</head>

<body style="background-color: #51C3A9;" class="bg-bubbles">
  <div class="wrapper">
  <div class="container">
    <h1>Welcome</h1>
    
     <form action="" class="form" method="post">
      <input type="text" placeholder="Username" name="username" style="border-radius: 20px 20px 20px 20px;">
      <input type="password" name= "password" placeholder="Password" style="border-radius: 20px 20px 20px 20px;">
      <button type="submit" id="login-button" name="submit" value="LOGIN" style="border-radius: 20px 20px 20px 20px;">Login</button>
    </form>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>

</body>
</html>
