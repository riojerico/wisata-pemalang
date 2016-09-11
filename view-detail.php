<?php 
include 'app/koneksi/koneksi.php';
$id=$_GET['id'];

$objek=mysql_fetch_array(mysql_query("select * from wisata where id='$id'"));
 ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Wisata <?php echo $objek['nama_objek'] ?>
        <small>Objek Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Wisata</li>
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
            <form role="form" method="post" action="action/detail.php">
              <div class="box-body">
                <div class="form-group col-lg-6" >
                  <label for="">Detail Wisata</label>
                  <input type="text" class="form-control" id="" name="detail" placeholder="Masukkan Detail Wisata">
                  <input type="hidden" class="form-control" id="" name="id_ob" value="<?php echo $id ?>">
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
                <td width="5%" align="center">No</td>
                <td>Detail Wisata</td>
                <td width="20%" align="center">Action</td>
              </thead>
              <tbody>
              <?php 
              $id=$_GET['id'];
              $no=1;
              $data_gallery=mysql_query("select * from detail_objek where id_objek='$id'");
              while ($load_gallery=mysql_fetch_array($data_gallery)) {
                
              
               ?>
                <td align="center"><?php echo $no ?></td>
                <td><?php echo $load_gallery['detail_objek'] ?></td>
                <td align="center"> <a href="" data-toggle="modal" data-target="#myModaldetail<?php echo $load_gallery['id'] ?>"><i class="fa fa-edit"> Ubah</i></a> | <span> <a href="action/detail.php?id=<?php echo $load_gallery['id'] ?>&id_ob=<?php echo $load_gallery['id_objek'] ?>"><i class="fa fa-eraser"> Hapus</i></a></span></td>
              </tbody>
              
              <!-- Dialog Modal -->
              <div class="modal fade" id="myModaldetail<?php echo $load_gallery['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $load_gallery['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel<?php echo $load_gallery['id'] ?>">Edit Data Jenis Wisata</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" action="action/detail.php?id=<?php echo $load_gallery['id'] ?>" method="post" enctype="multipart/form-data" >
                        <div class="box-body">
                          <div class="form-group">
                            <label for="agama" class="col-sm-4 control-label">Detail Wisata</label>
                            <div class="col-sm-8">
                              <input type="text" name="detail" class="form-control" placeholder="Masukkan Detail Wisata" autofocus required="" value="<?php echo $load_gallery['detail_objek'] ?>">
                              <input type="hidden" name="id_ob" class="form-control" value="<?php echo $load_gallery['id_objek'] ?>">
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

              $no++;
              }
                 ?>
            </table>

            <!-- gallery -->
            <!-- form start -->
            <form role="form" method="post" action="action/gallery.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-lg-6" >
                  <label for="">Gallery Wisata</label>
                  <input type="file" class="form-control" id="" name="gallery" placeholder="Masukkan Detail Wisata">
                   <label for="">Title</label>
                  <input type="text" class="form-control" id="" name="title" placeholder="Masukkan Title Gambar">
                   <input type="hidden" class="form-control" id="" name="id_ob" value="<?php echo $id ?>">
                </div>
                <br> <br> <br> <br>
                 <button type="submit" name="simpan_gallery" value="simpan_gallery" class="btn btn-primary">Submit</button>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
            </form>


            <table class="table table-hover table-striped" border="1">
              <thead>
                <td width="5%" align="center">No</td>
                <td>Detail Gallery Wisata</td>
                <td width="30%">Tittle</td>
                <td width="20%" align="center">Action</td>
              </thead>
              <tbody>
              <?php 
              
              $no=1;
              $data_gallery=mysql_query("select * from gallery where id_objek='$id'");
              while ($load_gallery=mysql_fetch_array($data_gallery)) {
                
              
               ?>
                <td align="center"><?php echo $no ?></td>
                <td><img src="app/<?php echo $load_gallery['foto'] ?>" width="200px"> </td>
                <td><?php echo $load_gallery['title'] ?></td>
                <td align="center"> <a href="" data-toggle="modal" data-target="#myModal<?php echo $load_gallery['id'] ?>"><i class="fa fa-edit"> Ubah</i></a> | <span> <a href="action/gallery.php?id=<?php echo $load_gallery['id'] ?>&id_ob=<?php echo $id ?>"><i class="fa fa-eraser"> Hapus</i></a></span></td>
              </tbody>
              
              <!-- Dialog Modal -->
              <div class="modal fade" id="myModal<?php echo $load_gallery['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $load_gallery['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel<?php echo $load_gallery['id'] ?>">Edit Data Jenis Wisata</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" action="action/gallery.php?id=<?php echo $load_gallery['id'] ?>" method="post" enctype="multipart/form-data" >
                        <div class="box-body">
                          <div class="form-group">
                          <img src="app/<?php echo $load_gallery['foto'] ?>" width="200px">
                          
                          <input type="file" class="form-control" id="" name="gallery" >
                           <label for="">Title</label>
                          <input type="text" class="form-control" id="" name="title" value="<?php echo $load_gallery['title'] ?>">
                           <input type="hidden" class="form-control" id="" name="id_ob" value="<?php echo $id ?>">

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

              $no++;
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

