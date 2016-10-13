<?php
    ob_start();
    include "config/koneksi.php";
    include "config/lib.php";
    include "pages/proses_daftar.php";
    include "pages/proses_login.php";
?> 
<html>
    <head>
        <title>SKCK Online</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="image/polri.png">
    </head>
    <body>
        <div id="container">
            <header>
                <div class="batas">
                    <div class="col4">
                        <div class="logo">
                            <img src="image/heade.png" title="Logo">
                        </div>
                    </div>
                    <div class="col6">
                        <div class="input_login">
                            <form method="post">
                                <div class="posisi_input_login">
                                    <label class="label_input_login">Email</label><br>
                                    <input type="email" name="email" placeholder="Email" title="Email tidak boleh kosong" required="required"><br>
                                    
                                </div>
                                <div class="posisi_input_login">
                                    <label class="label_input_login">Password</label><br>
                                    <input type="password" name="pasw" placeholder="Password" required="required">
                                </div>
                                <div class="posisi_input_login">
                                    <input class="tombol_login" type="submit" name="tombol_login" value="Masuk">
                                </div>
                                <div class="tetap_login">
                                    <input type="checkbox" name="tetap_login"> Biarkan saya masuk
                                </div>
                            </form>
                            <?php
                            if(@$_GET['proses_login'] == "gagal"){ ?>
                            <div class="notif" id="notifLogin">Username dan password salah! <span class="close_button" id="closeLogin">x</span></div>
                            <?php }elseif(@$_GET['proses_login'] == "aktif"){ ?>
                            <div class="notif" id="notifLogin">Silahkan aktivasi email terlebih dahulu! <span class="close_button" id="closeLogin">x</span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="batas">
                        <div class="judul_content">
                            <h1>Selamat Datang Di Pelayanan SKCK Online</h1>
                            <h3>Dapatkan Kemudahan Yang Lebih Profesional!</h3>
                        </div>
                        <div id="content">
                            <div class="col5">
                                <section id="left">
                                    <div class="image_landing">
                                        <img src="image/intelkam.png">
                                    </div>
                                </section>
                            </div>
                            <div class="col5">
                                <section id="right">
                                    <h2>Daftar disini sekarang!</h2>
                                    <?php
                                    if(@$_GET['proses_daftar'] == "gagal"){
                                    ?>
                                    <div class="notif" id="notifDaftar">Registrasi gagal! <span class="close_button" id="closeDaftar">x</span></div>
                                    <?php }elseif(@$_GET['proses_daftar'] == "password"){ ?>
                                    <div class="notif" id="notifSandi">Kata sandi tidak sama! <span class="close_button" id="closeSandi">x</span></div>
                                    <?php }elseif(@$_GET['proses_daftar'] == "email"){ ?>
                                    <div class="notif" id="notifEmail">Email yang dimasukkan sudah ada! <span class="close_button" id="closeEmail">x</span></div>
                                    <?php } ?>
                                    <form method="post">
                                        <table>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td><input type="text" name="nama" placeholder="Nama Lengkap" required="required"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input type="email" name="email" placeholder="Email" required="required"></td>
                                            </tr>
                                            <tr>
                                                <td>Kata Sandi</td>
                                                <td><input type="password" name="pasw1" placeholder="Kata Sandi" required="required"></td>
                                            </tr>
                                            <tr>
                                                <td>Konfirmasi Kata Sandi</td>
                                                <td><input type="password" name="pasw2" placeholder="Konfirmasi Kata Sandi" required="required"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><label class="syarat">Dengan Mendaftar, Anda telah menyetujui <u>Syarat dan Ketentuan</u> yang berlaku.</label></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="tombol_daftar" value="Daftar"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><label class="syarat">sebelum mendaftar<a href="http://www.polrestabarelang.com/syarat-dan-ketentuan-skck-online/"><strong> WAJIB BACA INI</strong></a></label></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <hr class="garis_batas">
                                </section>
                            </div>
                        </div>
                    </div>
                </div>  
            </header>
        </div>
    </body>
</html>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<?php ob_flush(); ?>