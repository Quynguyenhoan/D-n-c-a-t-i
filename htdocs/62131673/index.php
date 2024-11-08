<?php
require_once 'connection.php';
$sql = "SELECT * From Product";
$all_product = $conn->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- link css va js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- link icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg bg-light py-lg-0 px-lg-5">
      <div class="container-fluid">
        <a class="navbar-brand text-start" href="#"><span class="h3 text-uppercase text-warning">Shop<span class="fs-6 text-danger">HL</span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active text-warning" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="true">
              Thời trang mới</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Đầm</a></li>
                <li><a class="dropdown-item" href="#">Áo</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="true">
                Bộ sưu tập
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto text-end p-3">
            <li class="nav-item">
                <a class="nav-link" href="#">Tài Khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giỏ Hàng</a>
            </li>
          <div class="ms-2 d-none d-lg-flex">
            <a href="#" class="btn-sm-square  rounded-circle bg-white ms-3"><i class="bi bi-cart-check"></i>
            </a>
            <a href="#" class="btn-sm-square rounded-circle bg-white ms-3 "><i class="fas fa-search "></i></a>
          </div>
        </div>
      </div>
    </nav>
    </header>
    <!-- banner -->
    <div class="carousel-inner " role="listbox">
      <div class="carousel-item active">
        <img src="de02/imgs/banner.jpg" class="w-100 d-block" alt="First slide">
      </div>
      <!-- end bannwer -->
    </div>
    <div class="col-lg-12 col-md-12">
      <div class="section-header text-start mb-5" style="max-width: 500px;">
        <h1 class="mb-5 text-center">Sản phẩm bán chạy</h1>
        <p class="text-center">Số lượng có hạn - Đừng để bỏ lở</p>
      </div>
    </div>
    <main>
      <div class="d-flex">
        <div class="col-sm-6 col-lg-3 p-3 col-md-3">
            <div class="box bg-white p-2">
                <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4">
                    <div class="option_container">
                        <div class="options d-flex flex-column px-5">
                            <a href="" class="option1 btn btn-success mx-5 px-5 my-3 rounded-pill">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="box-img d-flex justify-content-center">
                        <img class="card-img-top " src="de02/imgs/pic1.jpeg" alt="Title" >
                    </div>
                    <div class="card-body d-flex">
                        <h4 class="card-title">Đầm suông phối cổ sơ mi </h4>
                        <h4 class="card-text ms-auto">1,049,500đ</h4>
                    </div>
  
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-3 col-md-3">
            <div class="box bg-white p-2">
                <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4">
                    <div class="option_container">
                        <div class="options d-flex flex-column px-5">
                            <a href="" class="option1 btn btn-success mx-5 px-5 my-3 rounded-pill">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="box-img d-flex justify-content-center">
                        <img class="card-img-top" src="de02/imgs/pic2-2.jpeg" alt="Title" >
                    </div>
                    <div class="card-body d-flex">
                        <h4 class="card-title">Đầm A xòe</h4>
                        <h4 class="card-text ms-auto">1,399,500đ</h4>
                    </div>
  
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-3 col-md-3">
          <div class="box bg-white p-2">
              <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4">
                  <div class="option_container">
                      <div class="options d-flex flex-column px-5">
                          <a href="" class="option1 btn btn-danger mx-5 px-5 rounded-pill">
                              Mua ngay
                          </a>
                      </div>
                  </div>
                  <div class="box-img d-flex justify-content-center">
                      <img class="card-img-top" src="de02/imgs/pic2-3.jpeg" alt="Title" >
                  </div>
                  <div class="card-body d-flex">
                      <h4 class="card-title">Đầm xòe</h4>
                      <h4 class="card-text ms-auto text-dark">1,349,500đ</h4>
                  </div>
  
              </div>
          </div>
      </div>
        <div class="col-sm-6 col-lg-3 p-3 col-md-3">
            <div class="box bg-white p-2">
                <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4">
                    <div class="option_container">
                        <div class="options d-flex flex-column px-5">
                            <a href="" class="option1 btn btn-danger mx-5 px-5 rounded-pill">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="box-img d-flex justify-content-center">
                        <img class="card-img-top" src="de02/imgs/pic2-4.jpeg" alt="Title" >
                    </div>
                    <div class="card-body d-flex">
                        <h4 class="card-title">Đầm ôm xé trước , nơ to trẻ vai</h4>
                        <h4 class="card-text ms-auto text-dark">899,000đ</h4>
                    </div>
  
                </div>
            </div>
        </div>
      </div>  
    </main>
    <footer class="bg-body-tertiary">
      <main class="form-signin w-100 m-auto">
        <form>
          <div class="text-center">
            <h1 class="h3 mb-3 fw-normal text-uppercase text-black">Đăng ký bản tin</h1>
          <p>Đăng ký nhận bản tin NEW để được cập nhật những mẫu thiết kê mới nhất</p>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="Vui lòng nhập email">
            <button class="btn btn-dark" type="submit">Sign in</button>
          </div>
          </div>
        </form>
      </main>
    </footer>
    <!-- poper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>
</html>