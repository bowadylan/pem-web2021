<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="regis.css"> 
    <title>web</title>
</head>
<body>
     <form action="" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="Registration.php" class="ca">Create an account</a>
     </form>
	 <div>
            <?php 
                $nama = isset($_POST['uname']) ? $_POST['uname'] : '';
                $password = isset($_POST['password']) ? $_POST['password'] : '';
               

                $data = "<br><br>Nama: $nama<br>Password: $password<br><br>";

                $Tamu = fopen("Buku_Tamu.txt", "a");

                if(isset($_POST['uname']) || isset($_POST['password'])){
                    fwrite($Tamu, $data);
                    fclose($Tamu);
                }

                if(isset($_POST['uname']) || isset($_POST['password'])){
                    $Tamu = fopen("Buku_Tamu.txt", "r");
                    echo fread($Tamu, filesize("Buku_Tamu.txt"));
                }
            ?>
        </div>
</body>
</html>