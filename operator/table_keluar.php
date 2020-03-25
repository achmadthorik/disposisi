<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT id_surat_keluar,jenis,pengirim,tujuan,tanggal_surat,perihal,deskripsi,nama_file,tanggal_entri, kurir, laporan FROM surat_keluar, jenis WHERE jenis.id_jenis = surat_keluar.id_jenis order by tanggal_surat asc";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> SURAT KELUAR <small>Data Surat Keluar STMJ</small></h3>
              </div>

            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_keluar.php"><i class="fa fa-plus"></i> TAMBAH SURAT KELUAR </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID SURAT KELUAR</th>
                          <th>PENGIRIM</th>
                          <th>TUJUAN</th>
                          <th>TANGGAL SURAT</th>
                          <th>PERIHAL</th>
                          <th>NAMA FILE</th>
                          <th>TANGGAL ENTRI</th>
                          <th>ACTION</th>
                          <th>ID JENIS</th>
                           <th>KURIR</th>
                          <th>LAPORAN</th>
                          <th>DESKRIPSI</th>
                         
                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_surat_keluar = $r['0'];
              $id_jenis = $r['1'];
              $pengirim = $r['2'];
              $tujuan = $r['3'];
              $tanggal_surat = $r['4'];
              $perihal = $r['5'];
              $deskripsi = $r['6'];
              $nama_file = $r['7'];
              $tanggal_entri = $r['8'];
              $kurir = $r['9'];
              $laporan = $r['10'];
              ?>

                        <tr>
            <td><?php echo $id_surat_keluar ?></td>

            <td><?php echo $pengirim ?></td>
            <td><?php echo $tujuan ?></td>
             <td><?php echo $tanggal_surat ?></td>
              <td><?php echo $perihal ?></td>

                <td><?php echo $nama_file ?></td>
                  <td><?php echo $tanggal_entri ?></td>


            <?php echo "<td class='center'>
            <a href='update_keluar.php?update_id=$r[0]' class='btn btn-primary btn col-md-12' title='Edit Data'><i class='fa fa-edit'></i></a>
              <a href='cetak_surat2.php?update_id=$r[0]' class='btn btn-warning btn col-md-12' title='cetak'><i class='fa fa-print'></i></a>
            <a href='proses_keluar.php?delete_id=$r[0]' class='btn btn-danger btn col-md-12' title='Delete'><i class='fa fa-trash'></i></a></td>"; ?>
                        <td><?php echo $id_jenis ?></td>
                        
                        <td><?php echo $kurir ?></td>
                        <td><?php echo $laporan ?></td>
                        <td><?php echo $deskripsi ?></td>
                      </tr>
            <?php $i++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>


<?php include "layout/footer.php"; ?>
