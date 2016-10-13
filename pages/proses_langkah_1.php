<?php
	if(@$_POST['tombol_simpan']){
		$nama = tag(escape(special($_POST['nama'])));
		$tmp_lahir = tag(escape(special($_POST['tmp_lahir'])));
		$negara = tag(escape(special($_POST['negara'])));
		$alamat = tag(escape(special(nl2br($_POST['alamat']))));
		$agama = tag(escape(special($_POST['agama'])));
		$kelamin = tag(escape(special($_POST['j_kelamin'])));
		$kawin = tag(escape(special($_POST['kawin'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$telp = tag(escape(special($_POST['no_telp'])));
		$ktp = tag(escape(special($_POST['no_ktp'])));
		$kedudukan = tag(escape(special($_POST['kedudukan'])));


		// tanggal
		$tgl = tag(escape(special($_POST['tgl'])));
		$bulan = tag(escape(special($_POST['bulan'])));
		$tahun = tag(escape(special($_POST['tahun'])));
		$tgl_lahir = $tgl."/".$bulan."/".$tahun;

		//proses insert
		if(($nama == null) || ($tmp_lahir == null) || ($negara == null) || ($alamat == null) || ($agama == null) || ($kelamin == null) 
			|| ($kawin == null) || ($pekerjaan == null) || ($telp == null) || ($ktp == null) || ($kedudukan == null)){
			header("location: ?page=langkah_1&tambah=kosong");
		}else{
			$insert = mq("update pengguna set nama_pengguna='$nama', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', negara='$negara', 
				alamat='$alamat', agama='$agama', j_kelamin='$kelamin', ket_kawin='$kawin', pekerjaan='$pekerjaan', no_telp='$telp', no_ktp='$ktp', status_registrasi='2', kedudukan='$kedudukan' where id_pengguna='".$_SESSION['id_pengguna']."'");
			if($insert){
				$update = mq("update pengguna set status_registrasi='2' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_1&tambah=sukses");
			}else{
				header("location: ?page=langkah_1&tambah=gagal");
			}
		}
	}

	if(@$_POST['tombol_langkah']){
		header("location: ?page=langkah_2");
	}
?>