<?php
include("../../models/connection.php");
$id = $_POST["act_del"];
$sql = "DELETE FROM `week` WHERE `week`.week_id = $id";
mysqli_query($conn, $sql);
mysqli_close($conn);
