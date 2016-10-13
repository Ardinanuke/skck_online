<?php
	$user = mfa(mq("SELECT * FROM user_admin WHERE id_admin='".$_SESSION['id_admin']."'"));
	$type = $user['type'];
?>
<div class="judul">
	<h1><span class="posisi_icon3 fa fa-lg fa-user"></span>Pengguna</h1>
	<div class="garis">
		<div class="lingkaran"></div>
	</div>
</div>
<p><a class="tombol_tambah" href="?page=tambah_pengguna"><span class="posisi_icon2 fa fa-lg fa-plus"></span> Tambah</a></p>
<div class="pencarian">
	<form method="post">
		<p><select name="kriteria">
		<option value="">Pilih Kriteria</option>
		<option value="1">Nama</option>
		<option value="2">Email</option>
		<option value="3">No Registrasi</option>
		</select></p>
		<p><input type="search" name="cari_pengguna" placeholder="Masukkan keyword pencarian"></p>
		<p><button type="submit" class="tombol_cari"><span class="fa fa-lg fa-search"></span></button></p>
	</form>
</div>
<?php
	if(@$_POST['cari_pengguna'] == ""){
?>
<table>
	<thead>
		<tr>
			<th rowspan="2">No Registrasi</th>
			<th rowspan="2">Nama Pengguna</th>
			<th rowspan="2">Tempat Lahir</th>
			<th rowspan="2">Tanggal Lahir</th>
			<th colspan="<?php if($type == 1){ echo "4"; }else{ echo "3"; } ?>">Aksi</th>
		</tr>
                <tr>
                        <th>Detail</th>
                        <th>Edit</th>
						<?php if($type == 1){ ?>
                        <th>Hapus</th>
						<?php } ?>
                        <th>Kartu</th>
                </tr>
	</thead>
	<tbody>
	<?php
		$datapage = 10;
		if(@$_GET['hal']){
			$nohalaman = $_GET['hal'];
		}else{
			$nohalaman = 1;
		}
		$offset = ($nohalaman-1)*$datapage;
		$query = mq("select * from pengguna order by id_pengguna desc limit $offset, $datapage");
		while($data = mfa($query)){
                        if($data['status_registrasi'] != "8"){
				$edit = "-";
			}else{
				$edit = "<a href='?page=edit_pengguna&id=".$data['id_pengguna']."'>Edit</a>";
			}
			$no_regis = $data['no_registrasi'];
			if($no_regis == ""){
				$no_regis = "-";
			}else{
				$no_regis = $data['no_registrasi'];
			}
			$tmp_lahir = $data['tmp_lahir'];
			if($tmp_lahir == ""){
				$tmp_lahir = "-";
			}else{
				$tmp_lahir = $data['tmp_lahir'];
			}
			$tgl_lahir = $data['tgl_lahir'];
			if($tgl_lahir == ""){
				$tgl_lahir = "-";
			}else{
				$tgl_lahir = $data['tgl_lahir'];
			}
			echo "
			<tr>
				<td><b>".$no_regis."</b></td>
				<td>".$data['nama_pengguna']."</td>
				<td>".$tmp_lahir."</td>
				<td>".$tgl_lahir."</td>
				<td style='text-align: center;'><a href='?page=detail_pengguna&id=".$data['id_pengguna']."'>Detail</a></td>
				<td style='text-align: center;'>".$edit."</td>
				";
				if($type == 1){
					echo "
					<td style='text-align: center;'><a onclick='return hapus_data()' id='hapusData' href='?page=hapus_pengguna&id=".$data['id_pengguna']."'>Hapus</a></td>
					";
				}
				echo "
				<td style='text-align: center;'><a target='_blank' href='pages/cetak_tik.php?id=".$data['id_pengguna']."'>Kartu</a></td>
			</tr>
			";
		}
	?>
	</tbody>
</table>
<?php }else{ ?>
<?php
		$kriteria = $_POST['kriteria'];
		$form_cari = $_POST['cari_pengguna'];
		switch ($kriteria) {
			case '1': $query = mq("select * from pengguna where nama_pengguna like '%".$form_cari."%' order by id_pengguna desc");
				break;
			case '2': $query = mq("select * from pengguna where email_pengguna like '%".$form_cari."%' order by id_pengguna desc");
				break;
			case '3': $query = mq("select * from pengguna where no_registrasi like '%".$form_cari."' order by id_pengguna desc");
				break;
			default: $query = mq("select * from pengguna where nama_pengguna like '%".$form_cari."%' order by id_pengguna desc");
				break;
		}
?>
<div class="hasil_pencarian">
	<p><b>"<?php echo mnr($query); ?> Hasil Pencarian"</b></p>
</div>
<table>
	<thead>
		<tr>
			<th rowspan="2">Nama Pengguna</th>
			<th rowspan="2">Email</th>
			<th rowspan="2">Tempat Lahir</th>
			<th rowspan="2">Tanggal Lahir</th>
			<th colspan="4">Aksi</th>
		</tr>
                <tr>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                        <th>Kartu</th>
                </tr>
	</thead>
	<tbody>
	<?php
		while($data = mfa($query)){
            if($data['status_registrasi'] != "8"){
				$edit = "-";
			}else{
				$edit = "<a href='?page=edit_pengguna&id=".$data['id_pengguna']."'>Edit</a>";
			}
			$no_regis = $data['no_registrasi'];
			if($no_regis == ""){
				$no_regis = "-";
			}else{
				$no_regis = $data['no_registrasi'];
			}
			$tmp_lahir = $data['tmp_lahir'];
			if($tmp_lahir == ""){
				$tmp_lahir = "-";
			}else{
				$tmp_lahir = $data['tmp_lahir'];
			}
			$tgl_lahir = $data['tgl_lahir'];
			if($tgl_lahir == ""){
				$tgl_lahir = "-";
			}else{
				$tgl_lahir = $data['tgl_lahir'];
			}
			echo "
			<tr>
				<td><b>".$no_regis."</b></td>
				<td>".$data['nama_pengguna']."</td>
				<td>".$tmp_lahir."</td>
				<td>".$tgl_lahir."</td>
				<td style='text-align: center;'><a href='?page=detail_pengguna&id=".$data['id_pengguna']."'>Detail</a></td>
				<td style='text-align: center;'>".$edit."</td>
				<td style='text-align: center;'><a onclick='return hapus_data()' id='hapusData' href='?page=hapus_pengguna&id=".$data['id_pengguna']."'>Hapus</a></td>
                                <td style='text-align: center;'><a target='_blank' href='pages/cetak_tik.php?id=".$data['id_pengguna']."'>Kartu</a></td>
			</tr>
			";
		}
	?>
	</tbody>
</table>
<?php } ?>
<div class="paging">
<?php
	if(@$_POST['cari_pengguna'] == ""){
		$ambil = mq("select COUNT(*) from pengguna");
		$olah = mfa($ambil);
		$val = $olah['COUNT(*)'];
		$ceil = ceil($val/$datapage);
		if($nohalaman > 1){
			echo "<a href='?page=pengguna&hal=".($nohalaman-1)."'>Prev</a>";
		}

		for($halaman=1;$halaman<=$ceil;$halaman++){
			if(($halaman >= $nohalaman-2) && ($halaman <= $nohalaman+2) || ($halaman == 1) || ($halaman == $ceil)){
				if(($halaman == $ceil) && ($nohalaman <= ($ceil-3))){
					echo "<b class='titik_paging'>...</b>";
				}
				if($halaman == $nohalaman){
					echo "<b>".$halaman."</b>";
				}else{
					echo "<a href='?page=pengguna&hal=".$halaman."'>".$halaman."</a>";
				}
				if(($halaman == 1) && ($nohalaman >= 4)){
					echo "<b class='titik_paging'>...</b>";
				}
			}
		}

		if($nohalaman < $ceil){
			echo "<a href='?page=pengguna&hal=".($nohalaman+1)."'>Next</a>";
		}
	}
?>
</div>
