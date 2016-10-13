<html>
<head>
<style type="text/css">
.detail_table h2{
font-family: opensans-bold;
}
</style>
</head>
<body>
<div class="judul">
	<h1><span class="posisi_icon3 fa fa-lg fa-user"></span>Detail Pengguna</h1>
	<div class="garis">
		<div class="lingkaran"></div>
	</div>
</div>
<div class="detail_table">
<?php
	$pengguna = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'"));
	$agama = $pengguna['agama'];
            $kelamin = $pengguna['j_kelamin'];
            $negara = $pengguna['negara'];
            $kawin = $pengguna['ket_kawin'];
            if($agama == "1"){
                $agama = "Islam";
            }elseif($agama == "2"){
                $agama = "Kristen";
            }elseif($agama == "3"){
                $agama = "Katolik";
            }elseif($agama == "4"){
                $agama = "Budha";
            }elseif($agama == "5"){
                $agama = "Hindu";
            }else{
                $agama = "Konghucu";
            }
            if($kelamin == "1"){
                $kelamin = "Laki-laki";
            }else{
                $kelamin = "Perempuan";
            }
            if($negara == "1"){
                $negara = "Indonesia";
            }elseif($negara == "2"){
                $negara = "Malaysia";
            }elseif($negara == "3"){
                $negara = "Singapura";
            }else{
                $negara = "Myanmar";
            }
            if($kawin == "1"){
                $kawin = "Kawin";
            }else{
                $kawin = "Tidak Kawin";
            }

            $no_reg = $pengguna['no_registrasi'];
            if($no_reg == ""){
            	$no_reg = "-";
            }else{
            	$no_reg = $pengguna['no_registrasi'];
            }
