<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{
	$id_surat_masuk      = $_POST['id_surat_masuk'];
	$id_jenis    		 = $_POST['id_jenis'];
	$pengirim     		= $_POST['pengirim'];
	$alamat_pengirim     = $_POST['alamat_pengirim'];
	$nomor_surat     = $_POST['nomor_surat'];
	$perihal     = $_POST['perihal'];
	$deskripsi     = $_POST['deskripsi'];
	$tanggal_surat     = $_POST['tanggal_surat'];
	$nama_file     = $_POST['id_surat_masuk'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	$id_user     = $_POST['id_user'];
	move_uploaded_file($_FILES['nama_file']['tmp_name'],"../file/$nama_file.jpg");
	
	$q = "INSERT INTO `surat_masuk` (`id_surat_masuk`, `id_jenis`, `pengirim`, `alamat_pengirim`, `nomor_surat`, `perihal`, `deskripsi`, `tanggal_surat`, `nama_file`, `tanggal_entri`,`id_user`)  VALUES ('$id_surat_masuk','$id_jenis','$pengirim','$alamat_pengirim','$nomor_surat','$perihal','$deskripsi','$tanggal_surat','$nama_file.jpg','$tanggal_entri','$id_user')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_masuk.php");	
	}
	
}
elseif(isset($_POST['submit1']))
	{
	$id_surat_masuk      = $_POST['id_surat_masuk'];
	$id_jenis     = $_POST['id_jenis'];
	$pengirim     = $_POST['pengirim'];
	$alamat_pengirim        = $_POST['alamat_pengirim'];
	$nomor_surat     = $_POST['nomor_surat'];
	$perihal     = $_POST['perihal'];
	$deskripsi     = $_POST['deskripsi'];
	$tanggal_surat     = $_POST['tanggal_surat'];
	$nama_file     = $_POST['id_surat_masuk'];
	$tanggal_entri     = $_POST['tanggal_entri'];
	$id_user     = $_POST['id_user'];
	move_uploaded_file($_FILES['nama_file']['tmp_name'],"../file/$nama_file.jpg");
	/*$qu			  ="UPDATE `surat_masuk` SET `id_jenis`='$id_jenis',`pengirim`='$pengirim',`alamat_pengirim`='$alamat_pengirim',`nomor_surat`='$nomor_surat',`perihal`='$perihal',`deskripsi`='$deskripsi',`tanggal_surat`='$tanggal_surat',`nama_file`='$nama_file.jpg',`tanggal_entri`='$tanggal_entri' WHERE `id_surat_masuk`='$id_surat_masuk' ";*/
	$qu = "UPDATE `surat_masuk` SET `id_jenis`='$id_jenis',`pengirim`='$pengirim',`alamat_pengirim`='$alamat_pengirim',`nomor_surat`='$nomor_surat',`perihal`='$perihal',`deskripsi`='$deskripsi',`tanggal_surat`='$tanggal_surat',`nama_file`='$nama_file.jpg',`tanggal_entri`='$tanggal_entri', `id_user`='$id_user' WHERE `id_surat_masuk` = '$id_surat_masuk'";

	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
		header ("location: table_masuk.php");	
	}
	}
	   
else
{
	$id_surat_masuk = $_GET['delete_id'];
	$que = "DELETE FROM `surat_masuk` WHERE `id_surat_masuk` = '$id_surat_masuk'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		echo "<script language='JavaScript'>
        alert('Data Berhasil Dihapus !');
        setTimeout(function() {window.location.href='table_masuk.php'},10);
        </script>";
	}
	
}
?>

