<?php
echo '<table class="table table-bordered">
  <tbody>
    <tr>
      <td>STT</td>
      <td>Họ và tên</td>
      <td>Địa chỉ</td>
      <td>Số điện thoại</td>
      <td>Người thân</td>
      <td>
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Task
        </button>
      </td>
    </tr>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Task</h4>
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
                <li class="dropdown-item">Ca 1</li>
                <li class="dropdown-item">Ca 2</li>
                <li class="dropdown-item">Ca 3</li>
                <li class="dropdown-item">Ca 4</li>
                <li class="dropdown-item">Ca 5</li>
                <li class="dropdown-item">Ca 6</li>
                <li class="dropdown-item">Ca 7</li>
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
                <li class="dropdown-item">Khu vực 1</li>
                <li class="dropdown-item">Khu vực 2</li>
                <li class="dropdown-item">Khu vực 3</li>
                <li class="dropdown-item">Khu vực 4</li>
                <li class="dropdown-item">Khu vực 5</li>
                <li class="dropdown-item">Khu vực 6</li>
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
                <li class="dropdown-item">Phương tiện 1</li>
                <li class="dropdown-item">Phương tiện 2</li>
                <li class="dropdown-item">Phương tiện 3</li>
                <li class="dropdown-item">Phương tiện 4</li>
                <li class="dropdown-item">Phương tiện 5</li>
                <li class="dropdown-item">Phương tiện 6</li>
                <li class="dropdown-item">Phương tiện 7</li>
                <li class="dropdown-item">Phương tiện 8</li>
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
