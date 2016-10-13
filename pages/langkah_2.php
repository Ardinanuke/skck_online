<?php
    include "proses_langkah_2.php";
?>
<h1><span class="fa fa-lg fa-edit"></span> Hubungan Keluarga</h1>
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
        $email = $val['email_pengguna'];
        $istri = mq("select * from hub_keluarga where type_keluarga='1' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($istri)){
            $data_istri = mfa($istri);
            $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah1" value="Langkah Selanjutnya">';
            $nama = $data_istri['nama_keluarga'];
            $umur = $data_istri['umur'];
            $agama = $data_istri['agama_keluarga'];
            $negara = $data_istri['kebangsaan_keluarga'];
            $pekerjaan = $data_istri['pekerjaan_keluarga'];
            $alamat = $data_istri['alamat_keluarga'];
        }else{
            $nama = "";
            $umur = "";
            $agama = "";
            $negara = "";
            $pekerjaan = "";;
            $alamat = "";
            $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat1" value="Lewati">';
        }
        $bapak = mq("select * from hub_keluarga where type_keluarga='2' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($bapak)){
            $tombol2 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah2" value="Langkah Selanjutnya">';
            $data_bapak = mfa($bapak);
            $nama2 = $data_bapak['nama_keluarga'];
            $umur2 = $data_bapak['umur'];
            $agama2 = $data_bapak['agama_keluarga'];
            $negara2 = $data_bapak['kebangsaan_keluarga'];
            $pekerjaan2 = $data_bapak['pekerjaan_keluarga'];
            $alamat2 = $data_bapak['alamat_keluarga'];
        }else{
            $nama2 = "";
            $umur2 = "";
            $agama2 = "";
            $negara2 = "";
            $pekerjaan2 = "";;
            $alamat2 = "";
            $tombol2 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan2" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat2" value="Lewati">';
        }
        $ibu = mq("select * from hub_keluarga where type_keluarga='3' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($ibu)){
            $tombol3 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah3" value="Langkah Selanjutnya">';
            $data_ibu = mfa($ibu);
            $nama3 = $data_ibu['nama_keluarga'];
            $umur3 = $data_ibu['umur'];
            $agama3 = $data_ibu['agama_keluarga'];
            $negara3 = $data_ibu['kebangsaan_keluarga'];
            $pekerjaan3 = $data_ibu['pekerjaan_keluarga'];
            $alamat3 = $data_ibu['alamat_keluarga'];
        }else{
            $nama3 = "";
            $umur3 = "";
            $agama3 = "";
            $negara3 = "";
            $pekerjaan3 = "";;
            $alamat3 = "";
            $tombol3 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan3" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat3" value="Lewati">';
        }
        $saudara = mq("select * from hub_keluarga where type_keluarga='4' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($saudara)){
            $tombol4 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah4" value="Langkah Selanjutnya">';
            $data_saudara = mfa($saudara);
            $nama4 = $data_saudara['nama_keluarga'];
            $umur4 = $data_saudara['umur'];
            $agama4 = $data_saudara['agama_keluarga'];
            $negara4 = $data_saudara['kebangsaan_keluarga'];
            $pekerjaan4 = $data_saudara['pekerjaan_keluarga'];
            $alamat4 = $data_saudara['alamat_keluarga'];
        }else{
            $nama4 = "";
            $umur4 = "";
            $agama4 = "";
            $negara4 = "";
            $pekerjaan4 = "";;
            $alamat4 = "";
            $tombol4 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan4" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat4" value="Lewati">';
        }
        $data_suami = mq("select * from hub_keluarga2 where id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($data_suami)){
            $tombol5 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah5" value="Langkah Selanjutnya">';
            $data_hasil_suami = mfa($data_suami);
            $data_bapak = $data_hasil_suami['nama_bapak'];
            $data_ibu = $data_hasil_suami['nama_ibu'];
            $data_saudara = $data_hasil_suami['nama_saudara'];
            $data_alamat = $data_hasil_suami['alamat_keluarga2'];
        }else{
            $data_bapak = "";
            $data_ibu = "";
            $data_saudara = "";
            $data_alamat = "";
            $tombol5 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan5" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat5" value="Lewati">';
        }
        $tanggungan = mq("select * from tanggungan_keluarga where id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($tanggungan)){
            $tombol6 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah6" value="Langkah Selanjutnya">';
            $data_tanggungan = mfa($tanggungan);
            $nama_tanggungan = $data_tanggungan['nama_tanggungan'];
            $alamat_tanggungan = $data_tanggungan['alamat_tanggungan'];
        }else{
            $nama_tanggungan = "";
            $alamat_tanggungan = "";
            $tombol6 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan6" value="Simpan">
             <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat6" value="Lewati">';
        }
