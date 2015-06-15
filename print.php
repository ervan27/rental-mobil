<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>Rental Mobil Online</title>

<body>
<div class="header">
Rental Mobil Bejo
<div class="kop">
Jl.Ringroad Utara,Pogung Lor,Sleman,Yogyakarta
</div>
</div>


<div class="content3">
<div class="judul">
BUKTI BOOKING SECARA ONLINE <br></br>
</div>
<div align="center"> 
<?php
$no = $_POST['no'];
$nama = $_POST['nama'];
$tgl_pemakaian= $_POST['tgl_pemakaian'];
$lama_sewa = $_POST['lama_sewa'];

echo "No Mobil 				= ".$no;
echo "</br>";
echo "Merk Mobil 			= ". $nama;
echo "</br>";
echo "Tgl Pemakaian 		= ".$tgl_pemakaian;
echo "</br>";
echo "Lama Sewa				= ".$lama_sewa;

?>

<br></br>
<form>
<input class="noPrint" type="button" value="Print" onclick="window.print()" >
</form>

</div>
</div>

</body>
</html>