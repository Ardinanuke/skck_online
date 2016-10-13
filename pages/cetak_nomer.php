<?php
	include "../config/koneksi.php";
	include "../config/lib.php";
	$pengguna = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'"));
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style_index.css">
	</head>
<body style="background: #fff;" onload="window.print()">
<div class="form_nomer">
	<div class="batas_nomer garis_nomer">
		<h1>Registrasi SKCK Online Polresta Barelang</h1>
	</div>
	<div class="batas_nomer">
		<div class="tgl_nomer">Batam, <?php echo date("d/m/Y"); ?></div>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $pengguna['nama_pengguna']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $pengguna['alamat']; ?></td>
			</tr>
			<tr>
				<td>Nomer Registrasi</td>
				<td>:</td>
				<td><b><?php echo $pengguna['no_registrasi']; ?></b></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>