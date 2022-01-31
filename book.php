<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

    <div class="heading" style="background:url(img/header-bg-3.png) no-repeat;">
        <h1>Book Now</h1>
    </div>

    <!--Booking Section Starts-->
    <section class="booking">
            <h1 class="heading-title">Book Your Trip!</h1>
            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>¿Name?</span>
                        <input type="text" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>¿Email?</span>
                        <input type="email" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>¿Phone?</span>
                        <input type="number" placeholder="Enter Your Number" name="number">
                    </div>
                    <div class="inputBox">
                        <span>¿Address?</span>
                        <input type="text" placeholder="Enter Your Address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>¿Where To?</span>
                        <input type="text" placeholder="Place You To Visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>¿How Many?</span>
                        <input type="number" placeholder="Number Of Guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>¿Arrivals?</span>
                        <input type="date"  name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>¿Leaving?</span>
                        <input type="date"  name="leaving">
                    </div>
                </div>  
                
                <input type="submit" value="submit" class="btn" name="send">

            </form>
    </section>
    <!--Booking Section Ends-->


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
                <a href="#"><i class="fas fa-angle-right"></i>C2 S #9-67 Bogota DC</a>
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