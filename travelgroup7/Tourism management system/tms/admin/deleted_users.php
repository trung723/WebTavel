<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_GET['restoreid'])) {
    $rid = intval($_GET['restoreid']);
    $sql = "UPDATE tbladmin SET Status='1' WHERE ID=:rid";

    try {
        // Sử dụng biến kết nối từ file dbconnection.php
        $query = $dbh->prepare($sql);
        $query->bindParam(':rid', $rid, PDO::PARAM_INT);

        // Thực thi truy vấn
        if ($query->execute()) {
            echo "<script>alert('Người dùng đã được khôi phục');</script>";
            echo "<script>window.location.href = 'user_register.php'</script>";
        } else {
            echo '<script>alert("Cập nhật không thành công! Thử lại sau")</script>';
        }
    } catch (PDOException $e) {
        echo '<script>alert("Lỗi kết nối cơ sở dữ liệu: ' . $e->getMessage() . '")</script>';
    }
}
if (isset($_GET['deleteid'])) {
    try {
        $rid = intval($_GET['deleteid']);

        if ($rid > 0) {
            $sql = "DELETE FROM tbladmin WHERE ID=:rid";

            $query = $dbh->prepare($sql);
            $query->bindParam(':rid', $rid, PDO::PARAM_INT);

            if ($query->execute()) {
                echo "<script>alert('Người dùng đã được xoá');</script>";
                echo "<script>window.location.href = 'user_register.php'</script>";
            } else {
                echo '<script>alert("Xoá không thành công! Thử lại sau")</script>';
            }
        } else {
            echo '<script>alert("ID người dùng không hợp lệ")</script>';
        }
    } catch (PDOException $e) {
        echo '<script>alert("Lỗi kết nối cơ sở dữ liệu: ' . $e->getMessage() . '")</script>';
    }
}
?>

<div class="card-body table-responsive p-3">
    <h4 class="card-title">Quản lý người dùng</h4>
    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
        <thead>
        <tr>
            <th class="text-center"></th>
            <th class="">Họ tên</th>
            <th class="">Số điện thoại</th>
            <th class="">Email</th>
            <th class="">Người dùng đã đăng ký</th>
            <th class="" style="width: 15%;">Hoạt động</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql="SELECT * from tbladmin where Status='0'  ";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
            foreach($results as $row)
            {
                ?>
                <tr>
                    <td class="text-center"><?php echo htmlentities($cnt);?></td>
                    <td class="font-w600"><?php  echo htmlentities($row->UserName);?></td>
                    <td class="font-w600"><?php  echo htmlentities($row->MobileNumber);?></td>
                    <td class="font-w600"><?php  echo htmlentities($row->Email);?></td>
                    <td class="font-w600">
                        <span class="badge badge-primary"><?php  echo htmlentities($row->AdminRegdate);?></span>
                    </td>
                    <td class="">
                        <a href="deleted_users.php?restoreid=<?php echo ($row->ID);?>" onclick="return confirm('Bạn có thực sự muốn Khôi phục người dùng?');" title="Khôi phục người dùng này">Khôi phục</i></a>
                        <a href="deleted_users.php?deleteid=<?php echo ($row->ID);?>" onclick="return confirm('Bạn có thực sự muốn xoá người dùng?');" title="Xoá người dùng này" style="color: red;">Xoá</a>

                    </td>

                </tr>
                <?php $cnt=$cnt+1;
            }
        } ?>
        </tbody>
    </table>
</div>