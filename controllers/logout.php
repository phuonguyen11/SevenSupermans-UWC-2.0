<?php
    include('../models/connection.php');
    setcookie("user_name", "", time() - 3600, "/");
    setcookie("user_role", "", time() - 3600, "/");
    header('location:../app/views/login.php')
