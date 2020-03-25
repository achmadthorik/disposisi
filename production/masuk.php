<?php
include "konek.php";
$userid=$_POST['username'];
$psw=$_POST['password'];
$op=$_GET['op'];

if ($op=="in"){
	$sql="select * from user where USERNAME='$userid' and PASSWORD='$psw'";
	$cek=mysqli_query($koneksi,$sql);
	if (mysqli_num_rows($cek)==1){
		$c = mysqli_fetch_array($cek);
		$_SESSION['USER'] = $c['USERNAME'];
		$_SESSION['LEVEL'] = $c['LEVEL'];
		$_SESSION['NAMA_USER'] = $c['FULLNAME'];
		$_SESSION['ID_USer'] = $c['ID_USER'];
		if($c['LEVEL']=="Administrator"){
			header("location:admin.php");
		}
		elseif($c['LEVEL']=="kasir"){
			header("location:kasir.php");
		}
		else{
			die("error");
		}
	}
	else{
			 echo "<script>alert('Password dan Username salah'); window.location = 'login.php'</script>";
		}
}
elseif($op=="out"){
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:login.php");
}
?>
