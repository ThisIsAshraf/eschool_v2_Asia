<!-- Including Nav and Right Side Bar -->
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

<div class="col-sm-9 mt-5">
    <!-- Start Table -->
    <div class="mx-5 mt-5 text-center">
        <h2 class="bg-dark text-white p-2">Accessible Courses </h2>
        <?php
        $sql = "SELECT * FROM courses WHERE is_active=1";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?php echo $row['course_id']; ?></th>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['course_author']; ?></td>
                    <td>
                        <form action="edit_course.php" method="POST" class="d-inline">
                            <input type="hidden" name="edit_course_id" value="<?php echo $row['course_id']; ?>">
                            <button type="submit" class="btn btn-info mr-3" name="course_edit" value="Edit"><i
                                    class="fas fa-pen"></i></button>
                        </form>
                        <form action="" method="POST" class="d-inline">
                            <input type="hidden" name="delet_course" value="<?php echo $row['course_id']; ?>">
                            <button type="submit" class="btn btn-secondary mr-3" name="course_delete" value="Delete"><i
                                    class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>

        <?php } else {
            echo '<h2 class="text-center">No Course Available</h2>';
        }

        ?>
    </div>
    <!-- End Table -->
</div>

<!-- Course Add Button -->
<div>
    <a href="add_course.php" class="btn btn-success box"><i class="fas fa-plus fa-2x"></i></a>
</div>

<!-- Delete Course -->
<?php 

if(isset($_POST['course_delete'])){
    $delet_course_id = $_POST['delet_course'];
    $sql = "UPDATE courses set is_active=0 WHERE course_id = '$delet_course_id'";
    if($connection ->query($sql) == TRUE){
        ?>
<script>
location.href = 'courses_in_admin.php'
</script>
<?php
    }
}

?>
<!-- Including Footer -->
<?php include_once('./admin_footer.php') ?>