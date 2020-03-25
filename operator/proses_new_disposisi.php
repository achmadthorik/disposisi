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
	/*echo "$id_disposisi, 
$id_surat_masuk,
$tanggal,
$ditujukan,
$id_sifat,
$untuk, 
$id_user";*/
	$q = "INSERT INTO `disposisi`(`id_disposisi`, `id_surat_masuk`, `tanggal`, `ditujukan`, `id_sifat`,`untuk`,`id_user`) VALUES
	 ('$id_disposisi','$id_surat_masuk','$tanggal','$ditujukan','$id_sifat','$untuk','$id_user')";


	$ck= mysqli_query($conn,$q);
	/*$hapus = "DELETE FROM `disposisi` WHERE `id_disposisi` = '$id_disposisi'";*/
	if ($ck)
	{
	header ("location: table_disposisi.php");	
	}
}

