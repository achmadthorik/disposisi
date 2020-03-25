<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT id_surat_masuk,jenis,pengirim,alamat_pengirim,nomor_surat,perihal,deskripsi,tanggal_surat,nama_file,tanggal_entri, id_user FROM surat_masuk, jenis WHERE jenis.id_jenis = surat_masuk.id_jenis order by tanggal_surat desc";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat Masuk<small> Data Surat Masuk STMJ</small></h3>
              </div>         
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_masuk.php"><i class="fa fa-plus"></i> MASUKKAN SURAT </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID SURAT MASUK</th>

                          <th>PENGIRIM</th>
                          <th>ALAMAT PENGIRIM</th>
                          <th>NOMOR SURAT</th>
                          <th>PERIHAL</th>
                          <th>TANGGAL SURAT</th>
                          <th>NAMA FILE</th>
                          <th>TANGGAL ENTRI</th>
                          <th>ACTION</th>
                          <th>ID JENIS</th>
                          <th>DESKRIPSI</th>
                          <th>ID USER</th>

                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_surat_masuk = $r['0'];
              $id_jenis = $r['1'];
              $pengirim = $r['2'];
              $alamat_pengirim = $r['3'];
              $nomor_surat = $r['4'];
              $perihal = $r['5'];
              $deskripsi = $r['6'];
              $tanggal_surat = $r['7'];
              $nama_file = $r['8'];
              $tanggal_entri = $r['9'];
              $id_user2 = $r['10'];
              ?>

                        <tr>
            <td><?php echo $id_surat_masuk ?></td>

            <td><?php echo $pengirim ?></td>
            <td><?php echo $alamat_pengirim ?></td>
             <td><?php echo $nomor_surat ?></td>
              <td><?php echo $perihal ?></td>

                <td><?php echo $tanggal_surat ?></td>
                 <td><?php echo $nama_file ?></td>
                  <td><?php echo $tanggal_entri ?></td>


            <?php echo "<td class='center'>
            <a href='update_masuk.php?update_id=$r[0]' class='btn btn-primary btn col-md-12' title='Edit'><i class='fa fa-edit'></i></a>
            <a href='proses_masuk.php?delete_id=$r[0]' class='btn btn-danger btn col-md-12' title='Delete'><i class='fa fa-trash'></i></a>

            
           <a href='new_disposisi.php?update_id=$r[0]' class='btn btn-success btn col-md-12' title='Disposisikan'><i class='fa fa-send'></i></a></td>"; ?>
                        <td><?php echo $id_jenis ?></td>
                        <td><?php echo $deskripsi ?></td>
                        <td><?php echo $id_user2 ?></td></tr>
                       
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
