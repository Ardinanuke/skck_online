<?php
	if(@$_POST['tombol_simpan']){
		$nama = tag(escape(special($_POST['nama'])));
		$tmp_lahir = tag(escape(special($_POST['tmp_lahir'])));
		$negara = tag(escape(special($_POST['negara'])));
		$kelamin = tag(escape(special($_POST['kelamin'])));
		$agama = tag(escape(special($_POST['agama'])));
		$kawin = tag(escape(special($_POST['kawin'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));
		$no_ktp = tag(escape(special($_POST['no_ktp'])));
		$no_telp = tag(escape(special($_POST['no_telp'])));
		$email = tag(escape(special($_POST['email'])));
		$pasw = tag(escape(special($_POST['pasw'])));
		$pasw2 = tag(escape(special($_POST['pasw2'])));
		$kedudukan = tag(escape(special($_POST['kedudukan'])));

		// tanggal
		$tgl = tag(escape(special($_POST['tgl'])));
		$bulan = tag(escape(special($_POST['bulan'])));
		$tahun = tag(escape(special($_POST['tahun'])));
		$tgl_lahir = $tgl."/".$bulan."/".$tahun;

		// cek email
		$cekemail = mnr(mq("select email_pengguna from pengguna where email_pengguna='".$email."'"));

		if($cekemail == 1){
			echo "<script>
			alert('Email yang dimasukkan sudah ada, coba yang lain!');
			</script>";
		}elseif($pasw != $pasw2){
			echo "<script>
			alert('Password yang dimasukkan tidak sama!');
			</script>";
		}else{
			$insert = mq("insert into pengguna (nama_pengguna,email_pengguna,password,tmp_lahir,tgl_lahir,negara,alamat,agama,j_kelamin,
				ket_kawin,pekerjaan,no_ktp,no_telp,status_registrasi,kedudukan) value ('$nama','$email','".md5($pasw2)."','$tmp_lahir','$tgl_lahir'
				,'$negara','$alamat','$agama','$kelamin','$kawin','$pekerjaan','$no_ktp','$no_telp','2','$kedudukan')");
			if($insert){
				echo "<script>
				alert('Data berhasil ditambahkan!');
				location.href = '?page=pengguna';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal ditambahkan');
				</script>";
			}
		}
	}
?>