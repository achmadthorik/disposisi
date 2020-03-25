<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
$query = "SELECT * FROM juni;";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat Masuk</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-"></i> LAPORAN DISPOSISI </h2>
                  
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                      <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle"
                      data-toggle="dropdown">
                      Tampilkan Perbulan <span class="caret"></span>
                      </button>
                       <ul class="dropdown-menu" role="menu">
                       <li><a href="#">Januari</a></li>
                       <li><a href="#">Februari</a></li>
                       <li><a href="#">Maret</a></li>
                       <li><a href="#">April</a></li>
                       <li><a href="#">Mei</a></li>
                       <li><a href="#">Juni</a></li>
                       <li><a href="#">Juli</a></li>
                       <li><a href="#">Agustus</a></li>
                       <li><a href="#">September</a></li>
                       <li><a href="#">Oktober</a></li>
                       <li><a href="#">November</a></li>
                       <li><a href="#">Desember</a></li>

                     
                       </div><hr>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID DISPOSISI</th>
                          
                          <th>ID SURAT MASUK</th>
                          <th>PENGIRIM</th>
                          <th>TANGGAL</th>
                          <th>DITUJUKAN</th>
                          <th>SIFAT</th>
                          <th>UNTUK</th>
                          <th>ID USER</th>
                          
                          
                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $pengirim = $r['2'];
              $tanggal = $r['3'];
              $ditujukan = $r['4'];
              $sifat = $r['5'];
              $untuk = $r['6'];
              $id_user = $r['7'];
              ?>
            
                        <tr>
            <td><?php echo $id_disposisi ?></td>
            <td><?php echo $id_surat_masuk ?></td>
            <td><?php echo $pengirim ?></td>
             <td><?php echo $tanggal ?></td>
              <td><?php echo $ditujukan ?></td>
                <td><?php echo $sifat ?></td>
                 <td><?php echo $untuk ?></td>
                  <td><?php echo $id_user ?></td>
            
           
          
            <?php $i++; } ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>
    
<?php include "layout/footer.php"; ?>