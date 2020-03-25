<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
$query = "SELECT id_user,username,fullname,level FROM user";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> USER DATA <small>Data User PT.Travellindo</small></h3>
              </div>

             
            </div>

            <div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_admin.php"><i class="fa fa-plus"></i> ADD USER DATA</a></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID_USER</th>
                          <th>NAME</th>
                          <th>FULLNAME</th>
                          <th>ACTION</th>
						  <th>LEVEL</th>
                          
                        </tr>
                      </thead>


                      <tbody>
					  <?php $i=0;
					  while($r=mysqli_fetch_array($result))
					  {
						  $id_user = $r['0'];
						  $username = $r['1'];
						  $fullname = $r['2'];
						  $level = $r['3'];
						  ?>
					  
                        <tr>
						<td><?php echo $id_user ?></td>
						<td><?php echo $username ?></td>
						<td><?php echo $fullname ?></td>
						<?php echo "<td class='center'><a href='up_admin.php?update_id=$r[0]' class='btn btn-primary btn' title='Edit Data'><i class='fa fa-edit'></i></a>
                                    <a href='p_admin.php?delete_id=$r[0]' class='btn btn-danger btn' title='Delete'><i class='fa fa-trash'></i></a></td>"; ?>
						<td><?php echo $level ?></td>
						
                        </tr>
					  <?php $i++; } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			</div>
		</div>
		</div>
    
<?php include "layout/footer.php"; ?>