<?php
	$db = "skck_online";
	$koneksi = mysql_connect("localhost","root","") or die(mysql_error());
	$database = mysql_select_db($db,$koneksi) or die(mysql_error());
?>
