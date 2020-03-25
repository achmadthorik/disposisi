<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');

$q1 = "SELECT max(id_surat_masuk) as id_surat_masuk from surat_masuk";
$h1 = mysqli_query($conn,$q1);
$d1 = mysqli_fetch_array($h1);
$id = $d1['id_surat_masuk'];
$id_urut = (int) substr($id, 3,3);
$id_urut++;
$char1   ="SM";
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_masuk.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_masuk"> ID SURAT MASUK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_surat_masuk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$nid";?>" readonly name="id_surat_masuk">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_jenis">ID JENIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_jenis" name="id_jenis" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">PENGIRIM<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pengirim" class="form-control col-md-7 col-xs-12" type="text" name="pengirim" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="alamat_pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">ALAMAT PENGIRIM<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="alamat_pengirim" class="form-control col-md-7 col-xs-12" type="text" name="alamat_pengirim" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_surat" class="control-label col-md-3 col-sm-3 col-xs-12">NOMOR SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nomor_surat" class="form-control col-md-7 col-xs-12" type="text" name="nomor_surat" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="perihal" class="control-label col-md-3 col-sm-3 col-xs-12">PERIHAL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="perihal" class="form-control col-md-7 col-xs-12" type="text" name="perihal" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="deskripsi" class="control-label col-md-3 col-sm-3 col-xs-12">DESKRIPSI<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="deskripsi" class="form-control col-md-7 col-xs-12" type="text" name="deskripsi" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="tanggal_surat" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_surat" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_surat" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="alamat_pengirim" class="control-label col-md-3 col-sm-3 col-xs-12">NAMA FILE<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_file" class="form-control col-md-7 col-xs-12" type="file" name="nama_file" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="tanggal_entri" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL ENTRI<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_entri" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_entri" required>
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