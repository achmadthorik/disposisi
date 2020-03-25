

<style type="text/css">
  .navbar{
    background-color: #51BCA3;
  }
</style>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view" style="background-color: #51B2A4;">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-envelope"></i> <span>Disposition STMJ</span></a>
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
                <h3>Administrator</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a> </li>
                  <!--user-->
          <li><a href="#"><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a> 
             <ul class="nav child_menu">
          
            <!--   <li><a href="add_user.php"><i class="fa fa-plus"></i>Add Data</a></li>-->
               <li><a href="table_user.php"><i class="fa fa-table"></i>View</a></li>
             </ul>
          </li>
                  <!--/user-->

          <!--surat masuk-->
          <li><a href="#"><i class="fa fa-envelope"></i> Surat <span class="fa fa-chevron-down"></span></a> 
             <ul class="nav child_menu">
          
               <!--<li><a href="add_masuk.php"><i class="fa fa-plus"></i>Add Data</a></li>-->
               <li><a href="table_masuk.php"><i class="fa fa-download"></i>Masuk</a></li>
               
                          
                            
                 
               <li><a href="table_keluar.php"><i class="fa fa-upload"></i>Keluar</a></li>
             </ul>
          </li>
                  <!--/surat masuk-->

           <!--disposisi-->
           <li><a href="#"><i class="fa fa-send"></i> Disposisi <span class="fa fa-chevron-down"></span></a> 
             <ul class="nav child_menu">
          
               <!--<li><a href="add_masuk.php"><i class="fa fa-plus"></i>Add Data</a></li>-->
               <li><a href="table_disposisi.php"><i class="fa fa-table"></i>view</a></li>
           
             </ul>
          </li>
          <!--disposisi-->    
             <li><a href="#"><i class="fa fa-tasks"></i> Laporan <span class="fa fa-chevron-down"></span></a> 
             <ul class="nav child_menu">
          
               <!--<li><a href="add_masuk.php"><i class="fa fa-plus"></i>Add Data</a></li>-->
              <li><a href="galeri2.php"><i class="fa fa-file-picture-o"></i>Galeri</a></li>
              <li><a href="laporan_disposisi.php"><i class="fa fa-table"></i>Laporan Disposisi</a></li>
              <li><a href="laporan_masuk.php"><i class="fa fa-table"></i>Jenis Surat</a></li>
              <li><a href="backup_database.php"><i class="fa fa-table"></i>Backup Database<span class="label label-success pull-right">Coming Soon</span></a></li>
             </ul>
          </li>   
                </ul>
                  
              </div>

            </div>
            <!-- /sidebar menu -->