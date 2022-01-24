<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--Link Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--Link Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Css Link-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--Header Section Starts-->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--Header Section Ends-->

    <!--Home Section Starts-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Arround The World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!--Home Section Ends-->


    <!--Services Section Starts-->
    <section class="services">
        <h1 class="heading-tittle">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="img/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="img/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="img/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="img/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="img/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>
    <!--Services Section Ends-->

    <!--Footer Section Starts-->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms Of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+(031)123456789</a>
                <a href="#"><i class="fas fa-phone"></i>+(57)111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i>tvlwebdesing@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>C2 S #9-67 Bogota DC</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>

        <div class="credit">Created By <span>Mr.WebDesinger</span> |All Rights Reserved|</div>
    </section>
    <!--Footer Section Ends-->

    <!--Link Swiper-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--Link js-->
    <script src="js/script.js"></script>

</body>

</html>