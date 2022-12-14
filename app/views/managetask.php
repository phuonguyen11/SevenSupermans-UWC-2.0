<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../../css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/for-manage-task.css">
</head>

<body>
    <?php
    include("../../controllers/ManageTask/get-task.php");
    ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion bg-mvc" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-brand" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-leaf"></i>
                </div>
                <div class="sidebar-brand-text mx-3 fs-4 sbar">UWC 2.0</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-3" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="./index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="fs-6" style="font-size: 1rem;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Task -->
            <li class="nav-item active">
                <a class="nav-link" href="./managetask.php">
                    <i class=" fas fa-fw fa-chart-area"></i>
                    <span class="fs-6" style="font-size: 1.2rem;">Task</span></a>
            </li>

            <!-- Divider -->
            <hr class=" sidebar-divider" />

            <!-- Nav Item - Employees -->
            <li class="nav-item">
                <a class="nav-link" href="./emp.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span class="fs-6" style="font-size: 1rem;">Employees</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Nav Item - Vehicles -->
            <li class="nav-item">
                <a class="nav-link" href="./vehicle.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span class="fs-6" style="font-size: 1rem;">Vehicles</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Nav Item - MCPs -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-table"></i>
                    <span class="fs-6">MCPs</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />
        </ul>
        <!-- /Sidebar -->

        <!-- Content -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="fw-bold title" style="position: absolute; left: 25%">
                        Qu???n l?? c??ng vi???c
                    </h1>

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
                                <h6 class="dropdown-header">Th??ng b??o</h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">1/12/2022</div>
                                        <span class="font-weight-bold">B??o c??o m???i th??ng ???? ???????c c???p nh???t!</span>
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
                                        Ti???n c??ng ???? ???????c chuy???n. M???i m???i ng?????i ki???m tra!
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
                                        ??i mu???n 9 ph??t.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">T???t c??? th??ng b??o</a>
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
                                <h6 class="dropdown-header">Tin nh???n</h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">
                                            H??m nay khi n??o c???u ??i l??m v???y?
                                        </div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            Vi???c h??m qua ???? xong ch??a ???y nh????
                                        </div>
                                        <div class="small text-gray-500">HTT ?? 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            H??m nay l??m xong l??n k??o nh??!
                                        </div>
                                        <div class="small text-gray-500">Bu ?? 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            H??m nay t??? c?? vi???c, c???u xin ph??p gi??p t??? nh??.
                                        </div>
                                        <div class="small text-gray-500">LTH ?? 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">T???t c??? tin nh???n</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_COOKIE["user_name"]; ?></span>
                                <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Trang c?? nh??n
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    C??i ?????t
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nh???t k?? ho???t ?????ng
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./login.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ????ng xu???t
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- /Topbar -->
                <!-- Home Content -->
                <div class="container-fluid">
                    <div>
                        <button class="btn btn-success mb-3 btn-add">
                            Th??m +
                        </button>
                        <button class="btn btn-success btn-add mb-3 hidescreen" style="background-color: #8e0505;">
                            <a href="./managetask.php" style="color: white; text-decoration:none;">Quay l???i</a>
                        </button>
                    </div>
                    <div class="row task">
                        <!-- Calender -->
                        <!-- TOADD -->
                        <?php
                        gettask();
                        ?>
                        <!-- TOADD -->
                    </div>
                    <div class="row detail hidescreen">
                        <!-- Calender -->
                        <div class="col-xl-12 col-md-3 mb-5">
                            <div class="wrap-sm-title2">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1 sm-title2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-set-info">
                                <div class="row no-gutters align-items-center ">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold infoEmployee">
                                            Janitors
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="wrap-info-employee">
                                <div class="row no-gutters align-items-center ">
                                    <div class="col mr-0">
                                        <!-- TOADD Janitors -->
                                        <div id="janitors"></div>
                                        <!-- DONEADD Janitors -->
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-set-info">
                                <div class="row no-gutters align-items-center ">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold infoEmployee">
                                            Collectors
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="wrap-info-employee">
                                <div class="row no-gutters align-items-center ">
                                    <!-- TOADD Collectors -->
                                    <div class="col mr-0">
                                        <!-- TOADD Collectors -->
                                        <div id="collectors"></div>
                                        <!-- DONEADD Collectors -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Home Content -->
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
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

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>
    <script>
        // Var
        var id = '';
        var emp = '' // l???y t???t c??? nh??n vi??n
        var buttonsfix = document.getElementsByClassName("btn-fix"); //l???y t???t c??? button ch???nh s???a
        var buttonsdel = document.getElementsByClassName("btn-del"); // l???y t???t c??? button x??a
        var buttonsdr = document.getElementsByClassName("btndropdown"); //l???y t???t c??? button normal dropdown
        var buttonsadd = document.getElementsByClassName("btn-add"); //l???y button add
        var contents = document.getElementsByClassName("dropdown-content"); //l???y t???t c??? c??c th??? ch???a menu con
        var contents2 = document.getElementsByClassName("dropdown-content2"); //l???y t???t c??? c??c th??? ch???a menu con
        var actionview = document.getElementsByClassName("actionview"); //l???y t???t c??? th??? class actionview
        var actiondel = document.getElementsByClassName("actiondel"); //l???y t???t c??? th??? class actiondel
        // For dropdown
        function show(id) {
            document.getElementById(id).classList.toggle("show");
        }

        // ///////////////////////////// SCREEN 1 ////////////////////////////////// //
        //l???p qua t???t c??? c??c button normal dropdown v?? g??n s??? ki???n
        for (var i = 0; i < buttonsdr.length; i++) {
            buttonsdr[i].addEventListener("click", function(event) {
                //l???y value c???a button
                if (id == this.id.replace('BT', '')) {
                    show(id);
                } else {
                    //???n
                    id = this.id.replace('BT', '');
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].classList.remove("show");
                    };
                    //hi???n th??? menu v???a ???????c click
                    show(id);
                };
            });
        };
        window.addEventListener("click", function() {
            if (!event.target.matches(".btndropdown")) {
                for (var i = 0; i < contents.length; i++) {
                    contents[i].classList.remove("show");
                };
            }
        });

        $(document).ready(function() {
            $('.actiondel').click(function(e) {
                e.preventDefault();
                var $actiondel = $(this).attr('id').replace('ACTD', '');
                var result = confirm("B???n c?? mu???n x??a l???ch c???a tu???n " + $actiondel + "?");
                if (result == true) {
                    $.ajax({
                        url: '../../controllers/ManageTask/del-task.php',
                        type: 'post',
                        dataType: 'html',
                        data: {
                            act_del: $actiondel
                        }
                    }).done(function() {
                        console.log('DELETED - DONE!');
                        alert("DONE");
                        location.reload();
                    });
                };

            });
        });



        // Insert 1 task
        buttonsadd[0].addEventListener("click", function() {
            $.ajax({
                url: '../../controllers/ManageTask/add-task.php',
                type: 'post',
                dataType: 'html',
                data: {}
            }).done(function() {
                console.log('ADD - DONE!');
                location.reload();
            })
        });

        // ///////////////////////////// SCREEN 2 ////////////////////////////////// //
        // View detail
        //l???p qua t???t c??? c??c actionview v?? g??n s??? ki???n
        for (var i = 0; i < actionview.length; i++) {
            actionview[i].addEventListener("click", function(event) {
                //l???y value c???a button
                document.getElementsByClassName("task")[0].classList.toggle("hidescreen");
                buttonsadd[0].classList.toggle("hidescreen");
                buttonsadd[1].classList.toggle("hidescreen");
                var $actv_id = this.id.replace('ACTV', '');
                $.ajax({
                    url: '../../controllers/ManageTask/listemployee.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        week_id: $actv_id
                    }
                }).done(function(result) {
                    console.log('DETAIL - DONE!');
                    document.getElementById("janitors").insertAdjacentHTML('afterend', result.valjanitors);
                    document.getElementById("collectors").insertAdjacentHTML('afterend', result.valcollectors);
                    document.getElementsByClassName("detail")[0].classList.toggle("hidescreen");
                    document.getElementsByClassName("sm-title2")[0].innerHTML = "B???ng ph??n c??ng tu???n " + $actv_id;
                    emp = document.getElementsByClassName("info");
                    for (var i = 0; i < emp.length; i++) {
                        emp[i].addEventListener("click", function(event) {
                            if (id == this.id.replace('BT', '')) {
                                show(id);
                            } else {
                                //???n
                                id = this.id.replace('BT', '');
                                for (var i = 0; i < contents2.length; i++) {
                                    contents2[i].classList.remove("show");
                                };
                                //hi???n th??? menu v???a ???????c click
                                show(id);
                            };
                        });
                    };
                    $(document).ready(function() {
                        $('.btn-del').click(function(e) {
                            e.preventDefault();
                            var $btndelid = $(this).attr('id').replace('BTD', '');
                            var result = confirm("B???n c?? mu???n x??a l???ch l??m vi???c c???a nh??n vi??n s??? " + $btndelid + "?");
                            if (result == true) {
                                $.ajax({
                                    url: '../../controllers/ManageTask/del-manage-task.php',
                                    type: 'post',
                                    dataType: 'html',
                                    data: {
                                        btn_del_id: $btndelid,
                                        week_id: $actv_id
                                    }
                                }).done(function() {
                                    console.log('DELETED - DONE!');
                                    alert("DONE!");
                                    location.reload();
                                });
                            };

                        });
                    });
                });
            });
        };

        //n???u click ra ngo??i c??c button th?? ???n t???t c??? c??c menu con
        window.addEventListener("click", function() {
            if (!event.target.matches(".info")) {
                for (var i = 0; i < contents2.length; i++) {
                    contents2[i].classList.remove("show");
                }
            }
        });
    </script>
</body>

</html>