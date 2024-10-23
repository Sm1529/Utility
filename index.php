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
<!doctype html>
<html lang="zxx">


<!-- Mirrored from bnker.netlify.app/ltr/index-2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 08:30:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Bnker. - Banking and Loan HTML Templates </title>
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->

    <!-- Vendor Css -->
    <link rel="stylesheet" href="css/vendors.css">
    <link rel="stylesheet" href="css/line.css">
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

</head>
<style>
.nice-select {
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    border-radius: 5px;
    border: solid 1px #e8e8e8;
    box-sizing: border-box;
    clear: both;
    cursor: pointer;
    display: block;
    float: none;
    font-family: inherit;
    font-size: 14px;
    font-weight: normal;
    height: 42px;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 30px;
    position: relative;
    text-align: left !important;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;
}
</style>
<body>
 
 
  





    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two">
        <div class="acavo-responsive-nav">
            <div class="container">
                <div class="acavo-responsive-menu">
                    <div class="logo">
                        <a href='index.html'>
                            <img src="images/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="acavo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class='navbar-brand' href='index.html'>
                        <img src="images/logo3.png" alt="logo" style ="max-width: 21%;">
                    </a>

                    <div class="collapse navbar-collapse mean-menu ">
                        <ul class="navbar-nav ms-auto me-auto">
                            <li class="nav-item"><a href="index.html" class="nav-link active">Home</i></a>
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

                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact <i
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

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="option-item">
                            <a class='btn theme-btn-1' href='contact.html'>Get
                                Started <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Hero -->
    <div class="hero-2 ">
        <div class="hero-2-item contact-section">
            <!-- Container -->
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <!-- col -->
                    <div class="col-lg-6">
                        <div class="hero-2-content" >
                            <h1 style = "font-size: 50px;">Unlock the Value of Your Gold—Fast, Fair, and Flexible Loans!</h1>
                            <p>
Get instant cash by leveraging your gold assets! Simple, secure, and flexible loan solutions tailored to your needs.</p>
                            <div class="hero-btn">
                                <a class='btn theme-btn-1' href='contact.html'>Get
                                    Started <i class="las la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                                    <!-- col -->
                 <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner" style="background: white;">
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
                        <div class="hero-2-form" style="background: transparent;box-shadow: none;">
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
                            </form>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /Container -->
            
        </div>
    </div>
    <!-- /Hero -->

    <!-- Services -->
    <div class="services-area pt-120 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Best Services</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Presenting Services That are Right For You</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/01.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Personal Loan</a>
                        </h3>
                        <p>Empower your dreams with a personal loan that fits your life. Fast approval, flexible terms, and tailored to your financial needs.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/02.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Business Loan</a>
                        </h3>
                        <p>Fuel your business growth with our tailored loan solutions. Quick approval, flexible terms, and financial support to help you thrive.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/03.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Education Loan</a>
                        </h3>
                        <p>Invest in your future with our education loans. Easy approval, competitive rates, and flexible repayment options to support your academic journey.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/04.png" alt="image">
                            </a>
                        </div> -->
                        <!-- <h3>
                            <a href="#">Mobile Banking</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/05.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Credit Card</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/06.png" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="#">Online Deposit</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu labore
                            et dolore magna aliqua.</p>
                        <a href="#" class="services-btn">Read More <i class="las la-angle-right"></i></a>
                    </div>
                </div> -->
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Services  -->

    <!-- About Us -->
    <div class="about-area pt-100 pb-100">
        <!-- Container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-image-warp">
                        <a href="https://www.youtube.com/watch?v=mHjdlO4JSsA" class="video-btn popup-youtube">
                            <i class="ri-play-fill"></i>
                        </a>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">About Us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We operate our Loan services in many areas in Mumbai.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                        <!-- <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt labore dolore magna aliqua.</strong> -->
                        <p>At BCASH, we specialize in providing tailored loan solutions to meet your unique financial needs. Our experienced team is dedicated to offering personalized support and competitive rates to help you achieve your goals. Trust us to guide you through every step of the lending process with transparency and professionalism.</p>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Registration</h4>
                            <p>Fill out our quick and easy online application.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Quick Verification</h4>
                            <p>We will evaluate your application and contact you as quickly as possible.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Loan Disbursal</h4>
                            <p>You will get money in your bank account immediately.</p>
                        </div>
                        <!-- <div class="about-btn justify-content-center text-center">
                            <a href="#" class="btn theme-btn-1">
                                Learn More
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /About Us -->

    <!-- Loan Calculation -->
    <!-- <div class="loan-section"> -->
        <!-- Container -->
        <!-- <div class="container">
            <form action="#"> -->
                <!-- row -->
                <!-- <div class="row calculator-loan"> -->
                    <!-- col -->
                    <!-- <div class="col-lg-7 col-12 wow fadeInLeft">
                        <div class="loan-calculation-wrapper">
                            <div class="theme-title">
                                <h2>Check loan status, interest &amp; Installment.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo ante, auctor at sodales facilisis, tempus vitae sapien. </p>
                                <div class="loan-filter-form">
                                    <div class="thirty form">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /col -->
                    <!-- Col -->
                    <!-- <div class="col-lg-5 col-12 wow fadeInRight">
                        <div class="loan-confirm-form">
                            <div class="thirty">
                                <div class="results clearfix"></div>
                            </div>
                            <button class="tran3s apply-button">APPLY FOR LOAN</button>
                        </div>
                    </div> -->
                    <!-- /col -->
                <!-- </div> -->
                <!-- /row -->
            <!-- </form>
        </div> -->
        <!-- /Container -->
    <!-- </div> -->
    <!-- /Loan Calculation -->

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
                            <div class="credit-score-img-box" style="display: flex;">
                            <img src=" images/services/10.png" alt= "Image" style="width: 14%;">
                            <h2 class="section__title" style="padding: 26px;">Check your credit score for free</h2>
                            </div>
                                <!-- <h5 class="section__meta text-white">#get in touch</h5> -->
                                
                                <!-- <p class="section__sub">Speak to a Bnker specialist at (800-123-1234)</p> -->
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a class='btn cta-btn' href='contact.html'>
                                   Check now <span class="la la-caret-right"></span>
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
    <!-- </div>
