<?php
    ob_start();
    session_start();
    include "../config/koneksi.php";
    include "../config/lib.php";
    if((!$_SESSION['email']) && (!$_SESSION['password']) && (!$_SESSION['id_pengguna'])){
        header("location: ../");
    }else{
?>
<html>
    <head>
        <title>Registrasi SKCK Online</title>
        <link rel="stylesheet" type="text/css" href="../css/style_index.css">
        <link rel="stylesheet" type="text/css" href="../include/font/css/font-awesome.css">
        <link rel="shortcut icon" href="../image/polri.png">
    </head>
    <body>
        <nav>
            <div class="nav_wrapper">
                <div class="batas">
                    <div class="col4">
                        <div class="nav_logo">
                            <img src="../image/logo_1.png">
                        </div>
                    </div>
                    <div class="col6">
                        <div class="nav_right">
                            <p><a href="?page=logout" title="Logout"><span class="fa fa-lg fa-sign-out"></span> Logout</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
            <div class="after_content">
                <div class="batas">
                    <div class="col3">
                        <section id="after_left">
                            <?php
                                $cek_menu = mfa(mq("select * from pengguna where id_pengguna='".$_SESSION['id_pengguna']."'"));
                                if($cek_menu['status_registrasi'] == "1"){
                            ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","tidak"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","tidak"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","tidak"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","tidak"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","tidak"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "2"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","tidak"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","tidak"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","tidak"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","tidak"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "3"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","tidak"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","tidak"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","tidak"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "4"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","aktif"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","tidak"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","tidak"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "5"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","aktif"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","aktif"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","tidak"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "6"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","aktif"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","aktif"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","aktif"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","tidak"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "7"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","aktif"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","aktif"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","aktif"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","aktif"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","tidak"); ?></p>
                            
                            <?php }elseif($cek_menu['status_registrasi'] == "8"){ ?>
                            <p><?php menu("langkah_1","<span class='langkah_angka'>1</span> Lengkapi Identitas","aktif"); ?></p>
                            <p><?php menu("langkah_2","<span class='langkah_angka'>2</span> Hubungan Keluarga","aktif"); ?></p>
                            <p><?php menu("langkah_3","<span class='langkah_angka'>3</span> Pendidikan","aktif"); ?></p>
                            <p><?php menu("langkah_4","<span class='langkah_angka'>4</span> Pertanyaan Pertama","aktif"); ?></p>
                            <p><?php menu("langkah_5","<span class='langkah_angka'>5</span> Pertanyaan Kedua","aktif"); ?></p>
                            <p><?php menu("langkah_6","<span class='langkah_angka'>6</span> Ciri-ciri Fisik","aktif"); ?></p>
                            <p><?php menu("langkah_7","<span class='langkah_angka'>7</span> Hobi/Kegemaran","aktif"); ?></p>
                            <p><?php menu("langkah_8","<span class='langkah_angka'>8</span> Selesai","aktif"); ?></p>
                            <?php } ?>

                        </section>
                    </div>
                    <div class="col7">
                        <section id="after_right">
                            <?php
                                if(isset($_GET['page'])){
                                    include "".$_GET['page'].".php";  
                                }else{
                                    include "langkah_1.php";
                                }
                            ?>
                        </section>
                    </div>
                </div>
                <footer>
                    Created by <a style="text-decoration: none; color: #656161;" target="_blank" href="http://polrestabarelang.com">Bag. OPS Polresta Barelang</a>
                </footer>
            </div>
    </body>
</html>

<script type="text/javascript" src="../js/jquery.js"></script>

<?php } ?>
<?php ob_flush(); ?>