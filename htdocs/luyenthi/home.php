<?php
require_once 'connection.php';
$sql = "SELECT * From Product";
$all_product = $conn->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <?php include_once 'header.php' ?>
  <main class="product_section">
    <div class="container">
      <div class="title_product text-center">
        <h1 class="display-4 fw-semibold">Danh mục <span class="text-danger">sản phẩm</span></h1>
      </div>
      <!-- product -->
      <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($all_product)) {
        ?>
          <!-- spam 1 -->
          <div class="col-sm-6 col-lg-4 p-3">
            <div class="box bg-white p-2">
              <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4 ">
                <div class="option_container">
                  <div class="options d-flex flex-column px-5">
                    <a href="" class="add option1 btn btn-success mx-5 px-5 my-3 rounded-pill" data-id="<?php echo $row["product_id"];  ?>">
                      Add To Cart
                    </a>

                    <a href="" class="option2 btn btn-danger mx-5 px-5 rounded-pill">
                      Buy Now
                    </a>
                  </div>
                </div>
                <div class="box-img d-flex justify-content-center">

                  <img class="card-img-top" src="<?php echo $row["product_image"]; ?>" alt="Title">
                </div>
                <div class="card-body">
                  <p class="rate">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </p>
                  <h4 class="card-title"><?php echo $row["product_name"];  ?></h4>
                  <div class="price d-flex">
                    <h5 class="card-text me-auto">
                      $<?php echo $row["price"]; ?>
                    </h5>
                    <p class="discount text-danger"><del>$<?php echo $row["discount"]; ?></del></p>
                  </div>

                </div>
              </div>
            </div>
          </div> <!-- het spam  -->

        <?php

        }
        ?>
      </div>
    </div>
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
  <script>
    var product_id = document.getElementsByClassName("add");
    for (var i = 0; i < product_id.length; i++);
    {
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
</body>

</html>
<!-- Dưới đây là giải thích từng dòng mã HTML và PHP trong trang:

1. **Đặc tính HTML:**
   ```html
   <!doctype html>
   <html lang="en">
   ```
   - Bắt đầu một trang HTML với đặc tính DOCTYPE và thiết lập ngôn ngữ là "en" (Tiếng Anh).

2. **Phần Head của HTML:**
   ```html
   <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
   </head>
   ```
   - Đặt tiêu đề trang và đưa vào các đặc tính meta cần thiết.
   - Liên kết đến Bootstrap CSS từ một nguồn tĩnh.

3. **Phần Body của HTML:**
   ```html
   <body>
     <?php include_once 'header.php' ?>
     <main class="product_section">
       <!-- Nội dung trang web -->
     </main>
     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
     <script>
       // JavaScript cho việc thêm sản phẩm vào giỏ hàng
     </script>
   </body>
   ```
   - Gọi file `header.php` bằng cách sử dụng `include_once`.
   - Sử dụng thẻ `<main>` để chứa nội dung chính của trang.
   - Liên kết đến các thư viện JavaScript của Bootstrap.

4. **Vòng lặp PHP để hiển thị sản phẩm:**
   ```php
   <?php
   while ($row = mysqli_fetch_assoc($all_product)) {
   ?>
     <!-- Nội dung mỗi sản phẩm -->
   <?php
   }
   ?>
   ```
   - Sử dụng vòng lặp PHP để duyệt qua kết quả truy vấn SQL và hiển thị thông tin mỗi sản phẩm.

5. **Mã HTML của Mỗi Sản Phẩm:**
   ```html
   <div class="col-sm-6 col-lg-4 p-3">
     <!-- Nội dung chi tiết của mỗi sản phẩm -->
   </div>
   ```
   - Đối với mỗi sản phẩm, tạo một box chứa thông tin sản phẩm.

6. **JavaScript cho việc thêm sản phẩm vào giỏ hàng:**
   ```html
   <script>
     var product_id = document.getElementsByClassName("add");
     for (var i = 0; i < product_id.length; i++);
     {
       product_id[i].addEventListener("click", function(event) {
         // Xử lý khi người dùng nhấp vào nút "Add To Cart"
       })
     }
   </script>
   ```
   - Sử dụng JavaScript để thêm sự kiện click cho các nút có class "add".
   - Khi một nút được nhấp, gửi yêu cầu XMLHttpRequest đến `connection.php` với tham số `id`.
   - Khi yêu cầu hoàn thành, cập nhật nội dung nút và số lượng mục trong giỏ hàng.

Tóm lại, trang này sử dụng PHP để hiển thị danh sách sản phẩm từ cơ sở dữ liệu và JavaScript để thực hiện các tương tác thêm sản phẩm vào giỏ hàng. Nó cũng sử dụng Bootstrap để tạo giao diện người dùng thân thiện và đáp ứng. -->