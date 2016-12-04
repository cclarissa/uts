<?php
include('config1.php'); 
?>
<head>
<style>
.container { 
            width: 100%;
            margin: 0 auto;
        }
</style>
<?php
$sql	= 'select * from uts';
$query	= mysqli_query($db_link,$sql);
?>
<h1><p align="center">Tampilan Table Data-data</p></h1>
<div class="container">
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
 <tr>
    <td width="112" height="29" align="center" valign="middle">Name</td>
    <td width="176" align="center" valign="middle">Username</td>
    <td width="252" align="center" valign="middle">Email</td>
    <td width="133" align="center" valign="middle">Pilih</td>
    <td width="133" align="center" valign="middle"><a href="logout.php"><button>Log Out</button></a>
    <script type="text/javascript">
    function pemilik() {
    alert("Clarissa, 00000017036, 15IS2");
    }
    </script>
    <button onclick="pemilik()">Dibuat oleh</button><br></td>
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
  <a href="delete.php?username=<?php echo $data['username'];?>"><button>hapus</button></a></td>
  </tr>
<?php
}
?>
</div>
</table>
<h2><p align="center">Tambah Gambar</p></h2>
<table width="300" border="1" cellpadding="0" cellspacing="0" align="center">
<div class="form">
<form name="uploader" action="process.php" method="POST" enctype="multipart/form-data">
<tr>
<td><input type="file" name="file"></td>
<td><button type="submit">Upload</button></td>
</tr>
</form>
</div>
</table>