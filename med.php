<!DOCTYPE html>
<html>
<head>
	<title>Sertifikasi SKKNI</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<script type="text/javascript">
  		$( function() {
			$( "#datepicker" ).datepicker();
		});
  	</script>
		
</script>
</head>
<body>
	<!--
		nama, nik, hp, email, skema sertifikasi, tempat uji kompetentsi, rekomendasi, tanggal terbit sertifikat, tanggal lahir, organisasi
	-->
	<div class="container">
		<h1 align="center">SERTIFIKAT SKKNI</h1>
		<hr>	
		<p>
			<a href="med.php?mod=peserta&act=form">Add Peserta</a> |
			<a href="med.php?mod=peserta">View Peserta</a>
		</p>
		<?php
			include"content.php";
		?>

	</div>

</body>
</html>