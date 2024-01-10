<?php
error_reporting(0);
function isEmailAvailable($email) {
    global $dbh;
    $sql = "SELECT COUNT(*) FROM tblusers WHERE EmailId = :email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $count = $query->fetchColumn();
    return $count == 0;
}

// Function to check mobile number availability
function isMobileNumberAvailable($mnumber) {
    global $dbh;
    $sql = "SELECT COUNT(*) FROM tblusers WHERE MobileNumber = :mnumber";
    $query = $dbh->prepare($sql);
    $query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
    $query->execute();
    $count = $query->fetchColumn();
    return $count == 0;
}

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mnumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Basic form validation
    if (empty($fname) || empty($mnumber) || empty($email) || empty($password)) {
        echo '<script>alert("Vui lòng điền đầy đủ thông tin")</script>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Email không hợp lệ")</script>';
    } elseif (!preg_match('/^[0-9]{10}$/', $mnumber)) {
        echo '<script>alert("Số điện thoại không hợp lệ")</script>';
    } elseif (!isEmailAvailable($email)) {
        echo '<script>alert("Email đã được sử dụng. Vui lòng chọn email khác")</script>';
    } elseif (!isMobileNumberAvailable($mnumber)) {
        echo '<script>alert("Số điện thoại đã được sử dụng. Vui lòng chọn số điện thoại khác")</script>';
    } else {
        // Continue with the existing code for inserting into the database
        $sql = "INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            echo '<script>alert("Bạn đã đăng ký thành công. Bây giờ bạn có thể đăng nhập")</script>';
        } else {
            echo '<script>alert("Đã xảy ra lỗi. Vui lòng thử lại")</script>';
        }
    }
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data: 'emailid=' + $("#email").val(),
        type: "POST",
        success: function(data) {
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {}
    });
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-right">
                                <form name="signup" method="post">
                                    <h3>Tạo tài khoản của bạn </h3>
                                    <input type="text" value="" placeholder="Họ tên" name="fname" autocomplete="off"
                                        required="">
                                    <input type="text" value="" placeholder="Số điện thoại" maxlength="10"
                                        name="mobilenumber" autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Email id" name="email" id="email"
                                        onBlur="checkAvailability()" autocomplete="off" required=""
                                        style="color: #000000;">
                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                    <input type="password" value="" placeholder="Mật khẩu" name="password" required="">
                                    <div class="modal-footer text-right">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Tạo tài
                                            khoản</button>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>