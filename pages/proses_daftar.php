<?php
	include "include/PHPMailer-master/class.phpmailer.php";
	if(isset($_POST['tombol_daftar'])){
		$nama = tag(escape(special($_POST['nama'])));
		$email = tag(escape(special($_POST['email'])));
		$pasw1 = tag(escape(special($_POST['pasw1'])));
		$pasw2 = tag(escape(special($_POST['pasw2'])));
		$enkripsi = md5($pasw2);

		// cek email
		$cekemail = mnr(mq("select * from pengguna where email_pengguna='$email'"));

		if($cekemail == 1){
			header("location: ?proses_daftar=email");
		}elseif($pasw1 != $pasw2){
			header("location: ?proses_daftar=password");
		}else{
			$insert = mq("insert into pengguna (nama_pengguna,email_pengguna,password,status_registrasi) value ('$nama','$email','$enkripsi','1')");
			$id = mysql_insert_id();
			if($insert){
				/*$title = "Intruksi untuk melakukan konfirmasi";
				$pesan = 
				"
				<div class='aktivasi_email'>
					<h1>Kerja Dulu</h1>
					<h3>Hi ".$nama."! <br>
					Terima kasih telah bergabung dengan KerjaDulu. <br>
					Silahkan klik link di bawah ini untuk menyelesaikan proses pendaftaran Anda. <br>

					<a href='pages/konfirmasi.php?&id=".$id."'>konfirmasi Akun Saya</a>
				</div>
				";
				$header = "From : bayucakra20@gmail.com";
				$mail = mail($email,$title,$pesan,$header);
				if($mail){
					header("location: aktivasi.php?id=".$id."");
				}else{
					header("location: ?proses_daftar=gagal");
				}*/
				header("location: aktivasi.php?id=".$id."");
			}else{
				header("location: ?proses_daftar=gagal");
			}
		}
	}
?>