<?php 
error_reporting(0);
include 'app/koneksi/koneksi.php';
// memulai session
// session_start();
// error_reporting(0);
// if (isset($_SESSION['level']))
// {
// 	// jika level admin
// 	if ($_SESSION['level'] == "adm")
//    {   
//    }
//    elseif ($_SESSION['level'] == "man" ) {
   	
//    }
//    elseif ($_SESSION['level'] == "am" ) {
      
//    }
//    // jika kondisi level user maka akan diarahkan ke halaman lain
//    else
//    {
//        header('location:../../');
//    }
// }
// if (!isset($_SESSION['level']))
// {
// 	header('location:../../');
// }
include 'layout-header.php';
include 'layout-sidebar.php';

switch($_GET['pages'])
{
 default:
 include 'layout-content.php';
 break;

 case "jeniswisata";
 include 'view-master-jeniswisata.php';
 break;

 case "wisata";
 include 'view-wisata.php';
 break;

 case "detail";
 include 'view-detail.php';
 break;


}

include 'layout-footer-js.php';

 ?>
 