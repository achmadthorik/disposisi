<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{
	/*
	 		  $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $tanggal = $r['2'];
              $ditujukan = $r['3'];
              $id_sifat = $r['4'];
              $untuk = $r['5'];
              $id_user = $r['6'];
            
	*/
	$id_disposisi      = $_POST['id_disposisi'];
	$id_surat_masuk     = $_POST['id_surat_masuk'];
	$tanggal     = $_POST['tanggal'];
	$ditujukan        = $_POST['ditujukan'];
	$id_sifat     = $_POST['id_sifat'];
	$untuk     = $_POST['untuk'];
	$id_user     = $_POST['id_user'];
		
	$q = "INSERT INTO `disposisi`(`id_disposisi`, `id_surat_masuk`, `tanggal`, `ditujukan`, `id_sifat`,`untuk`,`id_user`) VALUES ('$id_disposisi','$id_surat_masuk','$tanggal','$ditujukan','$id_sifat','$untuk','$id_user')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_disposisi.php");	
	}
}
elseif(isset($_POST['submit1']))
	{
	$id_disposisi      = $_POST['id_disposisi'];
	$id_surat_masuk     = $_POST['id_surat_masuk'];
	$tanggal     = $_POST['tanggal'];
	$ditujukan        = $_POST['ditujukan'];
	$id_sifat     = $_POST['id_sifat'];
	$untuk     = $_POST['untuk'];
	$id_user     = $_POST['id_user'];
	$qu			  ="UPDATE `disposisi` SET `id_disposisi`='$id_disposisi',`id_surat_masuk`='$id_surat_masuk',`tanggal`='$tanggal',`ditujukan`='$ditujukan',`id_sifat`='$id_sifat',`untuk`='$untuk',`id_user`='$id_user' WHERE `id_disposisi`='$id_disposisi' ";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
	header ("location: table_disposisi.php");	
	}
	}
	   
else
{
	$id_disposisi = $_GET['delete_id'];
	$que = "DELETE FROM `disposisi` WHERE `id_disposisi` = '$id_disposisi'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		header ("location: table_disposisi.php");	
	}
	
}
?>