<?php
if(!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('location: ' . $_SERVER['PHP_SELF']);
}
include_once('student_header.php');
include_once('../Partials/_dbconnect.php');
if(isset($_SESSION['isLogin'])){
    $student_email = $_SESSION['student_Email'];
}else{
    echo'<script type="text/javascript">location.href="../index.php"</script>';
}

// Retirve students Data from DB
$sql = "SELECT * FROM students WHERE student_email='$student_email'";
$result = $connection->query($sql);
if($result->num_rows ==1){
    $row =$result->fetch_assoc();
    $student_id = $row['student_id'];
    $student_name = $row['student_name'];
    $student_desigantion = $row['student_professions'];
    $student_image = $row['student_image'];
}


// Update Student Data
if (isset($_POST['student_name']) && isset($_POST['student_email']) && isset($_POST['student_phone'])) {
    if (isset($_POST['student_UpdateBtn'])) {
        $Student_Name = $_POST['student_name'];
        $Student_Email = $_POST['student_email'];
        $Student_Phone = $_POST['student_phone'];
        $Student_designation = $_POST['student_profession'];
        $student_image = $_FILES['student_img']['name'];
        $student_img_temp = $_FILES['student_img']['tmp_name'];
        if ($student_image) {
            $img_folder = '../images/students_images/'.$student_image;
            move_uploaded_file($student_img_temp, $img_folder);
            $sql = "UPDATE students SET student_name ='$Student_Name', student_email='$Student_Email', student_phone='$Student_Phone',student_image=' $img_folder', student_professions='$Student_designation' WHERE student_id='$student_id'";
        }else{
            $sql = "UPDATE students SET student_name ='$Student_Name', student_email='$Student_Email', student_phone='$Student_Phone', student_professions='$Student_designation' WHERE student_id='$student_id'";
        }


            if($connection ->query($sql) == TRUE){
                $_SESSION['flash_message'] = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
                <strong>Student Profile Updated Successfully !!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }else{
                $_SESSION['flash_message'] = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
                <strong>Unable to Update Student Profile !!</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
    }
}
?>
<div class="col-sm-4 mt-5 mx-3">
    <h3 class="text-center text-uppercase text-decoration-underline">Profile of <?php echo $student_name; ?></h3>
    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST" enctype="multipart/form-data">
    <p class="font-weight-bold text-uppercase">student id :
            <?php if(isset($row['student_id'])){ echo $row['student_id'];}?></p>
        <input type="hidden" name="student_id"
            value="<?php if(isset($row['student_id'])){ echo $row['student_id'];}?>">
        <div class="form-group">
            <label for="student_name" class="font-weight-bold">Students Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required autocomplete="off" value="<?php if(isset($row['student_name'])) { echo $row['student_name'];}?>">
        </div>
        <div class="form-group">
            <label for="student_email" class="font-weight-bold">Email</label>
            <input type="email" name="student_email" id="student_email" class="form-control" required autocomplete="off" readonly value="<?php if(isset($row['student_email'])) { echo $row['student_email'];}?>">
        </div>
        <div class="form-group">
            <label for="student_phone" class="font-weight-bold">Phone</label>
            <input type="text" name="student_phone" id="student_phone" class="form-control" required autocomplete="off" value="<?php if(isset($row['student_phone'])) { echo $row['student_phone'];}?>">
        </div>
        <div class="form-group">
            <label for="student_profession" class="font-weight-bold">Designation</label>
            <input type="text" name="student_profession" id="student_profession" class="form-control" required autocomplete="off" value="<?php if(isset($row['student_professions'])) { echo $row['student_professions'];}?>">
        </div>
        <div class="form-group">
            <input type="file" name="student_img" id="student_img" class="form-control-file">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="student_UpdateBtn" id="student_UpdateBtn">Submit</button>
            <a href="students.php" class="btn btn-danger">Close</a>
        </div>
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </form>
</div>
</div>
</div>
<?php include_once('student_footer.php'); ?>