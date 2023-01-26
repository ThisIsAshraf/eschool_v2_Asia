<?php include_once('./Partials/_dbconnect.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/eschool-favicon.svg" type="image/x-icon" sizes="16*16">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>ESCHOOL | YOUR TRUSTED PARTNER</title>
</head>

<body>
<!-- fixed-top -->
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 bg-secondary">
        <a class="navbar-brand" href="index.php">eSchool</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="./courses.php" class="nav-link">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="./payment_status.php" class="nav-link">Payment</a></li>
                <?php session_start();
                if(isset($_SESSION['isLogin'])){

                    echo '
                    <li class="nav-item custom-nav-item"><a href="./Student/my_profile.php" class="nav-link">My Profile</a></li>
                     <li class="nav-item custom-nav-item"><a href="./logout.php" class="nav-link">Logout</a></li>
                    ';

                }else{
                   echo '<li class="nav-item custom-nav-item"><a data-toggle="modal" data-target="#LoginModal"
                    class="nav-link">Login</a></li>
            <li class="nav-item custom-nav-item"><a data-toggle="modal" data-target="#SignUpModal"
                    class="nav-link">Signup</a></li>';
                }
                ?>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
                <!-- <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
            </ul>
        </div>
    </nav>
    <!-- End Navigation -->