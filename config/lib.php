<?php
	function mq($q){
		return mysql_query($q);
	}

	function mfa($q){
		return mysql_fetch_array($q);
	}

	function mnr($q){
		return mysql_num_rows($q);
	}

	function menu($q,$w,$x){
		if(@$_GET['page'] == $q){
			$active = "active";
		}else{
			$active = "";
		}
		if($x == "tidak"){
			$aktif = "tidak";
		}else{
			$aktif = "";
		}
		echo "<a href='?page=$q' class='tombol_langkah $active $aktif'>$w</a>";
	}

    function menu_admin($q,$w,$i){
		if(@$_GET['page'] == $q){
			$active = "active";
		}else{
			$active = "";
		}
		echo "<a href='?page=$q' class='$active'><span class='posisi_icon fa fa-lg fa-$i'></span>$w</a>";
	}

	function escape($q){
		return mysql_real_escape_string($q);
	}
	function special($q){
		return htmlspecialchars($q);
	}

	function tag($q){
		return strip_tags($q);
	}
?>