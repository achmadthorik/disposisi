<?php
error_reporting(0);
include "koneksi.php";
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['USERNAME'];

// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$sql = "select * from user where USERNAME='$user_check'" ;
$ses_sql=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['ID_USER'];
$full =$row['FULLNAME'];
$level =$row['LEVEL'];
$pass =$row['PASSWORD'];
$id_user =$row['ID_USER'];


?>