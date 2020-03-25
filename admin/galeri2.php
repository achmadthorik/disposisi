<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
$query = "SELECT * FROM surat_masuk";
$result=$conn->query($query);
$query2 = "SELECT id_surat_keluar, nama_file, pengirim FROM surat_keluar";
$result2=$conn->query($query2);
?>



 

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Galeri Surat</h3>
              </div>

             
            </div> 

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="#"><i class="fa fa-plus"></i> GALERI MASUK</a></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                   

            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {



              $id_surat_masuk = $r['0'];
              $nama_file = $r['8'];
              $pengirim = $r['2'];
              ?>
            

<!--View Galeri-->
                    <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" >
                            <img style="width: 100%; display: block;" src="../file/<?php echo $nama_file; ?>" alt="image" />
                            <div class="mask">
                              <p><?php echo $pengirim ?></p>
                            <!--  <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>-->
                            </div>
                          </div>
                          <div class="caption">
                            <h5><?php echo $pengirim ?></h5>
                            <p><?php echo $id_surat_masuk ?></p><br>
                     
                          </div>
                        </div>
                      </div>
<!--View Galeri-->


                     
           
           
                        
            <?php $i++; } ?>
                        
                  

                  </div>
                </div>
              </div>
      </div>



        <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="#"><i class="fa fa-plus"></i> GALERI SURAT KELUAR</a></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                   

            <?php $k=0;
            while($r=mysqli_fetch_array($result2))
            {



              $id_surat_keluar = $r['0'];
              $nama_file = $r['1'];
              $pengirim = $r['2'];
              ?>
            

<!--View Galeri-->
                    <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first" >
                            <img style="width: 100%; display: block;" src="../file_keluar/<?php echo $nama_file; ?>" alt="image" />
                            <div class="mask">
                              <p><?php echo $pengirim ?></p>
                            <!--  <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>-->
                            </div>
                          </div>
                          <div class="caption">
                            <h5><?php echo $pengirim ?></h5>
                            <p><?php echo $id_surat_keluar ?></p><br>
                     
                          </div>
                        </div>
                      </div>
<!--View Galeri-->


                     
           
           
                        
            <?php $k++; } ?>
                        
                  

                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>
    
<?php include "layout/footer.php"; ?>