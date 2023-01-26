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
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $module_name = $_POST['module_name'];
    $module_desc= $_POST['module_desc'];
    $module_video = $_FILES['module_video']['name'];
    $module_video_temp = $_FILES['module_video']['tmp_name'];
    $video_folder ='../videos/module_videos/'.$module_video;
    move_uploaded_file($module_video_temp, $video_folder);

    // Insert Data into DB

    $sql = "INSERT INTO `module` (`module_name`, `module_desc`, `module_url`, `course_id`, `course_name`) VALUES ('$module_name', '$module_desc', '$video_folder', '$course_id', '$course_name')";

    if($connection ->query($sql) == TRUE){
        $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Module Added Successfully !!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Unable to add the Module !!</strong>.
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
            <label for="course_name" class="font-weight-bold">Course ID</label>
            <input type="text" name="course_id" id="course_id"
                value="<?php if(isset($_SESSION['course_id'])) { echo $_SESSION['course_id'];}?>" readonly
                class="form-control">
        </div>
        <div class="form-group">
            <label for="course_name" class="font-weight-bold">Course Name</label>
            <input type="text" name="course_name" id="course_name"
                value="<?php if(isset($_SESSION['course_name'])) { echo $_SESSION['course_name'];}?>" readonly
                class="form-control shadow-none" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="module_name" class="font-weight-bold">Module Name</label>
            <input type="text" name="module_name" id="module_name" class="form-control shadow-none" required
                autocomplete="off">
        </div>
        <div class="form-group">
            <label for="module_desc" class="font-weight-bold">Description</label>
            <textarea name="module_desc" id="module_desc" class="form-control shadow-none" cols="30"
                rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="module_video" class="font-weight-bold">Video Tutorial URL</label>
            <input type="file" name="module_video" id="module_video" class="form-control-file" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3 text-center" name="module_SubmitBtn"
                id="module_SubmitBtn">Submit</button>
            <a href="modules.php" class="btn btn-danger text-center">Close</a>
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