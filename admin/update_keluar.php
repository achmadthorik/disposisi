<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM surat_keluar WHERE id_surat_keluar='$update_id'";
$result   = $conn->query($query);

?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>SURAT KELUAR</h3>
              </div>
          
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> UPDATE SURAT MASUK <small><?php echo $id_surat_masuk?></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_keluar.php" enctype="multipart/form-data">
            <?php
            while($r=mysqli_fetch_array($result))
            {
              $id_surat_keluar = $r['0'];
              $id_jenis = $r['1'];
              $pengirim = $r['2'];
              $tujuan = $r['3'];
              $tanggal_surat = $r['4'];
              $perihal = $r['5'];
              $deskripsi = $r['6'];
              $nama_file = $r['7'];
              $tanggal_entri = $r['8'];
              $kurir = $r['9'];
              $laporan = $r['10'];



            ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_keluar"> ID SURAT KELUAR<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_surat_keluar" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_surat_keluar ?>" readonly name="id_surat_keluar">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Surat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
            // ----------------------------------------
         //   include "koneksi.php";
            $query="select * from jenis";
            $result=mysqli_query($conn,$query);
            // ----------------------------------------
            echo "<select name='id_jenis' class='form-control' required>";
            echo "<option value='' selected>Jenis Surat</option>";
              while($row=mysqli_fetch_row($result))
              {
                echo "<option value=$row[0]>$row[1]</option>";
              }
            echo "</select>";
          ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">PENGIRIM<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pengirim" class="form-control col-md-7 col-xs-12" type="text" name="pengirim" required value="<?php echo $pengirim ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="tujuan" class="control-label col-md-3 col-sm-3 col-xs-12">TUJUAN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tujuan" class="form-control col-md-7 col-xs-12" type="text" name="tujuan" required value="<?php echo $tujuan ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="tanggal_surat" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_surat" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_surat" required value="<?php echo $tanggal_surat ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="perihal" class="control-label col-md-3 col-sm-3 col-xs-12">PERIHAL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="perihal" class="form-control col-md-7 col-xs-12" type="text" name="perihal" required value="<?php echo $perihal ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="deskripsi" class="control-label col-md-3 col-sm-3 col-xs-12">DESKRIPSI<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="deskripsi" class="form-control col-md-7 col-xs-12" type="textarea" name="deskripsi" value="<?php echo $deskripsi ?>"></textarea>
                        </div>


                      </div>
                      <div class="form-group">
                        <label for="nama_file" class="control-label col-md-3 col-sm-3 col-xs-12">NAMA FILE<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_file" class="form-control col-md-7 col-xs-12" type="file" name="nama_file" required value="<?php echo $nama_file ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tanggal_entri" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL ENTRI<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_entri" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_entri" required value="<?php echo $tanggal_entri ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NAMA KURIR</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
            // ----------------------------------------
         //   include "koneksi.php";
                           $query="select * from user where level ='Kurir' ";
                           $result=mysqli_query($conn,$query);
            // ----------------------------------------
                           echo "<select name='kurir' class='form-control' required>";
                          echo "<option value='' selected>Pilih Kurir</option>";
                              while($row=mysqli_fetch_row($result))
                              {
                                echo "<option value=$row[1]>$row[1]</option>";
                              }
                           echo "</select>";
                          ?>
                        </div>
                      </div>


                       <!--  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Laporan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required type="text" name="laporan" id="laporan">
                            <option >Choose option</option>
                            <option value="Proses Pengiriman">Proses Pengiriman</option>
                            <option value="Tertunda">Tertunda</option>
                            <option value="Terkirim">Terkirm</option>
                          </select>
                        </div>
                      </div>-->
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LAPORAN</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="laporan" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="laporan" value="Terkirim"> &nbsp; Terkirim &nbsp;
                            </label>
                          
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="laporan" value="Proses Pengiriman"> Proses Pengiriman
                            </label>
                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="laporan" value="Tertunda"> Tertunda
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button">Cancel</button>
                              <button class="btn btn-warning" name ="reset" type="reset">Reset</button>
                          <button type="submit" name="submit1" class="btn btn-success">Submit</button>
                        </div>
                      </div>
            <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>


<?php include "layout/footer.php"; ?>
