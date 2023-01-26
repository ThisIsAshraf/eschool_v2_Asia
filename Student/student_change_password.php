<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('../Partials/_dbconnect.php');
include_once('student_header.php');
if(isset($_SESSION['isLogin'])){
    $student_email = $_SESSION['student_Email'];
}else{
    echo'<script type="text/javascript">location.href="../index.php"</script>';
}

if(isset($_POST['student_passwordChangeBtn'])){
    $student_password = $_POST['student_password'];
    $student_Repassword = $_POST['student_Repassword'];

    if ($student_password === $student_Repassword){
        $password_hash = password_hash($student_password, PASSWORD_DEFAULT);
        $sql = "UPDATE students SET student_password='$password_hash' WHERE student_email='$student_email'";
        if($connection ->query($sql) == TRUE){
            $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Your Password Has Been Updated Successfully !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Unable to Update your password! Please contact your System Adminsitrator for the assistance!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }else{
        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Unable to Update your password! Please contact your System Adminsitrator for the assistance!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}
?>
<div class="col-sm-4 mt-5 mx-3">
    <form action="" method="POST">
        <h3 class="text-center text-uppercase text-secondary">reset your password here</h3>
        <div class="form-group">
            <label for="student_password" class="font-weight-bold">Password</label>
            <input type="password" name="student_password" id="student_password" class="form-control" required
                autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_Repassword" class="font-weight-bold">Confirm Password</label>
            <input type="password" name="student_Repassword" id="student_Repassword" class="form-control" required
                autocomplete="off">
        </div>
        <div class="text-center form-group">
            <button type="submit" class="btn btn-success mr-3" name="student_passwordChangeBtn"
                id="student_passwordChangeBtn">Submit</button>
            <button type="reset" class="btn btn-secondary text-center">Reset</button>
        </div>
        <?php
        if (isset($statusMessage)) {
            echo $statusMessage;
        }
        ?>
    </form>
</div>
</div>
</div>
<?php include_once('student_footer.php'); ?>