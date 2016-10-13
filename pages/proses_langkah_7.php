<?php
	if(@$_POST['tombol_simpan1']){
		$jawab = tag(escape(special(nl2br($_POST['jawaban']))));

		if($jawab == null){
			header("location: ?page=langkah_7&proses=kosong");
		}else{
			$insert = mq("insert into hobi (kegemaran,id_pengguna) value ('$jawab','".$_SESSION['id_pengguna']."')");
			if($insert){
				$tgl = date("dmY");
				$jam = date("His");
				$char = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			    $karakter = strlen($char);
			    $random_string = "";
			    for($i=0;$i<6;$i++){
			        $random_string .= $char[rand(0, $karakter - 1)]; 
			    }
			    $id_rand = "0". $_SESSION['id_pengguna'];
			    $no_registrasi = $tgl.$random_string.$jam;
				$update = mq("update pengguna set status_registrasi='8', no_registrasi='$random_string' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_7&proses=sukses");
			}else{
				header("location: ?page=langkah_7&proses=gagal");
			}
		}
	}

	if(@$_POST['tombol_lewat']){
		$update = mq("update pengguna set status_registrasi='8' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_8");
		}else{
			header("location: ?page=langkah_7");
		}
	}

	if(@$_POST['tombol_langkah']){
		header("location: ?page=langkah_8");
	}
?>