<?php
    session_start();
    include "../config/koneksi.php";
    include "../config/lib.php";
    if((!$_SESSION['id_admin']) && (!$_SESSION['user_name'])){
        header("location: login.php");
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Administrator</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../include/font/css/font-awesome.css">
    <link rel="shortcut icon" href="../image/polri.png">
</head>
<body>
    <div id="container">
        <nav>
            <div class="logo_admin">
                <img src="../image/logo_11.png">
            </div>
            <div class="menu">
                <p><?php menu_admin("home","Home","home"); ?></p>
                <p><?php menu_admin("pengguna","Pengguna","user"); ?></p>
                <p><?php menu_admin("logout","Logout","sign-out"); ?></p>
            </div>
        </nav>
        <article>
            <div class="content_wrapper">
                <?php
                    if(@$_GET['page']){
                        include "pages/".$_GET['page'].".php";   
                    }else{
                        include "pages/home.php";
                    }
                ?>
            </div>
        </article>
    </div>
</body>
</html>

<script type="text/javascript">
function hapus_data(){
    if(confirm("Apakah anda yakin ?")){
        $("#hapusData").click();
    }else{
        return false;
    }
}
</script>
<?php } ?>