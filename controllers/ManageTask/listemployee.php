<?php
$week = $_POST["week_id"];
$resultjanitors = '';
$resultcollectors = '';
include("../../models/connection.php");

$setstatus = "UPDATE `users` SET `status` = '1'";
mysqli_query($conn, $setstatus);
$sql = "SELECT `users`.id, `name` FROM users JOIN `task_for_janitors` ON `users`.id = `task_for_janitors`.user_id
        WHERE `role` = '1' AND `week_id` = $week
        GROUP BY user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Load dữ liệu lên website
    while ($row = $result->fetch_assoc()) {
        $resultjanitors .= '<div class="col dropdown2"> <div class = "text-xs font-weight-bold info" id="' . $row["id"] . 'BTNV">' .
            'Mã số: ' . $row["id"] . ' - ' . $row["name"] .
            '<button class="btn-del" name="submit" id="' . $row["id"] . 'BTD" > Xóa </button> ' .
            '<button class="btn-fix" name="submit" id="' . $row["id"] . 'BTF"> Chỉnh sửa </button> ' .
            '</div>';
        $sql2 = 'SELECT * FROM ((
                    (`task_for_janitors` JOIN `users` ON `users`.id = `task_for_janitors`.`user_id`) 
                JOIN `shift` ON `shift`.id = shift_id) 
                JOIN `area` ON `area`.id = area_id)
                WHERE user_id = ' . $row["id"] . ' AND `week_id` = ' . $week . '';
        $result2 = $conn->query($sql2);
        $stt = 1;
        $thu = 'Thứ Hai';
        $resultjanitors .= '<div class="dropdown-content2" id="' . $row["id"] . 'NV"> <table class="table">' .  '<thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Thứ</th>
                                    <th scope="col">Ca làm</th>
                                    <th scope="col">Khu vực làm việc</th>
                                    <th scope="col">Check-in</th>
                                    <th scope="col">Check-out</th>
                                </tr>
                            </thead> <tbody>';
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                switch ($stt) {
                    case 1:
                        $thu = 'Thứ hai';
                        break;
                    case 2:
                        $thu = 'Thứ ba';
                        break;
                    case 3:
                        $thu = 'Thứ tư';
                        break;
                    case 4:
                        $thu = 'Thứ năm';
                        break;
                    case 5:
                        $thu = 'Thứ sáu';
                        break;
                    default:
                        $thu = 'Thứ hai';
                };
                $resultjanitors .= '<tr>
                                <td>' . $stt++ . '</td>
                                <td>' . $thu . '</td>
                                <td>' . $row2["time"] . '</td>
                                <td>' . $row2["area_name"] . '</td>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" color="green" height="20" fill="currentColor" class="bi bi-check-circle checkbox1" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                </td>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" color="gray" height="20" fill="currentColor" class="bi bi-check-circle checkbox1" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                </td>
                            </tr>';
            };
        };
        $resultjanitors .= '</tbody> </table> </div> </div>';
    }
};

$sql = "SELECT `users`.id, `name` FROM users JOIN `task_for_collectors` ON `users`.id = `task_for_collectors`.user_id
    WHERE `role` = '2' AND `week_id` = $week
    GROUP BY user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Load dữ liệu lên website
    while ($row = $result->fetch_assoc()) {
        $resultcollectors .= '<div class="col dropdown2"> <div class = "text-xs font-weight-bold info" id="' . $row["id"] . 'BTNV">' .
            'Mã số: ' . $row["id"] . ' - ' . $row["name"] .
            '<button class="btn-del" name="submit" id="' . $row["id"] . 'BTD"> Xóa </button> ' .
            '<button class="btn-fix" name="submit" id="' . $row["id"] . 'BTF"> Chỉnh sửa </button> ' .
            '</div>';
        $sql2 = 'SELECT * FROM ((
                (`task_for_collectors` JOIN `users` ON `users`.id = `task_for_collectors`.`user_id`) 
            JOIN `shift` ON `shift`.id = shift_id) 
            JOIN `vehicles` ON `vehicles`.id = vehicles_id)
            WHERE user_id = ' . $row["id"] . ' AND `week_id` = ' . $week . '';
        $result2 = $conn->query($sql2);
        $stt = 1;
        $thu = 'Thứ Hai';
        $resultcollectors .= '<div class="dropdown-content2" id="' . $row["id"] . 'NV"> <table class="table">' .  '<thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Thứ</th>
                                <th scope="col">Ca làm</th>
                                <th scope="col">Loại xe</th>
                                <th scope="col">Tuyến đường</th>
                                <th scope="col">Check-in</th>
                                <th scope="col">Check-out</th>
                            </tr>
                        </thead> <tbody>';
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                if ($row2["user_id"] == $row["id"]) {
                    switch ($stt) {
                        case 1:
                            $thu = 'Thứ hai';
                            break;
                        case 2:
                            $thu = 'Thứ ba';
                            break;
                        case 3:
                            $thu = 'Thứ tư';
                            break;
                        case 4:
                            $thu = 'Thứ năm';
                            break;
                        case 5:
                            $thu = 'Thứ sáu';
                            break;
                        default:
                            $thu = 'Thứ hai';
                    };
                    $resultcollectors .= '<tr>
                                    <td>' . $stt++ . '</td>
                                    <td>' . '...' . '</td>
                                    <td>' . $row2["time"] . '</td>
                                    <td>' . 'Xe tải ' . $row2["type"] . '</td>
                                    <td>' . 'Nhóm MCPs số ' . $row2["gmcps_id"] . '</td>
                                    <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" color="green" height="20" fill="currentColor" class="bi bi-check-circle checkbox1" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                    </td>
                                    <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" color="gray" height="20" fill="currentColor" class="bi bi-check-circle checkbox1" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                    </svg>
                                    </td>
                                </tr>';
                } else {
                    continue;
                }
            };
        };
        $resultcollectors .= '</tbody> </table> </div> </div>';
    }
}
$conn->close();
echo json_encode(array("valjanitors" => $resultjanitors, "valcollectors" => $resultcollectors));
