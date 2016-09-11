<?php 
include '../app/koneksi/koneksi.php';

	if($_POST['simpan']){
		$jenis	=	$_POST['jenis'];

		mysql_query("INSERT INTO master_jeniswisata VALUES(NULL, '$jenis')");

		header("location:../index.php?pages=jeniswisata");
	}

	if ($_POST['edit']) {
		$id=$_GET['id'];

		$data_id=$_POST['id'];
		$data_jenis=$_POST['jenis'];

		mysql_query("update master_jeniswisata set id='$data_id',jeniswisata='$data_jenis' where id='$id'");

		header("location:../index.php?pages=jeniswisata");
	}else{
		$id=$_GET['id'];

		mysql_query ("delete from master_jeniswisata WHERE id='$id'");

		header("location:../index.php?pages=jeniswisata");
	}

 ?>