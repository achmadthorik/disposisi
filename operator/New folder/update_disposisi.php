<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM surat_masuk WHERE id_surat_masuk='$update_id'";
$result   = $conn->query($query);

?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>SURAT BARU MASUK</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> TAMBAH SURAT <small>SURAT MAS</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_masuk.php">
            <?php
            while($r=mysqli_fetch_array($result))
            {
               $id_surat_masuk = $r[0];
              $id_jenis = $r[1];
              $pengirim = $r[2];
              $alamat_pengirim = $r[3];
              $nomor_surat = $r[4];
              $perihal = $r[5];
              $deskripsi = $r[6];
              $tanggal_surat = $r[7];
              $nama_file = $r[8];
              $tanggal_entri = $r[9];
            
            
            ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_masuk"> ID SURAT MASUK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_surat_masuk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_surat_masuk ?>" readonly name="id_surat_masuk">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_jenis">ID JENIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_jenis" name="id_jenis" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_jenis ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">PENGIRIM<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pengirim" class="form-control col-md-7 col-xs-12" type="text" name="pengirim" required value="<?php echo $pengirim ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="alamat_pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">ALAMAT PENGIRIM<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="alamat_pengirim" class="form-control col-md-7 col-xs-12" type="text" name="alamat_pengirim" required value="<?php echo $alamat_pengirim ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="nomor_surat" class="control-label col-md-3 col-sm-3 col-xs-12">NOMOR SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nomor_surat" class="form-control col-md-7 col-xs-12" type="text" name="nomor_surat" required value="<?php echo $nomor_surat ?>">
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
                          <input id="deskripsi" class="form-control col-md-7 col-xs-12" type="textarea" name="deskripsi" required value="<?php echo $deskripsi ?>">
                        </div>
                       <!-- <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="deskripsi" class="form-control" rows="3" placeholder='rows="3"' name="deskripsi " required value="<?php echo $deskripsi ?>"></textarea>
                        </div>-->

                      </div>
                      <div class="form-group">
                        <label for="tanggal_surat" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_surat" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_surat" required value="<?php echo $tanggal_surat ?>">
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
                          <input id="tanggal_entri" class="form-control col-md-7 col-xs-12" type="text" name="tanggal_entri" required value="<?php echo $tanggal_entri ?>">
                        </div>
                      </div>


                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button">Cancel</button>
              <button class="btn btn-warning" type="reset">Reset</button>
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
  p"; ?>
	