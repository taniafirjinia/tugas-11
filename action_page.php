<?php 
session_start();
include 'koneksi.php';
if (isset($_POST["login"])):
	global $con;
	if ($con!=null):
$npm=filter_var($_POST["npm"], FILTER_SANITIZE_STRING);
$hashnpm=hash('sha256', $npm);
$pswd=filter_var($_POST["pswd"], FILTER_SANITIZE_STRING);
$cek= "SELECT * FROM mahasiswa WHERE npm='$hashnpm'";
	$cek1=mysqli_query($con,$cek);
	if ($cek1->num_rows>0) :
		$row = mysqli_fetch_assoc($cek1);
		if (password_verify($pswd,$row["password"])):
			$_SESSION["login"]= true;
			echo "<script> 
  				window.location.href='menu.php';
  				</script>";
		else:
			echo "<script> 
  				alert('Password Salah');
  				window.location.href='index.php';
  				</script>";
		endif;
	

	else :
		echo "<script> 
  				alert('Username Salah');
  				window.location.href='index.php';
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

