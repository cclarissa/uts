<?php
    include('config1.php');
    if(isset($_GET['name'])){
        $ni     = $_GET['name'];
        $query  = mysqli_query($db_link,'select * from uts where name = "'.$name.'"');
        $data   = mysqli_fetch_array($query);
        $name   = $data['name'];
        $username = $data['username'];
        $email  = $data['email'];
    }
    else{
    $name = '';
    $username = '';
    $email = '';
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

        p, li { font-family : Sans-serif; }

        p { color: #999; }

        .nav ul {
            list-style-type: none;
            padding-left: 8px;
        }

        .nav li { padding: 4px; }

        .input { padding-left: 50px; }

        .foot { padding-left: 600px; }
        .foot p { font-size: 12px; }

    </style>

    <meta charset="UTF-8">
    <title>WELCOME</title>
</head>
<body>
<div class="container">
<header>
    <p>Edit :</p>
</header>
    
    <nav class="nav">
    <form method="post" action="read.php">
   
        <ul>
            <li><label></label></li>
            <input type="text" name="nama" placeholder="name">
            <li><label></label></li>
            <input type="text" name="username" placeholder="username">
            <li><label></label></li>
            <input type="text" name="email" placeholder="email">
        </ul>
    
        <div class="input"><input type="submit" value="Edit"></div>
    </form>
    </nav>
    
</div>
</body>
</html>