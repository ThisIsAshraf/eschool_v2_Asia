<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('./admin_header.php');
include_once('../Partials/_dbconnect.php');
if (isset($_SESSION['isAdminLogin'])) {
    $admin_LoginEmail = $_SESSION['admin_Email'];
} else {
    echo "<script>location.href = '../index.php'</script>";
}

if (isset($_POST['adminPasswordUpdateBtn'])) {
    $admin_LoginEmail = $_SESSION['admin_Email'];
    $admin_password = $_POST['admin_password'];
    $admin_Repassword = $_POST['admin_Repassword'];

    $sql = "SELECT * FROM admins WHERE admin_email ='$admin_LoginEmail' AND is_active=1";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        if ($admin_password === $admin_Repassword) {
            $admin_password_hash = password_hash($admin_password, PASSWORD_DEFAULT);
            $sql = "UPDATE admins SET admin_password='$admin_password_hash' WHERE admin_email='$admin_LoginEmail'";
            if ($connection->query($sql) == TRUE) {
                $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
    <strong>Admin Password Updated Successfully !!</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
            } else {
                $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
    <strong>Unable to Update Admin Password !!</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
            }
        }
    } else {
        $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
    <strong>The email you have entered is not valid !!</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
}

?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="mt-5 mx-5" method="POST">
                <div class="form-group">
                    <label for="admin_email" class="font-weight-bold">Email</label>
                    <input type="email" name="admin_email" id="admin_email" class="form-control" value="<?php echo $admin_LoginEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="admin_email" class="font-weight-bold">New Password</label>
                    <input type="password" name="admin_password" id="admin_password" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="admin_Repassword" class="font-weight-bold">Repeat New Password</label>
                    <input type="password" name="admin_Repassword" id="admin_Repassword" class="form-control" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-success mr-4 mt-4 text-center" name="adminPasswordUpdateBtn" id="adminPasswordUpdateBtn">Update</button>
                <button type="reset" class="btn btn-secondary mt-4 text-center">Reset</button>
                <?php
                if (isset($statusMessage)) {
                    echo $statusMessage;
                }
                ?>
            </form>
        </div>
    </div>
</div>

<!-- Including Footer -->
<?php include_once('./admin_footer.php') ?>