<?php
	include "proses_langkah_6.php";
?>
<h1><span class="fa fa-lg fa-briefcase"></span> Ciri Fisik</h1>
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
    $val = mq("select * from ciri_fisik where id_pengguna='".$_SESSION['id_pengguna']."'");
    if(mnr($val)){
        $data_fisik = mfa($val);
        $rambut = $data_fisik['rambut'];
        $muka = $data_fisik['muka'];
        $kulit = $data_fisik['kulit'];
        $tinggi = $data_fisik['tinggi'];
        $tanda = $data_fisik['tanda_istimewa'];
        $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah" value="Langkah Selanjutnya">';
    }else{
        $rambut = "";
        $muka = "";
        $kulit = "";
        $tinggi = "";
        $tanda = "";
        $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">
         <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat" value="Lewati">';
    }
?>
<form method="post">
    <table>
        <tr>
        	<td>Rambut</td>
            <td>:</td>
            <td><input type="text" name="rambut" value="<?php echo $rambut; ?>" placeholder="Warna Rambut Anda"></td>
        </tr>
        <tr>
            <td>Muka</td>
            <td>:</td>
            <td><input type="text" name="muka" value="<?php echo $muka; ?>" placeholder="Bentuk Muka Anda"></td>
        </tr>
        <tr>
            <td>Kulit</td>
            <td>:</td>
            <td><input type="text" name="kulit" value="<?php echo $kulit; ?>" placeholder="Warna Kulit Anda"></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>" placeholder="Tinggi Badan Anda"></td>
        </tr>
        <tr>
            <td>Tanda Istimewa</td>
            <td>:</td>
            <td><input type="text" name="tanda_istimewa" value="<?php echo $tanda; ?>" placeholder="Tanda Istimewa Anda"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        	<td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>