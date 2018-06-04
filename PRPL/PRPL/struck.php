<html>
<head>
	<link href ="assets/css/struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> RESTORAN IT </h1>
		<h2> BILL PEMBAYARAN </h2>
		<h3> Jalan UmbulHarjo No 10 , Yogyakarta</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "Sistem_Informasi_Restoran";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from pesan where username = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['username']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> RENDANG </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu1']*15000;
		echo "</td>";
		echo "<td>".$row['menu1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> NASI GORENG </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu2']*15000;
		echo "</td>";
		echo "<td>".$row['menu2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> SOTO </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu3']*15000;
		echo "</td>";
		echo "<td>".$row['menu3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> SATE </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu4']*15000;
		echo "</td>";
		echo "<td>".$row['menu4']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> ICE DRINK </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu5']*7000;
		echo "</td>";
		echo "<td>".$row['menu5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> FLAVOURED TEA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu6']*7000;
		echo "</td>";
		echo "<td>".$row['menu6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> MILK SHAKE </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu7']*7000;
		echo "</td>";
		echo "<td>".$row['menu7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> FRUIT JUICE </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu8']*7000;
		echo "</td>";
		echo "<td>".$row['menu8']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> PIE AMERICA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu9']*10000;
		echo "</td>";
		echo "<td>".$row['menu9']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> MOCHI </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu10']*10000;
		echo "</td>";
		echo "<td>".$row['menu10']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> BRIGADEIROS </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu11']*10000;
		echo "</td>";
		echo "<td>".$row['menu11']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> BAKLAVA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu12']*10000;
		echo "</td>";
		echo "<td>".$row['menu12']."</td>";
		echo "</tr>";

		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG ANDA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['dibayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['kembalian'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>