</div> -->
<br>
<br>
  <br>



    <!-- Team -->
    <!-- <div class="team-style"> -->
        <!-- Container -->
        <!-- <div class="container"> -->
            <!-- row -->
            <!-- <div class="row justify-content-center text-center"> -->
                <!-- col -->
                <!-- <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Team</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Meet Our team member</p>
                    </div>
                </div> -->
                <!-- /col -->
            <!-- </div> -->
            <!-- /row -->
            <!-- row -->
            <!-- <div class="row"> -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-1.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-2.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">President & CEO</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-3.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-4.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">UX/UI Designer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-5.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
                <!-- col -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="images/team/team-6.png" alt=""></figure>
                            <ul class="social-list">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-dribbble-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Jack Nicholson</a></h3>
                            <span class="designation">UX/UI Designer</span>
                        </div>
                    </div>
                </div> -->
                <!-- /col -->
            <!-- </div> -->
            <!-- /row -->
        <!-- </div> -->
        <!-- /Container -->
    <!-- </div> -->
    <!-- /Team -->

    <!-- Download -->
    <div class="download-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center justify-content-between">
                <!-- col -->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="download-1-content mt-50">
                        <h2 class=" wow fadeInUp animated">Download Our App</h2>
                        <ul>
                            <li class="wow fadeInUp animated" data-wow-delay="0.2s"><i class="la la-check"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li class="wow fadeInUp animated" data-wow-delay="0.4s"><i class="la la-check"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li class="wow fadeInUp animated" data-wow-delay="0.6s"><i class="la la-check"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                        </ul>
                        <div class="mt-4 wow fadeInUp animated" data-wow-delay="0.6s">
                            <a href="#" class="btn theme-btn-1">
                                <img src="images/svg/android.svg" alt="">
                            </a>
                            <a href="#" class="btn theme-btn-1">
                                <img src="images/svg/apple.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="download-1-img">
                        <img class=" img-fluid" src="images/bg/download.png" alt="">
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Download -->

    <!-- FAQ -->
    <div class="faq-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <div class="tab faq-accordion-tab">
             <div class="section-title">
                                    <h2 class="title">FAQs</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                <!-- <ul class="tabs d-flex flex-wrap justify-content-center">
                    <li class="mb-4"><a href="#"><i class="ri-flag-line"></i> <span>Getting Started</span></a></li> -->

                    <!-- <li class="mb-4"><a href="#"><i class="uil uil-money-bill"></i> <span>Pricing & Planes</span></a>
                    </li>

                    <li class="mb-4"><a href="#"><i class="uil uil-shopping-bag"></i> <span>Sales Question</span></a>
                    </li>

                    <li class="mb-4"><a href="#"><i class="uil uil-book-open"></i> <span>Usage Guides</span></a></li>

                    <li class="mb-4"><a href="#"><i class="uil uil-info-circle"></i> <span>General Guide</span></a></li> -->
                <!-- </ul> -->

                <div class="tab-content">
                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                    
                                        <i class='las la-angle-down'></i>
                                       Q1. Where can a Personal Loan be used?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>Personal loans can be used for any purpose such as medical emergency, wedding expenses, business expansion, house renovation, vacation expenses, etc. It can be utilized towards debt consolidation, paying for the down payment of new house or meeting educational expenses. The uses for which personal loan in Mumbai can be utilized is limitless. The banks do not put any restrictions on its use. This is the very primary reason that demand for a personal loan is high as any kind of expenses can be met without much burden on its users. Hence personal loan is becoming the first choice of many people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                       Q2.What is the eligibility criteria for applying for personal loan?
                                    </a>

                                    <div class="accordion-content">
                                        <p>For applying for Personal Loan in Mumbai, one must need to follow certain requirements such as there must be a regular source of income whether you are salaried or self-employed. This is an essential factor as it determines whether you are capable of repaying the loan back or not. Another important requirement in case of a salaried employee is the company where he/she is working, and also, the credit history plays an important role in determining the rate of interest. Also, one must be minimum of 21 years of age and not exceeding 60 years of age. One can easily apply and get personal loan online as well.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                      Q3. What is the minimum amount one needs to borrow in case of a personal loan?
                                    </a>

                                    <div class="accordion-content">
                                        <p>The minimum amount that one needs to borrow in case of a personal loan varies from bank to bank. It depends upon different banks' procedures and policy and also depends upon other factors as well. But usually, the minimum amount of easy personal loan varies from Rs. 25000 to Rs.30000. It may vary, but this is the standard limit. It is advisable to go through different lenders to choose the one which fulfils your requirements. Sometimes it also depends upon the source of income of one applying for the personal loan in Mumbai.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                  Q4. What is the process of calculating the maximum amount of the loan?
                                    </a>

                                    <div class="accordion-content">
                                        <p>The maximum amount that one can avail through personal loan varies from person to person. It usually depends upon the financial capability of the person in repaying the loan. For salaried employees, the maximum amount is decided on the basis of their salary. The loan amount is decided in such a way that it EMI of the personal loan should not exceed 30 to 40 percent of their salary. And in the case of self-employed, the maximum amount of personal loan is calculated on the basis of their profit. For this statement of profit and loss is analyzed.

