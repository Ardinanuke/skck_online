<?php
	if(@$_POST['tombol_simpan1']){
		$rambut = tag(escape(special($_POST['rambut'])));
		$muka = tag(escape(special($_POST['muka'])));
		$kulit = tag(escape(special($_POST['kulit'])));
		$tinggi = tag(escape(special($_POST['tinggi'])));
		$tanda_istimewa = tag(escape(special($_POST['tanda_istimewa'])));

		if(($rambut == null) || ($muka == null) || ($kulit == null) || ($tinggi == null) || ($tanda_istimewa == null)){
			header("location: ?page=langkah_6&proses=kosong");
		}else{
			$insert = mq("insert into ciri_fisik (rambut,muka,kulit,tinggi,tanda_istimewa,id_pengguna) value 
				('$rambut','$muka','$kulit','$tinggi','$tanda_istimewa','".$_SESSION['id_pengguna']."')");
			if($insert){
				$update = mq("update pengguna set status_registrasi='7' where id_pengguna='".$_SESSION['id_pengguna']."'");
				header("location: ?page=langkah_6&proses=sukses");
			}else{
				header("location: ?page=langkah_6&proses=gagal");
			}
		}	
	}

	if(@$_POST['tombol_lewat']){
		$update = mq("update pengguna set status_registrasi='7' where id_pengguna='".$_SESSION['id_pengguna']."'");
		if($update){
			header("location: ?page=langkah_7");
		}else{
			header("location: ?page=langkah_6");
		}
	}

	if(@$_POST['tombol_langkah']){
		header("location: ?page=langkah_7");
	}
?>