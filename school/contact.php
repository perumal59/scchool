<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Skills Better😍</title>
    <script src="https://kit.fontawesome.com/c972157a8a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <nav class="navbar">
        <div class="container nav_container">
            <a id="logo" href="index.html"><h3> Grow Institute</h3></a>
            <ul class="nav_menu">
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php"> About</a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="contact.php"> Conatct</a></li>
            </ul>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
<!-- ============================ POPULAR COURSES ============================== -->
<section class="contact">
    <div class="container contact_container">
        <aside class="contact_aside">
            <div class="aside_image">
                <img src="./images/contact.svg" alt="">
            </div>
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, magnam.</p>
            <ul class="contct_details">
                <li>
                    <i class="fa-solid fa-square-phone"></i>
                    <h5>+8778625212</h5>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <h5>perumal@gmail.com</h5>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <h5>Chennai</h5>
                </li>
            </ul>
            <ul class="contact_socials">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
            </ul>
        </aside>
       
        <!-- <form action="contact.php" class="contact_form" method="POST"> -->
        <form action="https://formspree.io/f/mlekzyok" class="contact_form" method="POST">
            <div class="form_name">
                <input type="text" placeholder="Enter your name " name="name" required>
                <input type="text" placeholder="Phone number" name="number" required>
            </div>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <textarea name="message" id="msg"  rows="7" placeholder="Write a Message"></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- ================================= FOOTER ===================================== -->
<footer class="footer">
    <div class="container footer_container">
        <div class="footer_1">
            <a href="index.html" class="footer_logo"><h4 class="footer-heading">Grow Insititue</h4></a>
            <p>
                Lorem ipsum dolor sit, amet consectetur <br> adipisicing elit. Dolore, tenetur?
            </p>
        </div>
         
        <div class="footer_3">
            <h4>Primacy</h4>
            <ul class="permalinks">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Refund Policy</a></li>
            </ul>
        </div>
        <div class="footer_4">
            <h4>Contact Us</h4>
            <div>
                <p>+91-8778625212</p>
                <p>perumal625212@gmail.com</p>
                <div class="footer_icons"> 
                    <ul class="footer_socials">
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <small>Copyright &copy; Grow Insititue</small>
    </div>
</footer>
<!-- ============================= php ============================= -->



<!-- ======================== SWIPING CODE================================ -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="main.js"></script>

</body>
</html>