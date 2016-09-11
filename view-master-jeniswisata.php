<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jenis Wisata
        <small>Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Jenis Wisata</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="action/master-jeniswisata.php">
              <div class="box-body">
                <div class="form-group col-lg-6" >
                  <label for="">Jenis Wisata</label>
                  <input type="jenis" class="form-control" id="" name="jenis" placeholder="Masukkan Jenis Wisata Baru">
                </div>
                <br>
                 <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
            </form>


            <table class="table table-hover table-striped" border="1">
              <thead>
                <td width="5%" align="center">ID</td>
                <td>Jenis Wisata</td>
                <td width="20%" align="center">Action</td>
              </thead>
              <tbody>
              <?php 
              include 'app/koneksi/koneksi.php';
              $data_jenis=mysql_query("select * from master_jeniswisata");
              while ($load_jenis=mysql_fetch_array($data_jenis)) {
                
              
               ?>
                <td align="center"><?php echo $load_jenis['id'] ?></td>
                <td><?php echo $load_jenis['jeniswisata'] ?></td>
                <td align="center"> <a href="" data-toggle="modal" data-target="#myModal<?php echo $load_jenis['id'] ?>"><i class="fa fa-edit"> Ubah</i></a> | <span> <a href="action/master-jeniswisata.php?id=<?php echo $load_jenis['id'] ?>"><i class="fa fa-eraser"> Hapus</i></a></span></td>
              </tbody>
              
              <!-- Dialog Modal -->
              <div class="modal fade" id="myModal<?php echo $load_jenis['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $load_jenis['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel<?php echo $load_jenis['id'] ?>">Edit Data Jenis Wisata</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" action="action/master-jeniswisata.php?id=<?php echo $load_jenis['id'] ?>" method="post" enctype="multipart/form-data" >
                        <div class="box-body">
                          <div class="form-group">
                          <label for="agama" class="col-sm-4 control-label">ID</label>
                            <div class="col-sm-8">
                              <input type="text" name="id" class="form-control" placeholder="Masukkan ID" autofocus required="" value="<?php echo $load_jenis['id'] ?>">
                            </div>
                            <br><br>
                            <label for="agama" class="col-sm-4 control-label">Jenis Wisata</label>
                            <div class="col-sm-8">
                              <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Wisata" autofocus required="" value="<?php echo $load_jenis['jeniswisata'] ?>">
                            </div>

                          </div>
                        </div>
                        <div align="center">
                      <button type="submit" value="edit" name="edit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                      </div>
                      </form>
                    </div>
                    <div class="modal-footer" align="center">
                      
                    </div>
                             
                  </div>
                </div>
              </div>
              <?php 
              }
                 ?>
            </table>


          </div>
          <!-- /.box -->          

        </div>
       



      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

