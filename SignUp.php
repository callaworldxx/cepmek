<?php 
    require 'koneksi.php';
    if(isset ($_POST["submit"])){
        $name       = $_POST["nama"];
        $username   = $_POST["username"];
        $email      = $_POST["email"];
        $password   = $_POST["password"];
        $confirmpassword  = $_POST["confirmPassword"];
        $duplicate  = mysqli_query($connect, "SELECT * FROM tabel_user WHERE username = '$username' OR email = '$email'");
    
    
        if(mysqli_num_rows($duplicate) > 0) {
            echo "<script> alert('Username dan Email Sudah Dipakai'); </script>";
        }
        else{
            if ($password == $confirmpassword) {
                $query = "INSERT INTO tabel_user VALUES ('', '$name','$username', '$email', '$password')";
                mysqli_query($connect, $query);
                echo
                "<script> alert('Registrasi Berhasil'); </script>";
            } else {
                echo
                "<script> alert('Password Tidak Cocok!!'); </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>halaman register</title>
</head>

<body>
    <div class="form">
        <h2>Create an Account</h2>
        <form action="" method="post">
            <input type="text" name="nama" placeholder="Enter Your Name" required>
            <input type="username" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <input type="password" name="password" placeholder="Enter Your Password" required>
            <input type="password" name="confirmPassword" placeholder="Confirmation Your Password" required>
            <button class="btnn" type ="submit" name="submit">Submit<a href = "index.php"></a></button>
            <p class="link"><strong>already have an account? <br>
                                <a href="index.php">Login </a> here</strong> </a></p>
                                <br><br>
        </form>
    </div>
</body>

</html>