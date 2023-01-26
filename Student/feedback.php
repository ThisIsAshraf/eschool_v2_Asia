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

// Retirve students Data from DB
$sql = "SELECT * FROM students WHERE student_email='$student_email' AND is_active=1";
$result = $connection->query($sql);
if($result->num_rows ==1){
    $row =$result->fetch_assoc();
    $student_id = $row['student_id'];

// Insert Feedback

if(isset($_POST['student_FeedBackBtn'])){
    $student_id = $_POST['student_id'];
    $feedbacl_content = $_POST['feedback_content'];

    $sql="INSERT INTO `feedbacks` (`feedback_content`, `student_id`) VALUES ('$feedbacl_content', '$student_id')";
    if($connection ->query($sql) == TRUE){
        $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong> Your feedback has been Submitted!!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>Unable to Submit your Feedback !!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}
}
?>
<div class="col-md-4 mt-5">
    <form action="" class="mx-5" method="POST">
        <div class="form-group">
            <label for="student_id" class="font-weight-bold">Student ID</label>
            <input type="text" class="form-control" name="student_id" id="student_id" value="<?php if(isset($row['student_id'])){ echo $row['student_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="feedback_content" class="font-weight-bold">Write Feedback</label>
            <textarea class="form-control" name="feedback_content" id="feedback_content" rows="2" placeholder="Don't Hesitate to leave your suggestions or comments" required></textarea>
        </div>
        <button type="submit" class="btn btn-success" name="student_FeedBackBtn" id="student_FeedBackBtn">Submit</button>
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