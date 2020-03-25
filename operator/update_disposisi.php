<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM disposisi WHERE id_disposisi='$update_id'";
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
                    <h2> UPDATE DISPOSISI<small>UPDATE DISPOSISI</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_disposisi.php">
            <?php
            while($r=mysqli_fetch_array($result))
            {
/*
$id_disposisi      = $_POST['id_disposisi'];
  $id_surat_masuk     = $_POST['id_surat_masuk'];
  $tanggal     = $_POST['tanggal'];
  $ditujukan        = $_POST['ditujukan'];
  $id_sifat     = $_POST['id_sifat'];
  $untuk     = $_POST['untuk'];
  $id_user     = $_POST['id_user'];
*/

               $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $tanggal = $r['2'];
              $ditujukan = $r['3'];
              $id_sifat = $r['4'];
              $untuk = $r['5'];
              $id_user = $r['6'];



            ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_disposisi"> ID DISPOSISI <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_disposisi" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_disposisi ?>" readonly name="id_disposisi">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_masuk">ID SURAT MASUK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_surat_masuk" name="id_surat_masuk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_surat_masuk ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal" class="form-control col-md-7 col-xs-12" type="text" name="tanggal" required value="<?php echo $tanggal ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="ditujukan" class="control-label col-md-3 col-sm-3 col-xs-12">DITUJUKAN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ditujukan" class="form-control col-md-7 col-xs-12" type="text" name="ditujukan" required value="<?php echo $ditujukan ?>">
                        </div>
                      </div>
                     <!--  <div class="form-group">
                        <label for="id_sifat" class="control-label col-md-3 col-sm-3 col-xs-12">ID SIFAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_sifat" class="form-control col-md-7 col-xs-12" type="text" name="id_sifat" required value="<?php echo $id_sifat ?>">
                        </div>
                      </div>-->
            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SIFAT</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
            // ----------------------------------------
         //   include "koneksi.php";
            $query="select * from sifat";
            $result=mysqli_query($conn,$query);
            // ----------------------------------------
            echo "<select name='id_sifat' class='form-control' required>";  
            echo "<option value='id_sifat' selected>SIFAT</option>";
              while($row=mysqli_fetch_row($result))
              {        
                echo "<option value=$row[0]>$row[1]</option>";        
              }
            echo "</select>";
          ?>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">UNTUK<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required type="text" name="untuk" id="untuk">
                            <option>Choose option</option>
                            <option value="Diketahui">Diketahui</option>
                            <option value="Ditindaklanjuti">Ditindaklanjuti</option>
                            <option value="Diarsipkan">Diarsipakn</option>
                            <option value="Lainnya">Lainnya</option>
                            
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="id_user" class="control-label col-md-3 col-sm-3 col-xs-12">ID USER<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_user" class="form-control col-md-7 col-xs-12" type="text" name="id_user" required value="<?php echo $id_user ?>">
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


  </div>
  <div sty>
<?php include "layout/footer.php"; ?>
  p"; ?>
