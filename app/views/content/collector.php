<?php
include('../../models/connection.php');

echo '<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Nhân Viên</th>
            <th>Địa chỉ liên lạc</th>
            <th>Số Điện Thoại</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ';

$query = "SELECT * from users WHERE users.role = 2";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
    echo '
    <tr>
      <td>' . $row["id"] . '</td>
      <td>' . $row["name"] . '</td>
      <td>' . $row["address"] . ' </td>
      <td>' . $row["phone"] . '</td>
      <td>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Task
        </button>
      </td>

    </tr>';
  }
};

echo '
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 name="name_emp" id="name_emp" value></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="time" class="col-sm-4 col-form-label">Thời gian:</label>
            <div class="dropdown col-sm-4">
              <button id="time" class="btn btn-outline-secondary dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="#">
                Thời gian <span class="caret"></span>
              </button>
              <br />
              <ul class="dropdown-menu" role="menu" aria-labelledby="time">
              ';

$query = "SELECT * from shift";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
    echo '<li class="dropdown-item">' . $row['time'] . '</li>';
  }
};
echo '
              </ul>
            </div>
          </div>

          <div class="form-group row">
            <label for="area" class="col-sm-4 col-form-label">Nhóm MCPs:</label>
            <div class="dropdown col-sm-4">
              <button id="area" class="btn btn-outline-secondary dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="#">
                Nhóm MCPs <span class="caret"></span>
              </button>
              <br />
              <ul class="dropdown-menu" role="menu" aria-labelledby="area">
              ';

$query = "SELECT * from group_mcps";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
    echo '<li class="dropdown-item">' . $row['name'] . '</li>';
  }
};
echo '
              </ul>
            </div>
          </div>

          <div class="form-group row">
            <label for="vehicle" class="col-sm-4 col-form-label">Phương tiện:</label>
            <div class="dropdown col-sm-4">
              <button id="vehicle" class="btn btn-outline-secondary dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="#">
                Phương tiện <span class="caret"></span>
              </button>
              <br />
              <ul class="dropdown-menu" role="menu" aria-labelledby="vehicle">
              ';

$query = "SELECT * from vehicles";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
    echo '<li class="dropdown-item"> Xe ' . $row['id'].': '.$row['type'].' - status '.$row['status'] .'</li>';
  }
};
echo '
              </ul>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary" onclick="accept()">
          Accept
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->';