?>
        <h3 style='color: #444;'>Nomer Registrasi : <b><?php echo $no_reg; ?></h3>
	<h2>I. Identitas Pengguna</h2>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $pengguna['nama_pengguna']; ?></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $pengguna['tmp_lahir'].", ".$pengguna['tgl_lahir']; ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $agama; ?></td>
		</tr>
		<tr>
			<td>Kebangsaan</td>
			<td>:</td>
			<td><?php echo $negara; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $kelamin; ?></td>
		</tr>
		<tr>
			<td>Kawin / Tidak Kawin</td>
			<td>:</td>
			<td><?php echo $kawin; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><?php echo $pengguna['pekerjaan']; ?></td>
		</tr>
		<tr>
			<td>Alamat Sekarang</td>
			<td>:</td>
			<td><?php echo $pengguna['alamat']; ?></td>
		</tr>
		<tr>
			<td>No KTP</td>
			<td>:</td>
			<td><?php echo $pengguna['no_ktp']; ?></td>
		</tr>
		<tr>
			<td>No Telpon</td>
			<td>:</td>
			<td><?php echo $pengguna['no_telp']; ?></td>
		</tr>

	</table>
	<h2>II. Hubungan Keluarga</h2>
	<?php
		$keluarga = mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."'");
		if(!mnr($keluarga)){
			echo "<div class='kosong'>Kosong</div>";
		}else{
		while($d_keluarga = mfa($keluarga)){
			$agama2 = $d_keluarga['agama_keluarga'];
			$negara2 = $d_keluarga['kebangsaan_keluarga'];
			if($agama2 == "1"){
                $agama2 = "Islam";
            }elseif($agama2 == "2"){
                $agama2 = "Kristen";
            }elseif($agama2 == "3"){
                $agama2 = "Katolik";
            }elseif($agama2 == "4"){
                $agama2 = "Budha";
            }elseif($agama2 == "5"){
                $agama2 = "Hindu";
            }else{
                $agama2 = "Konghucu";
            }
			if($negara2 == "1"){
                $negara2 = "Indonesia";
            }elseif($negara2 == "2"){
                $negara2 = "Malaysia";
            }elseif($negara2 == "3"){
                $negara2 = "Singapura";
            }else{
                $negara2 = "Myanmar";
            }

            $type = $d_keluarga['type_keluarga'];
            if($type == "1"){
            	$type = "Istri / Suami";
            }elseif($type == "2"){
            	$type = "Bapak Sendiri";
            }elseif($type == "3"){
            	$type = "Ibu Sendiri";
            }else{
            	$type = "Saudara Sekandung / Tiri";
            }

			echo '
				<table class="pecah">
					<tr>
						<td colspan="3"><b>'.$type.'</b></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>'.$d_keluarga['nama_keluarga'].'</td>
					</tr>
					<tr>
						<td>Umur</td>
						<td>:</td>
						<td>'.$d_keluarga['umur'].'</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>'.$agama.'</td>
					</tr>
					<tr>
						<td>Kebangsaan</td>
						<td>:</td>
						<td>'.$negara.'</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td>'.$d_keluarga['pekerjaan_keluarga'].'</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>'.$d_keluarga['alamat_keluarga'].'</td>
					</tr>
		
				</table>
			';
		}
	}
	?>
	<div class="clear"></div>
	<h2>III. Pendidikan</h2>
	<?php
		$pendidikan = mq("select * from pendidikan where id_pengguna='".$_GET['id']."'");
		if(!mnr($pendidikan)){
			echo "<div class='kosong'>Kosong</div>";
		}else{
		while($d_pend = mfa($pendidikan)){
			$type_sekolah = $d_pend['type_sekolah'];
			if($type_sekolah == "1"){
				$sekolah = "SD / Sederajat";
			}elseif($type_sekolah == "2"){
				$sekolah = "SMP / Sederajat";
			}elseif($type_sekolah == "3"){
				$sekolah = "SMA / Sederajat";
			}else{
				$sekolah = "Univ / Perguruan Tinggi";
			}
			$ket_pend = $d_pend['ket_pendidikan'];
			if($ket_pend == "1"){
				$ket_pend = "LULUS";
			}elseif($ket_pend == "2"){
				$ket_pend = "TIDAK LULUS";
			}else{
				$ket_pend = "TIDAK MELANJUTKAN";
			}
			echo '
				<table>
					<tr>
						<td width="25%">'.$sekolah.'</td>
						<td width="5%">:</td>
						<td width="10%">'.$ket_pend.'</td>
						<td width="5%"><b>di</b></td>
						<td width="30%">'.$d_pend['sekolah'].'</td>
						<td width="5%"><b>tahun</b></td>
						<td width="5%">'.$d_pend['tahun_lulus'].'</td>
					</tr>
				</table>
			';
		}
	}
	?>
	<h2>IV. Tersangkut Perkara Pidana dan Pelanggaran</h2>
	<table>
		<tr>
			<td colspan="2"><b>A. Perkara dan Pidana</b></td>
		</tr>
	<?php
		$pertanyaan = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='1'");
		if(!mnr($pertanyaan)){
			echo "<tr><td><div class='kosong'>Kosong</div></td></tr>";
		}else{
		while($d_pertanyaan = mfa($pertanyaan)){
			echo '
				
					<tr>
						<td>'.$d_pertanyaan['isi_pertanyaan'].'</td>
						<td>'.$d_pertanyaan['jawaban'].'</td>
					</tr>
			';
		}
	}
	?>
	<tr>
		<td colspan="2"><b>B. Pelanggaran</b></td>
	</tr>
	<?php
		$per2 = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='2'");
		if(!mnr($per2)){
			echo "<tr><td><div class='kosong'>Kosong</div></td></tr>";
		}else{
		while($d_per2 = mfa($per2)){
			echo '
				
					<tr>
						<td>'.$d_per2['isi_pertanyaan'].'</td>
						<td>'.$d_per2['jawaban'].'</td>
					</tr>
			';
		}
	}
	?>
	</table>
	<h2>V. Pernahkah Saudara pergi ke luar negeri ?</h2>
	<table>
	<?php
		$pertanyaan2 = mq("select * from pertanyaan2 where id_pengguna='".$_GET['id']."'");
		if(!mnr($pertanyaan2)){
			echo "<tr><td><div class='kosong'>Kosong</div></td></tr>";
		}else{
		while($d_pertanyaan2 = mfa($pertanyaan2)){
			echo '
				
					<tr>
						<td>'.$d_pertanyaan2['isi_pertanyaan2'].'</td>
						<td>'.$d_pertanyaan2['jawaban2'].'</td>
					</tr>
			';
		}
	}
	?>
	</table>
	<h2>V. Ciri Fisik</h2>
	<?php
		$ciri = mfa(mq("select * from ciri_fisik where id_pengguna='".$_GET['id']."'"));
		if(!$ciri['rambut']){
			$rambut = "<b>Kosong</b>";
		}else{
			$rambut = $ciri['rambut'];
		}
		if(!$ciri['muka']){
			$muka = "<b>Kosong</b>";
		}else{
			$muka = $ciri['muka'];
		}
		if(!$ciri['kulit']){
			$kulit = "<b>Kosong</b>";
		}else{
			$kulit = $ciri['kulit'];
		}
		if(!$ciri['tinggi']){
			$tinggi = "<b>Kosong</b>";
		}else{
			$tinggi = $ciri['tinggi'];
		}
		if(!$ciri['tanda_istimewa']){
			$tanda = "<b>Kosong</b>";
		}else{
			$tanda = $ciri['tanda_istimewa'];
		}
	?>
	<table>
		<tr>
			<td>Rambut</td>
			<td>:</td>
			<td><?php echo $rambut; ?></td>
		</tr>
		<tr>
			<td>Muka</td>
			<td>:</td>
			<td><?php echo $muka; ?></td>
		</tr>
		<tr>
			<td>Kulit</td>
			<td>:</td>
			<td><?php echo $kulit; ?></td>
		</tr>
		<tr>
			<td>Tinggi</td>
			<td>:</td>
			<td><?php echo $tinggi; ?></td>
		</tr>
		<tr>
			<td>Tanda Istimewa</td>
			<td>:</td>
			<td><?php echo $tanda; ?></td>
		</tr>

	</table>
	<p><a class="tombol_tambah" target="_blank" href="pages/cetak_pengguna.php?id=<?php echo $_GET['id']; ?>"><span class="posisi_icon2 fa fa-lg fa-print"></span> Cetak</a></p>
</div>
</body>
</html>
