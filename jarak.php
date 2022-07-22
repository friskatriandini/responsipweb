<?php
		$inama				= $_POST['inama'];
		$iasal	 			= $_POST['iasal'];
		$itujuan			= $_POST['itujuan'];
		$ijumlah			= $_POST['ijumlah'];
		$otiket     		= $_POST['otiket'];
		$osub   			= $_POST['osub'];

	$fp = fopen("jaskim.txt", "a+");
	fputs($fp,"$inama|$iasal|$itujuan|$ijumlah|$otiket|$osub\n");
	fclose($fp);

	echo "Terimakasih, Rincian Format Anda Telah Di Cetak Pada File txt";
	echo "<a href=lihat.php> Rincian </a><br>";
	?>
