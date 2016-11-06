<?php
$DB = array('host'    =>'localhost',
            'user'    =>'root',
            'password'=>'',
            'db'      =>'uts');
$db_link	= mysqli_connect('localhost','root','','uts');
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>