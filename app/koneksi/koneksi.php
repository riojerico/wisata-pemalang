<?php 
error_reporting(0);
$con = mysql_connect("localhost","root","");
if (!$con) {
	die('Cannot Connect'.mysql_error());
}
mysql_select_db("rod_pariwisata");
 ?>