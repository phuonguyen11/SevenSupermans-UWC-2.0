<?php
session_start();
include('../../models/connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Nhân Viên</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../css/home.css" rel="stylesheet">
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="../../css/employee.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion bg-mvc" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-brand" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-leaf"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UWC 2.0</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-3">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Task -->
            <li class="nav-item">
                <a class="nav-link" href="./managetask.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Task</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Employees -->
            <li class="nav-item active">
                <a class="nav-link" href="emp.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Employees</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Vehicles -->
            <li class="nav-item">
                <a class="nav-link" href="vehicle.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Vehicles</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - MCPs -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-table"></i>
                    <span>MCPs</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- /Sidebar -->

        <!-- Content -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="text-dark fw-bold" style="position: absolute; left: 22%;">DANH SÁCH NHÂN VIÊN</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Thông báo
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">1/12/2022</div>
                                        <span class="font-weight-bold">Báo cáo mỗi tháng đã được cập nhật!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">25/11/2022</div>
                                        Tiền công đã được chuyển. Mời mọi người kiểm tra!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">22/11/2022</div>
                                        Đi muộn 9 phút.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả thông báo</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Tin nhắn
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hôm nay khi nào cậu đi làm vậy?</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Việc hôm qua đã xong chưa ấy nhờ?</div>
                                        <div class="small text-gray-500">HTT · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Hôm nay làm xong lên kèo nhé!</div>
                                        <div class="small text-gray-500">Bu · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Hôm nay tớ có việc, cậu xin phép giúp tớ nhé.</div>
                                        <div class="small text-gray-500">LTH · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả tin nhắn</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_COOKIE["user_name"]; ?></span>
                                <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Trang cá nhân
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nhật ký hoạt động
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>



                    </ul>

                </nav>
                <!-- /Topbar -->
                <!-- Home Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                            <select class="form-select text-bg-success" id="employee-filter-option" onchange="selectRole()">
                                <option selected value="all">Tất cả</option>
                                <option value="collector">Collectors</option>
                                <option value="janitor">Janitors</option>
                            </select>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Nhân Viên</th>
                                            <th>Địa chỉ liên lạc</th>
                                            <th>Số Điện Thoại</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ans">
                                        <?php

                                        $query = "SELECT * from users where `role` IN (1, 2)";
                                        $query_run = mysqli_query($conn, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $row) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?> </td>
                                                    <td><?php echo $row['name']; ?> </td>
                                                    <td><?php echo $row['address']; ?> </td>
                                                    <td><?php echo $row['phone']; ?> </td>


                                                </tr>

                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td>No Record Found </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-success" style="margin-right:20px;" href="./collector.php">Điều tiết công việc cho Collector</a>
                            <a class="btn btn-success" href="./janitor.php">Điều tiết công việc cho Janitor</a>

                        </div>
                    </div>
                </div>


                <!-- /Home Content -->
                <!-- /Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright @ UWC 2.0</span>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
            </div>
            <!-- /Content -->
        </div>


        <!-- Bootstrap core JavaScript-->

        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../js/emp.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../vendor/chart.js/Chart.min.js"></script>
        <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../../vendor/datatables/jquery.dataTables.js"></script>


        <!-- Page level custom scripts -->
        <script src="../../js/demo/chart-area-demo.js"></script>
        <script src="../../js/demo/chart-pie-demo.js"></script>
</body>

</html>