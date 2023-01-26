<!-- Including Nav and Right Side Bar -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('../Partials/_dbconnect.php');
include_once('admin_header.php');
if (isset($_SESSION['isAdminLogin'])) {
    $admin_LoginEmail = $_SESSION['admin_Email'];
} else {
    echo "<script>location.href = '../index.php'</script>";
}

// Existing Email Verfification
if (isset($_POST['student_email'])) {
    $student_Email = $_POST['student_email'];
    $emailVerifySQL = "SELECT * FROM admins WHERE admin_email = '" . $student_Email . "'";
    $result = $connection->query($emailVerifySQL);
    $row = $result->num_rows;
    if ($row > 0) {
        $statusMessage = '<div class="alert alert-warning alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>The email id you have entered already in use!! Please enter new email</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    } else {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            $student_Name = $_POST['student_name'];
            $student_Email = $_POST['student_email'];
            $student_Phone = $_POST['student_phone'];
            $student_Password = $_POST['student_password'];
            $student_RePassword = $_POST['student_Repassword'];
            $student_designation = $_POST['student_profession'];
            $students_img = $_FILES['student_img']['name'];
            $students_img_temp = $_FILES['student_img']['tmp_name'];
            $img_folder = '../images/admin_images/'.$students_img;
            move_uploaded_file($students_img_temp, $img_folder);

            // Insert Data into DB

            if (isset($_POST['student_name']) && isset($_POST['student_email']) && isset($_POST['student_phone']) && isset($_POST['student_password'])) {

                if ($student_Password === $student_RePassword) {
                    $password_hash = password_hash($student_Password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `admins` (`admin_name`, `admin_email`, `admin_phone`, `admin_password`, `admin_image`, `admin_designation`) VALUES ('$student_Name', '$student_Email', '$student_Phone', '$password_hash','$img_folder', '$student_designation')";
                    if ($connection->query($sql) == TRUE) {
                        $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Admin Registered Successfully !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
                    } else {
                        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Unable to Register Admin !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
                    }
                }
            }
        }
    }
}




?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center text-uppercase text-decoration-underline">Add New Admin</h3>
    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="student_name" class="font-weight-bold">Admin Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_email" class="font-weight-bold">Email</label>
            <input type="email" name="student_email" id="student_email" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_phone" class="font-weight-bold">Phone</label>
            <input type="text" name="student_phone" id="student_phone" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_profession" class="font-weight-bold">Designation</label>
            <input type="text" name="student_profession" id="student_profession" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_password" class="font-weight-bold">Password</label>
            <input type="password" name="student_password" id="student_password" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_Repassword" class="font-weight-bold">Confirm Password</label>
            <input type="password" name="student_Repassword" id="student_Repassword" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="student_img" class="font-weight-bold">Image</label>
            <input type="file" name="student_img" id="student_img" class="form-control-file" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-3" name="student_SubmitBtn" id="student_SubmitBtn">Submit</button>
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