<?php
	unset($_SESSION['id_admin']);
	unset($_SESSION['user_name']);
	echo "<script>
	window.location = 'login.php';
	</script>";
?>