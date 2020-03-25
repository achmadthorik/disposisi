<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT id_surat_masuk,jenis,pengirim,alamat_pengirim,nomor_surat,perihal,deskripsi,tanggal_surat,nama_file,tanggal_entri FROM surat_masuk, jenis WHERE jenis.id_jenis = surat_masuk.id_jenis";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>  <small>Data User Disposisi STMJ/small></h3>
              </div>
           
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_masuk.php"><i class="fa fa-plus"></i> TAMBAH DISPOSISI </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-6">
                          <p class="lead">Amount Due 2/22/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>



                    <!--
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-6">
                          <p class="lead">Amount Due 2/22/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>-->
