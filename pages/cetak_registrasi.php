<?php
    include "../config/koneksi.php";
    include "../config/lib.php";
?>  
<html>
    <head>
        <title>Formulir Registrasi</title>
        <link rel="stylesheet" type="text/css" href="../css/style_index.css">
    </head>
    <body onload="window.print()" style="background: #fff;">
        <div class="form_cetak">
        <h1>DAFTAR PERTANYAAN <BR> SURAT KETERANGAN CATATAN KEPOLISIAN</h1>
        <?php
            $identitas = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."' && status_registrasi='8'"));
            $agama = $identitas['agama'];
            $kelamin = $identitas['j_kelamin'];
            $negara = $identitas['negara'];
            $kawin = $identitas['ket_kawin'];
            if($agama == "1"){
                $agama = "Islam";
            }elseif($agama == "2"){
                $agama = "Kristen";
            }elseif($agama == "3"){
                $agama = "Katolik";
            }elseif($agama == "4"){
                $agama = "Budha";
            }elseif($agama == "5"){
                $agama = "Hindu";
            }else{
                $agama = "Konghucu";
            }
            if($kelamin == "1"){
                $kelamin = "Laki-laki";
            }else{
                $kelamin = "Perempuan";
            }
            if($negara == "1"){
                $negara = "Indonesia";
            }elseif($negara == "2"){
                $negara = "Malaysia";
            }elseif($negara == "3"){
                $negara = "Singapura";
            }else{
                $negara = "Myanmar";
            }
            if($kawin == "1"){
                $kawin = "Kawin";
            }else{
                $kawin = "Tidak Kawin";
            }
        ?>
            <table>
                <tr>
                    <td>Yang bertanda tangan di bawah ini</td>
                    <td colspan="2">:</td>
                </tr>
                <tr>
                    <td><span class="jarak_form">a.</span> Nama</td>
                    <td>:</td>
                    <td><?php echo $identitas['nama_pengguna']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">b.</span> Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?php echo $identitas['tmp_lahir'].", ".$identitas['tgl_lahir']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">c.</span> Agama</td>
                    <td>:</td>
                    <td><?php echo $agama; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">d.</span> Kebangsaan</td>
                    <td>:</td>
                    <td><?php echo $negara; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">e.</span> Kelamin</td>
                    <td>:</td>
                    <td><?php echo $kelamin; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">f.</span> Kawin / Tidak Kawin</td>
                    <td>:</td>
                    <td><?php echo $kawin; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">g.</span> Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $identitas['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">h.</span> Alamat Sekarang</td>
                    <td>:</td>
                    <td><?php echo $identitas['alamat']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">i.</span> Nomor Kartu Penduduk</td>
                    <td>:</td>
                    <td><?php echo $identitas['no_ktp']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">j.</span> Nomor Telp/Hp</td>
                    <td>:</td>
                    <td><?php echo $identitas['no_telp']; ?></td>
                </tr>
            </table>
            <p>Menerangkan hal-hal sebagai jawaban / keterangan atas pertanyaan - pertanyaan yang diajukan sebagai berikut :</p>
            <p class="judul_tabel"><span class="jarak_form">I. </span> Hubungan Kekeluargaan</p>
            <?php
                $keluarga1 = mq("select * from hub_keluarga where id_pengguna='".$_GET['id']."'");
                $i=1;
                while($data1 = mfa($keluarga1)){
                    if($data1['type_keluarga'] == "1"){
                        $keluarga = "Istri / Suami";
                    }elseif($data1['type_keluarga'] == "2"){
                        $keluarga = "Bapak Sendiri";
                    }elseif($data1['type_keluarga'] == "3"){
                        $keluarga = "Ibu Sendiri";
                    }else{
                        $keluarga = "Saudara Sekandung / Tiri";
                    }

                    $agama2 = $data1['agama_keluarga'];
                    $negara2 = $data1['kebangsaan_keluarga'];
                    if($agama2 == "1"){
                        $agama2 = "Islam";
                    }elseif($agama2 == "2"){
                        $agama2 = "Kristen";
                    }elseif($agama2 == "3"){
                        $agama2 = "Katolik";
                    }elseif($agama2 == "4"){
                        $agama2 = "Budha";
                    }elseif($agama2 == "5"){
                        $agama2 = "Hindu";
                    }else{
                        $agama2 = "Konghucu";
                    }
                    if($negara2 == "1"){
                        $negara2 = "Indonesia";
                    }elseif($negara2 == "2"){
                        $negara2 = "Malaysia";
                    }elseif($negara2 == "3"){
                        $negara2 = "Singapura";
                    }else{
                        $negara2 = "Myanmar";
                    }
                    echo '
                        <p class="judul_tabel2"><span class="jarak_form">'.$i.'.</span> '.$keluarga.'</p>
                        <table class="menjorok">
                            <tr>
                                <td><span class="jarak_form">a.</span> Nama</td>
                                <td>:</td>
                                <td>'.$data1['nama_keluarga'].'</td>
                            </tr>
                            <tr>
                                <td><span class="jarak_form">b.</span> Umur</td>
                                <td>:</td>
                                <td>'.$data1['umur'].'</td>
                            </tr>
                            <tr>
                                <td><span class="jarak_form">c.</span> Agama</td>
                                <td>:</td>
                                <td>'.$agama2.'</td>
                            </tr>
                            <tr>
                                <td><span class="jarak_form">d.</span> Kebangsaan</td>
                                <td>:</td>
                                <td>'.$negara2.'</td>
                            </tr>
                            <tr>
                                <td><span class="jarak_form">e.</span> Pekerjaan</td>
                                <td>:</td>
                                <td>'.$data1['pekerjaan_keluarga'].'</td>
                            </tr>
                            <tr>
                                <td><span class="jarak_form">f.</span> Alamat</td>
                                <td>:</td>
                                <td>'.$data1['alamat_keluarga'].'</td>
                            </tr>
                        </table>
                        <br>
                    ';
                    $i++;
                }
            ?>
            <br>
            <p class="judul_tabel"><span class="jarak_form">II. </span> Pendidikan</p>
            <table class="menjorok2">
                <?php
                    $pendidikan = mq("select * from pendidikan where id_pengguna='".$_GET['id']."'");
                    $i=1;
                    while($data2 = mfa($pendidikan)){
                        if($data2['type_sekolah'] == "1"){
                            $sekolah = "SD / Sederajat";
                        }elseif($data2['type_sekolah'] == "2"){
                            $sekolah = "SMP / Sederajat";
                        }elseif($data2['type_sekolah'] == "3"){
                            $sekolah = "SMA / Sederajat";
                        }else{
                            $sekolah = "Univ / Perguruan Tinggi";
                        }
                        if($data2['ket_pendidikan'] == "1"){
                            $ket_pend = "Lulus";
                        }elseif($data2['ket_pendidikan'] == "2"){
                            $ket_pend = "Tidak Lulus";
                        }else{
                            $ket_pend = "Tidak Melanjutkan";
                        }
                        echo '
                            <tr>
                                <td><span class="jarak_form">'.$i.'.</span> '.$sekolah.'</td>
                                <td>:</td>
                                <td>'.$ket_pend.'</td>
                                <td><b>di</b></td>
                                <td>'.$data2['sekolah'].'</td>
                                <td><b>tahun</b></td>
                                <td>'.$data2['tahun_lulus'].'</td>
                            </tr>
                        ';
                        $i++;
                    }
                ?>
            </table>
            <br>
            <p class="judul_tabel"><span class="jarak_form">III. </span> Tersangkut Perkara Pidana dan Pelanggaran</p>

            <p class="judul_tabel2"><span class="jarak_form">A. </span> Perkara Pidana :</p>
            <table class="menjorok">
                <?php
                    $pertanyaan = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='1'");
                    $i=1;
                    while($data3 = mfa($pertanyaan)){
                        echo '
                            <tr>
                                <td><span class="jarak_form">'.$i.'.</span> '.$data3['isi_pertanyaan'].'</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;">- '.$data3['jawaban'].'</td>
                            </tr>
                        ';
                        $i++;
                    }
                ?>
            </table>
            <br>
            <p class="judul_tabel2"><span class="jarak_form">B. </span> Pelanggaran :</p>
            <table class="menjorok">
                <?php
                    $pertanyaan = mq("select * from pertanyaan where id_pengguna='".$_GET['id']."' && type_pertanyaan='2'");
                    $i=1;
                    while($data3 = mfa($pertanyaan)){
                        echo '
                            <tr>
                                <td><span class="jarak_form">'.$i.'.</span> '.$data3['isi_pertanyaan'].'</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;">- '.$data3['jawaban'].'</td>
                            </tr>
                        ';
                        $i++;
                    }
                ?>
            </table>
            <br>
            <?php
                $pertanyaan2 = mfa(mq("select * from pertanyaan2 where id_pengguna='".$_GET['id']."'"));
            ?>
            <p class="judul_tabel"><span class="jarak_form">IV. </span> <?php echo $pertanyaan2['isi_pertanyaan2']; ?></p>
            <div class="menjorok2">
            - <?php echo $pertanyaan2['jawaban2']; ?>
            </div>
            <br>
            <p class="judul_tabel"><span class="jarak_form">V. </span> Ciri-ciri Fisik</p>
            <table class="menjorok2">
                <?php
                    $ciri = mfa(mq("select * from ciri_fisik where id_pengguna='".$_GET['id']."'"));
                ?>
                <tr>
                    <td><span class="jarak_form">1. </span> Rambut</td>
                    <td>:</td>
                    <td><?php echo $ciri['rambut']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">2. </span> Muka</td>
                    <td>:</td>
                    <td><?php echo $ciri['muka']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">3. </span> Kulit</td>
                    <td>:</td>
                    <td><?php echo $ciri['kulit']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">4. </span> Tinggi</td>
                    <td>:</td>
                    <td><?php echo $ciri['tinggi']; ?></td>
                </tr>
                <tr>
                    <td><span class="jarak_form">5. </span> Tanda Istimewa</td>
                    <td>:</td>
                    <td><?php echo $ciri['tanda_istimewa']; ?></td>
                </tr>
            </table>
            <br>
            <p class="judul_tabel"><span class="jarak_form">VI. </span> Kesenangan / Kegemaran / Hobi :</p>
            <div class="menjorok2">
            <?php
                $hobi = mfa(mq("select * from hobi where id_pengguna='".$_GET['id']."'"));
                echo $hobi['kegemaran'];
            ?>
            </div>
            <div class="menjorok2">
            <p>Keterangan diatas saya buat dengan sebenarnya atas sumpah menurut kepercayaan saya. apabila dikemudian hari keterangan ini tidak benar
            maka saya sanggup dituntut berdasarkan hukum yang berlaku.</p>
            </div>
            <br>
            <div class="paraf">
                <?php
                    $tanggal = date("d");
                    $array_bulan = array("1" => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agusutus","September","Oktober"
                        ,"November","Desember");
                    $bulan = $array_bulan[date("n")];
                    $tahun = date("Y");

                ?>
                Batam, <?php echo $tanggal." ".$bulan." ".$tahun; ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <?php $user = mfa(mq("select * from pengguna where id_pengguna='".$_GET['id']."'")); ?>
                <b style="text-decoration: underline;"><?php echo $user['nama_pengguna']; ?></b>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>