<?php 
if (!isset($_SESSION)) {
    session_start();
}
include_once('../Partials/_dbconnect.php');
include_once('admin_header.php');
if(isset( $_SESSION['isAdminLogin'])){
    $admin_LoginEmail=$_SESSION['admin_Email'];
}else{
    echo "<script>location.href = '../index.php'</script>";
}
?>
<div class="col-sm-6 mt-4 mx-3 jumbotron">
    <h3 class="text-center text-uppercase text-decoration-underline font-weight-bold">Amend Course Data</h3>
    <?php 
    // fetch the existing course data
    if(isset($_POST['course_edit'])){
        $sql ="SELECT * FROM courses where course_id = {$_POST['edit_course_id']}";
        $result = $connection->query($sql);
        $fetechedData= $result->fetch_assoc();
    }

    // Update course data 
    if(isset($_POST['course_UpdateBtn'])){
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $course_author = $_POST['course_author'];
        $course_desc = $_POST['course_desc'];
        $course_duration = $_POST['course_duration'];
        $course_original_price = $_POST['course_original_price'];
        $course_selling_price = $_POST['course_selling_price'];
        $course_image = $_FILES['course_img']['name'];
        $course_img_temp = $_FILES['course_img']['tmp_name'];
        if($course_image){
            $img_folder = '../images/students_images/'.$student_image;
            move_uploaded_file($student_img_temp, $img_folder);
            $sql = "UPDATE courses SET course_name = '$course_name', course_desc='$course_desc', course_author='$course_author', course_img='$img_folder', course_duration='$course_duration', course_price='$course_selling_price', course_original_price='$course_original_price' WHERE course_id='$course_id'";
        }else{
            $sql = "UPDATE courses SET course_name = '$course_name', course_desc='$course_desc', course_author='$course_author',course_duration='$course_duration', course_price='$course_selling_price', course_original_price='$course_original_price' WHERE course_id='$course_id'";
        }
        if($connection ->query($sql) == TRUE){
            $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Course Updated Successfully !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Unable to Update the course !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }

    }
    
    ?>
    <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST" enctype="multipart/form-data">
        <p class="font-weight-bold text-uppercase">course id :
            <?php if(isset($fetechedData['course_id'])){ echo $fetechedData['course_id'];}?></p>
        <input type="hidden" name="course_id"
            value="<?php if(isset($fetechedData['course_id'])){ echo $fetechedData['course_id'];}?>">
        <div class="form-group">
            <label for="course_name" class="font-weight-bold">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" required autocomplete="off"
                value="<?php if(isset($fetechedData['course_name'])){ echo $fetechedData['course_name'];}?>">
        </div>
        <div class="form-group">
            <label for="course_author" class="font-weight-bold">Author</label>
            <input type="text" name="course_author" id="course_author" class="form-control" required autocomplete="off"
                value="<?php if(isset($fetechedData['course_author'])){ echo $fetechedData['course_author'];}?>">
        </div>
        <div class="form-group">
            <label for="course_desc" class="font-weight-bold">Description</label>
            <textarea name="course_desc" id="course_desc" class="form-control" cols="30"
                rows="2"><?php if(isset($fetechedData['course_desc'])){ echo $fetechedData['course_desc'];}?></textarea>
        </div>
        <div class="form-group">
            <label for="course_duration" class="font-weight-bold">Duration</label>
            <input type="text" name="course_duration" id="course_duration" class="form-control" required
                autocomplete="off"
                value="<?php if(isset($fetechedData['course_duration'])){ echo $fetechedData['course_duration'];}?>">
        </div>
        <div class="form-group">
            <label for="course_original_price" class="font-weight-bold">Original Price</label>
            <input type="text" name="course_original_price" id="course_original_price" class="form-control" required
                autocomplete="off"
                value="<?php if(isset($fetechedData['course_original_price'])){ echo $fetechedData['course_original_price'];}?>">
        </div>
        <div class="form-group">
            <label for="course_selling_price" class="font-weight-bold">Selling Price</label>
            <input type="text" name="course_selling_price" id="course_selling_price" class="form-control" required
                autocomplete="off"
                value="<?php if(isset($fetechedData['course_price'])){ echo $fetechedData['course_price'];}?>">
        </div>
        <div class="form-group">
            <label for="course_img" class="font-weight-bold">Image</label>
            <img src="<?php if(isset($fetechedData['course_img'])){ echo $fetechedData['course_img'];} ?>"
                alt="Course_image" class="img-thumbnail mb-3 mt-2" style="height: 250px; width:450px;">
            <input type="file" name="course_img" id="course_img" class="form-control-file">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="course_UpdateBtn"
                id="course_UpdateBtn">Update</button>
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