<?php 
    require 'koneksi.php';
    if(isset($_POST["submit"])) {
        $username   = $_POST["username"];
        $password   = $_POST["password"];
        $result = mysqli_query($connect, "SELECT * FROM tabel_user WHERE username = '$username'");
        $row    = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0) {
            if($password == $row["password"]) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header ("location : info.php");
            } else {
                echo
                "<script> alert('Password Salah'); </script>";
            }
        }
        else {
            echo
            "<script> alert('User Tidak Terdaftar'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style5.css">
    <title>Webpage Design</title>
</head>

<body>
        <div class="main">
        
                <div class="form">
                    <form action="" method="POST">
                        <h2>Login here </h2>
                        <input type="text" name="email" placeholder="Enter Your Username">
                        <input type="password" name="password" placeholder="Enter Your Password">
                        <button class="btnn" type="submit" name="login"><a href="info.php">Sign In</a></button>
                        <p class="link"><strong>Don't Have an Account? <br>
                                <a href="SignUp.php">Sign up </a> here</strong> </a></p>
                    </form>
                    <p>.</p><br><br><br><br><br>

                </div>
            </div>
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ion-icons.js"></script>

</body>

</html>