Also, if there are other loans, then they are also taken into consideration. Credit history also plays an important role in availing a low-interest personal loan in Mumbai.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                               Q5. What is the time period for which personal loan can be availed?
                                    </a>

                                    <div class="accordion-content">
                                        <p>A personal loan is high in demand not only because it can be put to multiple uses without any restrictions imposed by the bank but also the flexible tenure it can be borrowed for. The tenure for which personal loan in Mumbai can be availed is from 12 months to 60 months. One can choose the time period as per their requirement, and it also depends upon the uses for which personal loan is borrowed. In some situations, a shorter or longer time period than the standard can be allowed by the lenders.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q1. What is an EMI?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q2. Does barisal perform audits or prepare tax returns?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q3. How do I know if I need to implement a new accounting system?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q4. Why should I use bsal instead of other professional services firms?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q5. How do I know what my equity structure might look like over time?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q1. What is an EMI?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q2. Does barisal perform audits or prepare tax returns?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q3. How do I know if I need to implement a new accounting system?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q4. Why should I use bsal instead of other professional services firms?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q5. How do I know what my equity structure might look like over time?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q1. What is an EMI?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q2. Does barisal perform audits or prepare tax returns?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q3. How do I know if I need to implement a new accounting system?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q4. Why should I use bsal instead of other professional services firms?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q5. How do I know what my equity structure might look like over time?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q1. What is an EMI?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q2. Does barisal perform audits or prepare tax returns?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q3. How do I know if I need to implement a new accounting system?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q4. Why should I use bsal instead of other professional services firms?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q5. How do I know what my equity structure might look like over time?
                                    </a>

                                    <div class="accordion-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /FAQ -->

    <!-- Client Logo -->
    <div class="client-logo-area pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-envato.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-converkit.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-buzzumo.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-buffer.png" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-frame.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                    <div class="client-logo">
                        <div class="client-logo-img"> <img src="images/client-logo/logo-clearbit.png" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Client Logo -->

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
                <!-- <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
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
                </div> -->
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
                                <p>We offer customized loan solutions with personalized support and competitive rates to meet your financial needs.</p>
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
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div> -->
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
                            <p>© Copyrights 2024 <a href='index.html'>BCASH</a> All rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link text-end">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#"> Terms</a></li>
                                <!-- <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Help </a></li> -->
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


<!-- Mirrored from bnker.netlify.app/ltr/index-2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 08:31:04 GMT -->
</html>