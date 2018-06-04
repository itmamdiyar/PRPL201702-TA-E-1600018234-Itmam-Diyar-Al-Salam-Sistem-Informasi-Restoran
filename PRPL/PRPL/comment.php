<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "Sistem_Informasi_Restoran";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$username = $_POST['username'];
$email2 = $_POST['email2'];
$comm = $_POST['comm'];

$sql = "INSERT INTO contact (username,email2,comm) VALUES ('$username','$email2','$comm' ) ";

if($konek->query($sql)){
  echo " Terima Kasih Atas Kritik dan Sarannya
  <script type='text/javascript'>
	setTimeout(function () { 
	
		swal({
            title: 'Pemesanan telah Berhasil',
            text:  '$email2',
            type: 'success',
            timer: 3000,
            showConfirmButton: true
        });		
	},10);	
	window.setTimeout(function(){ 
		window.location.replace('homepage.html');
	} ,3000);	
  </script>";
  
}else{
  echo "Data customer GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();

?>