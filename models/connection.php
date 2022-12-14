<?php
    $servername = "localhost";
    $username = "root";
    $password = "bucsehcmut2002";
    $database = "cnpm";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
