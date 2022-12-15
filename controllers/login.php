<?php
include('../models/connection.php');
include('../app/views/homepage.php')
?>

<?php
$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM `users` WHERE username = '$username' and password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        setcookie("user_name", $row["name"], time() + (86400 * 30), "/");
        setcookie("user_role", $row["role"], time() + (86400 * 30), "/");
        header('location:../app/views/index.php');
    }
}
else header('location:../app/views/login.php');

?>