<?php include "./konek.php"; 
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT id_user,username,fullname,level,password FROM USER WHERE ID_USER='$update_id'";
$result   = $koneksi->query($query);

?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>EDIT USER</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> UPDATE USER <small>Administrator / Operator</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="p_admin.php">
						<?php
						while($r=mysqli_fetch_array($result))
						{
							$id_user=$r[0];
							$username=$r[1];
							$fullname=$r[2];
							$level=$r[3];
							$password=$r[4];
							$level=array('Administrator','Operator');
						
						
						?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id-user"> ID USER <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-user" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_user ?>" readonly name="id_user">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">USERNAME <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $username ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fullname" class="control-label col-md-3 col-sm-3 col-xs-12">FULLNAME<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fullname" class="form-control col-md-7 col-xs-12" type="text" name="fullname" required value="<?php echo $fullname ?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LEVEL<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required type="text" name="level" id="level">
                            <?php 
							foreach ($level as $l){
								echo "<option value='$l'";
								echo $r[3]==$l?'selected="selected"':'';
								echo ">$l</option>";
							}
							echo "</select>";
							?>
                            
                          
                        </div>
						
                      </div>
                      <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">PASSWORD<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password" required value="<?php echo $password ?>">
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
	