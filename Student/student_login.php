<?php 
if(!isset($_SESSION)){
    session_start();
}
include_once('../Partials/_dbconnect.php');

if(!isset($_SESSION['isLogin'])){
    if(isset($_POST['student_LoginEmail']) && isset($_POST['student_LoginPassword'])){
        $student_LoginEmail = $_POST['student_LoginEmail'];
        $student_LoginPassword = $_POST['student_LoginPassword'];
    
        $sql = "SELECT * FROM students WHERE student_email = '$student_LoginEmail' AND is_active=1";
        $result = $connection -> query($sql);
        $row = $result ->num_rows;
    
        if ($row ==1){
            $fetchData= mysqli_fetch_assoc($result);
            if(password_verify($student_LoginPassword,  $fetchData['student_password'])){
                $_SESSION['isLogin']=true;
                $_SESSION['student_Email'] = $student_LoginEmail;
                echo json_encode(($row));
            }
        }else if($row ==0){
            echo json_encode(($row));
            $_SESSION['isLogin']=false;
        }
    }
}

?>