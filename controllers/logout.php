<?php
    include('../models/connection.php');
    setcookie("user_id", "", time() - 3600, "/");
    header('location:../app/views/login.php')
