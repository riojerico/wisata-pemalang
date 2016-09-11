<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Objek Wisata
        <small>Pages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Wisata</li>
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
            <form role="form" method="post" action="action/master-wisata.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-lg-6" >
                <div class="col-lg-3" align="right"><label for="">Objek Wisata</label></div>
                <div class="col-lg-9"><input type="text" class="form-control" id="" name="objek" placeholder="Masukkan Objek Wisata Baru"></div>

                <div class="col-lg-3" align="right"><label for="">Deskripsi Wisata</label></div>
                <div class="col-lg-9"><textarea type="text" class="form-control" id="" name="des" placeholder="Masukkan Deskripsi Wisata Baru"></textarea></div>

                <div class="col-lg-3" align="right"><label for="">Lokasi Wisata</label></div>
                <div class="col-lg-9"><textarea type="text" class="form-control" id="" name="lokasi" placeholder="Masukkan Lokasi Wisata Baru"></textarea></div>

                <div class="col-lg-3" align="right"><label for="">Jenis Wisata</label></div>
                <div class="col-lg-9">
                <select class="form-control" name="jenis">
                <option>- Pilih Jenis Wisata -</option>
                <?php 
                include 'app/koneksi/koneksi.php';
                $jenis_w=mysql_query("select * from master_jeniswisata");
                while ( $load_jns=mysql_fetch_array($jenis_w)) {
                 ?>
                  <option value="<?php echo $load_jns['id'] ?>"><?php echo $load_jns['jeniswisata'] ?></option>  
                  <?php 
                }
                   ?>
                </select></div>

                <div class="col-lg-3" align="right"><label for="">Latitude</label></div>
                <div class="col-lg-9"><input type="text" class="form-control" id="" name="lat" placeholder="Ex. -6.8616539"></div>

                <div class="col-lg-3" align="right"><label for="">Longitude</label></div>
                <div class="col-lg-9"><input type="text" class="form-control" id="" name="long" placeholder="Ex. 109.3792951"></div>

                <div class="col-lg-3" align="right"><label for="">Gambar Utama</label></div>
                <div class="col-lg-9"><input type="file" class="form-control" id="" name="gambar" placeholder="Masukkan Gambar Utama"></div>
                  
                  <br>

                </div>
                <br><br><br><br><br><br>

                 <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
            </form>


            <table class="table table-hover table-striped" border="1">
              <thead>
                <td width="5%" align="center">No</td>
                <td width="20%">Nama Objek Wisata</td>
                <td width="6%" align="center">Jenis</td>
                <td width="30%">Deskripsi</td>
                <td width="15%">Lokasi</td>
                <td width="7%">Latitude</td>
                <td width="7%">Longitude</td>
                <td width="10%" align="center">Action</td>
              </thead>
              <tbody>
              <?php 
              include 'app/koneksi/koneksi.php';
              $no=1;
              $$data_wisata=mysql_query("select * from wisata order by id desc");
              while ($load_wisata=mysql_fetch_array($$data_wisata)) {
                
              
               ?>
                <td align="center"><?php echo $no ?></td>
                <td><a href="index.php?pages=detail&id=<?php echo $load_wisata['id'] ?>"><b><?php echo $load_wisata['nama_objek'] ?></b></a><br>
                <img src="app/<?php echo $load_wisata['gambar'] ?>" width="200px"></td>
                <td align="center"><?php $jenis=$load_wisata['id_jenis']; $tampil=mysql_fetch_array(mysql_query("select * from master_jeniswisata where id='$jenis'")); echo $tampil['jeniswisata'] ?></td>
                <td><?php echo $load_wisata['deskripsi'] ?></td>
                <td><?php echo $load_wisata['alamat'] ?></td>
                <td><?php echo $load_wisata['lat'] ?></td>
                <td><?php echo $load_wisata['lng'] ?></td>

                <td align="center"> <a href="" data-toggle="modal" data-target="#myModal<?php echo $load_wisata['id'] ?>"><i class="fa fa-edit"> Ubah</i></a> | <span> <a href="action/master-wisata.php?id=<?php echo $load_wisata['id'] ?>"><i class="fa fa-eraser"> Hapus</i></a></span></td>
              </tbody>
              
              <!-- Dialog Modal -->
              <div class="modal fade" id="myModal<?php echo $load_wisata['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $load_wisata['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel<?php echo $load_wisata['id'] ?>">Edit Data Jenis Wisata</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" action="action/master-wisata.php?id=<?php echo $load_wisata['id'] ?>" method="post" enctype="multipart/form-data" >
                        <div class="box-body">
                          <div class="form-group">
                     
                              <div class="col-lg-3" align="right"><label for="">Objek Wisata</label></div>
                              <div class="col-lg-9"><input type="text" class="form-control" id="" name="objek" value="<?php echo $load_wisata['nama_objek'] ?>"></div>

                              <div class="col-lg-3" align="right"><label for="">Deskripsi Wisata</label></div>
                              <div class="col-lg-9"><textarea type="text" class="form-control" id="" name="des" value=""><?php echo $load_wisata['deskripsi'] ?></textarea></div>

                              <div class="col-lg-3" align="right"><label for="">Lokasi Wisata</label></div>
                              <div class="col-lg-9"><textarea type="text" class="form-control" id="" name="lokasi" value=""><?php echo $load_wisata['alamat'] ?></textarea></div>

                              <div class="col-lg-3" align="right"><label for="">Jenis Wisata</label></div>
                              <div class="col-lg-9">
                              <select class="form-control" name="jenis">
                              <option value="<?php echo $load_wisata['id_jenis'] ?>">- <?php $jenis=$load_wisata['id_jenis']; $tampil=mysql_fetch_array(mysql_query("select * from master_jeniswisata where id='$jenis'")); echo $tampil['jeniswisata'] ?> -</option>
                              <?php 
                              include 'app/koneksi/koneksi.php';
                              $jenis_w=mysql_query("select * from master_jeniswisata");
                              while ( $load_jns=mysql_fetch_array($jenis_w)) {
                               ?>
                                <option value="<?php echo $load_jns['id'] ?>"><?php echo $load_jns['jeniswisata'] ?></option>  
                                <?php 
                              }
                                 ?>
                              </select></div>

                              <div class="col-lg-3" align="right"><label for="">Latitude</label></div>
                              <div class="col-lg-9"><input type="text" class="form-control" id="" name="lat" value="<?php echo $load_wisata['lat'] ?>"></div>

                              <div class="col-lg-3" align="right"><label for="">Longitude</label></div>
                              <div class="col-lg-9"><input type="text" class="form-control" id="" name="long" value="<?php echo $load_wisata['lng'] ?>"></div>

                              <div align="center">
                              <img src="app/<?php echo $load_wisata['gambar'] ?>" width="200px"></div>

                              <div class="col-lg-3" align="right"><label for="">Gambar Utama</label></div>
                              <div class="col-lg-9"><input type="file" class="form-control" id="" name="gambar" ></div>

                        </div>
                        <div align="center"><br><br>
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

