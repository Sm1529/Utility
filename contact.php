<!DOCTYPE html>
<?php

    require_once('mailer/class.phpmailer.php');
    require 'mailer/PHPMailerAutoload.php';
    require 'mailer/class.smtp.php';

if(isset($_POST['email']))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   $Loan = array(1=> "Gold Loan", 2=> "Education Loan", 3=>"Personal Loan", 4=>"Business Loan");
$Loan = $Loan[(int) $_POST['Loan']];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com'; // add host name 
    $mail->Port = 465;
    $mail->Username = 'utility465@gmail.com'; //user name
    $mail->Password = 'dylzgsfodszjkqwf';
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;  // Set to 0 in production

    $mail->setFrom('saiganeshenterprises.com@gmail.com', 'BCASH Website Enquiries'); //sender name
    $mail->addAddress("saiganeshenterprises.com@gmail.com");  // Add recipient address
    $mail->addReplyTo($_POST["email"], $_POST["name"]);

    // Other settings remain the same...

    $mail->Subject = "BCASH Website Enquiries";

    $mail->Body = '<p><strong>Name: </strong>' . $name . '</p>
    <p><strong>Phone: </strong>' . $phone . '</p>
    <p><strong>Email: </strong>' . $email . '</p>
    <p><strong>Loan type: </strong>' . $Loan . '</p>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'contact.php';
    </script>
    ";



}
?>

<html lang="zxx">


<!-- Mirrored from bnker.netlify.app/ltr/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 08:31:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> BCASH </title>
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->
<link rel="stylesheet" href="css/line.css">
    <!-- Vendor Css -->
    <link rel="stylesheet" href="css/vendors.css">
    <!-- /Vendor Css -->

    <!-- Plugin Css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Plugin Css -->

    <!-- Icons Css -->
    <link rel="stylesheet" href="css/icons.css">
    <!-- /Icons Css -->

    <!-- Style Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /Style Css -->

    

    <!-- /All CSS -->
    <style>
        .nice-select{
                width: 100%;
        }
    </style>
</head>

