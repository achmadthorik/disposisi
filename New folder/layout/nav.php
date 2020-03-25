<?php
  include "./../session.php";
  if(!isset($login_session)){
    mysqli_close($koneksi); // Menutup koneksi
    header('Location: ./../index_login.php'); // Mengarahkan ke Home Page
    }

  if ($_SESSION['LEVEL']!="Operator"){
  ?>
    <script language="JavaScript">
        alert('Anda Bukan Admin !');
        setTimeout(function() {window.location.href='./../index_login.php'},10);
        </script>
    <?php
    }
?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bus"></i> <span>Afif Group</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Operator</h3>
                <ul class="nav side-menu">
                  <!--<li><a href="./index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a> </li>-->
                  
                  <!--<li>
                      <a href="#">
                        <i class="fa fa-rocket"></i> Form  <span class="fa fa-chevron-down"></span>
                      </a> 
                      <ul class="nav child_menu">
                        <!--<li><a href="add_type.php"><i class="fa fa-plus"></i>Add Data</a></li>
                      <li><a href="add_pln.php"><i class="fa fa-plane"></i>Plane</a></li>
                      <li><a href="add_trn.php"><i class="fa fa-train"></i>Train</a></li>
                  </li>-->
                  
                </ul>
                  
              </div>

            </div>
            <!-- /sidebar menu -->