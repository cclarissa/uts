<?php
require "db.php";
$pesan = null;
if (isset($_POST["nama"]) && 
	isset($_POST['username']) &&
	isset($_POST['email']) &&
	isset($_POST['password'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = sha1 ($_POST['password']);

	$conn = konek_db();

	$query = $conn->prepare('insert into user values(?,?)');
	$query->bind_param('ss', $nama, $username, $email, $password);

	$hasil = $query->execute();

	if($hasil)
		$pesan = 'sign up berhasil';
	else
		$pesan = 'sign up gagal';
	}else {
		$pesan = 'data tidak terisi dengan lengkap';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
	<p><?php echo $pesan; ?></p>

</body>

<?php
require "db.php";
$pesan = null;
if (isset($_POST["nama"]) && 
	isset($_POST['username']) &&
	isset($_POST['email']) &&
	isset($_POST['password'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = sha1 ($_POST['password']);

	$conn = konek_db();

	$query = $conn->prepare('insert into user values(?,?)');
	$query->bind_param('ss', $nama, $username, $email, $password);

	$hasil = $query->execute();

	if($hasil)
		$pesan = 'sign up berhasil';
	else
		$pesan = 'sign up gagal';
	}else {
		$pesan = 'data tidak terisi dengan lengkap';
	}
?>