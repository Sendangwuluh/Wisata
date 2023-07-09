<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("location: index.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: index.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
            "<script> alert('User Not Register'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                    <li><a href="cover.html">Halaman utama</a> </li>
                    <li><a href="registrasi.php">REGISTRASI</a> </li>
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
            <h2>LOGIN</h2>
            </div>
        
    <form class="" action="" method="post" autocomplete="off">
        <table>
        <tr>
            <td for="usernameemail">Username or Email</td>
            <td><input type="text" name="usernameemail" id="usernameemail" required value=""> </td>
        </tr>
        <tr>
            <td for="password">Password</td>
            <td><input type="password" name="password" id="password" required value=""> </td>
        </tr>
        <tr>
            <td>pastikan data yang di masukkan sudah benar !</td>
        </tr>
        <tr>
            <td></td><br>
            <td><button type="submit" name="submit">login</button>  </td>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
    crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>