<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (!empty($_POST["fullname"])) {
    $fullname = $_POST["fullname"];

    // Kiểm tra tính hợp lệ của tên đăng nhập
    if (strlen($fullname) < 5) {
        echo "<script>alert('Tên đăng nhập phải có ít nhất 5 ký tự.');</script>";
    } else {
        $sqlCheckDuplicate = "SELECT UserName, Email FROM tbladmin WHERE UserName=:fullname OR Email=:email";
        $queryCheckDuplicate = $dbh->prepare($sqlCheckDuplicate);
        $queryCheckDuplicate->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $queryCheckDuplicate->bindParam(':email', $_POST['emailid'], PDO::PARAM_STR);
        $queryCheckDuplicate->execute();

        if ($queryCheckDuplicate->rowCount() > 0) {
            echo "<script>alert('Tên đăng nhập hoặc email đã tồn tại. Vui lòng chọn tên đăng nhập hoặc email khác.');</script>";
        } else {
            if (isset($_POST['signup'])) {
                $fname = $_POST['fullname'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['emailid'];
                $staffid = $_POST['staffid'];
                $mobile = $_POST['mobileno'];
                $dignity = $_POST['dignity'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $sqlInsertUser = "INSERT INTO  tbladmin(Staffid, AdminName, UserName, FirstName, LastName, Email, MobileNumber, Password) 
                                  VALUES(:staffid, :dignity, :fname, :firstname, :lastname, :email, :mobile, :password)";
                $queryInsertUser = $dbh->prepare($sqlInsertUser);
                $queryInsertUser->bindParam(':staffid', $staffid, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':dignity', $dignity, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':fname', $fname, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':firstname', $firstname, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':lastname', $lastname, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':email', $email, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':mobile', $mobile, PDO::PARAM_STR);
                $queryInsertUser->bindParam(':password', $password, PDO::PARAM_STR);

                if ($queryInsertUser->execute()) {
                    echo "<script>alert('Đăng ký thành công. Bây giờ bạn có thể đăng nhập');</script>";
                } else {
                    echo "<script>alert('Đã xảy ra lỗi. Vui lòng thử lại');</script>";
                }
            }
        }
    }
}

?>
<script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#emailid").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
</script>

<script>
    function checkAvailability2() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'fullname=' + $("#fullname").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status2").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
</script>
<script type="text/javascript">
    function valid() {
        if (document.signup.password.value != document.signup.confirmpassword.value) {
            alert("Mật khẩu và Xác nhận mật khẩu không khớp  !!");
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
</script>
<div class="card-body">
    <form method="post" name="signup" onSubmit="return valid();">
        <div class="row ">
            <div class="form-group col-md-6">
                <select class="form-control" name="dignity" id="dignity" required>
                    <option value="">Chọn quyền</option>
                    <option value="Admin">ADMIN</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="staffid" placeholder="Mã nhân viên" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Tên tài khoản" onBlur="checkAvailability2()" required="required">
                <span id="user-availability-status2" style="font-size:12px;"></span>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="firstname" placeholder="Họ" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="lastname" placeholder="Tên" required="required">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="mobileno" placeholder="Số điện thoại" maxlength="10" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Địa chỉ email" required="required">
                <span id="user-availability-status" style="font-size:12px;"></span>
            </div>
            <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" name="confirmpassword" placeholder="Xác nhận mật khẩu" required="required">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Register" name="signup" id="submit" class="btn btn-info">
        </div>
    </form>
</div>