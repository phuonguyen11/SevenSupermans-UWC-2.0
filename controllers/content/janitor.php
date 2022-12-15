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
            <th>#</th>
        </tr>
    </thead>
    <tbody>
    ';
$query = "SELECT * from users WHERE users.role = 1";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
?>
    <tr>
      <td><?php echo $row["id"]; ?> </td>
      <td><?php echo $row["name"]; ?> </td>
      <td><?php echo $row["address"]; ?> </td>
      <td><?php echo $row["phone"]; ?> </td>
      <td>
        <!-- Button trigger modal -->
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
          Chọn
        </button>
      </td>

    </tr>

<?php
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
            <label for="date" class="col-sm-4 col-form-label">Ngày:</label>
            <div class="dropdown col-sm-4">
              <button id="date" class="btn btn-outline-secondary dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="#">
                Ngày <span class="caret"></span>
              </button>
              <br />
              <ul class="dropdown-menu" role="menu" aria-labelledby="date">
              ';
$date = date('Y-m-d'); //today date
$weekOfdays = array();
for ($i = 1; $i <= 14; $i++) {
  echo '<li class="dropdown-item">' . date('l : Y-m-d', strtotime("+$i day", strtotime($date))) . '</li>';
}
echo '
              </ul>
            </div>
          </div>
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
            <label for="area" class="col-sm-4 col-form-label">Khu vực:</label>
            <div class="dropdown col-sm-4">
              <button id="area" class="btn btn-outline-secondary dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="#">
                Khu vực <span class="caret"></span>
              </button>
              <br />
              <ul class="dropdown-menu" role="menu" aria-labelledby="area">
              ';

$query = "SELECT * from area";
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
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-success" onclick="accept()">
          Accept
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->';
