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

?>
</div>
</div>
<?php include_once('student_footer.php'); ?>