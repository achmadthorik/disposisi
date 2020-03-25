<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');

$q1 = "SELECT max(id_surat_keluar) as id_surat_keluar from surat_keluar";
$h1 = mysqli_query($conn,$q1);
$d1 = mysqli_fetch_array($h1);
$id = $d1['id_surat_keluar'];
$id_urut = (int) substr($id, 3,3);
$id_urut++;
$char1   ="SK";
$nid = $char1.sprintf("%03s",$id_urut);

/*
$cek = mysql_fetch_array(mysql_query("SELECT no_surat FROM table ORDER BY id DESC LIMIT 1"));
$ex = explode('/', $cek[no_surat]);
 
if (date('d')=='01'){ $a = '01'; }
else{ $a = $ex[0]+1; }
 
$b = 'PPID';
$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
$d = date('Y');
$no_surat = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;
echo $no_surat;
*/
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>TAMBAH SURAT KELUAR</h3>
              </div>
 
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>   <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_keluar.php" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_surat_keluar"> ID SURAT KELUAR <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_surat_keluar" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$nid";?>" readonly name="id_surat_keluar">
                        </div>
                      </div>
                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_jenis">ID JENIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_jenis" name="id_jenis" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>-->


                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">JENIS SURAT</label>
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
                          <input id="pengirim" class="form-control col-md-7 col-xs-12" type="text" name="pengirim" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="tujuan" class="control-label col-md-3 col-sm-3 col-xs-12">TUJUAN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tujuan" class="form-control col-md-7 col-xs-12" type="text" name="tujuan" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggal_surat" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL SURAT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_surat" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_surat" required>
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
                         <div class="col-md-6 col-md-6 col-xs-12">
                      <textarea id="deskripsi" name="deskripsi" class="resizable_textarea form-control" placeholder="Isikan Maksut dan tujuan surat ini datang"></textarea>
                    </div>
                      </div>
                        <div class="form-group">
                        <label for="nama_file" class="control-label col-md-3 col-sm-3 col-xs-12">NAMA FILE<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_file" class="form-control col-md-7 col-xs-12" type="file" name="nama_file" required>
                        </div>
                      </div>



                      <!-- <div class="form-group">
                        <label for="nama_kurir" class="control-label col-md-3 col-sm-3 col-xs-12">NAMA KURIR<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_kurir" class="form-control col-md-7 col-xs-12" type="text" name="nama_kurir" required>
                        </div>
                      </div>-->

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
                                echo "<option value=$row[0]>$row[1]</option>";        
                              }
                           echo "</select>";
                          ?>
                        </div>
                      </div>


                       <div class="form-group">
                        <label for="laporan" class="control-label col-md-3 col-sm-3 col-xs-12">LAPORAN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="laporan" class="form-control col-md-7 col-xs-12" type="text" name="laporan" 
                          value="<?php echo 'Proses Pengiriman..'; ?>" required readonly>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="tanggal_entri" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL ENTRI<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal_entri" class="form-control col-md-7 col-xs-12" type="text" name="tanggal_entri" required value="<?php echo date('Y-m-d')?>" readonly>
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