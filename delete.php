<?php
include('config1.php');
$username	= $_GET['username'];

$sql 	= 'delete from uts where username="'.$username.'"';
$query	= mysqli_query($db_link,$sql);
header('location: read.php');
?>