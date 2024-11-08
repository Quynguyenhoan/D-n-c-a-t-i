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

<body class="bg-light">
    <?php
    include_once 'header.php';
    ?>
    <!--mani  -->
    <main>
        <div class="container">
            <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
            <hr>
            <?php
            while ($row_cart = mysqli_fetch_assoc($all_cart)) {
                $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];
                $all_product = $conn->query($sql);
                while ($row = mysqli_fetch_assoc($all_product)) {
            ?>

                    <div class="box bg-white p-2">
                        <div class="card bg-light rounded-0 border-0 px-3 pt-6 pb-4 d-flex align-items-center flex-row">
                            <img src="<?php echo $row["product_image"]; ?>" width="180px" height="220px" alt="Title">

                            <div class="card-body d-flex flex-column">
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
                                <button class="remove w-100" data-id="<?php echo $row["product_id"]; ?>">Remove from Cart</button>
                            </div>
                        </div>
                    </div>


            <?php

                }
            }
            ?>

        </div>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for (var i = 0; i < remove.length; i++) {
            remove[i].addEventListener("click", function(event) {
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        target.innerHTML = this.responseText;
                        target.style.opacity = .3;
                    }
                }

                xml.open("GET", "connection.php?cart_id=" + cart_id, true);
                xml.send();
            })
        }
    </script>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<!-- Đoạn mã JavaScript trên thực hiện một số công việc trong việc tương tác với các phần tử HTML trên trang web. Dưới đây là giải thích chi tiết:

```javascript
var remove = document.getElementsByClassName("remove");

for (var i = 0; i < remove.length; i++) {
    remove[i].addEventListener("click", function(event) {
        var target = event.target;
        var cart_id = target.getAttribute("data-id");
        var xml = new XMLHttpRequest();

        xml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                target.innerHTML = this.responseText;
                target.style.opacity = .3;
            }
        }

        xml.open("GET", "connection.php?cart_id=" + cart_id, true);
        xml.send();
    });
}
```

Cụ thể:

1. `var remove = document.getElementsByClassName("remove");`: Lấy tất cả các phần tử HTML có class là "remove" và lưu chúng vào biến `remove`. Điều này cho thấy rằng những phần tử này có thể là các nút hoặc phần tử có thể được nhấp chuột.

2. `for (var i = 0; i < remove.length; i++) { ... }`: Lặp qua mỗi phần tử có class "remove" bằng một vòng lặp for.

3. `remove[i].addEventListener("click", function(event) { ... });`: Thêm một lắng nghe sự kiện click cho mỗi phần tử có class "remove". Khi một trong những phần tử này được nhấp chuột, hàm liên quan sẽ được thực thi.

4. Bên trong hàm lắng nghe sự kiện click:
   - `var target = event.target;`: Lấy phần tử đã gây ra sự kiện click.
   - `var cart_id = target.getAttribute("data-id");`: Lấy giá trị của thuộc tính "data-id" từ phần tử đã nhấp chuột. Giả sử thuộc tính này chứa một ID của giỏ hàng.

   - `var xml = new XMLHttpRequest();`: Tạo một đối tượng XMLHttpRequest mới, được sử dụng để thực hiện các yêu cầu HTTP không đồng bộ.

   - `xml.onreadystatechange = function() { ... }`: Thiết lập một hàm gọi lại để xử lý sự thay đổi trạng thái của XMLHttpRequest.

   - `xml.open("GET", "connection.php?cart_id=" + cart_id, true);`: Mở một yêu cầu GET đến kịch bản "connection.php" với tham số là ID giỏ hàng.

   - `xml.send();`: Gửi XMLHttpRequest.

   - Bên trong hàm gọi lại:
      - `if (this.readyState == 4 && this.status == 200) { ... }`: Kiểm tra xem yêu cầu đã hoàn thành thành công (readyState 4) và HTTP status là OK (status 200).

      - `target.innerHTML = this.responseText;`: Cập nhật nội dung của phần tử đã nhấp chuột với văn bản phản hồi nhận được từ máy chủ.

      - `target.style.opacity = .3;`: Đặt độ mờ của phần tử đã nhấp chuột thành 0.3, làm cho nó trở nên một phần trong suốt.

Tóm lại, đoạn mã này có thể là một phần của một trang web trong đó việc nhấp vào các phần tử có class "remove" sẽ kích hoạt một yêu cầu không đồng bộ đến một kịch bản phía máy chủ (`connection.php`) với một ID giỏ hàng cụ thể. Phản hồi từ máy chủ sau đó được sử dụng để cập nhật nội dung của phần tử đã nhấp chuột và độ mờ của nó được giảm. -->