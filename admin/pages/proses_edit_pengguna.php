<?php
	if(@$_POST['tombol_simpan']){
		$id_pengguna = tag(escape(special($_POST['id_pengguna'])));
		$nama = tag(escape(special($_POST['nama'])));
		$tmp_lahir = tag(escape(special($_POST['tmp_lahir'])));
		$negara = tag(escape(special($_POST['negara'])));
		$kelamin = tag(escape(special($_POST['kelamin'])));
		$kawin = tag(escape(special($_POST['kawin'])));
		$pekerjaan = tag(escape(special($_POST['pekerjaan'])));
		$alamat = tag(escape(special($_POST['alamat'])));
		$no_ktp = tag(escape(special($_POST['no_ktp'])));
		$no_telp = tag(escape(special($_POST['no_telp'])));
		$agama = tag(escape(special($_POST['agama'])));
		$kedudukan = tag(escape(special($_POST['kedudukan'])));

		// tanggal
		$tgl = tag(escape(special($_POST['tgl'])));
		$bulan = tag(escape(special($_POST['bulan'])));
		$tahun = tag(escape(special($_POST['tahun'])));
		$tgl_lahir = $tgl."/".$bulan."/".$tahun;

			$insert = mq("update pengguna set nama_pengguna='$nama',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',negara='$negara',
				alamat='$alamat',agama='$agama',j_kelamin='$kelamin',ket_kawin='$kawin',pekerjaan='$pekerjaan',no_ktp='$no_ktp',no_telp='$no_telp',kedudukan='$kedudukan'
				where id_pengguna='$id_pengguna'");
			if($insert){
				echo "<script>
				alert('Data identitas diri berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id_pengguna."&langkah=2'
				</script>";
			}else{
				echo "<script>
				window.location = '?page=edit_pengguna&proses=gagal';
				</script>";
			}
	}

	if(@$_POST['tombol_simpan2']){
		$id = $_POST['id_pengguna'];
		$patokan = $_POST['nama'];
		$jumlah = count($patokan);
		for($i=0;$i<$jumlah;$i++){
			$nama = $_POST['nama'][$i];
			$umur = $_POST['umur'][$i];
			$agama = $_POST['agama'][$i];
			$negara = $_POST['negara'][$i];
			$pekerjaan = $_POST['pekerjaan'][$i];
			$alamat = $_POST['alamat'][$i];
			$type = $i+1;

			$update = mq("update hub_keluarga set nama_keluarga='$nama', umur='$umur', agama_keluarga='$agama', kebangsaan_keluarga='$negara'
				, pekerjaan_keluarga='$pekerjaan', alamat_keluarga='$alamat' where type_keluarga='$type' && id_pengguna='$id'");
		}
			if($update){
				echo "<script>
				alert('Data hubungan keluarga berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=3';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=2';
				</script>";
			}
	}

	if(@$_POST['tombol_simpan3']){
		$id = $_POST['id_pengguna'];
		$patokan = $_POST['ket'];
		$jumlah = count($patokan);
		for($i=0;$i<$jumlah;$i++){
			$ket = $_POST['ket'][$i];
			$sekolah = $_POST['sekolah'][$i];
			$tahun = $_POST['tahun'][$i];
			$type = $i+1;

			$update = mq("update pendidikan set ket_pendidikan='$ket', sekolah='$sekolah', tahun_lulus='$tahun' where type_sekolah='$type'
				 && id_pengguna='$id'");
		}
			if($update){
				echo "<script>
				alert('Data pendidikan berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=4';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=3';
				</script>";
			}
	}


	if(@$_POST['tombol_simpan4']){
		$id = $_POST['id_pengguna'];
		$patokan = $_POST['jawaban'];
		$jumlah = count($patokan);
		for($i=0;$i<$jumlah;$i++){
			$jawaban = $_POST['jawaban'][$i];
			$id_pertanyaan = $_POST['id_pertanyaan'][$i];

			$update = mq("update pertanyaan set jawaban='$jawaban' where id_pertanyaan='$id_pertanyaan' && id_pengguna='$id'");
		}
			if($update){
				echo "<script>
				alert('Data pertanyaan pertama berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=5';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=4';
				</script>";
			}
	}

	if(@$_POST['tombol_simpan5']){
		$id = $_POST['id_pengguna'];
		$jawaban = $_POST['jawaban'];
		$update = mq("update pertanyaan2 set jawaban2='$jawaban' where id_pengguna='$id'");
			if($update){
				echo "<script>
				alert('Data pertanyaan kedua berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=6';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=5';
				</script>";
			}
	}


	if(@$_POST['tombol_simpan6']){
		$id = $_POST['id_pengguna'];
		$rambut = $_POST['rambut'];
		$muka = $_POST['muka'];
		$kulit = $_POST['kulit'];
		$tinggi = $_POST['tinggi'];
		$tanda = $_POST['tanda_istimewa'];

		$update = mq("update ciri_fisik set rambut='$rambut', muka='$muka', kulit='$kulit', tinggi='$tinggi', tanda_istimewa='$tanda' 
			where id_pengguna='$id'");
			if($update){
				echo "<script>
				alert('Data ciri fisik berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=7';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=6';
				</script>";
			}
	}


	if(@$_POST['tombol_simpan7']){
		$id = $_POST['id_pengguna'];
		$hobi = $_POST['hobi'];

		$update = mq("update hobi set kegemaran='$hobi' where id_pengguna='$id'");
			if($update){
				echo "<script>
				alert('Data hobi berhasil diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=7';
				</script>";
			}else{
				echo "<script>
				alert('Data gagal diubah!');
				window.location = '?page=edit_pengguna&id=".$id."&langkah=7';
				</script>";
			}
	}

?>