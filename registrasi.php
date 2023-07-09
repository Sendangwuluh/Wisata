<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("location: index.php");
}
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email Has Already Taken') </script>";
        }
        else{
            if($password == $confirmpassword){
                $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
                mysqli_query($conn,$query);
                echo
            "<script> alert('Registration Successful') </script>";
            }
            else{
                echo
            "<script> alert('Password Does Not Match') </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav> 
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="gambar/logo5.png" class="putih"></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="cover.php">Halaman utama</a> </li>
                    <li><a href="login.php">LOGIN</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layar-penuh">
        <section class="home" id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="gambar/video-indonesia.mp4" type="video/mp4"/>
            </video>
            <div class="intro1">
            <h2>REGISTRASI</h2>
            </div>
            
    <form class="" action="" method="post" autocomplete="off" >
        <table>
        <tr>
            <td for="name">Nama</td>
            <td><input type="text" name="name" id="name" required value=""> </td>
        </tr>
        <tr>
            <td for="username">Username</td>
            <td><input type="text" name="username" id="username" required value=""> </td>
        </tr>
        <tr>
            <td for="email">Email</td>
            <td><input type="email" name="email" id="email" required value=""> </td>
        </tr>
        <tr>
            <td for="password">Password</td>
            <td><input type="password" name="password" id="password" required value=""> </td>
        </tr>
        <tr>
            <td for="confirmpassword">Confirm Password</td>
            <td><input type="password" name="confirmpassword" id="confirmpassword" required value=""> </td>
        </tr>
        <tr>
            <td>pastikan data yang di masukkan sudah benar !</td>
        </tr>
        <tr>
            <td></td><br>
            <td><button type="submit" name="submit">register</button></td>
        </tr>
        
        
</table>
    </form>
    </div>
</section>
<footer id="contact">
            <div class="layar-dalam">
                <div class="copyright">
                    &copy; 2023 Wisata Sendang Wuluh 
                </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
    crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>
