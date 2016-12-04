<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("uts");
 
$query = "SELECT * from uts ";
$result = mysql_query($query) or die(mysql_error());
 
$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
  "name" => $row["name"],
  "username" => $row["username"],
  "email" => $row["email"],
  "password" => $row["password"],);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"Data-data terlampir\":" . $data . "}";
?><br><br>
<a href="login.html"><button>Back</button></a>