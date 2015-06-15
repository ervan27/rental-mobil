<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>Rental Mobil Online</title>

<body>
<div class="header">
Rental Mobil Online
<div class="kop">
Jl.Ringroad Utara,Pogung Lor,Sleman,Yogyakarta
</div>
</div>

<div class="navigation">
			<a href ="nota.php">DATA BOOKING</a>
			<a href ="ins.php">FORM DATA</a>
			<a href ="home.php">LOGOUT</a>
</div>

<div class="content1">

<div align="center">  DATA BOOKING MOBIL ONLINE <br>
<table border="1">
     <tr>
     <td width="120">Nama Pemesan</td>
     <td width="120">Mobil</td>
     <td width="120">Tgl Pemakaian</td> 
	 <td width="120">Lama</td> 
	 <td width="120">Hapus</td> 
     </tr>

 <?php
include "connect.php";

$query1=" select * from transaksi ";
$result=mysql_query($query1) or die(mysql_error());

while($rows=mysql_fetch_object($result)){
 ?>
      <tr>
        <td><?php    echo $rows ->no;?></td>
        <td><?php    echo $rows ->nama;?></td>
        <td> <?php  echo $rows ->tgl_pemakaian;?></td>
        <td><?php    echo $rows ->lama_sewa;?></td>
		<td><a href="hapus.php?no=<?php echo $rows -> no;?>">Hapus</a>
      </tr>
      <?php

}?>
    </table>
</div>

</div>


</body>
</html>