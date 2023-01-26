<?php
if (!isset($_SESSION)) {
    session_start();
}
// Including Header
include_once('../Partials/_dbconnect.php');
include_once('admin_header.php');
if(isset( $_SESSION['isAdminLogin'])){
    $admin_LoginEmail=$_SESSION['admin_Email'];
}else{
    echo "<script>location.href = '../index.php'</script>";
}

?>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" method="GET" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="search_course_id" class="forn-weight-bold">Enter Course ID</label>
            <input type="text" name="search_course_id" id="search_course_id" class="form-control ml-3 shadow-none"
                autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary text-center">Search</button>
    </form>

    <?php 

$sql ="SELECT course_id FROM courses";
$result= $connection->query($sql);
while($row = $result->fetch_assoc()){
    if(isset($_GET['search_course_id']) && $_GET['search_course_id'] == $row['course_id']){
        $sql = "SELECT * FROM courses WHERE course_id={$_GET['search_course_id']}";
        $result= $connection->query($sql);
        $row = $result->fetch_assoc();
        if($row['course_id'] ==$_GET['search_course_id']){
            $_SESSION['course_id'] =  $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
            ?>
    <h3 class="bg-white mt-5 text-success font-weight-bold text-underline p-3">Course ID: <?php if(isset($row['course_id'])){ echo $row['course_id'];}?>
        Course name: <?php if(isset($row['course_name'])){ echo $row['course_name'];}?></h3>
    <?php

    // Fetch module Data from DB
    $sql = "SELECT * FROM module WHERE course_id={$_GET['search_course_id']} AND is_active=1";
    $result= $connection->query($sql);
     ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Module ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        
        while($row = $result->fetch_assoc()){
            $desc = $row['module_desc'];
            $string = substr($desc,0,30);
            ?>
            
            <tr>
                <th scope="row"><?php echo $row['module_id']; ?></th>
                <td><?php echo $row['module_name']; ?></td>
                <td><?php echo$string; ?>...</td>
                <td><?php echo $row['module_url']; ?></td>
                <td>
                    <form action="edit_module.php" method="POST" class="d-inline">
                        <input type="hidden" name="edit_module_id" value="<?php echo $row['module_id']; ?>">
                        <button type="submit" class="btn btn-info mr-3" name="module_edit" value="Edit"><i
                                class="fas fa-pen"></i></button>
                    </form>
                    <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="delete_module" value="<?php echo $row['module_id']; ?>">
                        <button type="submit" class="btn btn-secondary mr-3" name="module_delete" value="Delete"><i
                                class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>

            <?php
        }
        
        ?>
        </tbody>
    </table>

    <?php
        }
    }
}

?>
</div>
<?php 
// Delete Module
if(isset($_POST['module_delete'])){
$delet_module_id = $_POST['delete_module'];
$sql = "UPDATE module set is_active=0 WHERE module_id = '$delet_module_id'";
if($connection ->query($sql) == TRUE){
?>
<script>
location.href = 'http://localhost/eschool/Admin/modules.php?search_course_id=<?php echo $_SESSION['course_id']; ?>';
</script>
<?php
}
}

// Add button
if(isset( $_SESSION['course_id'])){

    echo'<div>
    <a href="add_module.php" class="btn btn-success box"><i class="fas fa-plus fa-2x"></i></a>
</div>';

}
?>


<!-- Including Footer -->
<?php include_once('./admin_footer.php')?>