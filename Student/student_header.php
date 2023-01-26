<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../Partials/_dbconnect.php');
if(isset($_SESSION['isLogin'])){
    $student_email = $_SESSION['student_Email'];
}else{
    echo'<script type="text/javascript">location.href="../index.php"</script>';
}

if(isset($student_email)){
    $sql = "SELECT student_image, student_name FROM students WHERE student_email='$student_email'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $student_image = $row['student_image'];
    $student_name = $row['student_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/student_proflie.svg" type="image/x-icon" sizes="16*16">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
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
    <link rel="stylesheet" href="../css/style.css">
    <title>My Profile | <?php echo $student_name; ?></title>
</head>

<body>
    <!-- Start Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
        <a href="my_profile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-School</a>
    </nav>
    <!-- End Top Navbar -->

    <!-- Side Bar Start -->
    <div class="conatiner-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none mx-3">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $student_image; ?>" alt="" class="img-thumbnail"
                                style="height: 250px; width: 250px; border-radius: 12%">
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="my_profile.php"><i class="fas fa-user  mr-2"></i>Profile <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="my_courses.php"><i class="fab fa-accessible-icon  mr-2"></i>My
                                Courses</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="feedback.php" class="nav-link"><i class="fab fa-accessible-icon mr-2"></i>FeedBack</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="student_change_password.php" class="nav-link"><i class="fas fa-key  mr-2"></i>Change
                                Password</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="../index.php" class="nav-link"><i class="fas fa-sign-in  mr-2"></i>Home</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="../logout.php" class="nav-link"><i class="fas fa-sign-out  mr-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Side Bar End -->
        


<?php include_once('student_footer.php'); ?>