<?php
	// istri/suami
	if(@$_POST['tombol_simpan1']){
		$nama = tag(escape(special($_POST['nama'])));
		$umur = tag(escape(special($_POST['umur'])));
		$agama = tag(escape(special($_POST['agama'])));
		$negara = tag(escape(special($_POST['negara'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));

		if(($nama == null) || ($umur == null) || ($agama == null) || ($negara == null) || ($pekerjaan == null) || ($alamat == null)){
			header("location: ?page=langkah_2&proses=kosong");
		}else{
			$insert = mq("insert into hub_keluarga (nama_keluarga,umur,agama_keluarga,kebangsaan_keluarga,pekerjaan_keluarga,alamat_keluarga,type_keluarga,id_pengguna)
				value ('$nama','$umur','$agama','$negara','$pekerjaan','$alamat','1','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_2&type=2");
			}else{
				header("location: ?page=langkah_2&proses=gagal");
			}
		}
	}

	// ayah
	if(@$_POST['tombol_simpan2']){
		$nama = tag(escape(special($_POST['nama'])));
		$umur = tag(escape(special($_POST['umur'])));
		$agama = tag(escape(special($_POST['agama'])));
		$negara = tag(escape(special($_POST['negara'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));

		if(($nama == null) || ($umur == null) || ($agama == null) || ($negara == null) || ($pekerjaan == null) || ($alamat == null)){
			header("location: ?page=langkah_2&type=2&proses=kosong");
		}else{
			$insert = mq("insert into hub_keluarga (nama_keluarga,umur,agama_keluarga,kebangsaan_keluarga,pekerjaan_keluarga,alamat_keluarga,type_keluarga,id_pengguna)
				value ('$nama','$umur','$agama','$negara','$pekerjaan','$alamat','2','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_2&type=3");
			}else{
				header("location: ?page=langkah_2&type=2&proses=gagal");
			}
		}
	}

	// ibu
	if(@$_POST['tombol_simpan3']){
		$nama = tag(escape(special($_POST['nama'])));
		$umur = tag(escape(special($_POST['umur'])));
		$agama = tag(escape(special($_POST['agama'])));
		$negara = tag(escape(special($_POST['negara'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));

		if(($nama == null) || ($umur == null) || ($agama == null) || ($negara == null) || ($pekerjaan == null) || ($alamat == null)){
			header("location: ?page=langkah_2&type=3&proses=kosong");
		}else{
			$insert = mq("insert into hub_keluarga (nama_keluarga,umur,agama_keluarga,kebangsaan_keluarga,pekerjaan_keluarga,alamat_keluarga,type_keluarga,id_pengguna)
				value ('$nama','$umur','$agama','$negara','$pekerjaan','$alamat','3','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_2&type=4");
			}else{
				header("location: ?page=langkah_2&type=3&proses=gagal");
			}
		}
	}

	// saudara kandung/tiri
	if(@$_POST['tombol_simpan4']){
		$nama = tag(escape(special($_POST['nama'])));
		$umur = tag(escape(special($_POST['umur'])));
		$agama = tag(escape(special($_POST['agama'])));
		$negara = tag(escape(special($_POST['negara'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));

		if(($nama == null) || ($umur == null) || ($agama == null) || ($negara == null) || ($pekerjaan == null) || ($alamat == null)){
			header("location: ?page=langkah_2&type=4&proses=kosong");
		}else{
			$insert = mq("insert into hub_keluarga (nama_keluarga,umur,agama_keluarga,kebangsaan_keluarga,pekerjaan_keluarga,alamat_keluarga,type_keluarga,id_pengguna)
				value ('$nama','$umur','$agama','$negara','$pekerjaan','$alamat','4','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_2&type=5");
			}else{
				header("location: ?page=langkah_2&type=4&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_simpan5']){
		$nama = tag(escape(special($_POST['nama_suami'])));
		$bapak = tag(escape(special($_POST['nama_bapak'])));
		$ibu = tag(escape(special($_POST['nama_ibu'])));
		$saudara = tag(escape(special($_POST['nama_saudara'])));
		$alamat = tag(escape(special($_POST['alamat'])));

		if(($nama == null) || ($bapak == null) || ($ibu == null) || ($saudara == null) || ($alamat == null)){
			header("location: ?page=langkah_2&type=5&proses=kosong");
		}else{
			$insert = mq("insert into hub_keluarga2 (nama_pasangan,nama_bapak,nama_ibu,nama_saudara,alamat_keluarga2,id_pengguna)
				value ('$nama','$bapak','$ibu','$saudara','$alamat','".$_SESSION['id_pengguna']."')");
			if($insert){
				header("location: ?page=langkah_2&type=6");
			}else{
				header("location: ?page=langkah_2&type=5&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_simpan6']){
		$nama = tag(escape(special($_POST['nama_tanggungan'])));
		$alamat = tag(escape(special($_POST['alamat_tanggungan'])));

		if(($nama == null) || ($alamat == null)){
			header("location: ?page=langkah_2&type=6&proses=kosong");
		}else{
			$insert = mq("insert into tanggungan_keluarga (nama_tanggungan,alamat_tanggungan,id_pengguna)
				value ('$nama','$alamat','".$_SESSION['id_pengguna']."')");
			if($insert){
				$update = mq("update pengguna set status_registrasi='3' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_2&type=6&proses=sukses");
			}else{
                                header("location: ?page=langkah_2&type=6&proses=gagal");
			}
		}
	}

	// proses lewati

	if(@$_POST['tombol_lewat1']){
		header("location: ?page=langkah_2&type=2");
                /*echo "<script>
		window.location = '?page=langkah_2&type=2';
		</script>";*/
	}

	if(@$_POST['tombol_lewat2']){
		header("location: ?page=langkah_2&type=3");
	}

	if(@$_POST['tombol_lewat3']){
		header("location: ?page=langkah_2&type=4");
	}

	if(@$_POST['tombol_lewat4']){
		header("location: ?page=langkah_2&type=5");
	}

	if(@$_POST['tombol_lewat5']){
		header("location: ?page=langkah_2&type=6");
	}

	if(@$_POST['tombol_lewat6']){
		$update = mq("update pengguna set status_registrasi='3' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_3");
		}else{
			header("location: ?page=langkah_2&type=6");
		}
	}

	if(@$_POST['tombol_langkah1']){
		header("location: ?page=langkah_2&type=2");
	}
	if(@$_POST['tombol_langkah2']){
		header("location: ?page=langkah_2&type=3");
	}
	if(@$_POST['tombol_langkah3']){
		header("location: ?page=langkah_2&type=4");
	}
	if(@$_POST['tombol_langkah4']){
		header("location: ?page=langkah_2&type=5");
	}
	if(@$_POST['tombol_langkah5']){
		header("location: ?page=langkah_2&type=6");
	}
	if(@$_POST['tombol_langkah6']){
		header("location: ?page=langkah_3");
	}
?>