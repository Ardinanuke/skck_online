<?php
	if(@$_POST['tombol_simpan1']){
		$pertanyaan = tag(escape(special($_POST['pertanyaan'])));
		$jawaban = tag(escape(special(nl2br($_POST['jawaban']))));

		if(($pertanyaan == null) || ($jawaban == null)){
			header("location: ?page=langkah_5&proses=kosong");
		}else{
			$insert = mq("insert into pertanyaan2 (isi_pertanyaan2,jawaban2,id_pengguna) value ('$pertanyaan','$jawaban','".$_SESSION['id_pengguna']."')");
			if($insert){
				$update = mq("update pengguna set status_registrasi='6' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_5&proses=sukses");
			}else{
				header("location: ?page=langkah_5&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_lewat1']){
		$update = mq("update pengguna set status_registrasi='6' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_6");
		}else{
			header("location: ?page=langkah_5");
		}
	}

	if(@$_POST['tombol_langkah']){
		header("location: ?page=langkah_6");
	}
?>