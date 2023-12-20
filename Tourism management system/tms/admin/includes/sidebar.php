<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
      <img src="img/logo/travel.png">
    </div>
    <div class="sidebar-brand-text mx-3">Du lịch VN</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Bảng điều khiển</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Quản Lý
    </div>

   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm" aria-expanded="true" aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Quản lý tour</span>
    </a>
    <div id="packageForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tour</h6>
        <a class="collapse-item" href="create_package.php">Tạo Tour </a>
        <a class="collapse-item" href="manage_packages.php">Quản lý Tour</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="manage_bookings.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Đặt chỗ</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_users.php">
      <i class="fas fa-fw fa-user"></i>
      <span>Người dùng</span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-fw fa-users"></i>
      <span>Quản lý người dùng</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Người dùng</h6>
        <a class="collapse-item" href="user_register.php">Đăng ký người dùng</a>
        <a class="collapse-item" href="Permissions.php">Quyền Người dùng</a>
      </div>
    </div>
  </li>
</ul>