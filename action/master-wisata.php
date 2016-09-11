<?php 
include '../app/koneksi/koneksi.php';

	if($_POST['simpan']){
		$objek	=	$_POST['objek'];
		$des	=	$_POST['des'];
		$lokasi	=	$_POST['lokasi'];
		$jenis	=	$_POST['jenis'];
		$lat	=	$_POST['lat'];
		$long	=	$_POST['long'];
		
		$gambar	=	$_POST['gambar'];
		$gambar =   $_FILES['gambar'];
		$tmp_name=$gambar['tmp_name'];
		$namafile=$gambar['name'];

		$tujuan="../app/images/gambar/$objek-$namafile";
		$tujuan2="images/gambar/$objek-$namafile";

		copy($tmp_name,$tujuan);

		mysql_query("INSERT INTO wisata VALUES (NULL,'$objek','$des','$tujuan2','$lokasi','$lat','$long','$jenis')");

		header("location:../index.php?pages=wisata");
	}

	if ($_POST['edit']) {
		$id=$_GET['id'];

		$objek	=	$_POST['objek'];
		$des	=	$_POST['des'];
		$lokasi	=	$_POST['lokasi'];
		$jenis	=	$_POST['jenis'];
		$lat	=	$_POST['lat'];
		$long	=	$_POST['long'];

		$gambar	=	$_POST['gambar'];
		$gambar =   $_FILES['gambar'];
		$tmp_name=$gambar['tmp_name'];
		$namafile=$gambar['name'];

		$tujuan="../app/images/gambar/$objek-$namafile";
		$tujuan2="images/gambar/$objek-$namafile";
		copy($tmp_name,$tujuan);

		if ($namafile=='') {
			mysql_query("update wisata set nama_objek='$objek',deskripsi='$des',alamat='$lokasi',lat='$lat',lng='$long',id_jenis='$jenis' where id='$id'");
		}else{
			mysql_query("update wisata set nama_objek='$objek',deskripsi='$des',gambar='$tujuan2',alamat='$lokasi',lat='$lat',lng='$long',id_jenis='$jenis' where id='$id'");
		}

		

		header("location:../index.php?pages=wisata");
	}else{
		$id=$_GET['id'];

		mysql_query ("delete from wisata WHERE id='$id'");

		header("location:../index.php?pages=wisata");
	}

 ?>