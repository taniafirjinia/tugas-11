<?php 
$koneksi= mysqli_connect("localhost", "root", "", "");
$buat= "CREATE DATABASE mykampus";
$koneksi->query($buat); 
$buatt= "CREATE TABLE `mykampus`.`mahasiswa`(`id` INT(11)  AUTO_INCREMENT NOT NULL,
 `nama` varbinary(200) NOT NULL,
`npm` varbinary(200) NOT NULL,
`password` varbinary(250) NOT NULL,
PRIMARY KEY (`id`)) ENGINE=InnoDB;";
$koneksi->query($buatt);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Login</title>
  	<link rel="icon" href="http://siakad.umb.ac.id/umb/img/login.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Halaman Login</h2>
  <form action="action_page.php" method="post">
    <div class="mb-3 mt-3">
      <label for="npm">Nomor Pokok Mahasiswa:</label>
      <input type="text" class="form-control" id="npm" placeholder="Enter Your NPM" name="npm" required>
    </div>
    <div class="mb-3">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    <button type="submit" class="btn btn-primary" name="login">LOGIN</button> || <button  class="btn btn-dark" onclick="return Registrasi();">Registrasi</button>
  </form>
</div>
</body>
<script type="text/javascript">
	function Registrasi() {
	window.location.href='Registrasi.php';
	}
	
</script>
</html>