<!-- Including Nav and Right Side Bar -->
<?php 
if (!isset($_SESSION)) {
    session_start();
}
include_once('../Partials/_dbconnect.php');
include_once('admin_header.php');
if(isset( $_SESSION['admin_Email'])){
    $admin_LoginEmail=$_SESSION['admin_Email'];
}else{
    echo "<script>location.href = '../index.php'</script>";
}

$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
    $course_name = $_POST['course_name'];
    $course_author = $_POST['course_author'];
    $course_desc= $_POST['course_desc'];
    $course_duration = $_POST['course_duration'];
    $course_original_price = $_POST['course_original_price'];
    $course_selling_price = $_POST['course_selling_price'];
    $course_img = $_FILES['course_img']['name'];
    $course_img_temp = $_FILES['course_img']['tmp_name'];
    $img_folder ='../images/courseimages/'.$course_img;
    move_uploaded_file($course_img_temp, $img_folder);

    // Insert Data into DB

    $sql = "INSERT INTO `courses` (`course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES ('$course_name', '$course_desc', '$course_author', '$img_folder', '$course_duration', '$course_selling_price','$course_original_price')";

    if($connection ->query($sql) == TRUE){
        $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Course Added Successfully !!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Unable to add the course !!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}


?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center text-uppercase text-decoration-underline">Add New Course</h3>
    <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" name="course_author" id="course_author" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="course_desc">Description</label>
            <textarea name="course_desc" id="course_desc" class="form-control" cols="30" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="course_duration">Duration</label>
            <input type="text" name="course_duration" id="course_duration" class="form-control" required
                autocomplete="off">
        </div>
        <div class="form-group">
            <label for="course_original_price">Original Price</label>
            <input type="text" name="course_original_price" id="course_original_price" class="form-control" required
                autocomplete="off">
        </div>
        <div class="form-group">
            <label for="course_selling_price">Selling Price</label>
            <input type="text" name="course_selling_price" id="course_selling_price" class="form-control" required
                autocomplete="off">
        </div>
        <div class="form-group">
            <label for="course_img">Image</label>
            <input type="file" name="course_img" id="course_img" class="form-control-file" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="course_SubmitBtn"
                id="course_SubmitBtn">Submit</button>
            <a href="courses_in_admin.php" class="btn btn-danger">Close</a>
        </div>
        <?php 
        if(isset($statusMessage)){
            echo $statusMessage;
        }
        ?>
    </form>
</div>
<!-- Including Footer -->
<?php include_once('./admin_footer.php')?>