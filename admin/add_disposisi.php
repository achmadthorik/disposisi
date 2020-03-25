<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$q1 = "SELECT max(id_disposisi) as id_disposisi from disposisi";
$h1 = mysqli_query($conn,$q1);
$d1 = mysqli_fetch_array($h1);
$id = $d1['id_disposisi'];
$id_urut = (int) substr($id, 3,3);
$id_urut++;
$char1   ="DS";
$nid = $char1.sprintf("%03s",$id_urut);
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>TAMBAH USER</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> TAMBAH DISPOSISI <small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_disposisi.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_masuk"> ID DISPOSISI <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_disposisi" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$nid";?>" readonly name="id_disposisi">
                        </div>
                      </div><!--
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_masuk">ID SURAT MASUK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_jenis" name="id_surat_masuk" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>-->



                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID SURAT MASUK</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
            // ----------------------------------------
         //   include "koneksi.php";
            $query="select * from surat_masuk";
            $result=mysqli_query($conn,$query);
            // ----------------------------------------
            echo "<select name='id_surat_masuk' class='form-control' required>";
            echo "<option value='id_surat_masuk' selected>ID SURAT</option>";
              while($row=mysqli_fetch_row($result))
              {
                echo "<option value=$row[0]>$row[0], $row[2]</option>";
              }
            echo "</select>";
          ?>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal" class="form-control col-md-7 col-xs-12" type="date" name="tanggal" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="ditujukan" class="control-label col-md-3 col-sm-3 col-xs-12">DITUJUKAN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ditujukan" class="form-control col-md-7 col-xs-12" type="text" name="ditujukan" required>
                        </div>
                      </div>

                     <!---   <div class="form-group">
                        <label for="id_sifat" class="control-label col-md-3 col-sm-3 col-xs-12">ID SIFAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_sifat" class="form-control col-md-7 col-xs-12" type="text" name="id_sifat" required>
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
                echo "<option value=$row[0]>$row[0], $row[1]</option>";        
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
                          <input id="id_user" class="form-control col-md-7 col-xs-12" type="text" name="id_user" required>
                        </div>
                      </div>

          <!--  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LEVEL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required type="text" name="level" id="level">
                            <option>Choose option</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>

                          </select>
                        </div>
                      </div>-->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button">Cancel</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>


<?php include "layout/footer.php"; ?>
