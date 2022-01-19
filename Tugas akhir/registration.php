<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="regis.css"> 
    <title>sign up</title>
</head>
<body>
     <form action="" method="post">
     	<h2>Registration</h2>
          <label>User Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
          
     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
     <div>
            <?php 
                $nama = isset($_POST['name']) ? $_POST['name'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $password = isset($_POST['password']) ? $_POST['password'] : '';
                $re_password = isset($_POST['re_password']) ? $_POST['re_password'] : '';
                
                $data = "<br><br>Nama: $nama<br>Email: $email<br>password: $password<br>re_password: $re_password<br><br>";

                $Tamu = fopen("Buku_Tamu.txt", "a");

                if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['re_password'])){
                    fwrite($Tamu, $data);
                    fclose($Tamu);
                }

                if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['re_password'])){
                    $Tamu = fopen("Buku_Tamu.txt", "r");
                    echo fread($Tamu, filesize("Buku_Tamu.txt"));
                }
            ?>
        </div>
</body>
</html>