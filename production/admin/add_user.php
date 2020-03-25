<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
date_default_timezone_set('Asia/Jakarta');

$q1 = "SELECT max(id_user) as id from user";
$h1 = mysqli_query($conn,$q1);
$d1 = mysqli_fetch_array($h1);
$id = $d1['id'];
$id_urut = (int) substr($id, 3,3);
$id_urut++;
$char1   ="U";
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
                    <h2> TAMBAH USER <small>Administrator / Operator</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="p_admin.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id-user"> ID USER <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-user" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$nid";?>" readonly name="id_user">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">USERNAME <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fullname" class="control-label col-md-3 col-sm-3 col-xs-12">FULLNAME<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fullname" class="form-control col-md-7 col-xs-12" type="text" name="fullname" required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LEVEL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required type="text" name="level" id="level">
                            <option>Choose option</option>
                            <option value="administrator">Administrator</option>
                            <option value="operator">Operator</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">PASSWORD<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password" required>
                        </div>
                      </div>
                      
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