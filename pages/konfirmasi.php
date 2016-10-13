<?php
	if(@$_GET['id']){
		$update = mq("update pengguna set status_registrasi='1' where id_pengguna='".$_GET['id']."'");
		if($update){
			$pengguna = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'"));
			$_SESSION['email'] = $pengguna['email_pengguna'];
			$_SESSION['id_pengguna'] = $pengguna['id_pengguna'];
			$_SESSION['password'] = $pengguna['password'];
			header("location: ?page=langkah_1");
		}else{
			header("location: ../aktivasi?proses=gagal");
		}
	}
?>