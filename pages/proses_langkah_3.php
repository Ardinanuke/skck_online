<?php
	if(@$_POST['tombol_simpan1']){
		$ket = tag(escape(special($_POST['ket'])));
		$sekolah = tag(escape(special($_POST['sekolah'])));
		$tahun = tag(escape(special($_POST['tahun'])));

		if(($ket == null) || ($sekolah == null) || ($tahun == null)){
			header("location: ?page=langkah_3&proses=kosong");
		}else{
			$insert = mq("insert into pendidikan (ket_pendidikan,sekolah,tahun_lulus,type_sekolah,id_pengguna) value ('$ket','$sekolah','$tahun','1','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_3&type=2");
			}else{
				header("location: ?page=langkah_3&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_simpan2']){
		$ket = tag(escape(special($_POST['ket'])));
		$sekolah = tag(escape(special($_POST['sekolah'])));
		$tahun = tag(escape(special($_POST['tahun'])));

		if(($ket == null) || ($sekolah == null) || ($tahun == null)){
			header("location: ?page=langkah_3&type=2&proses=kosong");
		}else{
			$insert = mq("insert into pendidikan (ket_pendidikan,sekolah,tahun_lulus,type_sekolah,id_pengguna) value ('$ket','$sekolah','$tahun','2','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_3&type=3");
			}else{
				header("location: ?page=langkah_3&type=2&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_simpan3']){
		$ket = tag(escape(special($_POST['ket'])));
		$sekolah = tag(escape(special($_POST['sekolah'])));
		$tahun = tag(escape(special($_POST['tahun'])));

		if(($ket == null) || ($sekolah == null) || ($tahun == null)){
			header("location: ?page=langkah_3&type=3&proses=kosong");
		}else{
			$insert = mq("insert into pendidikan (ket_pendidikan,sekolah,tahun_lulus,type_sekolah,id_pengguna) value ('$ket','$sekolah','$tahun','3','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_3&type=4");
			}else{
				header("location: ?page=langkah_3&type=3&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_simpan4']){
		$ket = tag(escape(special($_POST['ket'])));
		$sekolah = tag(escape(special($_POST['sekolah'])));
		$tahun = tag(escape(special($_POST['tahun'])));

		if(($ket == null) || ($sekolah == null) || ($tahun == null)){
			header("location: ?page=langkah_3&type=4&proses=kosong");
		}else{
			$insert = mq("insert into pendidikan (ket_pendidikan,sekolah,tahun_lulus,type_sekolah,id_pengguna) value ('$ket','$sekolah','$tahun','4','".$_SESSION['id_pengguna']."')");
			if($insert){
				$update = mq("update pengguna set status_registrasi='4' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_3&type=4&proses=sukses");
			}else{
				header("location: ?page=langkah_3&type=4&proses=gagal");
			}
		}
	}

	// proses lewati

	if(@$_POST['tombol_lewat1']){
		header("location: ?page=langkah_3&type=2");
	}

	if(@$_POST['tombol_lewat2']){
		header("location: ?page=langkah_3&type=3");
	}

	if(@$_POST['tombol_lewat3']){
		header("location: ?page=langkah_3&type=4");
	}

	if(@$_POST['tombol_lewat4']){
		$update = mq("update pengguna set status_registrasi='4' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_4");
		}else{
			header("location: ?page=langkah_3&type=4");
		}
	}

	if(@$_POST['tombol_langkah1']){
		header("location: ?page=langkah_3&type=2");
	}

	if(@$_POST['tombol_langkah2']){
		header("location: ?page=langkah_3&type=3");
	}

	if(@$_POST['tombol_langkah3']){
		header("location: ?page=langkah_3&type=4");
	}

	if(@$_POST['tombol_langkah4']){
		header("location: ?page=langkah_4");
	}
?>