<?php
	include "proses_edit_pengguna.php";
?>
<div class="judul">
	<h1><span class="posisi_icon3 fa fa-lg fa-user"></span>Edit Pengguna</h1>
	<div class="garis">
		<div class="lingkaran"></div>
	</div>
</div>
<p><a class="tombol_tambah" href="javascript:self.history.back();"><span class="posisi_icon2 fa fa-lg fa-arrow-circle-left"></span> Kembali</a></p>
<div class="langkah_edit">
	<div class="langkah_dalam">
		<?php if((@$_GET['langkah'] == "")){ ?>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }elseif(@$_GET['langkah'] == "2"){ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }elseif(@$_GET['langkah'] == "3"){ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }elseif(@$_GET['langkah'] == "4"){ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }elseif(@$_GET['langkah'] == "5"){ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }elseif(@$_GET['langkah'] == "6"){ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php }else{ ?>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>">1. Identitas</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=2">2. Hubungan Keluarga</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=3">3. Pendidikan</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=4">4. Pertanyaan Pertama</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=5">5. Pertanyaan Kedua</a></p>
		<p><a href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=6">6. Ciri Fisik</a></p>
		<p><a class="langkah_aktif" href="?page=edit_pengguna&id=<?php echo $_GET['id']; ?>&langkah=7">7. Hobi</a></p>
		<?php } ?>
	</div>
