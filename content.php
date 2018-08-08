<?php 
	include"config/database.php";
	$mod = @$_GET['mod'];
	if ($mod == 'peserta') {
		include"modulespeserta/peserta.php";
	}
?>