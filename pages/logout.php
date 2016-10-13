<?php
	unset($_SESSION['email']);
	unset($_SESSION['id_pengguna']);
	unset($_SESSION['password']);
	header("location: ../home");
?>