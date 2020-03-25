<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
/*$query    = "SELECT id_disposisi, DISPOSISI.id_surat_masuk, pengirim, tanggal_surat, ditujukan, id_sifat, untuk, id_user, surat_masuk.tanggal_entri, surat_masuk.nomor_surat, surat_masuk.deskripsi FROM surat_masuk,disposisi WHERE id_disposisi='$update_id' and disposisi.id_surat_masuk = surat_masuk.id_surat_masuk";*/



$q = "SELECT id_disposisi,
 DISPOSISI.id_surat_masuk, 
 pengirim,
  tanggal_surat, 
  ditujukan,
   id_sifat, 
   untuk, 
   surat_masuk.tanggal_entri,
    surat_masuk.nomor_surat, 
    surat_masuk.deskripsi FROM surat_masuk,disposisi WHERE id_disposisi='$update_id' and disposisi.id_surat_masuk = surat_masuk.id_surat_masuk";




$result   = $conn->query($q);
?>

  <?php
            while($r=mysqli_fetch_array($result))
            {

              $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $pengirim = $r['2'];
              $tanggal_surat = $r['3'];
              $ditujukan = $r['4'];
              $id_sifat = $r['5'];
              $untuk = $r['6'];
              //$id_user = $r[''];
              $tanggal_entri = $r['7'];
             $nomor_surat = $r['8'];
             $deskripsi = $r['9'];


            ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lembar Disposisi</title>
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 80px;
                    height: 80px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 2px solid #616161;
                    margin: -1rem 0 1rem;
                }

            }
        </style>

</head>

<!--
 $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $tanggal = $r['2'];
              $ditujukan = $r['3'];
              $id_sifat = $r['4'];
              $untuk = $r['5'];
              $id_user = $r['6'];
              <body onload="window.print()">
-->

<body onload="window.print()">
    <script type="text/javascript">
        window.print();
        setTimeout(function() {window.location.href = 'table_disposisi.php'},10);
    </script>
<center>
<h1>DISPOSISI SURAT</h1>
<h1><b>SMKN 1 JENANGAN PONOROGO</b></h1>
<h2>Jl. Niken-Gandini No.78, Setono, Jenangan, Ponorogo, Jawa Timur</h2>
<h3>Telp: 089-8990-009, Fax : smknjenpo@yahoo.com</h3>
</center>
<hr>
  <table class="bordered" id="tbl">
                        <tbody>
                            <tr>
                                <td class="tgh" id="lbr" colspan="5">LEMBAR DISPOSISI</td>
                            </tr>
                            <tr>
                                <td id="right" width="18%"><strong>No Surat Masuk</strong></td>
                                <td id="left" style="border-right: none;" width="57%">: <?php echo $nomor_surat ?></td>
                                <td id="left" width="25"><strong>No.Disposisi</strong> : <?php echo $id_disposisi ?></td>
                            </tr>
                            <tr>

                                <td id="right"><strong>Tanggal Surat</strong></td>
                                <td id="left" colspan="2">: <?php echo $tanggal_surat ?></td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Nomor Surat</strong></td>
                                <td id="left" colspan="2">: <?php echo $id_surat_masuk ?></td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Asal Surat</strong></td>
                                <td id="left" colspan="2">: <?php echo $pengirim ?></td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Ditujukan</strong></td>
                                <td id="left" colspan="2">: <?php echo $ditujukan ?></td>
                            </tr>
                         <!--   <tr>
                                <td id="right"><strong>Isi Ringkas</strong></td>
                                <td id="left" colspan="2">: ''</td>
                            </tr>-->
                            <tr>
                                <td id="right"><strong>Diterima Tanggal</strong></td>
                                <td id="left" style="border-right: none;">: <?php echo $tanggal_entri ?></td>
                                <td id="left"><strong>ID</strong> : <?php echo $id_surat_masuk ?></td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Tanggal Penyelesaian</strong></td>
                                <td id="left" colspan="2">: <?php echo $tanggal_entri ?> </td>
                            </tr>
                            <tr>
                            <tr class="isi">
                                <td colspan="2">
                                    <strong>Deskripsi Surat :</strong><br/><?php echo $deskripsi ?>
                                    <div style="height: 50px;"></div>
                                    <strong>Batas Waktu</strong> : ''<br/>
                                    <strong>Sifat</strong> : ''<br/>
                                    <strong>Catatan</strong> :<br/> ''
                                    <div style="height: 25px;"></div>
                                </td>
                                <td><strong>Diteruskan Kepada</strong> : <br/>''</td>
                            </tr>

                </tbody>
            </table>
            <div id="lead">
                <p>Kepala Sekolah</p>
                <div style="height: 50px;"></div>
            </div>
        </div>
        <div class="jarak2"></div>
    </div>
    <!-- Container END -->

</body>
</html>
<?php }?>
