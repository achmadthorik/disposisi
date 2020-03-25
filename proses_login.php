<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
// Membangun koneksi ke database
include "koneksi.php";
// Mencegah MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

// SQL query untuk memeriksa apakah karyawan terdapat di database?
$sql = "select * from user where PASSWORD='$password' AND USERNAME='$username'";
$query = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$c = mysqli_fetch_array($query);// Membuat Sesi/session

		$_SESSION['USERNAME'] = $c['USERNAME'];
		$_SESSION['LEVEL'] = $c['LEVEL'];
		
		if($c['LEVEL']=="Administrator"){
			header("location:/admin/index.php");
		} elseif($c['LEVEL']=="Operator"){
			header("location:/operator/dashboard.php");
		}elseif ($c['LEVEL']=="Kurir"){
			header("localhost:/kurir/dashboard.php");
		} else{
			die("error");
		}

// header("location: index.php"); // Mengarahkan ke halaman awal
} else {
// header("location: index_login.php"); // Mengarahkan ke halaman login
?>
<script language="JavaScript">
		alert('Username atau Password Salah !');
		setTimeout(function() {window.location.href='#'},10);
	</script>
<?php
}
mysqli_close($conn); // Menutup koneksi
}
}
?>
