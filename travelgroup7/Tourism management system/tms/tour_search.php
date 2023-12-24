<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>
<body class="d-flex flex-column">

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Your Logo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content -->
<main class="container mt-3">
    <!-- Search Form -->
    <form class="d-flex" method="post">
        <input class="form-control me-2" name="search_name" id="search_name" type="search" placeholder="Nhập tên cần tìm" aria-label="Search">
    </form>

    <!-- Search Results -->
    <ul id="output_search"></ul>
</main>

<!-- Footer -->
<footer class="mt-5">
    <div class="container">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Your Search Script -->
<script type="text/javascript">
    $(document).ready(function () {
        var action = "search";
        $("#search_name").keyup(function () {
            var search_name = $("#search_name").val();
            if (search_name != ""){
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        action: action,
                        search_name: search_name
                    },
                    success: function (data) {
                        $("#output_search").html(data);
                    }
                });
            }

           else {
                $("#output_search").html("");
            }
        });
    });
</script>

</body>
</html>
