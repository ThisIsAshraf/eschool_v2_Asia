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
    <h3 class="text-center text-uppercase text-decoration-underline font-weight-bold">Amend Module Data</h3>
    <?php 
    // fetch the existing course data
    if(isset($_POST['module_edit'])){
        $sql ="SELECT * FROM module WHERE module_id = {$_POST['edit_module_id']}";
        $result = $connection->query($sql);
        $fetechedData= $result->fetch_assoc();
    }

    // Update course data 
    if(isset($_POST['Module_UpdateBtn'])){
        $module_id = $_POST['module_id'];
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $module_name = $_POST['module_name'];
        $module_desc = $_POST['module_desc'];
        $course_image = $_FILES['course_img']['name'];
        $course_img_temp = $_FILES['course_img']['tmp_name'];
        if($course_image){
            $video_folder = '../videos/module_videos/'.$_FILES['course_img']['name'];
            move_uploaded_file($course_img_temp, $video_folder);
            // Update Query
            $sql = "UPDATE module SET module_name='$module_name', module_desc='$module_desc', module_url='$video_folder', course_id='$course_id', course_name='$course_name' WHERE module_id='$module_id'";
        }else{
            $sql = "UPDATE module SET module_name='$module_name', module_desc='$module_desc', course_id='$course_id', course_name='$course_name' WHERE module_id='$module_id'";
        }
        
        if($connection ->query($sql) == TRUE){
            $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Module Updated Successfully !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Unable to Update the Module !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }

    }
    
    ?>
    <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST" enctype="multipart/form-data">
        <p class="font-weight-bold text-uppercase">module id :
            <?php if(isset($fetechedData['module_id'])){ echo $fetechedData['module_id'];}?></p>
        <input type="hidden" name="module_id"
            value="<?php if(isset($fetechedData['module_id'])){ echo $fetechedData['module_id'];}?>">
        <div class="form-group">
            <label for="course_name" class="font-weight-bold">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" required autocomplete="off"
                value="<?php if(isset($fetechedData['course_name'])){ echo $fetechedData['course_name'];}?>">
            <input type="hidden" name="course_id" id="course_id" class="form-control" required autocomplete="off"
                value="<?php if(isset($fetechedData['course_id'])){ echo $fetechedData['course_id'];}?>">
        </div>
        <div class="form-group">
            <label for="module_name" class="font-weight-bold">Module Name</label>
            <input type="text" name="module_name" id="module_name" class="form-control" required autocomplete="off"
                value="<?php if(isset($fetechedData['module_name'])){ echo $fetechedData['module_name'];}?>">
        </div>
        <div class="form-group">
            <label for="module_desc" class="font-weight-bold">Description</label>
            <textarea name="module_desc" id="module_desc" class="form-control" cols="30"
                rows="2"><?php if(isset($fetechedData['module_desc'])){ echo $fetechedData['module_desc'];}?></textarea>
        </div>
        <div class="form-group">
            <label for="module_video" class="font-weight-bold">Module Tutorial</label>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?php if(isset($fetechedData['module_url'])){ echo $fetechedData['module_url'];} ?>"
                    allowfullscreen class="embed-responsive-item"></iframe>
            </div>
            <input type="file" name="course_img" id="course_img" class="form-control-file mt-4">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="Module_UpdateBtn"
                id="Module_UpdateBtn">Update</button>
            <a href="modules.php" class="btn btn-danger">Close</a>
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