<?php
include('proses_login.php');
include ('session.php');

if ($_SESSION['LEVEL']=="Operator"){
	header('Location: ./operator/dashboard.php'); // Mengarahkan ke Home Page Operator
	}
else if ($_SESSION['LEVEL']=="Administrator"){
	header('Location: ./admin/index.php'); // Mengarahkan ke Home Page Admin
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Indonesia Travel</title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
  </head>
	
  <body>
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST" name="submit">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required/>
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-success submit">Log In</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#" class="to_register"> Create Account </a>
                </p>-->

                <div class="clearfix"></div>
				
				<div>
                  <!--<h1><i class="fa fa-envira"></i> Invisible Ticket !</h1>-->
                </div>
				
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

