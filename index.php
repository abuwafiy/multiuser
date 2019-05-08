<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Template Login | 1</title>
<link rel="stylesheet" type="text/css" href="style.css"> <!-- pemanggilan file css untuk style pada file index-1.html -->
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>
    <div id="login"><!-- membuat sebuah div id dengan tujuan sebagai background utama  -->
	<?php
	//fungsi ini untuk mengecek apakah username dan password yang di masukan sudah benar atau belum 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
      <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->
          <h2>Login User</h2> <!-- membuat judul pembuka -->
          <form class="fl" action="aksi.php" method="post">
            <input class="itpw" type="text" name="username" placeholder="Username or Email"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>
      </div>
    </div>
  </body>
</html>