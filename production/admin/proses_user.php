<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{
	$id_user      = $_POST['id_user'];
	$username     = $_POST['username'];
	$fullname     = $_POST['fullname'];
	$level        = $_POST['level'];
	$password     = $_POST['password'];
	
	$q = "INSERT INTO `user`(`ID_USER`, `USERNAME`, `PASSWORD`, `FULLNAME`, `LEVEL`) VALUES ('$id_user','$username','$password','$fullname','$level')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: t_admin.php");	
	}
}
elseif(isset($_POST['submit1']))
	{
	$id_user      = $_POST['id_user'];
	$username     = $_POST['username'];
	$fullname     = $_POST['fullname'];
	$level        = $_POST['level'];
	$password     = $_POST['password'];
	$qu			  ="UPDATE `user` SET `USERNAME`='$username',`PASSWORD`='$password',`FULLNAME`='$fullname',`LEVEL`='$level' WHERE `ID_USER`='$id_user' ";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
		header ("location: t_admin.php");	
	}
	}
else
{
	$id_user = $_GET['delete_id'];
	$que = "DELETE FROM `user` WHERE `ID_USER` = '$id_user'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		header ("location: t_admin.php");	
	}
	
}
?>