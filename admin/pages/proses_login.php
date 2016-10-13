<?php
	if(@$_POST['login_button']){
		$user = trim($_POST['usern']);
		$pasw = trim($_POST['pasw']);
		$enkrip = md5($pasw);

		$query = mq("select * from user_admin where user_name='$user' && password='$enkrip' && status='1'");
		$nilai = mfa($query);
		if($nilai){
			$_SESSION['user_name'] = $user;
			$_SESSION['id_admin'] = $nilai['id_admin'];
			echo "<script>
			window.location = 'index.php';
			</script>";
		}else{
			echo "<script>
			window.location = 'login.php?proses=gagal';
			</script>";
		}
	}
?>