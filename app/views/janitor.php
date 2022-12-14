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
    <title>Document</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../../css/home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

    <div id="wrapper">
        <?php
        include_once 'content/sidebar.php';
        ?>

        <!-- Content -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="text-dark fw-bold" style="position: absolute; left: 35%;">Janitor</h1>

                    <!-- Topbar Navbar -->
                    <?php
                    include_once 'content/topbar.php';
                    ?>

                </nav>
                <!-- /Topbar -->
                <!-- Home Content -->
                <?php
                include_once 'content/janitor.php';
                ?>
                <!-- End Home Content -->
            </div>
            <!-- /Main Content -->
        </div>
        <!-- /Content -->


    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#myModal").on("show.bs.modal", (e) => {
                var $button = $(e.relatedTarget);
                $("#name_emp").text('Task - ' + $button.closest("tr").find("td:eq(1)").text());
            });
        });

        jQuery(".dropdown-menu li").click(function() {
            $(this)
                .parents(".dropdown")
                .find(".btn")
                .html($(this).text() + ' <span class="caret"></span> ');
            $(this).parents(".dropdown").find(".btn").val($(this).data("value"));
        });

        function accept() {
            console.log(document.getElementById("time").innerText);
            console.log(document.getElementById("area").innerText);
            console.log(document.getElementById("vehicle").innerText);
            document.location.href='emp.php';
        }
    </script>
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
</body>

</html>