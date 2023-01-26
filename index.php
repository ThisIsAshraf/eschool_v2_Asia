<!-- ************** Including Navbar ************** -->
<?php include_once('./Partials/header.php');?>
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
        <?php 
        if(isset($_SESSION['isLogin'])){
            echo'
            <a href="./Student/my_profile.php" class="btn btn-success mt-3 my">My Profile</a>
            ';
        }else{
            echo'
            <a data-toggle="modal" data-target="#SignUpModal" class="btn btn-danger mt-3 my">Get Started</a>
            ';
        }
        ?>
       
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
        <?php 
        $sql = "select * from courses where is_active='1' limit 3";
        $result= $connection ->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_desc = $row['course_desc'];
                $course_price = $row['course_price'];
                $course_img = $row['course_img'];
                $course_original_price = $row['course_original_price'];
                echo '<a href="./course_deatils.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="'.str_replace('..', '.',$course_img).'" alt="" style="width: 345px; height:200px; margin: 0;" class="img-thumbnail mx-auto" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">'.$course_name.'</h5>
                        <p class="card-text">'.substr($course_desc, 0,75).'...
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del> &#36 '.$course_original_price.' </del></small><span
                                class="font-weight-bolder"> &#36 '.$course_price.'<a href="./course_deatils.php?course_id='.$course_id.'"
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>';
            }
        }
        ?>
    </div>
    <!-- End Popular Course 1st Card Dec -->

    <!-- Start Popular Course 2nd Card Deck -->
    <div class="card-deck mt-4">
    <?php 
        $sql = "select * from courses where is_active='1' limit 3,3";
        $result= $connection ->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_desc = $row['course_desc'];
                $course_price = $row['course_price'];
                $course_img = $row['course_img'];
                $course_original_price = $row['course_original_price'];
                echo '<a href="./course_deatils.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="'.str_replace('..', '.',$course_img).'" alt="" style="width: 345px; height: 200px; margin: 0;" class="img-thumbnail mx-auto" alt="AAA">
                    <div class="card-body">
                        <h5 class="card-title">'.$course_name.'</h5>
                        <p class="card-text">'.substr($course_desc, 0,75).'...
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del> &#36 '.$course_original_price.' </del></small><span
                                class="font-weight-bolder"> &#36 '.$course_price.'<a href="./course_deatils.php?course_id='.$course_id.'"
                                    class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                        </p>
                    </div>
                </div>
            </a>';
            }
        }
        ?>
    </div>
    <!-- End Popular Course 2nd Card Dec -->
    <div class="text-center m-2">
        <a href="courses.php" class="btn btn-danger btn-sm">View All Course</a>
    </div>
</div>
<!-- End Popular Courses -->

<!--*********** Including Contact us ***********  -->
<?php include_once('./contact.php');?>

<!-- Start Feedback -->
<div class="container-fluid mt-5" style="background-color: #f5e8eb;" id="feedback">
    <h1 class="text-center p-4">Students Feedback</h1>
    <div class="row owl-carousel owl-theme">
        <?php 
        
        $sql ="SELECT student_name, student_professions,student_image,feedback_content FROM students as stu JOIN feedbacks as fdc on stu.student_id = fdc.student_id WHERE fdc.is_active=1";

        $result= $connection ->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo ' <div class="col-md-12 ml-5 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="'.str_replace('..','.',$row['student_image']).'" class="card-img-top"  style="width: 287px; height: 200px; margin: 0;" alt="...">
                    <div class="card-body">
                        <p class="card-text">'.$row['feedback_content'].'</p>
                        <h5 class="card-title">'.$row['student_name'].'</h5>
                        <small class="card-title">'.$row['student_professions'].'</small>
                    </div>
                </div>
            </div>';
            }
        }
        
        ?>
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

<!-- Including Footer -->
<?php include_once('./Partials/footer.php');?>

</html>