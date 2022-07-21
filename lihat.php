<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daftar</title>
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
<?php
	echo"<head><title>Daftar Pengiriman</title></head>";
	$fp = fopen("pengiriman.txt","r");
	echo "<table border=1><tr><th>Tanggal</th><th>Nama</th><th>Kota</th><th>Nomer Telepon</th><th>Alamat Lengkap</th><th>Jarak</th><th>Biaya Kirim</th>
	<th>Total</th></tr>";
		while ($isi = fgets($fp,90))
	{
	$pisah = explode("|",$isi);
	echo "<tr><td> $pisah[0]</td><td> $pisah[1]</td><td> $pisah[2]</td><td>  $pisah[3]</td><td> $pisah[4]</td><td>  $pisah[5]
	</td><td> $pisah[6]</td><td> $pisah[7]</td></tr> ";
	}
echo "</table>";
echo "<a href=tampilan.html>:: Klik Disini ::</a>Isi Pengiriman";
?>
</body>
</html>