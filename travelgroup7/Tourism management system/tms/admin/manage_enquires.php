<?php
include('includes/checklogin.php');
check_login();

if(isset($_REQUEST['eid'])) {
    $eid = intval($_REQUEST['eid']);
    $status = 1;

    try {
        // Replace this with your actual database connection details
        $dbh = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

        $sql = "UPDATE tblenquiry SET Status=:status WHERE id=:eid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_INT);
        $query->bindParam(':eid', $eid, PDO::PARAM_INT);
        $query->execute();

        $msg = "Yêu cầu đã được đọc thành công";
    } catch (PDOException $e) {
        $msg = "Lỗi: " . $e->getMessage();
    }
}


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
    <title>Admin - Quản lý thắc mắc</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include('includes/sidebar.php');?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php include('includes/header.php');?>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Thắc mắc</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý Thắc mắc</li>
                        </ol>
                    </div>

                    <!-- Row -->
                    <div class="row">
                        <!-- Datatables -->
                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Quản lý Thắc mắc</h6>
                                    <?php if($error){?>
                                    <div class="errorWrap">
                                        <strong>Lỗi</strong>:<?php echo htmlentities($error); ?>
                                    </div>
                                    <?php
                  } 
                  else if($msg){?>
                                    <div class="succWrap">
                                        <strong>Thành công</strong>:<?php echo htmlentities($msg); ?>
                                    </div>
                                    <?php 
                  }?>
                                </div>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Mã vé</th>
                                                <th>Tên </th>
                                                <th>Số điện thoại / Email</th>
                                                <th>Chủ thể </th>
                                                <th>Mô tả </th>
                                                <th>Ngày đăng </th>
                                                <th>Hành động </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sql = "SELECT * from tblenquiry";
                                              $query = $dbh -> prepare($sql);
                                              $query->execute();
                                              $results=$query->fetchAll(PDO::FETCH_OBJ);

                                              if($query->rowCount() > 0)
                                              {
                                                foreach($results as $result)
                                                {
                                                  ?>
                                            <tr>
                                                <td width="120">#TCKT-<?php echo htmlentities($result->id);?></td>
                                                <td width="50"><?php echo htmlentities($result->FullName);?></td>
                                                <td width="50"><?php echo htmlentities($result->MobileNumber);
                            ?> /<br />
                                                    <?php echo $result->EmailId;?></td>
                                                <td width="200"><?php echo htmlentities($result->Subject);?></a></td>
                                                <td width="400"><?php echo htmlentities($result->Description);?></td>

                                                <td width="50"><?php echo htmlentities($result->PostingDate);?></td>
                                                <?php 
                            if($result->Status==1)
                            {
                              ?>
                                                <td>Đã đọc</td>
                                                <?php 
                            } else 
                            {
                              ?>
                                                <td><a href="manage_enquires.php?eid=<?php echo htmlentities($result->id);?>"
                                                        onclick="return confirm('Bạn có thực sự muốn đọc không')">Chưa
                                                        giải quyết</a>
                                                </td>
                                                <?php 
                            } ?>

                                            </tr>
                                            <?php
                        }
                      }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <?php include('includes/modal.php');?>
                </div>
                <!---Container Fluid-->
            </div>

            <!-- Footer -->
            <?php include('includes/footer.php');?>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
    </script>

</body>

</html>