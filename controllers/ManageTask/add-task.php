<?php
include("../../models/connection.php");
$date = date("Y-m-d");
$sql = 'INSERT INTO `week` (`creator`,`date`) VALUES ("Back Officer 1", ' . $date . ' )';
mysqli_query($conn, $sql);
mysqli_close($conn);
