<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
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
    <link rel="stylesheet" href="css/style.css">
    <title>eSchool</title>
</head>

<body>

    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
        <a class="navbar-brand" href="index.php">eSchool</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item custom-nav-item"><a data-toggle="modal" data-target="#LoginModal"
                        class="nav-link">Login</a></li>
                <li class="nav-item custom-nav-item"><a data-toggle="modal" data-target="#SignUpModal"
                        class="nav-link">Signup</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Video Background -->
    <div class="container-fluid remove-video-margin">
        <div class="video-parent">
            <video playsinline autoplay muted loop>
                <source src="videos/videos-A.mp4">

            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="video-content">
            <h1 class="my-content">Welcome to eSchool</h1>
            <small class="my-content">Learn and Implement</small><br>
            <a data-toggle="modal" data-target="#SignUpModal" class="btn btn-danger mt-3 my">Get Started</a>
        </div>
    </div>
    <!-- End Video Background -->

    <!-- Start Text-Banner -->
    <div class="container-fluid bg-danger text-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa fa-book-open mr-3"></i>100+ Online Courses</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa fa-users mr-3"></i>Experts Instructor</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa fa-dollar mr-3"></i>Money Back Gurantee*</h5>
            </div>
        </div>
    </div>
    <!-- End Text-Banner -->

    <!-- Start Popular Courses -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
        <!-- Start Popular Course 1st Card Deck -->
        <div class="card-deck mt-4">
            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Linux for Begineer</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Linux for Begineer</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Linux for Begineer</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>

        </div>
        <!-- End Popular Course 1st Card Dec -->

        <!-- Start Popular Course 2nd Card Deck -->
        <div class="card-deck mt-4">
            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Windows Server Management</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>


            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Windows Server Management</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">Windows Server Management</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                                class="font-weight-bolder"><a href=""
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Popular Course 2nd Card Dec -->
        <div class="text-center m-2">
            <a href="" class="btn btn-danger btn-sm">View All Course</a>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Contact us -->
    <div class="container mt-4" id="contact">
        <!-- Start Conatct Container  1st Column -->
        <h2 class="text-center mb-4">Conatct US</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    <input type="text" name="visitor_name" id="" class="form-control mt-2" placeholder="Name">
                    <input type="text" name="visitor_email" id="" class="form-control mt-2" placeholder="Eamil">
                    <input type="text" name="visitor_phone" id="" class="form-control mt-2" placeholder="Phone">
                    <input type="text" name="visitor_subject" id="" class="form-control mt-2" placeholder="Query Title">
                    <textarea name="visitor_message" id="" class="form-control mt-2" style="height: 150px;"
                        placeholder="How can we help you"></textarea><br>
                    <input type="submit" name="" id="" class="btn btn-primary" value="Submit" name="submit"><br><br>
                </form>
            </div>

            <!-- End Conatct Container 1st Column -->

            <!-- Start Conatct Container 2nd Column -->
            <div class="col-md-4 stripe text-white text-center">
                <h4>eSchool</h4>
                <p>eSchool,
                    The Place,
                    Jalan Tenkokart , </br>
                    Cyberjaya 6300, Selangor </br>
                    Phone: +601139275791
                    www.eschool.com</p>
            </div>
        </div>
        <!-- End Conatct Container 2nd Column -->
    </div>
    <!-- End Contact us -->

    <!-- Start Feedback -->
    <div class="container mt-5" style="background-color: #f5e8eb;" id="feedback">
        <h1 class="text-center p-4">Students Feedback</h1>
        <div class="row owl-carousel owl-theme">
            <div class="col-md-12 ml-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/linux.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feedback -->

    <!-- Start Social Follow banner -->

    <div class="container-fluid bg-danger">
        <div class="row text-white text-center p-3">
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-facebook-f"></i> Facebook</a>
            </div>
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-whatsapp"></i> Whatsapp</a>
            </div>
        </div>
    </div>

    <!-- End Social Follow banner -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color: #E9ECEF;">
        <div class="container" style="background-color: #E9ECEF;">
            <div class="row text-container">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>eSchool Provides universal access to the world's best education, partnering with top universities
                        and organizations to offer online course</p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="" class="text-dark">Linux Server Administration</a><br>
                    <a href="" class="text-dark">Windows Server Management</a><br>
                    <a href="" class="text-dark">MS SQL Sever Administration</a><br>
                    <a href="" class="text-dark">Network Administration</a><br>
                    <a href="" class="text-dark">System Administration</a><br>
                </div>
                <div class="col-sm">
                    <h5>Contact US</h5>
                    <p>The Place <br>Jalan Teknokart <br>Cyberjaja 6300 <br>Selengor, Malaysia</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Start Footer -->
    <footer>
        <div class="container-fluid bg-dark text-center p-2">
            <small class="text-white">Copyright &copy; 2023 || Developed ASystem || <a href="" data-toggle="modal" data-target="#AdminLoginModal">Administration</a></small>
        </div>
    </footer>

    <!-- End Footer -->

    <!-- Start Signup Modal -->
    <!-- Modal -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignUpModalLabel">Let's Begin your eSchool Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i><label for="student_Name"
                                class="pl-2 font-weight-bold">Name</label>
                            <input type="text" class="form-control" name="student_Name" id="student_Name"
                                placeholder="NAME AS PER PASSWORD OR NID" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="student_Email"
                                class="pl-2 font-weight-bold">Email</label>
                            <input type="email" name="student_Email" class="form-control" id="student_Email"
                                aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                            <small id="emailHelp" class="form-text text-muted">Please enter your valied email.</small>
                        </div>
                        <div class="form-group">
                            <i class="fa-solid fa-phone"></i><label for="student_Phone"
                                class="pl-2 font-weight-bold">Phone</label>
                            <input type="text" class="form-control" name="student_Phone" id="student_Phone"
                                placeholder="PHONE" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="student_Password"
                                class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="student_Password" name="student_Password"
                                placeholder="PASSWORD" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="student_Password" class="pl-2 font-weight-bold">Repeat
                                Password</label>
                            <input type="password" class="form-control" id="student_Password" name="student_Password"
                                placeholder="Re-Type your password" autocomplete="off">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="student_SignUpBtn">Sign UP</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Signup Modal -->

    <!-- Start Login Modal -->

    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Welcome to eSchool Student Portal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="student_LoginEmail"
                                class="pl-2 font-weight-bold">Email</label>
                            <input type="email" name="student_LoginEmail" class="form-control" id="student_LoginEmail"
                                aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="student_LoginPassword"
                                class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="student_LoginPassword" name="student_LoginPassword"
                                placeholder="PASSWORD" autocomplete="off">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="student_LoginBtn">Login</button>
                    <button type="button" class="btn btn-danger">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Login Modal -->

    <!-- Start Admin Login -->
    <div class="modal fade" id="AdminLoginModal" tabindex="-1" aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AdminLoginModalLabel">eSchool Administration Portal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i><label for="admin_LoginEmail"
                                class="pl-2 font-weight-bold">Email</label>
                            <input type="email" name="admin_LoginEmail" class="form-control" id="admin_LoginEmail"
                                aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="admin_LoginPassword"
                                class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="admin_LoginPassword" name="admin_LoginPassword"
                                placeholder="PASSWORD" autocomplete="off">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="admin_LoginBtn">Login</button>
                    <button type="button" class="btn btn-danger">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Admin Login -->

    <!-- Boostrap jQuery and JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/proper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 10,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</body>

</html>