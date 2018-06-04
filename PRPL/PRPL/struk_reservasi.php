<html>
<head>
	<link href ="assets/css/struk_reservasi.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div class="container">
		<h1> RESTORAN IT </h1>
		<h2> BUKTI RESERVASI </h2>
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

$sql = "select * from reservation where nama = '$user' ";
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
		echo "<td>".$row['nama']."</td>";
		echo "</tr>";
		echo "<td></td>";
		
		echo "<tr>";
		echo "<td> EMAIL </td>";
		echo "<td> : </td>";
		echo "<td>".$row['email']."</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td> NO TELEPON </td>";
		echo "<td> : </td>";
		echo "<td>".$row['phone']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> MEJA UNTUK </td>";
		echo "<td> : </td>";
		echo "<td>".$row['person']." ORANG</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> BOOKING UNTUK TANGGAL  </td>";
		echo "<td> : </td>";
		echo "<td>".$row['res']."</td>";
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