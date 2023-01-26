<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eSchool | Admin Dashboard</title>
    <link rel="shortcut icon" href="../images/eschool-favicon.svg" type="image/x-icon" sizes="16*16">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Admini Custom Css -->
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
    <!-- Start Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="admin_dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">eSchool <small
                class="text-white">Admin Panel</small></a>
    </nav>
    <!-- End Top Navbar -->

    <!-- Start Right Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="admin_dashboard.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="courses_in_admin.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Module
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-table"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-table"></i>
                                Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-user-plus"></i>
                                New Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Right Side Bar -->

            <!-- Start Left Side Bar-->
            <div class="col-sm-9 mt-5">
                <!-- Start Data Viewer -->
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    5
                                </h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Students</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    25
                                </h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                sold
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    3
                                </h4>
                                <a href="" class="btn text-white"> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Data Viewer -->

                <!-- Start Table -->
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">Course Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>alamshihab526@gmail.com</td>
                                <td>22.01.2023</td>
                                <td>450</td>
                                <td><button type="submit" class="btn btn-secondary" name="oderder_delete"
                                        value="Delete"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
            </div>
            <!-- End Left Side Bar-->
        </div>
    </div>

    <!-- jQery and Bootsrap Script -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/proper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FontAwsesome Script -->
    <script src="../js/all.min.js" type="text/javascript"></script>
    <!-- Admin Custom Script -->
    <script src="../js/adminAjax.js" type="text/javascript"></script>
</body>