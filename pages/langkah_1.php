<?php
    include "proses_langkah_1.php";
?>
<h1><span class="fa fa-lg fa-list-ul"></span> Lengkapi Identitas</h1>
<?php
    if(@$_GET['tambah'] == "sukses"){
?>
<div class="notif"><span class="fa fa-lg fa-info-circle"></span> &nbsp;Data berhasil disimpan, klik tombol <u style="font-family: opensans-bold; text-decoration:none;">Lanjut</u> untuk melanjutkan!</div>
<?php }elseif(@$_GET['tambah'] == "gagal"){ ?>
<div class="notif"><span class="fa fa-lg fa-times-circle"></span> &nbsp;Data gagal disimpan!</div>
<?php }elseif(@$_GET['tambah'] == "kosong"){ ?>
<div class="notif"><span class="fa fa-lg fa-exclamation-circle"></span> &nbsp;Form pengisian tidak boleh ada yang kosong!</div>
<?php } ?>
<?php
    $val = mfa(mq("select * from pengguna where id_pengguna='".$_SESSION['id_pengguna']."'"));
    if($val['status_registrasi'] != "1"){
        $nama = $val['nama_pengguna'];
        $tmp_lahir = $val['tmp_lahir'];
        $tgl_lahir = $val['tgl_lahir'];
        $pecah = explode("/", $tgl_lahir);
        $tgl = $pecah[0];
        $bulan2 = $pecah[1];
        $tahun2 = $pecah[2];
        $negara = $val['negara'];
        $alamat = $val['alamat'];
        $no_telp = $val['no_telp'];
        $agama = $val['agama'];
        $kelamin = $val['j_kelamin'];
        $kawin = $val['ket_kawin'];
        $kedudukan = $val['kedudukan'];
        $pekerjaan = $val['pekerjaan'];
        $no_ktp = $val['no_ktp'];
        $tombol = '<input type="submit" name="tombol_langkah" class="tombol_ok" title="Langkah Selanjutnya" value="Langkah Selanjutnya">';
    }else{
        $nama = $val['nama_pengguna'];
        $tmp_lahir = "";
        $tgl = "";
        $bulan2 = "";
        $tahun2 = "";
        $negara = "";
        $alamat = "";
        $no_telp = "";
        $agama = "";
        $kelamin = "";
        $kawin = "";
        $kedudukan = "";
        $pekerjaan = "";
        $no_ktp = "";
        $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan" value="Simpan">';
    }
?> 
<form method="post">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="50" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tmp_lahir" maxlength="50" placeholder="Tempat Lahir Anda" value="<?php echo $tmp_lahir; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><select class="tgl" name="tgl">
            <option value=""></option>
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
            <option value=""></option>
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
            <option value=""></option>
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
            <td><select name="agama">
                <option value=""></option>
                <option value="1" <?php if($agama == "1"){ echo "selected='selected'"; } ?>>Islam</option>
                <option value="2" <?php if($agama == "2"){ echo "selected='selected'"; } ?>>Kristen</option>
                <option value="3" <?php if($agama == "3"){ echo "selected='selected'"; } ?>>Katolik</option>
                <option value="4" <?php if($agama == "4"){ echo "selected='selected'"; } ?>>Budha</option>
                <option value="5" <?php if($agama == "5"){ echo "selected='selected'"; } ?>>Hindu</option>
                <option value="6" <?php if($agama == "6"){ echo "selected='selected'"; } ?>>Konghucu</option>
            </select>
        </tr>
        <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td><select name="negara">
                <option value=""></option>
                <option value="1" <?php if($negara == 1){ echo "selected='selected'"; } ?>>Indonesia</option>
                <option value="2" <?php if($negara == 2){ echo "selected='selected'"; } ?>>Malaysia</option>
                <option value="3" <?php if($negara == 3){ echo "selected='selected'"; } ?>>Singapura</option>
                <option value="4" <?php if($negara == 4){ echo "selected='selected'"; } ?>>Myanmar</option>
            </select></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><select name="j_kelamin">
                <option value=""></option>
                <option value="1" <?php if($kelamin == "1"){ echo "selected='selected'"; } ?>>Laki-laki</option>
                <option value="2" <?php if($kelamin == "2"){ echo "selected='selected'"; } ?>>Perempuan</option>
            </select>
        </tr>
        <tr>
            <td>Kedudukan Keluarga</td>
            <td>:</td>
            <td><select name="kedudukan">
                <option value=""></option>
                <option value="1" <?php if($kedudukan == "1"){ echo "selected='selected'"; } ?>>Anak</option>
                <option value="2" <?php if($kedudukan == "2"){ echo "selected='selected'"; } ?>>Orang tua</option>
            </select>
        </tr>
        <tr>
            <td>Kawin/Tidak Kawin</td>
            <td>:</td>
            <td><select name="kawin">
                <option value=""></option>
                <option value="1" <?php if($kawin == "1"){ echo "selected='selected'"; } ?>>Kawin</option>
                <option value="2" <?php if($kawin == "2"){ echo "selected='selected'"; } ?>>Tidak Kawin</option>
            </select>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" maxlength="50" placeholder="Pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat Anda.."><?php echo $alamat; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><i style="font-style: normal; font-size: 13px;">Max 100 karakter</i></td>
        </tr>
        <tr>
            <td>No KTP</td>
            <td>:</td>
            <td><input class="no_ktp" type="number" maxlength="12" name="no_ktp" placeholder="No KTP" value="<?php echo $no_ktp; ?>"></td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td>:</td>
            <td><input class="no_telp" type="number" maxlength="12" name="no_telp" placeholder="No Telpon" value="<?php echo $no_telp; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>