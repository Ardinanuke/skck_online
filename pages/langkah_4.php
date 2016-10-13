<?php
	include "proses_langkah_4.php";
?>
<h1><span class="fa fa-lg fa-briefcase"></span> Tersangkut Perkara Pidana dan Pelanggaran</h1>
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
        $pertanyaan = mq("select * from pertanyaan where type_pertanyaan='1' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($pertanyaan)){
            $tombol = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah1" value="Langkah Selanjutnya">';
            $d_pertanyaan = mfa($pertanyaan);
            $hitung = $d_pertanyaan['id_pertanyaan'];
        }else{
            $tombol = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan1" value="Simpan">
              <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat1" value="Lewati">';
        }
        
        $pertanyaan2 = mq("select * from pertanyaan where type_pertanyaan='2' && id_pengguna='".$_SESSION['id_pengguna']."'");
        if(mnr($pertanyaan2)){
            $tombol2 = '<input class="tombol_ok" type="submit" title="Langkah Selanjutnya" name="tombol_langkah2" value="Langkah Selanjutnya">';
        }else{
            $tombol2 = '<input class="tombol_ok" type="submit" title="Simpan" name="tombol_simpan2" value="Simpan">
              <input class="tombol_ok" type="submit" title="Lewati" name="tombol_lewat2" value="Lewati">';    
        }
?>
<?php
	if(@$_GET['type'] == ""){
?>
<h2>&#8226; Perkara Pidana</h2>
<form method="post">
    <table>
        <tr>
        	<td>1. Apakah saudara pernah tersangkut perkara pidana?</td>
        	<input type="hidden" name="pertanyaan[]" value="Apakah saudara pernah tersangkut perkara pidana?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>2. Dalam perkara apa?</td>
        	<input type="hidden" name="pertanyaan[]" value="Dalam perkara apa?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>3. Bagaimana putusan / Vonis hakim?</td>
        	<input type="hidden" name="pertanyaan[]" value="Bagaimana putusan / Vonis hakim?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>4. Apakah Saudara saat ini sedang dalam perkara pidana?</td>
        	<input type="hidden" name="pertanyaan[]" value="Apakah Saudara saat ini sedang dalam perkara pidana?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>5. Dalam perkara / kasus apa?</td>
        	<input type="hidden" name="pertanyaan[]" value="Dalam perkara / kasus apa?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>6. Sampai sejauh mana proses hukumnya?</td>
        	<input type="hidden" name="pertanyaan[]" value="Sampai sejauh mana proses hukumnya?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>7. Bagaimana hasilnya / putusan akhir?</td>
        	<input type="hidden" name="pertanyaan[]" value="Bagaimana hasilnya / putusan akhir?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td><?php echo $tombol; ?></td>
        </tr>
    </table>
</form>

<?php }elseif(@$_GET['type'] == "2"){ ?>
<h2>&#8226; Pelanggaran</h2>
<form method="post">
    <table>
        <tr>
        	<td>1. Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?</td>
        	<input type="hidden" name="pertanyaan[]" value="Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>2. Pelanggaran hukum dan atau norma-norma apa?</td>
        	<input type="hidden" name="pertanyaan[]" value="Pelanggaran hukum dan atau norma-norma apa?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td>3. Sampai sejauh mana proses hukumnya?</td>
        	<input type="hidden" name="pertanyaan[]" value="Sampai sejauh mana proses hukumnya?">
        </tr>
        <tr>
        	<td><input type="text" name="jawaban[]" placeholder="Jawab di sini.." class="form_pertanyaan"></td>
        </tr>
        <tr>
        	<td><?php echo $tombol2; ?></td>
        </tr>
    </table>
</form>
<?php } ?>