<?php
error_reporting(0);
session_start();
include '../../koneksi/koneksi.php';
$username = mysql_real_escape_string($_POST['username']);
$password = $_POST['password'];
$passwordmd5 = md5($password);
// query untuk mendapatkan record dari username
$query = "SELECT * FROM login WHERE username = '$username' ";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$data['password'];
// cek kesesuaian password

if ($passwordmd5 == $data['password'] && $data['id_grup']=='adm')
{
echo "<div align='center'>
  <font color='green'><strong>Success!</strong></font> Login Successful.
  </div>";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['id_grup'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['id'] = $data['id'];
    //Penggunaan Meta Header HTTP
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../dashboard/index.php?pages-first">';    
	exit;
}
elseif ($passwordmd5 == $data['password'] && $data['id_grup']=='man')
{
echo "<div align='center'>
  <font color='green'><strong>Success!</strong></font> Login Successful.
  </div>";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['id_grup'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['id'] = $data['id'];
    //Penggunaan Meta Header HTTP
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../dashboard/manager.php?pages=pelamar-masuk">';    
	exit;
}
else 
echo '<div align="center"><font color="red"><strong>Warning!</strong></font> Login Unsuccessful.<br>Please check your username or your password.</div>';

 echo '<META HTTP-EQUIV="Refresh" Content="2; URL=../../">';


?>
