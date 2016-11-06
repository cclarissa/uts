<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

<?php
require_once "db.php";
if(isset($_SESSION["username"])){
	header("Location:content.php");
}

if(! isset($_POST["username"]) || ! isset($_POST["password"])){

}else{
	$username= $_POST['username'];
	$password= sha1($_POST['password']);

	$conn = konek_db();
	$query = $conn->prepare("select * from uts where username=? and password=?");
	$query->bind_param("ss",$username,$password);
	$result = $query->execute();

	if($result) {
		$res = $query->get_result();
		if($res->num_rows == 1){
			$_SESSION["username"] = $username;
			header("Location: read.php");
		}else {
		echo "<p>Username/password salah</p>";
	} 
	}else{
		echo "<p>Lagi ada masalah dengan system</p>";
			}
		}
	?> 
</body>
</html>