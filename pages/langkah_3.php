<?php
    include "proses_langkah_3.php";
?>
<h1><span class="fa fa-lg fa-briefcase"></span> Pendidikan</h1>
<?php
    if(@$_GET['proses'] == "sukses"){
?>
<div class="notif"><span class="fa fa-lg fa-info-circle"></span> &nbsp;Data berhasil disimpan, klik tombol <u style="font-family: opensans-bold; text-decoration:none;">Lanjut</u> untuk melanjutkan!</div>
<?php }elseif(@$_GET['proses'] == "gagal"){ ?>
<div class="notif"><span class="fa fa-lg fa-times-circle"></span> &nbsp;Data gagal disimpan!</div>
<?php }elseif(@$_GET['proses'] == "kosong"){ ?>
<div class="notif"><span class="fa fa-lg fa-exclamation-circle"></span> &nbsp;Form pengisian tidak boleh ada yang kosong!</div>
<?php } ?>
<?php
    $val = mfa(mq("select * from pengguna where id_pengguna='".$_SESSION['id_pengguna']."'"));
        $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah1" value="Langkah Selanjutnya">';
        $sekolah1 = mq("select * from pendidikan where type_sekolah='1' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($sekolah1)){
            $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah1" value="Langkah Selanjutnya">';
            $data_sekolah1 = mfa($sekolah1);
            $ket = $data_sekolah1['ket_pendidikan'];
            $nama_sekolah = $data_sekolah1['sekolah'];
            $tahun_sekolah = $data_sekolah1['tahun_lulus'];
        }else{
            $ket = "";
            $nama_sekolah = "";
            $tahun_sekolah = "";
            $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat1" value="Lewati">';
        }
        $sekolah2 = mq("select * from pendidikan where type_sekolah='2' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($sekolah2)){
            $tombol2 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah2" value="Langkah Selanjutnya">';
            $data_sekolah2 = mfa($sekolah2);
            $ket2 = $data_sekolah2['ket_pendidikan'];
            $nama_sekolah2 = $data_sekolah2['sekolah'];
            $tahun_sekolah2 = $data_sekolah2['tahun_lulus'];
        }else{
            $ket2 = "";
            $nama_sekolah2 = "";
            $tahun_sekolah2 = "";
            $tombol2 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan2" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat2" value="Lewati">';
        }
        $sekolah3 = mq("select * from pendidikan where type_sekolah='3' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($sekolah3)){
            $tombol3 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah3" value="Langkah Selanjutnya">';
            $data_sekolah3 = mfa($sekolah3);
            $ket3 = $data_sekolah3['ket_pendidikan'];
            $nama_sekolah3 = $data_sekolah3['sekolah'];
            $tahun_sekolah3 = $data_sekolah3['tahun_lulus'];
        }else{
            $ket3 = "";
            $nama_sekolah3 = "";
            $tahun_sekolah3 = "";
            $tombol3 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan3" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat3" value="Lewati">';
        }
        $sekolah4 = mq("select * from pendidikan where type_sekolah='4' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($sekolah4)){
            $tombol4 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah4" value="Langkah Selanjutnya">';
            $data_sekolah4 = mfa($sekolah4);
            $ket4 = $data_sekolah4['ket_pendidikan'];
            $nama_sekolah4 = $data_sekolah4['sekolah'];
            $tahun_sekolah4 = $data_sekolah4['tahun_lulus'];
        }else{
            $ket4 = "";
            $nama_sekolah4 = "";
            $tahun_sekolah4 = "";
            $tombol4 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan4" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat4" value="Lewati">';
        }
?>
<?php
    if(@$_GET['type'] == ""){
?>
<h2>1. Sekolah Dasar (SD)</h2>
<form method="post">
    <table>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><select name="ket">
            <option value=""></option>
            <option value="1" <?php if($ket == 1){ echo "selected='selected'"; } ?>>Lulus</option>
            <option value="2" <?php if($ket == 2){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
            <option value="3" <?php if($ket == 3){ echo "selected='selected'"; } ?>>-</option>
            </select></td>
        </tr>
        <tr>
            <td>SD</td>
            <td>:</td>
            <td><input type="text" name="sekolah" value="<?php echo $nama_sekolah; ?>" placeholder="Nama SD Anda"></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td><input type="number" maxlength="4" value="<?php echo $tahun_sekolah; ?>" name="tahun" placeholder="Tahun Anda Lulus"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "2"){ ?>
<h2>2. Sekolah Menengah Pertama (SMP)</h2>
<form method="post">
    <table>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><select name="ket">
            <option value=""></option>
            <option value="1" <?php if($ket2 == 1){ echo "selected='selected'"; } ?>>Lulus</option>
            <option value="2" <?php if($ket2 == 2){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
            <option value="3" <?php if($ket2 == 3){ echo "selected='selected'"; } ?>>-</option>
            </select></td>
        </tr>
        <tr>
            <td>SMP</td>
            <td>:</td>
            <td><input type="text" name="sekolah" value="<?php echo $nama_sekolah2; ?>" placeholder="Nama SMP Anda"></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td><input type="number" maxlength="4" value="<?php echo $tahun_sekolah2; ?>" name="tahun" placeholder="Tahun Anda Lulus"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol2; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "3"){ ?>
<h2>3. Sekolah Menengah Atas (SMA)</h2>
<form method="post">
    <table>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><select name="ket">
            <option value=""></option>
            <option value="1" <?php if($ket3 == 1){ echo "selected='selected'"; } ?>>Lulus</option>
            <option value="2" <?php if($ket3 == 2){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
            <option value="3" <?php if($ket3 == 3){ echo "selected='selected'"; } ?>>-</option>
            </select></td>
        </tr>
        <tr>
            <td>SMA/SMK/MA</td>
            <td>:</td>
            <td><input type="text" name="sekolah" value="<?php echo $nama_sekolah3; ?>" placeholder="Nama SMA/SMK/MA Anda"></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td><input type="number" maxlength="4" value="<?php echo $tahun_sekolah3; ?>" name="tahun" placeholder="Tahun Anda Lulus"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol3; ?></td>
        </tr>
    </table>
</form>
<?php }else{ ?>
<h2>4. Perguruan Tinggi (PT)</h2>
<form method="post">
    <table>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><select name="ket">
            <option value=""></option>
            <option value="1" <?php if($ket4 == 1){ echo "selected='selected'"; } ?>>Lulus</option>
            <option value="2" <?php if($ket4 == 2){ echo "selected='selected'"; } ?>>Tidak Lulus</option>
            <option value="3" <?php if($ket4 == 3){ echo "selected='selected'"; } ?>>-</option>
            </select></td>
        </tr>
        <tr>
            <td>Perguruan Tinggi</td>
            <td>:</td>
            <td><input type="text" name="sekolah" value="<?php echo $nama_sekolah4; ?>" placeholder="Nama Perguruan Tinggi Anda"></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td><input type="number" maxlength="4" value="<?php echo $tahun_sekolah4; ?>" name="tahun" placeholder="Tahun Anda Lulus"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol4; ?></td>
        </tr>
    </table>
</form>
<?php } ?>
