<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>InputData</title>
</head>
<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into data_wsw set
        nama = '$_POST[nama]', 
        alamat = '$_POST[alamat]', 
        no = '$_POST[no]', 
        keperluan = '$_POST[keperluan]', 
        tanggal = '$_POST[tanggal]', 
        jumlah = '$_POST[jumlah]', 
        catatan = '$_POST[catatan]'");
    
    echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
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
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="#contact">Contact</a> </li>
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
            
<h2>Silahkan Di isi</h2>
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required value=""> </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required value=""> </td>
        </tr>
        <tr>
            <td>No telp</td>
            <td><input type="text" name="no" required value=""> </td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td><input type="text" name="keperluan" required value=""> </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tanggal" required value=""> </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" required value=""> </td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td><input type="text" name="catatan" required value=""> </td>
        </tr>
        <tr>
            <td>jika data yang dimasukkan sudah benar silahkan tekan simpan.!</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"> </td>
        </tr>
    </table>
</form>
</section>
<footer id="contact">
            <div class="layar-dalam">
                <div>
                    <i class="fa-brands fa-whatsapp"></i>
                    <h5>Telp</h5>
                    
                    <a href="https://wa.me/qr/KHNWX64N2ZOZG1">+62819-4713-4747</a>
                </div>
                <div>
                    <i class="fa-regular fa-envelope"></i> 
                    <h5>Email</h5>
                   <a href="deswitsendangwuluh@gmail.com">deswitsendangwuluh@gmail.com</a>
                </div>
                <div>
                    <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-youtube"></i>
                    <h5>Akun sosmed</h5>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, atque!
                </div>
                
            </div>
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