?>
<?php
    if(@$_GET['type'] == ""){
?>
<h2>1. Istri/Suami</h2>
<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Nama Istri/Suami"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><input type="number" name="umur" value="<?php echo $umur; ?>" placeholder="Umur"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
                <option value=""></option>
                <option value="1" <?php if($agama == 1){ echo "selected='selected'"; } ?>>Islam</option>
                <option value="2" <?php if($agama == 2){ echo "selected='selected'"; } ?>>Kristen</option>
                <option value="3" <?php if($agama == 3){ echo "selected='selected'"; } ?>>Katolik</option>
                <option value="4" <?php if($agama == 4){ echo "selected='selected'"; } ?>>Budha</option>
                <option value="5" <?php if($agama == 5){ echo "selected='selected'"; } ?>>Hindu</option>
                <option value="6" <?php if($agama == 6){ echo "selected='selected'"; } ?>>Konghucu</option>
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
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" placeholder="Pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat Anda.."><?php echo $alamat; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "2"){ ?>
<h2>2. Bapak Sendiri</h2>
<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama2; ?>" placeholder="Nama Bapak Sendiri"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><input type="number" name="umur" value="<?php echo $umur2; ?>" placeholder="Umur"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
                <option value=""></option>
                <option value="1" <?php if($agama2 == 1){ echo "selected='selected'"; } ?>>Islam</option>
                <option value="2" <?php if($agama2 == 2){ echo "selected='selected'"; } ?>>Kristen</option>
                <option value="3" <?php if($agama2 == 3){ echo "selected='selected'"; } ?>>Katolik</option>
                <option value="4" <?php if($agama2 == 4){ echo "selected='selected'"; } ?>>Budha</option>
                <option value="5" <?php if($agama2 == 5){ echo "selected='selected'"; } ?>>Hindu</option>
                <option value="6" <?php if($agama2 == 6){ echo "selected='selected'"; } ?>>Konghucu</option>
            </select>
        </tr>
        <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td><select name="negara">
                <option value=""></option>
                <option value="1" <?php if($negara2 == 1){ echo "selected='selected'"; } ?>>Indonesia</option>
                <option value="2" <?php if($negara2 == 2){ echo "selected='selected'"; } ?>>Malaysia</option>
                <option value="3" <?php if($negara2 == 3){ echo "selected='selected'"; } ?>>Singapura</option>
                <option value="4" <?php if($negara2 == 4){ echo "selected='selected'"; } ?>>Myanmar</option>
            </select></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan2; ?>" placeholder="Pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat Anda.."><?php echo $alamat2; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol2; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "3"){ ?>
<h2>3. Ibu Sendiri</h2>
<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama3; ?>" placeholder="Nama Ibu Sendiri"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><input type="number" name="umur" value="<?php echo $umur3; ?>" placeholder="Umur"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
                <option value=""></option>
                <option value="1" <?php if($agama3 == 1){ echo "selected='selected'"; } ?>>Islam</option>
                <option value="2" <?php if($agama3 == 2){ echo "selected='selected'"; } ?>>Kristen</option>
                <option value="3" <?php if($agama3 == 3){ echo "selected='selected'"; } ?>>Katolik</option>
                <option value="4" <?php if($agama3 == 4){ echo "selected='selected'"; } ?>>Budha</option>
                <option value="5" <?php if($agama3 == 5){ echo "selected='selected'"; } ?>>Hindu</option>
                <option value="6" <?php if($agama3 == 6){ echo "selected='selected'"; } ?>>Konghucu</option>
            </select>
        </tr>
        <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td><select name="negara">
                <option value=""></option>
                <option value="1" <?php if($negara3 == 1){ echo "selected='selected'"; } ?>>Indonesia</option>
                <option value="2" <?php if($negara3 == 2){ echo "selected='selected'"; } ?>>Malaysia</option>
                <option value="3" <?php if($negara3 == 3){ echo "selected='selected'"; } ?>>Singapura</option>
                <option value="4" <?php if($negara3 == 4){ echo "selected='selected'"; } ?>>Myanmar</option>
            </select></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan3; ?>" placeholder="Pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat Anda.."><?php echo $alamat3; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol3; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "4"){ ?>
<h2>4. Saudara Sekandung/Tiri</h2>
<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama4; ?>" placeholder="Nama Saudara"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><input type="number" name="umur" value="<?php echo $umur4; ?>" placeholder="Umur"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
                <option value=""></option>
                <option value="1" <?php if($agama4 == 1){ echo "selected='selected'"; } ?>>Islam</option>
                <option value="2" <?php if($agama4 == 2){ echo "selected='selected'"; } ?>>Kristen</option>
                <option value="3" <?php if($agama4 == 3){ echo "selected='selected'"; } ?>>Katolik</option>
                <option value="4" <?php if($agama4 == 4){ echo "selected='selected'"; } ?>>Budha</option>
                <option value="5" <?php if($agama4 == 5){ echo "selected='selected'"; } ?>>Hindu</option>
                <option value="6" <?php if($agama4 == 6){ echo "selected='selected'"; } ?>>Konghucu</option>
            </select>
        </tr>
        <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td><select name="negara">
                <option value=""></option>
                <option value="1" <?php if($negara4 == 1){ echo "selected='selected'"; } ?>>Indonesia</option>
                <option value="2" <?php if($negara4 == 2){ echo "selected='selected'"; } ?>>Malaysia</option>
                <option value="3" <?php if($negara4 == 3){ echo "selected='selected'"; } ?>>Singapura</option>
                <option value="4" <?php if($negara4 == 4){ echo "selected='selected'"; } ?>>Myanmar</option>
            </select></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan4; ?>" placeholder="Pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat Anda.."><?php echo $alamat4; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol4; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "5"){ ?>
<h2>5. Data Keluarga Suami/Istri</h2>
<form method="post">
    <table>
        <?php
            $suami = mfa(mq("select * from hub_keluarga where id_pengguna='".$_SESSION['id_pengguna']."' && type_keluarga='1'"));
        ?>
        <tr>
            <td>Suami/Istri</td>
            <td>:</td>
            <td><input type="text" name="nama_suami" placeholder="Nama Suami/Istri" value="<?php echo $suami['nama_keluarga']; ?>"></td>
        </tr>
        <tr>
            <td>Bapak Suami/Istri</td>
            <td>:</td>
            <td><input type="text" name="nama_bapak" value="<?php echo $data_bapak; ?>" placeholder="Nama Bapak Suami/Istri"></td>
        </tr>
        <tr>
            <td>Ibu Suami/Istri</td>
            <td>:</td>
            <td><input type="text" name="nama_ibu" value="<?php echo $data_ibu; ?>" placeholder="Nama Ibu Suami/Istri"></td>
        </tr>
        <tr>
            <td>Saudara Suami/Istri</td>
            <td>:</td>
            <td><input type="text" name="nama_saudara" value="<?php echo $data_saudara; ?>" placeholder="Nama Saudara Suami/Istri"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" maxlength="100" placeholder="Alamat.."><?php echo $data_alamat; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol5; ?></td>
        </tr>
    </table>
</form>
<?php }elseif(@$_GET['type'] == "6"){ ?>
<h2>6. Sanak saudara yang menjadi tanggungan</h2>
<form method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $nama_tanggungan; ?>" name="nama_tanggungan" placeholder="Nama Saudara"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat_tanggungan" maxlength="100" placeholder="Alamat Saudara.."><?php echo $alamat_tanggungan; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $tombol6; ?></td>
        </tr>
    </table>
</form>
<?php } ?>