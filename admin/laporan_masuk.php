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
                                        
                                        echo "<option value='belum memilih' selected>--Pilih Jenis Surat--</option>";
                                        echo "<option value='Surat Dinas'>Surat Dinas</option>";
                                        echo "<option value='Surat Pribadi'>Surat Pribadi</option>";
                                      
                                        
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
                         
                          <th>ID SURAT MASUK</th>
                          <th>JENIS</th>
                          <th>PENGIRIM</th>
                          <th>ALAMAT PENGIRIM</th>
                          <th>NOMOR SURAT</th>
                          <th>PERIHAL</th>
                          <th>TANGGAL SURAT</th>
                       <!--   <th>UNTUK</th>
                          <th>ID USER</th>-->

                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_POST['submit'])) {
                                  $val = $_POST['bulan'];
                                
                                $month = date ("Y");

                                $query = "SELECT id_surat_masuk, jenis, pengirim, alamat_pengirim, nomor_surat, perihal, tanggal_surat from surat_masuk, jenis where jenis.id_jenis = surat_masuk.id_jenis and jenis = '$val'";

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
                              <td><?php echo $r[6] ?></td>
                             
                                
                                            </tr>
                                  <?php $i++; } }?>
                                  
                                  
                                </tbody>
                              </table>

                              <br>
                              <hr>
                              <br>

                               <table id="datatable-buttons" class="table table-striped table-bordered" table-bordered">
                                <thead>
                                <tr>
                         
                          <th>ID SURAT KELUAR</th>
                          <th>JENIS</th>
                          <th>TUJUAN</th>
                          <th>PENGIRIM</th>
                          
                          <th>PERIHAL</th>
                      <!--    <th>TANGGAL SURAT</th>--->
                       <!--   <th>UNTUK</th>
                          <th>ID USER</th>-->

                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_POST['submit'])) {
                                  $val = $_POST['bulan'];
                                
                                $month = date ("Y");

                                $query = "SELECT id_surat_keluar, jenis, tujuan, pengirim, perihal, tanggal_surat from surat_keluar, jenis where jenis.id_jenis = surat_keluar.id_jenis and jenis = '$val'";

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