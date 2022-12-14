<?php
echo '<ul class="navbar-nav ml-auto">

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">3+</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
            Thông báo
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">1/12/2022</div>
                <span class="font-weight-bold">Báo cáo mỗi tháng đã được cập nhật!</span>
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">25/11/2022</div>
                Tiền công đã được chuyển. Mời mọi người kiểm tra!
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">22/11/2022</div>
                Đi muộn 9 phút.
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả thông báo</a>
    </div>
</li>

<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter">7</span>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
            Tin nhắn
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="../../img/undraw_profile_1.svg" alt="...">
                <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
                <div class="text-truncate">Hôm nay khi nào cậu đi làm vậy?</div>
                <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="../../img/undraw_profile_2.svg" alt="...">
                <div class="status-indicator"></div>
            </div>
            <div>
                <div class="text-truncate">Việc hôm qua đã xong chưa ấy nhờ?</div>
                <div class="small text-gray-500">HTT · 1d</div>
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="../../img/undraw_profile_3.svg" alt="...">
                <div class="status-indicator bg-warning"></div>
            </div>
            <div>
                <div class="text-truncate">Hôm nay làm xong lên kèo nhé!</div>
                <div class="small text-gray-500">Bu · 2d</div>
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                <div class="status-indicator bg-success"></div>
            </div>
            <div>
                <div class="text-truncate">Hôm nay tớ có việc, cậu xin phép giúp tớ nhé.</div>
                <div class="small text-gray-500">LTH · 2w</div>
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả tin nhắn</a>
    </div>
</li>

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tên người dùng</span>
        <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Trang cá nhân
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Cài đặt
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Nhật ký hoạt động
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Đăng xuất
        </a>
    </div>
</li>



</ul>';
?>