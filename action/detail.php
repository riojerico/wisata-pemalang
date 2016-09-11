<?php 
include '../app/koneksi/koneksi.php';

	if($_POST['simpan']){
		$id_ob	=	$_POST['id_ob'];
		$detail	=	$_POST['detail'];

		mysql_query("INSERT INTO detail_objek VALUES(NULL, '$id_ob','$detail')");

		header("location:../index.php?pages=detail&id=$id_ob");
	}

	elseif ($_POST['edit']) {
		$id=$_GET['id'];

		$id_ob	=	$_POST['id_ob'];
		$detail	=	$_POST['detail'];

		mysql_query("update detail_objek set detail_objek='$detail' where id='$id'");

		header("location:../index.php?pages=detail&id=$id_ob");
	}else{
		$id=$_GET['id'];
		$id_ob=$_GET['id_ob'];

		mysql_query ("delete from detail_objek WHERE id='$id'");

		header("location:../index.php?pages=detail&id=$id_ob");
	}

 ?>