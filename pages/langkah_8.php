<?php
	$no_registrasi = mfa(mq("select * from pengguna where id_pengguna='".$_SESSION['id_pengguna']."'"));
?>
<div class="langkah_terakhir">
	<p class="kata1">SELAMAT !!</p>
	<p class="kata2">Registrasi online SKCK berhasil</p>
	<p class="kata4">Nomer Registrasi Anda adalah <b><?php echo $no_registrasi['no_registrasi']; ?></b>, dan harap dibawa ketika verifikasi.</p>
	<p class="kata3">Silahkan download formulir registrasi dibawah ini..</p>
	<p><a target="_blank" href="cetak_registrasi.php?id=<?php echo $_SESSION['id_pengguna']; ?>">Cetak Formulir Registrasi</a></p>
	<p><a target="_blank" href="cetak_nomer.php?id=<?php echo $_SESSION['id_pengguna']; ?>">Cetak Nomer Registrasi</a></p>
        <p><a target="_blank" href="cetak_tik.php?id=<?php echo $_SESSION['id_pengguna']; ?>">Cetak Kartu Tik</a></p>
</div>