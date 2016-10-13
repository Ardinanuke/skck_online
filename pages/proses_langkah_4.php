<?php

	// Proses tambah pertanyaan pertama

	if(@$_POST['tombol_simpan1']){
		$pertanyaan = $_POST['pertanyaan'];
		$jawaban = $_POST['jawaban'];
		$jumlah = count($pertanyaan);
		for($i=0;$i<$jumlah;$i++){
			$pertanyaan2 = $_POST['pertanyaan'][$i];
			$jawaban2 = $_POST['jawaban'][$i];
			if(($pertanyaan2 == null) || ($jawaban2 == null)){
				header("location: ?page=langkah_4&proses=kosong");
			}else{
				$insert = mq("insert into pertanyaan (isi_pertanyaan,jawaban,type_pertanyaan,id_pengguna) value ('$pertanyaan2','$jawaban2','1','".$_SESSION['id_pengguna']."')");
				if($insert){
					header("location: ?page=langkah_4&type=2");
				}else{
					header("location: ?page=langkah_4&proses=gagal");
				}
			}		
		}


	}

	// Proses tambah pertanyaan kedua

	if(@$_POST['tombol_simpan2']){
		$pertanyaan = $_POST['pertanyaan'];
		$jawaban = $_POST['jawaban'];
		$jumlah = count($pertanyaan);
		for($i=0;$i<$jumlah;$i++){
			$pertanyaan2 = $_POST['pertanyaan'][$i];
			$jawaban2 = $_POST['jawaban'][$i];
			if(($pertanyaan2 == null) || ($jawaban2 == null)){
				header("location: ?page=langkah_4&type=2&proses=kosong");
			}else{
				$insert = mq("insert into pertanyaan (isi_pertanyaan,jawaban,type_pertanyaan,id_pengguna) value ('$pertanyaan2','$jawaban2','2','".$_SESSION['id_pengguna']."')");
				if($insert){
					$update = mq("update pengguna set status_registrasi='5' where id_pengguna='".$_SESSION['id_pengguna']."'");
					header("location: ?page=langkah_4&type=2&proses=sukses");
				}else{
					header("location: ?page=langkah_4&type=2&proses=gagal");
				}
			}
		}
	}

	// Tombol Lewati Halaman

	if(@$_POST['tombol_lewat1']){
		header("location: ?page=langkah_4&type=2");
	}

	if(@$_POST['tombol_lewat2']){
		$update = mq("update pengguna set status_registrasi='5' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_5");
		}else{
			header("location: ?page=langkah_4&type=2");
		}
	}

	// Tombol Langkah Selanjutnya

	if(@$_POST['tombol_langkah1']){
		header("location: ?page=langkah_4&type=2");
	}

	if(@$_POST['tombol_langkah2']){
		header("location: ?page=langkah_5");
	}
?>