<?php
	session_start();
	if(@$_POST['tombol_login']){
		$email = trim($_POST['email']);
		$pasw = trim($_POST['pasw']);
		$pengguna = mq("select * from pengguna where email_pengguna='$email' && password='".md5($pasw)."'");
		$olah = mfa($pengguna);
		if($olah){
			$_SESSION['email'] = $email;
			$_SESSION['id_pengguna'] = $olah['id_pengguna'];
			$_SESSION['password'] = $pasw;
			$status = $olah['status_registrasi'];
			if($status == "1"){
				$halaman = "pages/?page=langkah_1";
			}elseif($status == "2"){
				$halaman = "pages/?page=langkah_2";
			}elseif($status == "3"){
				$halaman = "pages/?page=langkah_3";
			}elseif($status == "4"){
				$halaman = "pages/?page=langkah_4";
			}elseif($status == "5"){
				$halaman = "pages/?page=langkah_5";
			}elseif($status == "6"){
				$halaman = "pages/?page=langkah_6";
			}elseif($status == "7"){
				$halaman = "pages/?page=langkah_7";
			}elseif($status == "8"){
				$halaman = "pages/?page=langkah_8";
			}else{
				$halaman = "?proses_login=aktif";
			}

			header("location: ".$halaman."");
		}else{
			header("location: ?proses_login=gagal");
		}
	}
?>