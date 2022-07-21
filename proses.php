<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses</title>
	<style>

        body{
                background:linear-gradient(gray,teal);
                color: white;
                padding: 10%;
                margin:auto;
            }
        
</style>
</head>
<body>
<?php error_reporting(E_ALL ^ E_NOTICE);
	$tanggal       =$_POST['tanggal'];
	$nama          =$_POST['nama'];
	$Pengiriman    =$_POST['Pengiriman'];
	$Nomer         =$_POST['Nomer'];
	$Alamat        =$_POST['Alamat'];
	$jarak	       =$_POST['jarak'];
	$kirim         =$_POST['ongkos'];
	$total         =$_POST['hasil'];

	echo "<head><title> Daftar Pengiriman</head></title>";
	$fp = fopen("pengiriman.txt","a+");
	fputs($fp,"$tanggal|$nama|$Pengiriman|$Nomer|$Alamat|$jarak|$kirim|$total|\n");
	fclose($fp);

	echo "Terimakasih Atas Partisipasi Anda<br>";
	echo "<a href=tampilan.html> Isi Pengiriman</a><br>";
	echo "<a href=lihat.php> Lihat Pengiriman</a><br>";

?>
</body>
</html>