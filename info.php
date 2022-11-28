<?php

include "koneksi.php";
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <title>VIEW</title>
</head>
<body>
    <header>
<div class="container">
		<ul>
			<li><a href="about.php">Logout</a></li>
		</ul>
	</div>
    <center>
    <?php
        $tampilPeg =mysqli_query($connect, "SELECT * FROM tabel_user");
        $peg    =mysqli_fetch_array($tampilPeg);
    ?>
    <h2>Hai <?=$peg['nama']?></h2>
    <table class= "form" border="0" cellpadding="8">
        <tr class="normal">
            <td>Your Account</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?=$peg['nama']?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?=$peg['username']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?=$peg['email']?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td> <?=$peg['password']?></td>
        </tr>
    </table>
</center>
</body>
</html>