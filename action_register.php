<?php 
session_start();
include 'koneksi.php';
if (isset($_POST["simpan"])):
	global $con;
	if ($con!=null):
$nama=filter_var($_POST["nama"], FILTER_SANITIZE_STRING);
$npm=filter_var($_POST["npm"], FILTER_SANITIZE_STRING);
$pswd=filter_var($_POST["pswd"], FILTER_SANITIZE_STRING);
$pas=password_hash($pswd, PASSWORD_DEFAULT);
$hashnama=hash('sha256',$nama);
$hashnpm= hash('sha256',$npm);
$exe= "INSERT INTO mahasiswa VALUES('','$hashnama','$hashnpm', '$pas');";
$exec= mysqli_query($con,$exe);
if ($exec>0):
	echo "<script> 
  				alert('Berhasil Registrasi, Silahkan Login');
  				window.location.href='index.php';
  				</script>";
else:
	echo "<script> 
  				alert('Gagal Registrasi, Silahkan Ulangi Lagi');
  				window.location.href='Registrasi.php';
  				</script>";
endif;
else:
echo "<script> 
  				alert('Silahkan Koneksikan ke database dengan benar');
  				window.location.href='index.php';
  				</script>";
endif;


else:
echo "<script> 
  				window.location.href='index.php';
  				</script>";
endif;
// dibuat oleh tania firjinia mahessa //
 ?>