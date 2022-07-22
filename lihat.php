<?php
	echo "<head><title>Jasa Pengiriman</head></title>";
	$fp = fopen("jaskim.txt", "r");
	echo"<center><h1>Rincian Jasa Pengiriman</h1>";
	echo"<a href='pengiriman.php'>Back To Ongkos Kirim</a>";
	echo"<hr>";
	echo"<table border = 1 style=text-align: center width=80%>";
	echo"<tr><td>Nama</td><td>Asal</td><td>Tujuan</td><td>Jarak</td><td>Ongkir per-KM</td><td>Total Ongkir</td></tr>";


	while($isi = fgets($fp,80)){
		$pisah = explode("|", $isi);
		echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td></tr>";
	}
	echo "</table></center>";
?>