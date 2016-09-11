<?php 
include '../app/koneksi/koneksi.php';

	if($_POST['simpan_gallery']){
		$id_ob	=	$_POST['id_ob'];
		$title	=	$_POST['title'];
		
		$gallery =	$_POST['gallery'];
		$gallery =   $_FILES['gallery'];
		$tmp_name=$gallery['tmp_name'];
		$namafile=$gallery['name'];

		$tujuan="../app/images/gallery/$id_ob-$namafile";
		$tujuan2="images/gallery/$id_ob-$namafile";

		copy($tmp_name,$tujuan);

		mysql_query("INSERT INTO gallery VALUES(NULL, '$id_ob','$tujuan2','$title')");

		header("location:../index.php?pages=detail&id=$id_ob");
	}

	elseif ($_POST['edit']) {
		$id=$_GET['id'];

		$id_ob	=	$_POST['id_ob'];
		$title	=	$_POST['title'];

		$gallery =	$_POST['gallery'];
		$gallery =   $_FILES['gallery'];
		$tmp_name=$gallery['tmp_name'];
		$namafile=$gallery['name'];

		$tujuan="../app/images/gallery/$id_ob-$namafile";
		$tujuan2="images/gallery/$id_ob-$namafile";

		copy($tmp_name,$tujuan);
		if ($namafile=="") {
			mysql_query("update gallery set title='$title' where id='$id'");
		}else{
			mysql_query("update gallery set foto='$tujuan2',title='$title' where id='$id'");
		}
		
		header("location:../index.php?pages=detail&id=$id_ob");
	}else{
		$id=$_GET['id'];
		$id_ob=$_GET['id_ob'];

		mysql_query ("delete from gallery WHERE id='$id'");

		header("location:../index.php?pages=detail&id=$id_ob");
	}

 ?>