<?php
include("../../models/connection.php");
$id = $_POST["btn_del_id"];
$week_id = $_POST["week_id"];
$sql = "UPDATE `users` SET `status` = '0' WHERE `users`.id = $id";
mysqli_query($conn, $sql);
$sql1 = "DELETE FROM `task_for_janitors` WHERE `task_for_janitors`.user_id IN (
    SELECT id
    FROM `users`
    WHERE `status` = '0'
) AND `task_for_janitors`.week_id = $week_id";
mysqli_query($conn, $sql1);
$sql2 = "DELETE FROM `task_for_collectors` WHERE `task_for_collectors`.user_id IN (
    SELECT id
    FROM `users`
    WHERE `status` = '0'
) AND `task_for_collectors`.week_id = $week_id";
mysqli_query($conn, $sql2);
mysqli_close($conn);
