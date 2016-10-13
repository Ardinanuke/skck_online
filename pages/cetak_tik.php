<?php
	include "../config/koneksi.php";
	include "../config/lib.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SKCK Online Polresta Barelang</title>
	<link rel="stylesheet" type="text/css" href="../css/style_tik.css">
</head>
<body onload="window.print()">
	<div class="form_tik">
		<h1>KARTU Tik</h1>
		<div class="table_batas">
		<?php
			$pengguna = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'"));

			$nama = $pengguna['nama_pengguna'];
			if($nama == ""){
				$nama = "-";
			}else{
				$nama = $pengguna['nama_pengguna'];
			}
			$kelamin = $pengguna['j_kelamin'];
			if($kelamin == 1){
				$kelamin = "Laki-laki";
			}else{
				$kelamin = "Perempuan";
			}
			$negara = $pengguna['negara'];
			if($negara == 1){
				$negara = "Indonesia";
			}elseif($negara == 2){
				$negara = "Malaysia";
			}elseif($negara == 3){
				$negara = "Singapura";
			}else{
				$negara = "Myanmar";
			}

			$no_ktp = $pengguna['no_ktp'];
			if($no_ktp == ""){
				$no_ktp = "-";
			}else{
				$no_ktp = $pengguna['no_ktp'];
			}

			$agama = $pengguna['agama'];
			if($agama == 1){
				$agama = "Islam";
			}elseif($agama == 2){
				$agama = "Kristen";
			}elseif($agama = 3){
				$agama = "Katolik";
			}elseif($agama == 4){
				$agama = "Budha";
			}elseif($agama == 5){
				$agama = "Hindu";
			}else{
				$agama = "Konghucu";
			}

			$tmp_lahir = $pengguna['tmp_lahir'];
			if($tmp_lahir == ""){
				$tmp_lahir = "-";
			}else{
				$tmp_lahir = $pengguna['tmp_lahir'];
			}

			$alamat = $pengguna['alamat'];
			if($alamat == ""){
				$alamat = "-";
			}else{
				$alamat = $pengguna['alamat'];
			}

			$pekerjaan = $pengguna['pekerjaan'];
			if($pekerjaan == ""){
				$pekerjaan = "-";
			}else{
				$pekerjaan = $pengguna['pekerjaan'];
			}
			$kedudukan = $pengguna['kedudukan'];
			if($kedudukan == 1){
				$kedudukan = "Anak";
			}else{
				$kedudukan = "Orang tua";
			}
		?>
			<table>
				<?php // kolom 1 ?>
				<tr class="garis_tik">
					<td class="angka">1.</td>
					<td>Nama : <b><?php echo $nama; ?></b></td>
					<td class="titik2"></td>
					<td width="30%"></td>
					<td width="20%" rowspan="5" colspan="2" class="foto_tik">PHOTO</td>
				</tr>

				<tr class="garis_tik">
					<td class="angka">2.</td>
					<td>Jenis Kelamin : <b><?php echo $kelamin; ?></b></td>
					<td class="titik2"></td>
					<td width="30%"></td>
				</tr>
				<?php // kolom 2 ?>
				<tr>
					<td class="angka">3.</td>
					<td colspan="1">Kebangsaan : <b><?php echo $negara; ?></b></td>
				</tr>
				<tr class="garis_tik">
					<td class="angka"></td>
					<td colspan="3"><span class="panjang">a.</span> No. KTP : <b><?php echo $no_ktp; ?></b></td>
				</tr>
				<?php // kolom 3 ?>
				<tr class="garis_tik">
					<td class="angka">4.</td>
					<td colspan="3">Agama : <b><?php echo $agama; ?></b></td>
				</tr>
				<?php // kolom 4 ?>
				<tr>
					<td class="angka">5.</td>
					<?php
						date_default_timezone_set('Asia/Jakarta');
						$tgl_lahir = $pengguna['tgl_lahir'];
						$pecah = explode("/", $tgl_lahir);
						$tgl = $pecah[0];
						$bulan = $pecah[1];
						$tahun = $pecah[2];
						$tgl_sekarang = date("d-m-Y");
						$tgl1 = "".$tgl."-".$bulan."-".$tahun."";
						$tgl2 = "".date("d-m-Y")."";
						$selisih = strtotime($tgl2) - strtotime($tgl1);
						$umur = $selisih/(360*360*240);
						$hasil_umur = round($umur);
					?>
					<td class="garis_right" colspan="4"><span class="panjang">a.</span> Tgl lahir / Umur : <b><?php echo $tgl_lahir." / ".$hasil_umur." Tahun"; ?></b></td>
				</tr>
				<tr class="garis_tik">
					<td class="angka"></td>
					<td class="garis_right" colspan="4"><span class="panjang">b.</span> Tempat Lahir : <b><?php echo $tmp_lahir; ?></b></td>
				</tr>
				<?php // kolom 5 ?>
				<tr class="garis_tik">
					<td class="angka">6.</td>
					<td colspan="1">Alamat : <b><?php echo $alamat; ?></b></td>
					<td class="angka garis_left">7.</td>
					<td colspan="2" class="garis_right">Perubahan Alamat : </td>
				</tr>
				<?php // kolom 6 ?>
				<tr class="garis_tik">
					<td class="angka" valign="top">8.</td>
					<td colspan="1">Kedudukan dalam keluarga : <b><?php echo $kedudukan; ?></b></td>
					<td class="angka garis_left" valign="top">9.</td>
					<td colspan="2" class="garis_right">
					<ul type="circle">
						<?php
							$bapak = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='2'"));
							$ibu = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='3'"));
						?>
						<li>Nama Bapak : <b><?php echo $bapak['nama_keluarga']; ?></b></li>
						<li>Nama Ibu : <b><?php echo $ibu['nama_keluarga']; ?></b></li>
						<li>Alamat : <b><?php echo $bapak['alamat_keluarga']; ?></b></li>
					</ul>
					</td>
				</tr>
				<?php // kolom 7 ?>
				<tr class="garis_tik">
					<td>10.</td>
					<td colspan="4" class="garis_right">Pekerjaan : <b><?php echo $pekerjaan; ?></b></td>
				</tr>
				<?php // kolom 8 ?>
				<tr class="garis_tik">
					<?php
						$keluarga2 = mfa(mq("select * from hub_keluarga2 where id_pengguna='".$_GET['id']."'"));
					?>
					<td class="angka" valign="top">11.</td>
					<td colspan="1" class="garis_right">
					<ul type="circle">
						<li>Nama Suami/Istri : <b><?php echo $keluarga2['nama_pasangan']; ?></b></li>
						<li>Nama Bapak Suami/Istri : <b><?php echo $keluarga2['nama_bapak']; ?></b></li>
						<li>Nama Ibu Suami/Istri : <b><?php echo $keluarga2['nama_ibu']; ?></b></li>
						<li>Alamat : <b><?php echo $keluarga2['alamat_keluarga2']; ?></b></li>
					</ul>

					</td>
					<td class="angka garis_left" valign="top">12.</td>
					<?php
						$tanggungan = mfa(mq("select * from tanggungan_keluarga where id_pengguna='".$_GET['id']."'"));
					?>
					<td colspan="2" class="garis_right">
					Sanak/saudara yang menjadi tanggungan <br><br>
					Nama : <b><?php echo $tanggungan['nama_tanggungan']; ?></b>
					<br><br>
					Alamat : <b><?php echo $tanggungan['alamat_tanggungan']; ?></b>
					</td>
				</tr>
				<?php // kolom 9 ?>
				<tr class="garis_tik">
					<td class="angka" valign="top">13.</td>
					<td colspan="1">
					Anak-anak : <br>
					<ol type="1">
						<li></li>
						<li></li>
						<li></li>
					</ol>

					</td>
					<td class="angka garis_left" valign="top">14.</td>
					<td colspan="2" class="garis_right">
					Nama : <br>
					<ol type="1" start="4">
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</tr>
				<?php // kolom 10 ?>
				<tr>
					<td class="angka">15.</td>
					<td colspan="4" class="garis_right">Ciri-ciri badan :</td>
				</tr>
				<tr class="garis_tik">
					<td></td>
					<td colspan="4" class="garis_right">
					<ol type="1" class="ol_left">
						<?php
							$ciri_fisik = mfa(mq("select * from ciri_fisik where id_pengguna='".$_GET['id']."'"));
						?>
						<li>Rambut : <b><?php echo $ciri_fisik['rambut']; ?></b></li>
						<li>Muka : <b><?php echo $ciri_fisik['muka']; ?></b></li>
						<li>Kulit : <b><?php echo $ciri_fisik['kulit']; ?></b></li>
						<li>Tinggi : <b><?php echo $ciri_fisik['tinggi']; ?></b></li>
						<li>Tanda Istimewa : <b><?php echo $ciri_fisik['tanda_istimewa']; ?></b></li>
					</ol>
					</td>
				</tr>
				<?php // kolom 11 ?>
				<tr>
					<td class="angka">16.</td>
					<td colspan="4" class="garis_right">Riwayat sekolah :</td>
				</tr>
				<tr class="garis_tik">
					<td></td>
					<td colspan="4" class="garis_right">
					<ol type="1">
					<?php
						$sekolah = mq("select * from pendidikan where id_pengguna='".$_GET['id']."'");
						while($d_sekolah = mfa($sekolah)){
							$ket_sekolah = $d_sekolah['ket_pendidikan'];
							if($ket_sekolah == 1){
								$ket_sekolah = "Lulus";
							}elseif($ket_sekolah == 2){
								$ket_sekolah = "Tidak Lulus";
							}else{
								$ket_sekolah = "Tidak Melanjutkan";
							}
							echo "
							<li><b>".$ket_sekolah."</b> di <b>".$d_sekolah['sekolah']."</b> tahun lulus <b>".$d_sekolah['tahun_lulus']."</b></li>
							";
						}
					?>
					</ol>
				</tr>
				<?php // kolom 14 ?>
				<tr>
					<td class="angka">17.</td>
					<td colspan="4" class="garis_right">Kesenangan/Kegemaran/Hobi :</td>
				</tr>
				<tr class="garis_tik">
					<td></td>
					<?php
						$hobi = mfa(mq("select * from hobi where id_pengguna='".$_GET['id']."'"));
					?>
					<td colspan="4" class="garis_right"><b><?php echo $hobi['kegemaran']; ?></b></td>
				</tr>
				<?php // kolom 13 ?>
				<tr class="garis_tik">
					<td class="angka">18.</td>
					<td colspan="1">Catatan kriminal yang ada :</td>
					<td colspan="3" rowspan="2" class="garis_left garis_right">
					<p>Diisi menurut keadaan</p>
					<?php
	                    $tanggal = date("d");
	                    $array_bulan = array("1" => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agusutus","September","Oktober"
	                        ,"November","Desember");
	                    $bulan = $array_bulan[date("n")];
	                    $tahun = date("Y");

	                ?>
					<p>Tgl : <b><?php echo $tanggal." ".$bulan." ".$tahun; ?></b></p>
					<p>Kepala kepolisian : <b>Resort Kota Barelang</b></p>
					</td>
				</tr>
				<tr class="garis_tik">
					<td class="angka">19.</td>
					<td colspan="1">Data/Keterangan yang lain :</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>