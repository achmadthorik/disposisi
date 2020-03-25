<?php include "koneksi.php"; 
	$kd_user = $_SESSION['ID_USER'];
	$query = "SELECT * FROM USER where ID_USER!='$kd_user'";
	$result=$koneksi->query($query);
	//View Admin
	 $query2 = "Select * from USER where ID_USER='$kd_user'";
	 $sql2 = mysqli_query($koneksi, $query2);
	 $data2 = mysqli_fetch_array($sql2);
	 $id2	= $data2['ID_USER'];
	 $user2	= $data2['USER'];
	 $pass2 	= $data2['PASS'];
	 $full2	= $data2['NAMA_USER'];
	 $level2	= $data2['LEVEL'];
	//End View Admin
?>
<?php 
	//error_reporting(0);
	include "koneksi.php";
	$cek = "SELECT max(ID_USER) as kode from USER";
	$hasil = mysqli_query($koneksi,$cek);
	$data  = mysqli_fetch_array($hasil);
	$kode  = $data['kode'];
	$no_urut = (int) substr($kode, 3, 3);
	$no_urut++;
	$char = "USR";
	$newID = $char.sprintf("%03s",$no_urut);
?>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right">Tambah</button>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">
				<form action="" method="POST">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
					ID User
                    <input type="text" class="form-control" name="id_user" value="<?php echo $newID; ?>" readonly />
					</div>
					<div class="form-group">
					Username
                    <input type="text" class="form-control" name="user" required/>
					</div>
					<div class="form-group">
					Password
                    <input type="text" class="form-control" name="pass" required/>
					</div>
					<div class="form-group">
					Level
					<select name="level" class="form-control" required/>
						<option value="">=== Level ===</option>
						<option value="admin">Admin</option>
						<option value="kasir">Kasir</option>
					</select>
                    </div>
					<div class="form-group">
					Nama Lengkap
                    <input type="text" class="form-control" name="naleng" required/>
					</div>
				</div>
				<div class="modal-footer">
				  <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-primary" name="submit">Save</button>
				</div>
				</form>
			  </div>
			</div>
			<?php
			if (isset($_POST['submit'])) {
				
				$id_user = $_POST['id_user'];
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$level = $_POST['level'];
				$naleng = $_POST['naleng'];
				
				// $tgl = date("Y-m-d H:i:s");

				//mebuatsql
				$sql = "insert into USER values('$id_user','$user','$pass', '$level','$naleng')" ;
				
				//menjalankansql
				$cek = mysqli_query($koneksi,$sql);
				if ($cek) {
						echo "<script>alert('Data User berhasil di simpan.'); window.location = 'admin.php?p=user'</script>";
					}
					else
					{
						 echo "<script>alert('Data User tidak dapat disimpan.'); window.location = 'admin.php?p=user'</script>";
					}
				}
			?>	
	  </div>
		<h2>Table User</h2>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">
		<table id="datatable" class="table table-striped table-bordered">
		  <thead>
			<tr>
			  <th>ID User</th>
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
			echo "<tr>
			 <td>$id2</td>
			 <td>$user2</td>
			 <td>*****</td>
			 <td>$level2</td>
			 <td>$full2</td>
			 <td><center>Akun Sedang Digunakan</center></td>
			 <td><center>Akun Sedang Digunakan</center></td>
			 </tr>";
				while($r=mysqli_fetch_array($result)){
					$user_id = $r['0'];
					$user = $r['1'];
					$pass = $r['2'];
					$level = $r['3'];
					$nama = $r['4'];
					echo "<tr>
					<td>$user_id</td>
					<td>$user</td>
					<td>*****</td>
					<td>$level</td>
					<td>$nama</td>
					<td><a data-toggle='modal' data-target='.bs-example-modal-lg' href=''><center><i class='fa fa-edit'></center></a></td>
					<td><a href=\"admin.php?p=delete_user&hapus_user=$user_id\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapus semua data user ini?')\"><center><i class='glyphicon glyphicon-trash'></center></a></span></td>
					</tr>";
				}
			?>
		  </tbody>
		</table>
	  </div>
	</div>
</div>