<?php
if (!isset($_SESSION)) {
    session_start();
}
// Including Header
include_once('../Partials/_dbconnect.php');
include_once('admin_header.php');
if (isset($_SESSION['isAdminLogin'])) {
    $admin_LoginEmail = $_SESSION['admin_Email'];
} else {
    echo "<script>location.href = '../index.php'</script>";
}
?>

<?php
// Fetched Existing Data
if(isset($_POST['student_edit'])){
    $sql ="SELECT * FROM students where student_id = {$_POST['edit_student_id']}";
    $result = $connection->query($sql);
    $fetechedData= $result->fetch_assoc();
}

// Update Student Data
if (isset($_POST['student_name']) && isset($_POST['student_email']) && isset($_POST['student_phone']) && isset($_POST['student_password'])) {
    if (isset($_POST['student_UpdateBtn'])) {
        $student_Name = $_POST['student_name'];
        $student_Email = $_POST['student_email'];
        $student_Phone = $_POST['student_phone'];
        $student_Password = $_POST['student_password'];
        $student_RePassword = $_POST['student_Repassword'];
        $student_designation = $_POST['student_profession'];
        $student_image = $_FILES['student_img']['name'];
        $student_img_temp = $_FILES['student_img']['tmp_name'];
        

        if ($student_Password === $student_RePassword){
            $password_hash = password_hash($student_Password, PASSWORD_DEFAULT);
            if($student_image){
                $img_folder = '../images/students_images/'.$student_image;
                move_uploaded_file($student_img_temp, $img_folder);
                $sql = "UPDATE students SET student_name ='$student_Name', student_email='$student_Email', student_phone='$student_Phone', student_password ='$password_hash', student_image=' $img_folder', student_professions='$student_designation' WHERE student_id='{$_POST['student_id']}'";
            }else{
                $sql = "UPDATE students SET student_name ='$student_Name', student_email='$student_Email', student_phone='$student_Phone', student_password ='$password_hash', student_professions='$student_designation' WHERE student_id='{$_POST['student_id']}'";
            }
            

            if($connection ->query($sql) == TRUE){
                $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
                <strong>Student Profile Updated Successfully !!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }else{
                $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
                <strong>Unable to Update Student Profile !!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
        }
    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center text-uppercase text-decoration-underline">Update Student Profile</h3>
    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST" enctype="multipart/form-data">
    <p class="font-weight-bold text-uppercase">student id :
            <?php if(isset($fetechedData['student_id'])){ echo $fetechedData['student_id'];}?></p>
        <input type="hidden" name="student_id"
            value="<?php if(isset($fetechedData['student_id'])){ echo $fetechedData['student_id'];}?>">
        <div class="form-group">
            <label for="student_name" class="font-weight-bold">Students Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required autocomplete="off" value="<?php if(isset($fetechedData['student_name'])) { echo $fetechedData['student_name'];}?>">
        </div>
        <div class="form-group">
            <label for="student_email" class="font-weight-bold">Email</label>
            <input type="email" name="student_email" id="student_email" class="form-control" required autocomplete="off" readonly value="<?php if(isset($fetechedData['student_email'])) { echo $fetechedData['student_email'];}?>">
        </div>
        <div class="form-group">
            <label for="student_phone" class="font-weight-bold">Phone</label>
            <input type="text" name="student_phone" id="student_phone" class="form-control" required autocomplete="off" value="<?php if(isset($fetechedData['student_phone'])) { echo $fetechedData['student_phone'];}?>">
        </div>
        <div class="form-group">
            <label for="student_profession" class="font-weight-bold">Designation</label>
            <input type="text" name="student_profession" id="student_profession" class="form-control" required autocomplete="off" value="<?php if(isset($fetechedData['student_professions'])) { echo $fetechedData['student_professions'];}?>">
        </div>
        <div class="form-group">
            <label for="student_password" class="font-weight-bold">Password</label>
            <input type="password" name="student_password" id="student_password" class="form-control"  autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_Repassword" class="font-weight-bold">Confirm Password</label>
            <input type="password" name="student_Repassword" id="student_Repassword" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_img" class="font-weight-bold">Image</label>
            <img src="<?php if(isset($fetechedData['student_image'])){ echo $fetechedData['student_image'];} ?>"
                alt="student_image" class="img-thumbnail mb-3 mt-2" style="height: 250px; width:450px;">
            <input type="file" name="student_img" id="student_img" class="form-control-file">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="student_UpdateBtn" id="student_UpdateBtn">Submit</button>
            <a href="students.php" class="btn btn-danger">Close</a>
        </div>
        <?php
        if (isset($statusMessage)) {
            echo $statusMessage;
        }
        ?>
    </form>
</div>

<!-- Including Footer -->
<?php include_once('./admin_footer.php') ?>