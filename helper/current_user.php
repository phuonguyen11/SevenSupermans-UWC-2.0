<?php
function current_user()
{
    include('../models/connection.php');
    if (isset($_COOKIE["user_id"])) {
        $user_id = $_COOKIE['user_id'];
        $sql = "SELECT * FROM user WHERE id = $user_id";
        $result = $conn->query($sql);
        $user_data = $result->fetch_assoc();
        return $user_data;
    } else {
        return false;
    }
}
