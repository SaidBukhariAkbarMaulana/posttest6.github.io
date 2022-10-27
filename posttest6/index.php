<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
    <title>Posstest 6 Pemrograman Web</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar" id="navbar">
        <div class="logo"><img src="assets/bukalapak.png" alt="" width="140px" /></div>
        <!-- <div class="mode">
        Dark mode:            
        <span class="change">OFF</span>
      </div> -->
        <ul class="nav-links">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li class="navvvvv"><a href="#">Home</a></li>
                <li class="navvvvv"><a href="#aboutme">About</a></li>
                <li class="navvvvv"><a href="#aboutme">Contact</a></li>
                <li class="navvvvv"><a href="signup.php">Sign in</a></li>
                <li class="navvvvv"><a href="#product"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li class="navvvvv"><a href="crud/index.php"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                <li><a href="#"><i class="bi-moon" id="toggleDark"></i></a></li>
            </div>
        </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
        <div class="col-2">
            <img src="assets/pict1.webp" alt="pict1" />
        </div>
        <div class="col-2">
            <img src="assets/pict22.webp" alt="pict2" />
        </div>
    </div>
    <!-- produk -->
    <div id="product" class="container">
        <h2>PRODUK TERLARIS</h2>
        <div class="card">
            <img src="assets/iphone13.webp" class="content" />
            <div class="deskrip">
                <span>iPhone 13</span>
                <div>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                </div>
                <h4>Rp. 13.000.000</h5>
                    <h5>Jakarta</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
        </div>
        <div class="card">
            <img src="assets/kipasangin.webp" class="content" />
            <div class="deskrip">
                <span>Kipas Angin</span>
                <div>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                </div>
                <h4>Rp. 32.000</h5>
                    <h5>Tangerang</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
        </div>
        <div class="card">
            <img src="assets/pc.webp" class="content" />
            <div class="deskrip">
                <span>PC</span>
                <div>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                </div>
                <h4>Rp. 5.999.000</h5>
                    <h5>Samarinda</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
        </div>
        <div class="card">
            <img src="assets/scarlett.webp" class="content" />
            <div class="deskrip">
                <span>Scarlett Whittening</span>
                <div>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                    <i class="fa-regular fa-star star"></i>
                </div>
                <h4>Rp. 12.000</h5>
                    <h5>Bontang</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
        </div>
    </div>
    </div>

    <!-- About me -->
    <section id="aboutme">
        <div class="image">
            <img src="assets/Foto dengan almameter.jpeg" id="geeks" class="newspaper">
            <div class="btn">
                <button onclick="zoomIn()">Zoom-In</button>
                <button onclick="zoomOut()">Zoom-Out</button>
            </div>
        </div>
        <div class="content">
            <h2>tentang saya</h2>

            <span class="animasi">
                <!-- line here -->
            </span>
            <p>Nama : Said Bukhari Akbar Maulana <br>Nim : 2109106123 <br> Prodi : Informatika C'21 <br> Saya Jomblo
                sejak 4 tahun lalu <br>Follow My Social Media :
            </p>
            <ul class="icons">
                <li>
                    <i class="fa-brands fa-instagram"></i>
                </li>
                <li>
                    <i class="fa-brands fa-github"></i>
                </li>
                <li>
                    <i class="fa-brands fa-twitter"></i>
                </li>
            </ul>
        </div>
    </section><br><br>

    <!-- footer -->
    <div id="footerr" class="footer">
        <p>copyright &copy;2022 <a href="#aboutme">by Said Bukhari Akbar Maulana</a> </p>
    </div>

    <script src="script.js"></script>
</body>

</html>