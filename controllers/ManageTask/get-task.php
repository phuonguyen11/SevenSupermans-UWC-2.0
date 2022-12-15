<?php
// Ham viet bang phan cong
function gettask()
{
    include("../../models/connection.php");
    $sql = "SELECT * FROM `week`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Load dữ liệu lên website
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-xl-4 col-md-3 mb-5">
                            <div class="wrap-sm-title">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 task">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1 sm-title">
                                            Bảng phân công tuần ' . $row["week_id"] . '
                                        </div>
                                        <div class="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" color="white" fill="currentColor" class="bi bi-list-task btndropdown" id="' . $row["week_id"] . 'BTWK" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                                            </svg>
                                            <div class="dropdown-content" id="' . $row["week_id"] . 'WK">
                                                <div class="actionview" id="' . $row["week_id"] . 'ACTV">Xem</div>
                                                <div class="actiondel" id="' . $row["week_id"] . 'ACTD">Xóa</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wrap-info">
                                <div class="info-name">
                                    Người tạo: ' . $row["creator"] . '
                                </div>
                                <div class="info-date">
                                    ' . $row["date"] . '
                                </div>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend calendar">
                                        <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="green" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg>
                                        </div>
                                        <div class="info-date-checkin">
                                            ' . date("d-m") . '
                                        </div>
                                    </div>
                                    <div class="test2">
                                        <img src="../../app/assets/images/pikachu.jpg" width="25" height="25" class="rounded-circle" alt="Cinque Terre">
                                        <img src="../../app/assets/images/doremon.jpg" width="25" height="25" class="rounded-circle" alt="Cinque Terre">
                                        <img src="../../app/assets/images/formore.jpg" width="25" height="25" class="rounded-circle" alt="Cinque Terre">
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    }
}
