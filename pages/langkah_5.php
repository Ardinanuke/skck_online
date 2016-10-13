<?php
	include "proses_langkah_5.php";
?>
<h1><span class="fa fa-lg fa-briefcase"></span> Pertanyaan Kedua</h1>
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
    $val = mq("select * from pertanyaan2 where id_pengguna='".$_SESSION['id_pengguna']."'");
    if(mnr($val)){
        $d_pertanyaan = mfa($val);
        $jawaban = $d_pertanyaan['jawaban2'];
        $tombol = '<input type="submit" name="tombol_langkah" class="tombol_ok" title="Langkah Selanjutnya" value="Langkah Selanjutnya">';
    }else{
        $jawaban = "";
        $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">
         <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat1" value="Lewati">';
    }
?>
<form method="post">
    <table>
        <tr>
        	<td>1. Pernahkah Saudara pergi ke luar negeri?</td>
        	<input type="hidden" name="pertanyaan" value="Pernahkah Saudara pergi ke luar negeri?">
        </tr>
        <tr>
        	<td><textarea name="jawaban" class="form_pertanyaan" placeholder="Jawab di sini.."><?php echo $jawaban; ?></textarea><br>
            <i style="font-style:normal; font-size: 14px;">(Sebutkan tahun berapa, dalam rangka apa dan negara mana yang dikunjungi).</i>
            </td>
        </tr>
        <tr>
        	<td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>