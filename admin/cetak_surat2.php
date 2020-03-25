<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT id_surat_keluar, id_jenis, pengirim, tujuan,tanggal_surat, perihal, deskripsi, tanggal_entri, kurir, laporan FROM surat_keluar where id_surat_keluar = '$update_id'";;
$result   = $conn->query($query);
?>

  <?php
            while($r=mysqli_fetch_array($result))
            {

              $id_surat_keluar = $r['0'];
              $id_jenis = $r['1'];
              $pengirim = $r['2'];
              $tujuan = $r['3'];
              $tanggal_surat = $r['4'];
              $perihal = $r['5'];
              $deskripsi = $r['6'];
              $tanggal_entri = $r['7'];
              $kurir = $r['8'];
             $laporan = $r['9'];


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
                border: 0px  solid #444;
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
                    border: 0px  solid #444;
                    padding: 5px!important;

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
                    width: 100px;
                    height: 100px;
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

    <img src="layout/lg.png" class="logodisp"/>
<center>

<h1>DINAS PENDIDIKAN</h1>
<h1><b>SMKN 1 JENANGAN PONOROGO</b></h1>
<h2>Jl. Niken-Gandini No.78, Setono, Jenangan, Ponorogo, Jawa Timur</h2>
<h3>Telp: 089-8990-009, Fax : smknjenpo@yahoo.com</h3>
</center>
<hr>
<!--
              $id_surat_keluar = $r['0'];
              $id_jenis = $r['1'];
              $pengirim = $r['2'];
              $tujuan = $r['3'];
              $tanggal_surat = $r['4'];
              $perihal = $r['5'];
              $deskripsi = $r['6'];
              $tanggal_entri = $r['7'];
              $kurir = $r['8'];
             $laporan = $r['9'];

-->
  <table class="bordered" id="tbl">
               <tbody>
                            
                            <tr>
                                <td id="right" width="18%"><strong>Nomor </strong></td>
                                <td id="left" style="border-right: none;" width="57%">: <?php echo $id_surat_keluar; ?></td>
                                <td id="left" width="25"><strong></strong></td>
                            </tr>
                            
                            
                            <tr>
                                <td id="right"><strong>Tujuan</strong></td>
                                <td id="left" colspan="2">: <?php echo $tujuan ?></td>
                            </tr>
                            
                            <tr>
                                <td id="right"><strong>Hal</strong></td>
                                <td id="left" colspan="2">: <?php echo $perihal ?></td>
                                
                            </tr>
                            <tr>
                                <td id="right"><strong>Tanggal Penyelesaian</strong></td>
                                <td id="left" colspan="2">: <?php echo $tanggal_entri ?></td>
                            </tr>
                            <tr>
                            <tr class="isi">
                                <td colspan="3">
                                    
                                    <br/>
                                    <br/><?php echo $deskripsi ?>
                                    <div style="height: 50px;"></div>
                                    
                                    
                                </td>
                        
                                
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
