<?php
$link = mysqli_connect("localhost", "root", "1234");
mysqli_select_db($link, "tourism1");

$test = array();
$count = 0;
$res = mysqli_query($link, "select * from `revenuestatistics`");
while ($row = mysqli_fetch_array($res)) {
    $test[$count]["label"] = $row["Thang"];
    $test[$count]["y"] = $row["TongThuNhap"];
    $count = $count + 1;
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Doanh thu các tháng"
                },
                axisY: {
                    title: "Doanh thu các tháng (Đồng)"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## đồng",
                    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
<div id="chartContainer" style="height: 370px; width: 60%; margin-left: 200px; text-align:center"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
<?php include('includes/footer.php');?>
</html>