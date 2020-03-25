<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{
$id_surat_masuk      = $_POST['id_surat_masuk'];
	$id_jenis     = $_POST['id_jenis'];
	$pengirim     = $_POST['pengirim'];
	$alamat_pengirim        = $_POST['alamat_pengirim'];
	$nomor_surat     = $_POST['nomor_surat'];
	$perihal     = $_POST['perihal'];
	$deskripsi     = $_POST['deskripsi'];
	$tanggal_surat     = $_POST['tanggal_surat'];
	$nama_file     = $_POST['nama_file'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	
	$q = "INSERT INTO `surat_masuk`(`id_surat_masuk`, `id_jenis`, `pengirim`, `alamat_pengirim`, `nomor_surat`,`perihal`,`deskripsi`,`tanggal_surat`,`nama_file`,``tanggal_entri) VALUES ('$id_surat_masuk','$id_jenis','$pengirim','$alamat_pengirim','$nomor_surat','$perihal','$deskripsi','$tanggal_surat','$nama_file','$tanggal_entri')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_masuk.php");	
	}
}
if(isset($_POST['submit1']))
	{
	$id_surat_masuk      = $_POST['id_surat_masuk'];
	$id_jenis     = $_POST['id_jenis'];
	$pengirim     = $_POST['pengirim'];
	$alamat_pengirim        = $_POST['alamat_pengirim'];
	$nomor_surat     = $_POST['nomor_surat'];
	$perihal     = $_POST['perihal'];
	$deskripsi     = $_POST['deskripsi'];
	$tanggal_surat     = $_POST['tanggal_surat'];
	$nama_file     = $_POST['nama_file'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	$qu			  ="UPDATE `surat_masuk` SET `id_jenis`='$id_jenis',`pengirim`='$pengirim',`alamat_pengirim`='$alamat_pengirim',`nomor_surat`='$nomor_surat',`perihal`='$perihal',`deskripsi`='$deskripsi',`tanggal_surat`='$tanggal_surat',`nama_file`='$nama_file',`tanggal_entri`='$tanggal_entri' WHERE `id_surat_masuk`='$id_surat_masuk' ";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
	header ("location: table_masuk.php");	
	}
	}
	   
else
{
	$id_user = $_GET['delete_id'];
	$que = "DELETE FROM `surat_masuk` WHERE `id_surat_masuk` = '$id_surat_masuk'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		header ("location: table_masuk.php");	
	}
	
}
?>