<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT id_disposisi,id_surat_masuk,tanggal,ditujukan,nama_sifat,untuk,id_user FROM disposisi, sifat where disposisi.id_sifat = sifat.id_sifat order by tanggal desc;";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> DISPOSISI <small>Data Disposisi STMJ</small></h3>
              </div>
         
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_disposisi.php"><i class="fa fa-plus"></i> TAMBAH DISPOSISI </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID DISPOSISI</th>

                          <th>ID SURAT</th>
                          <th>TANGGAL</th>
                          <th>DITUJUKAN</th>
                          <th>ID SIFAT</th>
                          <th>UNTUK</th>
                          <th>ID USER</th>
                          <th>ACTION</th>

                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_disposisi = $r['0'];
              $id_surat_masuk = $r['1'];
              $tanggal = $r['2'];
              $ditujukan = $r['3'];
              $id_sifat = $r['4'];
              $untuk = $r['5'];
              $id_user = $r['6'];

              ?>

                        <tr>
            <td><?php echo $id_disposisi ?></td>

            <td><?php echo $id_surat_masuk ?></td>
            <td><?php echo $tanggal ?></td>
             <td><?php echo $ditujukan ?></td>
              <td><?php echo $id_sifat ?></td>

                <td><?php echo $untuk ?></td>
                 <td><?php echo $id_user ?></td>



            <?php echo "<td class='center'>
            <a href='update_disposisi.php?update_id=$r[0]' class='btn btn-primary btn' title='Edit Data'><i class='fa fa-edit'></i></a>

            <a href='cetak_disposisi.php?update_id=$r[0]' class='btn btn-warning btn' title='Cetak Disposisi'><i class='fa fa-print'></i></a>
            <a href='proses_disposisi.php?delete_id=$r[0]' class='btn btn-danger btn' title='Delete'><i class='fa fa-trash'></i></a></td>

             "; ?>

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
