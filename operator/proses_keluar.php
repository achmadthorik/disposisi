<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{

	$id_surat_keluar     	 = $_POST['id_surat_keluar'];
	$id_jenis     		   	= $_POST['id_jenis'];
	$pengirim     	  		 = $_POST['pengirim'];
	$tujuan    				 = $_POST['tujuan'];
	$tanggal_surat  	     = $_POST['tanggal_surat'];
	$perihal     			= $_POST['perihal'];
	$deskripsi  		   = $_POST['deskripsi'];
	$nama_file    			 = $_POST['id_surat_keluar'];
	$tanggal_entri    	 = $_POST['tanggal_entri'];
	$kurir     			= $_POST['kurir'];
	$laporan    		 = $_POST['laporan'];
	move_uploaded_file($_FILES['nama_file']['tmp_name'],"../file_keluar/$nama_file.jpg");
	$q = "INSERT INTO `surat_keluar` (`id_surat_keluar`, `id_jenis`, `pengirim`, `tujuan`, `tanggal_surat`, `perihal`, `deskripsi`, `nama_file`, `tanggal_entri`, `kurir`, `laporan`) VALUES ('$id_surat_keluar', '$id_jenis', '$pengirim', '$tujuan', '$tanggal_surat', '$perihal', '$deskripsi', '$nama_file.jpg', '$tanggal_entri', '$kurir', '$laporan')";

 	
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_keluar.php");
	}
}
elseif(isset($_POST['submit1']))
	{
		$id_surat_keluar      = $_POST['id_surat_keluar'];
	$id_jenis     = $_POST['id_jenis'];
	$pengirim        = $_POST['pengirim'];
	$tujuan     = $_POST['tujuan'];
	$tanggal_surat     = $_POST['tanggal_surat'];
	$perihal     = $_POST['perihal'];
	$deskripsi     = $_POST['deskripsi'];
	$nama_file     = $_POST['id_surat_keluar'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	$kurir	= $_POST['kurir'];
	$laporan = $_POST['laporan'];
	move_uploaded_file($_FILES['nama_file']['tmp_name'],"../file_keluar/$nama_file.jpg");
	$qu			  ="UPDATE `surat_keluar` SET `id_jenis`='$id_jenis',`pengirim`='$pengirim',`tujuan`='$tujuan',`tanggal_surat`='$tanggal_surat',`perihal`='$perihal',`deskripsi`='$deskripsi',`nama_file`='$nama_file.jpg',`tanggal_entri`='$tanggal_entri', `kurir`='$kurir', `laporan` = '$laporan' WHERE `id_surat_keluar`='$id_surat_keluar' ";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
	header ("location: table_keluar.php");	
	}
	}
	   
else
{
	$id_surat_keluar = $_GET['delete_id'];
	$que = "DELETE FROM `surat_keluar` WHERE `id_surat_keluar` = '$id_surat_keluar'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		echo "<script language='JavaScript'>
        alert('Data Berhasil Dihapus !');
        setTimeout(function() {window.location.href='table_keluar.php'},10);
        </script>";
	}
	
}
?>