<?php
require_once 'connection.php';
$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <div class="container">
            <!-- top menu -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo1.png" alt="" width="200px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">/</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">
                                    Cart <span id="badge"><?php echo mysqli_num_rows($all_cart) ?></span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end top menu -->
            <!-- slider -->
            <div class="container-fluid px-5">
                <div class="container">
                    <!-- bs5-caroseul-default -->
                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="img/slide1.jpg" class="w-100 d-block" alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide2.jpg" class="w-100 d-block" alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide3.jpg" class="w-100 d-block" alt="Third slide" />
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide5.jpg" class="w-100 d-block" alt="Third slide" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- end slider -->
            <!-- menu chính -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <!--xoa <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav-menu navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Women</a></li>
                                    <li><a class="dropdown-item" href="#">Men</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Liên hệ</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- end menu chính -->
        </div>
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
<script>
    var product_id = document.getElementsByClassName("add");
    for (var i = 0; i < product_id.length; i++) {
        product_id[i].addEventListener("click", function(event) {
            var target = event.target;
            var id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    target.innerHTML = data.in_cart;
                    document.getElementById("badge").innerHTML = data.num_cart + 1;
                }
            }
            xml.open("GET", "connection.php?id=" + id, true);
            xml.send();
        })
    }
</script>

</html>