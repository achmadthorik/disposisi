<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');

                              
                                      
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left hidden-print">
             
              </div>

             
            </div>
<div class="x_panel">
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-3 hidden-print">
                                   <form action="" method="POST">
                                           <?php
                                        include "./../koneksi.php";

                                        echo "<select name='bulan' class='form-control'>";
                                        
                                        echo "<option value='belum memilih' selected>--Pilih Bulan--</option>";
                                        echo "<option value=01>Januari</option>";
                                        echo "<option value=02>Februari</option>";
                                        echo "<option value=03>Maret</option>";
                                        echo "<option value=04>April</option>";
                                        echo "<option value=05>Mei</option>";
                                        echo "<option value=06>Juni</option>";
                                        echo "<option value=07>Juli</option>";
                                        echo "<option value=08>Agustus</option>";
                                        echo "<option value=09>September</option>";
                                        echo "<option value=10>Oktober</option>";
                                        echo "<option value=11>November</option>";
                                        echo "<option value=12>Desember</option>";
                                        
                                        echo "</select><br>";
                                        echo "<button type='submit' name='submit' class='btn btn-success'>Tampilkan</button>";


                                        /*
                                        <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle"
                      data-toggle="dropdown">
                      Tampilkan Perbulan <span class="caret"></span>
                      </button>
                       <ul class="dropdown-menu" role="menu">
                       <li><a href="view_januari.php">Januari</a></li>
                       <li><a href="view_februari.php">Februari</a></li>
                       <li><a href="view_maret.php">Maret</a></li>
                       <li><a href="view_april.php">April</a></li>
                       <li><a href="view_mei.php">Mei</a></li>
                       <li><a href="view_juni.php">Juni</a></li>
                       <li><a href="view_juli.php">Juli</a></li>
                       <li><a href="view_agustus.php">Agustus</a></li>
                       <li><a href="view_september.php">September</a></li>
                       <li><a href="view_oktober.php">Oktober</a></li>
                       <li><a href="view_november.php">November</a></li>
                       <li><a href="view_desember.php">Desember</a></li>

                     
                       </div><hr>
                                        */
                                      ?>
                                      </form>
                              </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            
                              <center>
                                <h1>DISPOSISI SURAT</h1>
                                <h1>SMKN 1 JENANGAN PONOROGO</h1>
                                <h2>Jl. Niken-Gandini No.78, Setono, Jenangan, Ponorogo, Jawa Timur</h2>
                                <h5>Telp: 089-8990-009, Fax : smknjenpo@yahoo.com</h5>
                              </center>
                                <hr>
                          
                            <div class="x_content">
                              
                              <table id="datatable-buttons" class="table table-striped table-bordered" table-bordered">
                                <thead>
                                <tr>
                                     <th>ID DISPOSISI</th>
                          
                          <th>ID SURAT MASUK</th>
                          <th>PENGIRIM</th>
                          <th>TANGGAL DISPOSISI</th>
                          <th>DITUJUKAN</th>
                          <th>SIFAT</th>
                       <!--   <th>UNTUK</th>
                          <th>ID USER</th>-->

                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_POST['submit'])) {
                                  $val = $_POST['bulan'];
                                
                                $month = date ("Y");

                                $query = "SELECT id_disposisi,surat_masuk.id_surat_masuk, pengirim,tanggal as tanggal_disposisi,ditujukan, nama_sifat FROM disposisi, sifat, surat_masuk where disposisi.id_sifat = sifat.id_sifat and surat_masuk.id_surat_masuk = disposisi.id_surat_masuk and MONTH(tanggal)='$val'";

                                /*"SELECT id_disposisi,surat_masuk.id_surat_masuk, pengirim,tanggal as tanggal_disposisi,ditujukan,nama_sifat, tindakan.untuk,id_user 
                                  FROM disposisi, sifat, surat_masuk, tindakan 
                                  where disposisi.id_sifat = sifat.id_sifat and surat_masuk.id_surat_masuk = disposisi.id_surat_masuk and tindakan.id_tindakan = disposisi.untuk and MONTH(tanggal)='$val'";*/


                                /*
                                  
                                */
                                $result = mysqli_query($conn, $query);

                                $i=0;
                                while($r=mysqli_fetch_array($result))
                                {
                                ?>
                                
                                            <tr>
                                <td><?php echo $r[0] ?></td>
                                <td><?php echo $r[1] ?></td>
                                <td><?php echo $r[2] ?></td>
                                <td><?php echo $r[3] ?></td>
                                <td><?php echo $r[4] ?></td>
                               <td><?php echo $r[5] ?></td>
                               <!--  <td><?php echo $r[6] ?></td>
                                <td><?php echo $r[7] ?></td>-->
                                
                                            </tr>
                                  <?php $i++; } }?>
                                  
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
    </div>    
  </div>

<?php 
include "layout/footer.php"; 
?>