<?php
    include "config/koneksi.php";
    include "config/lib.php";
?>
<?php
    /*if(@$_POST['kirim_ulang']){
        $id = $_POST['id_pengguna'];
        $pengguna = mfa(mq("select * from pengguna where id_pengguna='".$id."'"));
        $email = $pengguna['email_pengguna'];

        $title = "Intruksi untuk melakukan konfirmasi";
        $pesan = 
        "
        <div class='aktivasi_email'>
            <h1>Kerja Dulu</h1>
            <h3>Hi ".$nama."! <br>
            Terima kasih telah bergabung dengan KerjaDulu. <br>
            Silahkan klik link di bawah ini untuk menyelesaikan proses pendaftaran Anda. <br>

            <a href='?konfirmasi&id=".$id."'>konfirmasi Akun Saya</a>
        </div>
        ";
        $header = "From : bayucakra20@gmail.com";
        $mail = mail($email, $title, $pesan, $header);
        if($mail){
            header("location: ?id=".$id."&proses=sukses");
        }else{
            header("location: ?id=".$id."&proses=gagal");
        }

    }*/
?>
<html>
    <head>
        <title>Sistem Registrasi</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="container">
            <header>
                <div class="batas">
                    <div class="col4">
                        <div class="logo">
                            <img src="image/logo_11.png" title="Logo">
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </header>
            <div class="content_wrapper">
                <div class="batas">
                    <div class="notif_aktivasi">
                        <h1>Akun berhasil dibuat!</h1>
                        <h3>Silahkan login menggunakan akun yang anda buat untuk menyelesaikan pendaftaran anda</h3>
                        <form method="post">
                        <p><a href="index.php" class="tombol_daftar">Silahkan Login Disini</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript" src="js/jquery.js"></script>

