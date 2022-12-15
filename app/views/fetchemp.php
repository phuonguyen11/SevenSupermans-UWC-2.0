<?php
include('../../models/connection.php');
$k = $_POST['id'];
$collect = "collector";
if ($k == $collect) {
    $sql = "SELECT * from users where `role` = 2";
} else if ($k == "janitor") {
    $sql = "SELECT * from users where `role` = 1";
} else if ($k = "all") {
    $sql = "SELECT * from users where `role` IN (1, 2)";
};
$res = mysqli_query($conn, $sql);

while ($rows = mysqli_fetch_assoc($res)) {
?>
    <tr>
        <td><?php echo $rows['id']; ?> </td>
        <td><?php echo $rows['name']; ?> </td>
        <td><?php echo $rows['address']; ?> </td>
        <td><?php echo $rows['phone']; ?> </td>

    </tr>

<?php
};
echo $sql;

?>