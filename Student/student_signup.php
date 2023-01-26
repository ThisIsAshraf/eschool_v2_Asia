<?php 
include_once('../Partials/_dbconnect.php');

// Existing Email Verfification
if(isset($_POST['checkEmail']) && isset($_POST['student_Email'])){
    $student_Email= $_POST['student_Email'];
    $emailVerifySQL = "SELECT * FROM students WHERE student_email = '".$student_Email."'";
    $result = $connection ->query($emailVerifySQL);
    $row = $result ->num_rows;
    echo json_encode($row);
}

// Insert Student Data into DB
if (isset($_POST['student_signup']) && isset($_POST['student_Name']) && isset($_POST['student_Email']) && isset($_POST['student_Phone']) && isset($_POST['student_Password'])){

$student_Name= $_POST['student_Name'];
$student_Email= $_POST['student_Email'];
$student_Phone= $_POST['student_Phone'];
$student_Password= $_POST['student_Password'];
$student_RePassword= $_POST['student_RePassword'];

    if($student_Password === $student_RePassword){
        $password_hash = password_hash($student_Password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `students` (`student_name`, `student_email`, `student_phone`, `student_password`) VALUES ('$student_Name', '$student_Email', '$student_Phone', '$password_hash')";
    }

    if($connection ->query($sql) == TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("Failed");
    }

}

?>

