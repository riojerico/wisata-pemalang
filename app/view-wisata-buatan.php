<?php 
include 'layout-header.php';
include 'layout-sidebar.php';
include 'layout-modal.php';

 ?>

				<div class="clearfix"> </div>
			</div>
			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-buatan">  
						<h3></h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				<div class="w3agile properties"> 
					<h3 class="w3ls-title">Wisata Buatan</h3> 
					<p class="w3-text"></p>
					<div class="properties-w3lsrow"> 
						<?php 
					$data=mysql_query("select * from wisata where id_jenis=2");
					while ($load=mysql_fetch_array($data)) {
					
					 ?>

					<div class="properties-bottom">
						<div class="properties-img">
							<img src="<?php echo $load['gambar'] ?>" alt=""> <!-- 1-image -->
							<div class="<?php if ($load['id_jenis']==1) {
								echo "view-caption rent-caption";
							}else{
								echo "view-caption";
								} ?> ">
							<!-- 2-Alamat -->
								<h4><span class="glyphicon glyphicon-map-marker"></span> Pemalang <?php if ($load['id_jenis']==1) {
									echo "Wisata Alam";
								}else{
									echo "Wisata Buatan";
									} ?> </h4> 
							</div>
							<div class="w3ls-buy">
							
								<a href="view-detail.php?id=<?php echo $load['id'] ?>" class="<?php if ($load['id_jenis']==1) {
									echo "rent";
								}else{

									} ?>">Lihat</a> 
							</div>
						</div>
						<div class="w3ls-text"> <!-- 3-Nama -->
							<h5><a href="view-detail.php?id=<?php echo $load['id'] ?>"><?php echo $load['nama_objek'] ?></a></h5>
							<h6>500 m</h6> <!-- 4-Jarak -->
							<!-- <p><b>Area :</b> 2,145 sq.ft </p>
							<p><b>Bed Rooms :</b> 2 </p> -->
						</div>
					</div> 

					<?php 
				    }
					 ?>
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //properties --> 
			
<?php 
include 'layout-brand-foot-js.php';
 ?>