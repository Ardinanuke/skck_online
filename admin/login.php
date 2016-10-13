<?php
	session_start();
	include "../config/koneksi.php";
	include "../config/lib.php";
	include "pages/proses_login.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Administrator SKCK Online</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
    <link rel="stylesheet" type="text/css" href="../include/font/css/font-awesome.css">
    <link rel="shortcut icon" href="../image/polri.png">
    <script type="text/javascript" src="admin/js/jquery.js"></script>
    <script type="text/javascript" src="admin/js/script.js"></script>
</head>

<body>
	<div class="login_page">
    	<div class="login_container">
        	<div class="judul_login">
            	<p><img src="../image/logo_1.png"></p>
                <h2>Login</h2>
            </div>
            <div class="login_form">
            	<div class="login_form_wrap">
                <form method="post">
                    <?php if(@$_GET['proses'] == "gagal") { ?>
                    <p class="notif_login"><span class="posisi_icon_login fa fa-lg fa-exclamation-circle"></span>Username dan password salah!</p>
                	<?php } ?>
                    <p><input type="text" name="usern" placeholder="Username" required></p>
                    <p><input type="password" name="pasw" placeholder="Password" required></p>
                    <p><span class="remember_me"><input type="checkbox" name="tetap_masuk"> Biarkan saya masuk</span></p>
                    <p><input type="submit" name="login_button" value="Login" title="Login"></p>
                    <div class="lupa_sandi">
                        <a id="lupaPassword">Lupa Kata Sandi?</a>
                    </div>
                </form>
                </div>
            </div>
            <div class="judul_login">
            	<h5>&copy; 2015 | <a style="text-decoration: none; color: #fff;" href="http://www.polrestabarelang.com" target="_blank">Polresta Barelang</a></h5>
            </div>
        </div>	
    </div>
    <div class="form_lupa_sandi">
        <div class='tombol_keluar2'>
            x
        </div>
        <div class="form_lupa_sandi_wrap">
                <div class="login_form">
            	<div class="login_form_wrap">
                <form method="post">
                	<p><input type="email" name="email" placeholder="Masukkan Email Anda" required></p>
                    <p><input type="submit" name="button_lupa" value="Reset Password" title="Reset Password"></p>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>