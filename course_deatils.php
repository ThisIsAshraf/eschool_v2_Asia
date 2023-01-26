<?php include_once('./Partials/header.php');?>
<!-- Start Course Details Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/course_deatils.jpg" alt="Cousrses"
            style="height: 800px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End Course Details Page Banner -->

<!-- Start Course Details Container -->

<div class="container mt-5">
    <?php 
    if(isset($_GET['course_id'])){
        $course_id = $_GET['course_id'];
        $sql = "SELECT * FROM courses WHERE course_id='$course_id' AND is_active=1";
        $result = $connection->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo str_replace('..', '.',$row['course_img']);?>" class="img-thumbnail mx-auto"
                style="width: 200px;" alt="Linux">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><b>Course Name:</b> <?php echo $row['course_name'];?></h5>
                <p class="card-text"><b>Description:</b> <?php echo $row['course_desc'];?></p>
                <p class="card-text"><b>Duration:</b> <?php echo $row['course_duration'];?></p>
                <form action="./Admin/checkout.php" method="POST">
                    <p class="card-text d-inline"><b>Price:</b> <small><del>&#36
                                <?php echo $row['course_original_price'];?></del></small> &#36
                        <?php echo $row['course_price'];?><span class="font-weight-bolder"></span>
                    </p>
                    <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
                    <input type="hidden" name="course_price" value="<?php echo $row['course_price'];?>">
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right"
                        name="course_enroll">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Module ID</th>
                    <th scope="col">Module Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * from module WHERE course_id='$course_id' AND is_active=1";
                $result=$connection->query($sql);
                if($result->num_rows >0){
                    while($row=$result->fetch_assoc()){
                        echo '
                        <tr>
                        <th scope="row">'.$row['module_id'].'</th>
                        <td>'.$row['module_name'].'</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- End Course Details Container -->

<!-- End Popular Courses -->
<?php include_once('./Partials/footer.php');?>