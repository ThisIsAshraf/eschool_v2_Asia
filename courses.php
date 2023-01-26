<?php include_once('./Partials/header.php');?>
<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/courses.jpg" alt="Cousrses"
            style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End Course Page Banner -->

<!-- Start Popular Courses -->
<div class="container mt-5 mb-5">
    <h1 class="text-center">Find your eSchool Courses</h1>
    <div class="row mt-4">
    <?php 
        $sql = "select * from courses where is_active='1'";
        $result= $connection ->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_desc = $row['course_desc'];
                $course_price = $row['course_price'];
                $course_img = $row['course_img'];
                $course_original_price = $row['course_original_price'];
                echo '<div class="col-sm-4 mb-4">
                <a href="./course_deatils.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="'.str_replace('..', '.',$course_img).'" alt="" class="img-thumbnail mx-auto" style="width: 345px; height:200px;" alt="Linux" alt="AAA">
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
            </a>
            </div>';
            
            }
        }
        ?>
    </div>
</div>
<!-- End Popular Courses -->
<?php include_once('./Partials/footer.php');?>