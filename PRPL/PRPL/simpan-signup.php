<?php
 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "Sistem_Informasi_Restoran";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idpelanggan = $_POST['idpelanggan'];  
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (username , email , password) VALUES ('$username','$email','$password')";

if($konek->query($sql)){
 echo " Anda Berhasil Mendaftar
  <script type='text/javascript'>
	setTimeout(function () { 
	
		swal({
            title: 'Pemesanan telah Berhasil',
            text:  '$email',
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
  echo " Pendaftaran Gagal
  <script type='text/javascript'>
	setTimeout(function () { 
	
		swal({
            title: 'Pemesanan telah Berhasil',
            text:  '$email',
            type: 'success',
            timer: 3000,
            showConfirmButton: true
        });		
	},10);	
	window.setTimeout(function(){ 
		window.location.replace('signup.html');
	} ,3000);	
  </script>";
}

$konek->close();

?> 