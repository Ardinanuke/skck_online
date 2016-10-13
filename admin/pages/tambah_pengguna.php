<?php
	include "proses_tambah_pengguna.php";
?>
<div class="judul">
	<h1><span class="posisi_icon3 fa fa-lg fa-plus"></span>Tambah Pengguna</h1>
	<div class="garis">
		<div class="lingkaran"></div>
	</div>
</div>
<p><a class="tombol_tambah" href="javascript:self.history.back();"><span class="posisi_icon2 fa fa-lg fa-arrow-circle-left"></span> Kembali</a></p>
<div class="tambah_wrap">
	<form method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" required="required"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tmp_lahir" required="required"></td>
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
	                    echo "<option value='".$i."'>".$i."</option>";
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
	                    echo "<option value='".$date."'>".$value."</option>";
	                }
	            ?>
	            </select>
	            <select name="tahun" class="tahun">
	            <?php
	                $tahun = date("Y");
	                $kurang = $tahun - 100;
	                for($i=$tahun; $i>$kurang; $i--){
	                    echo "<option value='".$i."'>".$i."</option>";
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
	                <option value="1">Islam</option>
	                <option value="2">Kristen</option>
	                <option value="3">Katolik</option>
	                <option value="4">Budha</option>
	                <option value="5">Hindu</option>
	                <option value="6">Konghucu</option>
	            </select>
	        </tr>
			<tr>
	            <td>Kebangsaan</td>
	            <td>:</td>
	            <td><select name="negara">
	            	<option value=""></option>
	                <option value="1">Indonesia</option>
	                <option value="2">Malaysia</option>
	                <option value="3">SIngapura</option>
	                <option value="4">Myanmar</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Jenis Kelamin</td>
	            <td>:</td>
	            <td><select name="kelamin">
	            	<option value=""></option>
	                <option value="1">Laki-laki</option>
	                <option value="2">Perempuan</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Kedudukan Keluarga</td>
	            <td>:</td>
	            <td><select name="kedudukan">
	            	<option value=""></option>
	                <option value="1">Anak</option>
	                <option value="2">Orang tua</option>
	            </select></td>
	        </tr>
	        <tr>
	            <td>Kawin / Tidak Kawin</td>
	            <td>:</td>
	            <td><select name="kawin">
	            	<option value=""></option>
	                <option value="1">Kawin</option>
	                <option value="2">Tidak Kawin</option>
	            </select></td>
	        </tr>
	        <tr>
	        	<td>Pekerjaan</td>
	        	<td>:</td>
	        	<td><input type="text" name="pekerjaan" required="required"></td>
	        </tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" required="required"></textarea></td>
			</tr>
			<tr>
				<td>No KTP</td>
				<td>:</td>
				<td><input type="text" name="no_ktp" required="required"></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td>:</td>
				<td><input type="text" name="no_telp" required="required"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" required="required"></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
				<td>:</td>
				<td><input type="password" name="pasw" required="required"></td>
			</tr>
			<tr>
				<td>Ulangi Kata Sandi</td>
				<td>:</td>
				<td><input type="password" name="pasw2" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol_simpan" class="tombol_tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</td>