<body>

    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

    <!-- Header -->
        <div class="acavo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class='navbar-brand' href='index.html'>
                        <img src="images/logo3.png" alt="logo" style ="max-width: 21%;">
                    </a>

                    <div class="collapse navbar-collapse mean-menu ">
                        <ul class="navbar-nav ms-auto me-auto">
                            <li class="nav-item"><a href="index.html" class="nav-link">Home</i></a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="nav-item"><a class='nav-link' href='index.html'>Home 1</a></li>
                                    <li class="nav-item"><a class='nav-link active' href='index-2.html'>Home 2</a></li>
                                    <li class="nav-item"><a class='nav-link' href='index-3.html'>Home 3</a></li>
                                </ul> -->
                            </li>

                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us </i></a>
                                        <!-- class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class='nav-link' href='about-us-1.html'>About Us 1</a></li>
                                    <li class="nav-item"><a class='nav-link' href='about-us-2.html'>About Us 2</a></li>
                                </ul>
                            </li> -->

                            <!-- <li class="nav-item"><a href="#" class="nav-link">Portfolio <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class='nav-link' href='portfolio.html'>Portfolio</a></li>
                                    <li class="nav-item"><a class='nav-link' href='portfolio-detail.html'>Portfolio
                                            Details</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item"><a href="contact.html" class="nav-link active">Contact <i
                                       ></i></a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="nav-item"><a class='nav-link' href='faq.html'>FAQ</a></li>
                                    <li class="nav-item"><a class='nav-link' href='team.html'>Team</a></li>
                                    <li class="nav-item"><a class='nav-link' href='contact.html'>Contact</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Auth Page <i
                                                class='las la-angle-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class='nav-link' href='login.html'>Login</a></li>
                                            <li class="nav-item"><a class='nav-link' href='signup.html'>Sing Up</a></li>
                                            <li class="nav-item"><a class='nav-link' href='recover.html'>Recover</a>
                                            </li>
                                        </ul>
                                    </li>
                                                                            <li class="nav-item"><a class='nav-link' href='pricing.html'>Pricing</a></li>
                                        <li class="nav-item"><a class='nav-link' href='404.html'>404</a></li>
                                    <li class="nav-item"><a class='nav-link' href='coming-soon.html'>Coming Soon</a>
                                    </li>
                                    <li class="nav-item"><a class='nav-link' href='loan-calculation.html'>Loan
                                            Calculation</a></li>
                                    <li class="nav-item"><a class='nav-link' href='loans.html'>Loan Form</a></li>
                                    <li class="nav-item"><a class='nav-link' href='open-account.html'>Open Account</a>
                                    </li>
                                    <li class="nav-item"><a class='nav-link' href='privacy-policy.html'>Privacy
                                            Policy</a></li>
                                    <li class="nav-item"><a class='nav-link' href='testimonials.html'>Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Blog <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class='nav-link' href='blog.html'>Blog</a></li>
                                    <li class="nav-item"><a class='nav-link' href='blog-grid.html'>Blog Grid</a></li>
                                    <li class="nav-item"><a class='nav-link' href='blog-single-sidebar.html'>Blog Single
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item"><a class='nav-link' href='blog-single.html'>Blog Single</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>

                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <a class='btn theme-btn-1' href='contact.html'>Get
                                    Started <i class="las la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
                <!-- /Container -->
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="banner-section position-relative">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">CONTACT US</h3>
                       
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="images/bg/4.png" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Breadcrumb -->

    <!-- Contact Info -->
    <div class="contact-info-area pt-100 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-map-2-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-map-2-line"></i>
                        </div>
                        <h3>Our Address</h3>
                        <p>Shop no.7, The Empress Chambers, Sector 1 Charkop, Kandivali West, Mumbai - 400067.</p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <h3>Contact</h3>
                        <p>Mobile: <a href="tel:+919867493007">+91 9867493007</a></p>
                        <p>E-mail: <a href="mailto:bcash@gmail.com">bcash@gmail.com</a></p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-time-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-time-line"></i>
                        </div>
                        <h3>Hours of Operation</h3>
                        <p>Monday - Saturday: 10:30 - 21:00</p>
                        <p>Sunday: 10:30 - 15:00</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Contact Info -->

    <!-- Contact -->
    <div class="contact-section">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row clearfix">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="map-site ml-15">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.9117941622815!2d72.82707667916375!3d19.21060671460127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6b63a733cbd%3A0xbd564c07d92c72ff!2sChatoraa-%20Veg%20and%20Non%20Veg%20Restaurant!5e0!3m2!1sen!2sin!4v1726647635572!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </iframe>
                    </div>
                </div>
                
                <!-- /col -->
                <!-- col -->
                 <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <h3>Let’s Conversation<br />with BCASH</h3>
                        <form method="post" action="#" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-name">
                                    <input type="text" name="name" placeholder="Your name *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-email">
                                    <input type="email" name="email" placeholder="Your mail *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-phone">
                                    <input type="text" name="phone" placeholder="Your Phone *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="form-group">
                                            <select id ="Loan" name="Loan" style=" width: 100%;">
                                             <Label>Loan Type</Label>
                                                <option value="1">Gold Loan</option>
                                                <option value="2">Education Loan</option>
                                                <option value="3">Personal Loan</option>
                                                <option value="4">Business Loan</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    

   <div class="col-lg-6">
                        <div class="hero-2-form">
                            <div class="content">
                               
                            </div>

                            <form>
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    
                                </div>
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <a href="recover.html" class="btn theme-btn-1" type="submit" name="submit-form">Send
                                        now</a>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- /row -->
        </div>
        <!-- Container -->
    </div>
    <!-- /Contact -->
    </div>
    </div>

    <!-- Cta -->
    <div class="cta-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta text-white">#get in touch</h5>
                                <h2 class="section__title">Ready to get started ?</h2>
                                <p class="section__sub">Speak to a Bnker specialist at (800-123-1234)</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a class='btn cta-btn' href='contact.html'>
                                    Request Call Back <span class="la la-caret-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Cta -->

    <!-- Footer -->
    <footer class="footer-style bg-gray-100 pt-200">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="footer-logo">
                        <a href='index.html'><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
                    <div class="footer-top-wrapper">
                        <ul class="footer-top-link text-end">
                            <li><a href="#">Layouts </a></li>
                            <li><a href="#"> Pages</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Blog </a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
            </div>
            <!-- /row -->
            <div class="footer-middle-area mt-30 pb-30 pt-60">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consect etuer adipiscing elit, sed diam nonu mmy nibh
                                    euis </p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-instagram-alt"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Services</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.html">Conditions</a></li>
                                    <li><a href="our-history.html">Terms of Use</a></li>
                                    <li><a href="about.html">Our Services</a></li>
                                    <li><a href='team.html'>New Guests List</a></li>
                                    <li><a href="about.html">The Team List</a></li>
                                </ul>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="services-01.html">Conditions</a></li>
                                    <li><a href='contact.html'>Terms of Use</a></li>
                                    <li><a href='contact.html'>Our Services</a></li>
                                    <li><a href='blog.html'>New Guests List</a></li>
                                    <li><a href="about.html">The Team List</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Subscribe</h3>
                            <div class="subscribes-form">
                                <form action="#">
                                    <input placeholder="Enter email " type="email">
                                    <button class="btn theme-btn-1 width-100 mt-10"><i
                                            class="lab la-telegram-plane me-2"></i>subscribe</button>
                                </form>
                            </div>
                            <div class="footer-info">
                                <p>Get the latest updates via email. Any time you may unsubscribe</p>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <div class="footer-bottom-area pt-25 pb-25">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>© Copyrights 2021 <a href='index.html'>Bnker.</a> All rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link text-end">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#"> Terms</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Help </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->

    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- /Plugins Js -->

    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- /Main JS -->

    <!-- /JS -->

</body>


<!-- Mirrored from bnker.netlify.app/ltr/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 08:31:17 GMT -->
</html>