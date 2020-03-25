<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>


           
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
            <a href="add_masuk.php">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-download" ></i></div>
                  <div class="count">  


                      <?php 
          include "../koneksi.php";
          $sqlCommand2 = "SELECT COUNT(*) FROM surat_masuk"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row2 = mysqli_fetch_row($query2);
          echo $row2[0];
          mysqli_free_result($query2); 
          // mysqli_close($v_koneksi);
          ?>

                  </div>
                  <h3>SURAT MASUK</h3>
              
                </div>
              </div>
             </a>





             <!--surat keluar-->
             <a href="add_keluar.php">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-upload"></i></div>
                  <div class="count">
                    <?php 
          include "../koneksi.php";
          $sqlCommand2 = "SELECT COUNT(*) FROM surat_keluar"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row2 = mysqli_fetch_row($query2);
          echo $row2[0];
          mysqli_free_result($query2); 
          // mysqli_close($v_koneksi);
          ?></div>
                  <h3>SURAT KELUAR</h3>
                  
                </div>
       </div></a>

       
    </div>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="#"><span class="fa fa-bar-chart-o" style="font-size:30px"> </span></a>
                    <a href="admin/Chart_Print.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
          <?php 
          include "Chart.php"; 
          ?>
          
          
          </div>
        </div>
       </div>
      
      </div>
      </div>


        <?php include "layout/footer.php"; ?>