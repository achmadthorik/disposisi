
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Images</title>
      <?php
        mysqli_connect("localhost","root","");   
        mysqli_select_db("surat2");
        ?>
    <?php
    switch($_GET["act"]){
        case "del";
    $id_surat_masuk=$_GET['id_surat_masuk'];
    $qr=mysqli_query("select * FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'");
    $r=mysqli_fetch_array($qr);
    $tempat_foto = 'img/'.$r['images'];
    unlink("$tempat_foto");

    $hapus=mysqli_query("DELETE FROM surat_masuk WHERE id_surat_masuk ='$id_surat_masuk'") or die ('query gagal'.mysqli_error());
    if ($hapus){
            ?><script language="javascript">alert('Data Anda Berhasil Dihapus')</script><?php
            ?><script>document.location.href="view_image.php";</script><?php
        }
        break;
    }
    ?>
    </head>

    <body>
    <p></p>
    <center><a href="input_image.php"> Input Images </a></center>
    <br />
    <table width="349" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="32">No</td>
        <td width="166"><div align="center">Gambar</div></td>
        <td colspan="2"><div align="center">Aksi</div></td>
      </tr>

        <?php
        $sql = mysqli_query("SELECT * FROM surat_masuk ORDER BY id_surat_masuk ASC")or die ("Error!".mysqli_error());;
    while($hs = mysqli_fetch_array($sql)){
            $no++;
            $id_surat_masuk=$hs['id_surat_masuk'];
            $img=$hs['images'];
    ?>
      <tr>
        <td><? echo "$no"; ?></td>
        <td><center><img src='img/<? echo "$img";?>' title='Edit' width="150" height="120"/></center></td>
        <td width="70"><div align="center"><a href="edit_image.php?id=<? echo "$id"; ?>">Edit</div></td>
        <td width="71"><div align="center"><a href="view_image.php?act=del&id=<? echo "$id"; ?>">Hapus</div></td>
      </tr>
    <?php
    }
    ?>
    </table>

    </body>
    </html>