</div>
<div class="tambah_wrap">
	<?php
		if(@$_GET['langkah'] == ""){
	?>
	<?php
		$pengguna = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'"));
		$tgl_lahir = $pengguna['tgl_lahir'];
		$pecah = explode("/", $tgl_lahir);
		$tgl = $pecah[0];
		$bulan2 = $pecah[1];
		$tahun2 = $pecah[2];
		$negara = $pengguna['negara'];
		$kelamin = $pengguna['j_kelamin'];
		$kawin = $pengguna['ket_kawin'];
		$agama = $pengguna['agama'];
		$kedudukan = $pengguna['kedudukan'];
	?>
	<form method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $pengguna['nama_pengguna']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tmp_lahir" value="<?php echo $pengguna['tmp_lahir']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Tanggal Lahir</td>
	            <td>:</td>
	            <td><select class="tgl" name="tgl">
	            <?php
	                for ($i=1; $i<=31; $i++) {
	                    if($i < 10){
	                        $i = "0".$i;
	                    }
	                    echo "<option value='".$i."'"; if($i == $tgl){ echo "selected='selected'"; } echo ">".$i."</option>";
	                }
	            ?>
	            </select>
	            <select name="bulan" class="bulan">
	            <?php
	                $bulan = array("1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni", "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
	                foreach($bulan as $date => $value){
	                    if($date < 10){
	                        $date = "0".$date;
	                    }
	                    echo "<option value='".$date."'"; if($date == $bulan2){ echo "selected='selected'"; } echo ">".$value."</option>";
	                }
	            ?>
	            </select>
	            <select name="tahun" class="tahun">
	            <?php
	                $tahun = date("Y");
	                $kurang = $tahun - 100;
	                for($i=$tahun; $i>$kurang; $i--){
	                    echo "<option value='".$i."'"; if($i == $tahun2){ echo "selected='selected'"; } echo ">".$i."</option>";
	                }
	            ?>
	            </select>
	            </td>
	        </tr>
	        <tr>
	            <td>Agama</td>
	            <td>:</td>
	            <td><select name="agama" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($agama == "1"){ echo "selected='selected'"; } ?>>Islam</option>
	                <option value="2" <?php if($agama == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
	                <option value="3" <?php if($agama == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
	                <option value="4" <?php if($agama == "4"){ echo "selected='selected'"; } ?>>Budha</option>
	                <option value="5" <?php if($agama == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
	                <option value="6" <?php if($agama == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
	            </select></td>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara">
	            	<option value=""></option>
	                <option value="1" <?php if($negara == "1"){ echo "selected='selected'"; } ?>>Indonesia</option>
	                <option value="2" <?php if($negara == "2"){ echo "selected='selected'"; } ?>>Malaysia</option>
	                <option value="3" <?php if($negara == "3"){ echo "selected='selected'"; } ?>>SIngapura</option>
	                <option value="4" <?php if($negara == "4"){ echo "selected='selected'"; } ?>>Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Jenis Kelamin</td>
	            <td>:</td>
	            <td><select name="kelamin">
	            	<option value=""></option>
	                <option value="1" <?php if($kelamin == "1"){ echo "selected='selected'"; } ?>>Laki-laki</option>
	                <option value="2" <?php if($kelamin == "2"){ echo "selected='selected'"; } ?>>Perempuan</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Kedudukan</td>
	            <td>:</td>
	            <td><select name="kedudukan">
	            	<option value=""></option>
	                <option value="1" <?php if($kedudukan == "1"){ echo "selected='selected'"; } ?>>Anak</option>
	                <option value="2" <?php if($kedudukan == "2"){ echo "selected='selected'"; } ?>>Orang tua</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Kawin / Tidak Kawin</td>
	            <td>:</td>
	            <td><select name="kawin">
	            	<option value=""></option>
	                <option value="1" <?php if($kawin == "1"){ echo "selected='selected'"; } ?>>Kawin</option>
	                <option value="2" <?php if($kawin == "2"){ echo "selected='selected'"; } ?>>Tidak Kawin</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan" value="<?php echo $pengguna['pekerjaan']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" required="required"><?php echo $pengguna['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>No KTP</td>
				<td>:</td>
				<td><input type="text" name="no_ktp" value="<?php echo $pengguna['no_ktp']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td>:</td>
				<td><input type="text" name="no_telp" value="<?php echo $pengguna['no_telp']; ?>" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "2"){ ?>
	<?php
		$istri = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='1'"));
		$agama_istri = $istri['agama_keluarga'];
		$negara_istri = $istri['kebangsaan_keluarga'];
	?>
	<form method="post">
		<table>
			<tr>
				<td colspan="3"><b>Suami / Istri</b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama[]" value="<?php echo $istri['nama_keluarga']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur[]" value="<?php echo $istri['umur']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Agama</td>
	            <td>:</td>
	            <td><select name="agama[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($agama_istri == "1"){ echo "selected='selected'"; } ?>>Islam</option>
	                <option value="2" <?php if($agama_istri == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
	                <option value="3" <?php if($agama_istri == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
	                <option value="4" <?php if($agama_istri == "4"){ echo "selected='selected'"; } ?>>Budha</option>
	                <option value="5" <?php if($agama_istri == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
	                <option value="6" <?php if($agama_istri == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
	            </select></td>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara[]" required="required">
	            	<option value=""></option>
	                <option value="1" <?php if($negara_istri == "1"){ echo "selected='selected'"; } ?>>Indonesia</option>
	                <option value="2" <?php if($negara_istri == "2"){ echo "selected='selected'"; } ?>>Malaysia</option>
	                <option value="3" <?php if($negara_istri == "3"){ echo "selected='selected'"; } ?>>SIngapura</option>
	                <option value="4" <?php if($negara_istri == "4"){ echo "selected='selected'"; } ?>>Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan[]" value="<?php echo $istri['pekerjaan_keluarga']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat[]" required="required"><?php echo $istri['alamat_keluarga']; ?></textarea></td>
			</tr>

			<?php // Bapak ?>
			<?php
				$bapak = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='2'"));
				$agama_bapak = $bapak['agama_keluarga'];
				$negara_bapak = $bapak['kebangsaan_keluarga'];
			?>
			<tr>
				<td colspan="3"><b>Bapak Sendiri</b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama[]" value="<?php echo $bapak['nama_keluarga']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur[]" value="<?php echo $bapak['umur']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Agama</td>
	            <td>:</td>
	            <td><select name="agama[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($agama_bapak == "1"){ echo "selected='selected'"; } ?>>Islam</option>
	                <option value="2" <?php if($agama_bapak == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
	                <option value="3" <?php if($agama_bapak == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
	                <option value="4" <?php if($agama_bapak == "4"){ echo "selected='selected'"; } ?>>Budha</option>
	                <option value="5" <?php if($agama_bapak == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
	                <option value="6" <?php if($agama_bapak == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
	            </select></td>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara[]" required="required">
	            	<option value=""></option>
	                <option value="1" <?php if($negara_bapak == "1"){ echo "selected='selected'"; } ?>>Indonesia</option>
	                <option value="2" <?php if($negara_bapak == "2"){ echo "selected='selected'"; } ?>>Malaysia</option>
	                <option value="3" <?php if($negara_bapak == "3"){ echo "selected='selected'"; } ?>>SIngapura</option>
	                <option value="4" <?php if($negara_bapak == "4"){ echo "selected='selected'"; } ?>>Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan[]" value="<?php echo $bapak['pekerjaan_keluarga']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat[]" required="required"><?php echo $bapak['alamat_keluarga']; ?></textarea></td>
			</tr>

			<?php // Ibu ?>
			<?php
				$ibu = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='3'"));
				$agama_ibu = $ibu['agama_keluarga'];
				$negara_ibu = $ibu['kebangsaan_keluarga'];
			?>
			<tr>
				<td colspan="3"><b>Ibu Sendiri</b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama[]" value="<?php echo $ibu['nama_keluarga']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur[]" value="<?php echo $ibu['umur']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Agama</td>
	            <td>:</td>
	            <td><select name="agama[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($agama_ibu == "1"){ echo "selected='selected'"; } ?>>Islam</option>
	                <option value="2" <?php if($agama_ibu == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
	                <option value="3" <?php if($agama_ibu == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
	                <option value="4" <?php if($agama_ibu == "4"){ echo "selected='selected'"; } ?>>Budha</option>
	                <option value="5" <?php if($agama_ibu == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
	                <option value="6" <?php if($agama_ibu == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
	            </select></td>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara[]" required="required">
	            	<option value=""></option>
	                <option value="1" <?php if($negara_ibu == "1"){ echo "selected='selected'"; } ?>>Indonesia</option>
	                <option value="2" <?php if($negara_ibu == "2"){ echo "selected='selected'"; } ?>>Malaysia</option>
	                <option value="3" <?php if($negara_ibu == "3"){ echo "selected='selected'"; } ?>>SIngapura</option>
	                <option value="4" <?php if($negara_ibu == "4"){ echo "selected='selected'"; } ?>>Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan[]" value="<?php echo $ibu['pekerjaan_keluarga']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat[]" required="required"><?php echo $ibu['alamat_keluarga']; ?></textarea></td>
			</tr>

			<?php // Saudara ?>
			<?php
				$saudara = mfa(mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."' && type_keluarga='4'"));
				$agama_saudara = $ibu['agama_keluarga'];
				$negara_saudara = $ibu['kebangsaan_keluarga'];
			?>
			<tr>
				<td colspan="3"><b>Saudara Kandung / Tiri</b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama[]" value="<?php echo $saudara['nama_keluarga']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur[]" value="<?php echo $saudara['umur']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Agama</td>
	            <td>:</td>
	            <td><select name="agama[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($agama_saudara == "1"){ echo "selected='selected'"; } ?>>Islam</option>
	                <option value="2" <?php if($agama_saudara == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
	                <option value="3" <?php if($agama_saudara == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
	                <option value="4" <?php if($agama_saudara == "4"){ echo "selected='selected'"; } ?>>Budha</option>
	                <option value="5" <?php if($agama_saudara == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
	                <option value="6" <?php if($agama_saudara == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
	            </select></td>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara[]" required="required">
	            	<option value=""></option>
	                <option value="1" <?php if($negara_saudara == "1"){ echo "selected='selected'"; } ?>>Indonesia</option>
	                <option value="2" <?php if($negara_saudara == "2"){ echo "selected='selected'"; } ?>>Malaysia</option>
	                <option value="3" <?php if($negara_saudara == "3"){ echo "selected='selected'"; } ?>>SIngapura</option>
	                <option value="4" <?php if($negara_saudara == "4"){ echo "selected='selected'"; } ?>>Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan[]" value="<?php echo $saudara['pekerjaan_keluarga']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat[]" required="required"><?php echo $saudara['alamat_keluarga']; ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan2" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "3"){ ?>
	<form method="post">
		<table>
			<?php // Sekolah dasar ?>
			<?php
				$sd = mfa(mq("select * from pendidikan where id_pengguna='".$_GET['id']."' && type_sekolah='1'"));
				$ket = $sd['ket_pendidikan'];
			?>
			<tr>
				<td colspan="3"><b>Sekolah Dasar (SD)</b></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><select name="ket[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($ket == "1"){ echo "selected='selected'"; } ?>>Lulus</option>
	                <option value="2" <?php if($ket == "2"){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
	                <option value="3" <?php if($ket == "3"){ echo "selected='selected'"; } ?>>Tidak Melanjutkan</option>
	            </select></td>
			</tr>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah[]" value="<?php echo $sd['sekolah']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Tahun Lulus</td>
	            <td>:</td>
	            <td><input type="number" name="tahun[]" value="<?php echo $sd['tahun_lulus']; ?>" required="required"></td>
	        </tr>

			<?php // Sekolah menengah pertama ?>
			<?php
				$smp = mfa(mq("select * from pendidikan where id_pengguna='".$_GET['id']."' && type_sekolah='2'"));
				$ket_smp = $smp['ket_pendidikan'];
			?>
			<tr>
				<td colspan="3"><b>Sekolah Menengah Pertama (SMP)</b></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><select name="ket[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($ket_smp == "1"){ echo "selected='selected'"; } ?>>Lulus</option>
	                <option value="2" <?php if($ket_smp == "2"){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
	                <option value="3" <?php if($ket_smp == "3"){ echo "selected='selected'"; } ?>>Tidak Melanjutkan</option>
	            </select></td>
			</tr>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah[]" value="<?php echo $smp['sekolah']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Tahun Lulus</td>
	            <td>:</td>
	            <td><input type="number" name="tahun[]" value="<?php echo $smp['tahun_lulus']; ?>" required="required"></td>
	        </tr>

			<?php // Sekolah menengah atas ?>
			<?php
				$sma = mfa(mq("select * from pendidikan where id_pengguna='".$_GET['id']."' && type_sekolah='3'"));
				$ket_sma = $sd['ket_pendidikan'];
			?>
			<tr>
				<td colspan="3"><b>Sekolah Menengah Atas (SMA)</b></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><select name="ket[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($ket_sma == "1"){ echo "selected='selected'"; } ?>>Lulus</option>
	                <option value="2" <?php if($ket_sma == "2"){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
	                <option value="3" <?php if($ket_sma == "3"){ echo "selected='selected'"; } ?>>Tidak Melanjutkan</option>
	            </select></td>
			</tr>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah[]" value="<?php echo $sma['sekolah']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Tahun Lulus</td>
	            <td>:</td>
	            <td><input type="number" name="tahun[]" value="<?php echo $sma['tahun_lulus']; ?>" required="required"></td>
	        </tr>

			<?php // universitas ?>
			<?php
				$universitas = mfa(mq("select * from pendidikan where id_pengguna='".$_GET['id']."' && type_sekolah='4'"));
				$ket_pt = $universitas['ket_pendidikan'];
			?>
			<tr>
				<td colspan="3"><b>Universitas</b></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><select name="ket[]" required="required">
	                <option value=""></option>
	                <option value="1" <?php if($ket_pt == "1"){ echo "selected='selected'"; } ?>>Lulus</option>
	                <option value="2" <?php if($ket_pt == "2"){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
	                <option value="3" <?php if($ket_pt == "3"){ echo "selected='selected'"; } ?>>Tidak Melanjutkan</option>
	            </select></td>
			</tr>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah[]" value="<?php echo $universitas['sekolah']; ?>" required="required"></td>
			</tr>
			<tr>
	            <td>Tahun Lulus</td>
	            <td>:</td>
	            <td><input type="number" name="tahun[]" value="<?php echo $universitas['tahun_lulus']; ?>" required="required"></td>
	        </tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan3" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "4"){ ?>
	<form method="post">
		<table>
			<?php // Sekolah dasar ?>
			<tr>
				<td colspan="3"><b>Perkara Pidana</b></td>
			</tr>
			<?php
				$pertanyaan = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='1'");
				$i = 1;
				while($data_1 = mfa($pertanyaan)){
					echo "
					<tr>
						<td style='width: 50%;'>".$i.". ".$data_1['isi_pertanyaan']."</td>
						<td>:</td>
						<td><textarea name='jawaban[]' required='required'>".$data_1['jawaban']."</textarea></td>
						<input type='hidden' name='isi_pertanyaan[]' value='".$data_1['isi_pertanyaan']."'>
						<input type='hidden' name='id_pertanyaan[]' value='".$data_1['id_pertanyaan']."'>
					</tr>
					";
					$i++;
				}
			?>


			<?php // Pelanggaran Norma ?>
			<tr>
				<td colspan="3"><b>Pelanggaran</b></td>
			</tr>
			<?php
				$pertanyaan2 = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='2'");
				$i = 1;
				while($data_2 = mfa($pertanyaan2)){
					echo "
					<tr>
						<td style='width: 50%;'>".$i.". ".$data_2['isi_pertanyaan']."</td>
						<td>:</td>
						<td><textarea name='jawaban[]' required='required'>".$data_2['jawaban']."</textarea></td>
						<input type='hidden' name='isi_pertanyaan[]' value='".$data_2['isi_pertanyaan']."'>
						<input type='hidden' name='id_pertanyaan[]' value='".$data_2['id_pertanyaan']."'>
					</tr>
					";
					$i++;
				}
			?>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan4" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "5"){ ?>
	<form method="post">
		<table>
			<?php // Sekolah dasar ?>
			<tr>
				<td colspan="3"><b>Pertanyaan Kedua</b></td>
			</tr>
			<?php
				$pertanyaan = mq("select * from pertanyaan2 where id_pengguna='".$_GET['id']."'");
				$i = 1;
				while($data_1 = mfa($pertanyaan)){
					echo "
					<tr>
						<td style='width: 50%;'>".$i.". ".$data_1['isi_pertanyaan2']."</td>
						<td>:</td>
						<td><textarea name='jawaban' required='required'>".$data_1['jawaban2']."</textarea></td>
						<input type='hidden' name='id_pertanyaan' value='".$data_1['id_pertanyaan2']."'>
					</tr>
					";
					$i++;
				}
			?>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan5" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "6"){ ?>
	<form method="post">
		<table>
			<?php // Sekolah dasar ?>
			<tr>
				<td colspan="3"><b>Ciri Fisik</b></td>
			</tr>
			<?php
				$ciri = mfa(mq("select * from ciri_fisik where id_pengguna='".$_GET['id']."'"));
			?>
			<tr>
				<td>Rambut</td>
				<td>:</td>
				<td><input type="text" name="rambut" value="<?php echo $ciri['rambut']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Muka</td>
				<td>:</td>
				<td><input type="text" name="muka" value="<?php echo $ciri['muka']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Kulit</td>
				<td>:</td>
				<td><input type="text" name="kulit" value="<?php echo $ciri['kulit']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Tinggi</td>
				<td>:</td>
				<td><input type="text" name="tinggi" value="<?php echo $ciri['tinggi']; ?>" required="required"></td>
			</tr>
			<tr>
				<td>Tanda Istimewa</td>
				<td>:</td>
				<td><input type="text" name="tanda_istimewa" value="<?php echo $ciri['tanda_istimewa']; ?>" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan6" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php }elseif(@$_GET['langkah'] == "7"){ ?>
	<form method="post">
		<table>
			<?php // Sekolah dasar ?>
			<tr>
				<td colspan="3"><b>Hobi/Kegemaran</b></td>
			</tr>
			<?php
				$hobi = mfa(mq("select * from hobi where id_pengguna='".$_GET['id']."'"));
			?>
			<tr>
				<td>Kegemaran</td>
				<td>:</td>
				<td><textarea name="hobi" required="required"><?php echo $hobi['kegemaran']; ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan7" class="tombol_tambah" value="Simpan"></td>
			</tr>
			<input type="hidden" name="id_pengguna" value="<?php echo $_GET['id']; ?>">
		</table>
	</form>
	<?php } ?>
</div>