<?php
include('config1.php'); 
?>
<head>
<style>
.container { 
        	padding: 100px;
        	padding-left: 300px;
            width: 20%;
            height: 100px;
        }
</style>
<?php
$sql	= 'select * from uts';
$query	= mysqli_query($db_link,$sql);
?>
<td><a href="logout.php"><button>Log Out</button></a></td>
<div class="container">
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
 <tr>
    <td width="112" height="29" align="center" valign="middle">Name</td>
    <td width="176" align="center" valign="middle">Username</td>
    <td width="252" align="center" valign="middle">Email</td>
    <td width="133" align="center" valign="middle">Pilih</td>
  </tr>
  <?php
	while($data	= mysqli_fetch_array($query)){ 
?>

  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['name']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['email']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
  <a href="edit.php?username=<?php echo $data['username'];?>" title="Edit siswa ini"><button>edit</button></a>
  <a href="delete.php?username=<?php echo $data['username'];?>"><button>hapus</button></a>
  </td>
  </tr>
<?php
}
?>
</table>
</div>