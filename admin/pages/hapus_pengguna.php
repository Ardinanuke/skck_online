<?php
	if(@$_GET['id']){
		$id_pengguna = $_GET['id'];
		$hapus = mq("delete from pengguna where id_pengguna='$id_pengguna'");
		if($hapus){
			echo "<script>
			alert('Data berhasil dihapus!');
			window.location = '?page=pengguna&hapus=sukses';
			</script>";
		}else{
			echo "<script>
			alert('Data gagal dihapus!');
			window.location = '?page=pengguna&hapus=gagal';
			</script>";
		}
	}
?>