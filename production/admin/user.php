<?php include "konek.php"; 
	$query = "SELECT * FROM USER";
	$result=$koneksi->query($query);
?>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right">Tambah</button>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
				  <h4>Text in a modal</h4>
				  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
				</div>

			  </div>
			</div>
	  </div>
		<h2>Table User</h2>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">
		<table id="datatable" class="table table-striped table-bordered">
		  <thead>
			<tr>
			  <th>Username</th>
			  <th>Password</th>
			  <th>Level</th>
			  <th>Nama Lengkap</th>
			  <th>Edit</th>
			  <th>Hapus</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				while($r=mysqli_fetch_array($result)){
					$user_id = $r['0'];
					$user = $r['1'];
					$pass = $r['2'];
					$level = $r['3'];
					$nama = $r['4'];
					?>
					<tr>
						<td><?php echo $user ?></td>
						<td><?php echo $pass ?></td>
						<td><?php echo $level ?></td>
						<td><?php echo $nama ?></td>
						<?php echo "<td class='center'><span class='fa fa-pencil'><a href='up_user.php?update_id=$r[0]' class='btn btn-primary btn' title='Edit Data'><i class='fa fa-edit'></i></span></a></td>"?>
						
						<td><a href=\"delete_user.php?hapus_user=$id_user\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapus semua data user?')\"><center><i class='glyphicon glyphicon-trash'></center></a></span></td>
					</tr>
					<?php
				}
			?>
		  </tbody>
		</table>
	  </div>
	</div>
</div>