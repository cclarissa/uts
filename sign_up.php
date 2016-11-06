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

	$query = $conn->prepare('insert into uts values(?,?,?,?)');
	$query->bind_param('ssss', $nama, $username, $email, $password);

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
<html lang="en">
<head>
    <style>
        .container { 
        	padding: 100px;
        	padding-left: 580px;
            width: 20%;
            height: 100px;
        }
    </style>
</head>
<body>
<div class="container">
<?php echo $pesan; ?><br>
<a href="login.html"><button>Login</button></a>
</div>
</body>
</html>