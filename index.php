<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WisataSendangWuluh</title>
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
                    <li><a href="#home">Home</a> </li>
                    <li><a href="#aboutus">About us</a> </li>
                    <li><a href="#support">Support</a> </li>
                    <li><a href="#gallery">Gallery</a> </li>
                    <li><a href="#contact">Contact</a> </li>
                    <li><a href="form.php">Form</a> </li>
                    <li><a href="logout.php">Logout</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layar-penuh">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="gambar/video-indonesia.mp4" type="video/mp4"/>
            </video>
            <div class="intro">
                <h3> Visit Indonesia <?php echo $row["name"]; ?></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, iste.
                </p>
                <p>
                    <a href="#contact" class="tombol">More Info</a>
                </p>
            </div>
        </header>
        <main>
            <section id="aboutus">
                <div class="layar-dalam">
                    <h3>About us</h3>
                    <p class="ringkasan">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis praesentium similique dolorum voluptas libero et ab reiciendis dolore ex exercitationem, excepturi iusto eligendi natus cum alias odio aliquam! A, ipsam.
                    </p>
                    <div class="konten-isi">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus tenetur unde explicabo distinctio ab iste odit laudantium quod porro libero?
                        </p>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="support">
                <div class="layar-dalam support">
                    <div>
                        <img src="gambar/matahari.png"/>
                        <h6> in every condition</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem officia deserunt quos aliquam, cum quisquam!</p>
                    </div>
                    <div>
                        <img src="gambar/images (1).png"/>
                        <h6>professional team</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem officia deserunt quos aliquam, cum quisquam!</p>
                    </div>
                    <div>
                        <img src="gambar/kompas.png"/>
                        <h6>expert hikers</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem officia deserunt quos aliquam, cum quisquam!</p>
                    </div>
                </div>
            </section>
            <section class="gallery" id="gallery">
            <div class="wrapper">
                <div class="slides">
                    <span id="slide-1"></span>
                    <span id="slide-2"></span>
                    <span id="slide-3"></span>
                    <span id="slide-4"></span>
                    <span id="slide-5"></span>
                    <span id="slide-6"></span>
                    <span id="slide-7"></span>

                    <div class="img">
                    
                            <img src="gambar/gambar.jpg"/>
                           
                        
                            <img src="gambar/gambar1.jpg"/>
                            
                        
                            <img src="gambar/hutan.png"/>
                            
                        
                            <img src="gambar/logo5.png"/>
                            
                        
                            <img src="gambar/love.png"/>
                            
                        
                            <img src="gambar/gambar.jpg"/>
                            
                        
                            <img src="gambar/gambar1.jpg"/>
                            
                        
                    </div>
                </div>
            <!-- navigasi -->
            <div class="navigation">
                <a href="#slide-1">1</a>
                <a href="#slide-2">2</a>
                <a href="#slide-3">3</a>
                <a href="#slide-4">4</a>
                <a href="#slide-5">5</a>
                <a href="#slide-6">6</a>
                <a href="#slide-7">7</a>
            </div>
        </div>
        
    </section>
    <div class="gall">
        <ul>
            <a href="gallery.php">Tekan untuk menuju ke Gallery foto</a>
        </ul>
    </div>
            <section class="quote">
                <div class="layar-dalam">
                    <p>istirahat itu tidak hanya berhenti beraktifitas, 
                        berwisata pun bisa dinamakan istirahat dari kesibukan sehari - hari</p>
                </div>
            </section>
            <section class="abuabu" id="blog">
                <div class="layar-dalam">
                    <h3>latest blog</h3>
                    <p class="ringkasan">
                        Selamat Datang di latest blog dibagian ini menjelaskan sedikit apa itu Wisata Sendang Wuluh.
                    </p>
                    <div class="blog">
                        <div class="area">
                            <div class="gambar" style="background-image: url('gambar/gambar.jpg')"></div>
                            <div class="text">
                                <article>
                                    <h4><a href="#">what about wsw?</a></h4>
                                    <p>Wisata Sendang Wuluh merupakan tempat wisata yang berada di kelurahan jragung, wisata ini terdiri dari hutan pohon jati dan sendang atau sumur mata air alami.</p>
                                </article>
                            </div>
                            </div>
                            <div class="area">
                                <div class="gambar" style="background-image: url('gambar/gambar1.jpg')"></div>
                                <div class="text">
                                    <article>
                                        <h4><a href="#">what about sendang?</a></h4>
                                        <p>Sendang merupakan sumur mata air yang tidak dalam biasanya dimanfaatkan untuk menyirami tanaman atau keperluaan lainya.</p>
                                    </article>
                                </div>
                        </div>
                    </div>
                    <div>
                        <i class="fa-solid fa-map-location-dot"></i>
                        <h5>lokasi</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15836.745572250167!2d110.55973483005862!3d-7.104384893271298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7091c8089913f5%3A0x94e7d19cfc035794!2sWISATA%20ALAM%20SENDANG%20WULUH!5e0!3m2!1sid!2sid!4v1688797507590!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
        </main>
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