// if (!isset($_SESSION['isAdminLogin'])) {
//     if (isset($_POST['admin_LoginEmail']) && isset($_POST['admin_LoginPassword'])) {
//         $admin_LoginEmail = $_POST['admin_LoginEmail'];
//         $admin_LoginPassword = $_POST['admin_LoginPassword'];

//         $sql = "SELECT * FROM admins WHERE admin_email = '$admin_LoginEmail' AND admin_password ='$admin_LoginPassword' AND is_active=1";
//         $result = $connection->query($sql);
//         $row = $result->num_rows;
//         if ($row == 1) {
//             $_SESSION['isAdminLogin'] = true;
//             $_SESSION['admin_Email'] = $admin_LoginEmail;
//             echo json_encode(($row));
//         } else if ($row == 0) {
//             echo json_encode(($row));
//             $_SESSION['isLogin'] = false;
//         }
//     }
// }