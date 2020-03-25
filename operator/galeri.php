<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php"; 
$query = "SELECT * FROM surat_masuk";
$result=$conn->query($query);

?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Galeri Surat</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="#"><i class="fa fa-plus"></i> MASUKKAN SURAT </a></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID SURAT MASUK</th>
                          
                          <th>NAMA FILE</th>
                         
                          
                        </tr>
                      </thead>


                      <tbody>

            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_surat_masuk = $r['0'];
              $nama_file = $r['8'];
              ?>
            
                        <tr>
                           <td><?php echo $id_surat_masuk ?></td>
                    <td><img src="../file/<?php echo $nama_file; ?>" width="150" height="120"/></td>

            
           
           
                        
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