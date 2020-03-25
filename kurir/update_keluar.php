<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT id_surat_keluar, laporan FROM surat_keluar WHERE id_surat_keluar='$update_id'";
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
                    <h2> TAMBAH SURAT <small>SURAT KELUAR</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_keluar.php">
            <?php
            while($r=mysqli_fetch_array($result))
            {
              $id_surat_keluar = $r['0'];
             
             
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LAPORAN</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="laporan" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="laporan" value="Terkirim"> &nbsp; Terkirim &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="laporan" value="Tertunda"> Tertunda
                            </label>
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

	