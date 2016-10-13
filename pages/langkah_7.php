<?php
	include "proses_langkah_7.php";
?>
<h1><span class="fa fa-lg fa-briefcase"></span> Hobi / Kegemaran</h1>
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
    $val = mq("select * from hobi where id_pengguna='".$_SESSION['id_pengguna']."'");
    if(mnr($val)){
        $d_hobi = mfa($val);
        $hobi = $d_hobi['kegemaran'];
        $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah" value="Langkah Selanjutnya">';
    }else{
        $hobi = "";
        $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">';
    }
?>
<form method="post">
    <table>
        <tr>
        	<td>1. Tuliskan hobi atau kegemaran yang anda sukai !</td>
        	<input type="hidden" name="pertanyaan" value="Pernahkah Saudara pergi ke luar negeri?">
        </tr>
        <tr>
        	<td><textarea name="jawaban" class="form_pertanyaan" placeholder="Jawab di sini.."><?php echo $hobi; ?></textarea></i>
            </td>
        </tr>
        <tr>
        	<td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>