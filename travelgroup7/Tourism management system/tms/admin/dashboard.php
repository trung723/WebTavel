<?php
include('includes/checklogin.php');
check_login();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Quản trị - Hệ thống quản lý du lịch</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <?php include('includes/sidebar.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <?php include('includes/header.php'); ?>
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bảng điều khiển</li>
                    </ol>
                </div>

                <div class="row mb-3">
                    <!-- Ví dụ về thẻ Thu nhập (Hàng tháng) -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Tổng số chỗ đặt
                                        </div>
                                        <?php $sql1 = "SELECT BookingId from tblbooking";
                                        $query1 = $dbh->prepare($sql1);
                                        $query1->execute();
                                        $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                        $cnt1 = $query1->rowCount();
                                        ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php echo htmlentities($cnt1); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ví dụ về thẻ Thu nhập (Hàng năm) -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Tổng Tour</div>
                                        <?php $sql3 = "SELECT PackageId from tbltourpackages";
                                        $query3 = $dbh->prepare($sql3);
                                        $query3->execute();
                                        $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
                                        $cnt3 = $query3->rowCount();
                                        ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php echo htmlentities($cnt3); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-shopping-cart fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ví dụ về thẻ người dùng mới -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Tổng số người dùng
                                        </div>
                                        <?php $sql = "SELECT id from tblusers";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = $query->rowCount();
                                        ?>
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php echo htmlentities($cnt); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ví dụ về thẻ yêu cầu đang chờ xử lý -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Tổng số quản trị
                                            viên</div>
                                        <?php $sql = "SELECT id from tbladmin";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt2 = $query->rowCount();
                                        ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php echo htmlentities($cnt2); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Donut Chart for Tổng số chỗ đặt -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <canvas id="bookingDonutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart for Tổng Tour -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <canvas id="tourDonutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart for Tổng số người dùng -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <canvas id="userDonutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart for Tổng số quản trị viên -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <canvas id="adminDonutChart"></canvas>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Invoice Example -->
            <?php include('includes/modal.php'); ?>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->

        <?php include('vendor/thongke.php'); ?>
        <!-- Footer -->
    </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>


</body>
<script>
    // Donut Chart for Tổng số chỗ đặt
    var bookingData = {
        labels: ["Bookings", "Remaining"],
        datasets: [{
            data: [<?php echo $cnt1; ?>, <?php echo $totalBookings - $cnt1; ?>],
            backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 255, 255, 0.2)'],
            borderColor: ['rgba(75, 192, 192, 1)', 'rgb(209,209,215)'],
            borderWidth: 1
        }]
    };

    var bookingDonutChart = new Chart(document.getElementById('bookingDonutChart'), {
        type: 'doughnut',
        data: bookingData
    });

    // Donut Chart for Tổng Tour
    var tourData = {
        labels: ["Tour Packages", "Remaining"],
        datasets: [{
            data: [<?php echo $cnt3; ?>, <?php echo $totalTourPackages - $cnt3; ?>],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 255, 255, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgb(209,209,215)'],
            borderWidth: 1
        }]
    };

    var tourDonutChart = new Chart(document.getElementById('tourDonutChart'), {
        type: 'doughnut',
        data: tourData
    });

    // Donut Chart for Tổng số người dùng
    var userData = {
        labels: ["Users", "Remaining"],
        datasets: [{
            data: [<?php echo $cnt; ?>, <?php echo $totalUsers - $cnt; ?>],
            backgroundColor: ['rgba(255, 205, 86, 0.2)', 'rgba(255, 255, 255, 0.2)'],
            borderColor: ['rgba(255, 205, 86, 1)', 'rgb(209,209,215)'],
            borderWidth: 1
        }]
    };

    var userDonutChart = new Chart(document.getElementById('userDonutChart'), {
        type: 'doughnut',
        data: userData
    });

    // Donut Chart for Tổng số quản trị viên
    var adminData = {
        labels: ["Administrators", "Remaining"],
        datasets: [{
            data: [<?php echo $cnt2; ?>, <?php echo $totalAdmins - $cnt2; ?>],
            backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 255, 255, 0.2)'],
            borderColor: ['rgba(54, 162, 235, 1)', 'rgb(209,209,215)'],
            borderWidth: 1
        }]
    };

    var adminDonutChart = new Chart(document.getElementById('adminDonutChart'), {
        type: 'doughnut',
        data: adminData
    });
</script>



</html>