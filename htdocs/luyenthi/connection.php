<?php 
//hãy tạo kết nối với cơ sở dữ liệu Addtocart
$servername = "localhost";
$username = "root";
$password ="";
$db_name ="addtocart2";
// Tạo một kết nối mới đến MySql
$conn = new mysqli($servername,$username,$password,$db_name);

if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE $product_id = $procut_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);
    if(mysqli_num_rows($result)>0){
        $in_cart = "already In cart";
        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }else{
        $insert ="INSERT INTO cart(product_id) VALUES($product_id)";
        if($conn->query($insert)===true){
            $in_cart = "added into cart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(It doesn't insert)</script>";
        }
    }
}
if(isset($_GET["cart_id"])){
    $product_id = $_GET["cart_id"];
    $sql = "DELETE FROM cart WHERE product_id=".$product_id;
    if($conn->query($sql)===true){
        echo "Removed from cart";
    }
}

?>
<!-- Đoạn mã PHP này có chức năng thêm sản phẩm vào giỏ hàng và xóa sản phẩm khỏi giỏ hàng trong cơ sở dữ liệu `addtocart2`. Dưới đây là giải thích từng phần của mã:

1. **Kết nối đến Cơ sở Dữ Liệu:**
   ```php
   $servername = "localhost";
   $username = "root";
   $password ="";
   $db_name ="addtocart2";
   $conn = new mysqli($servername,$username,$password,$db_name);
   ```
   - Thiết lập thông tin kết nối đến cơ sở dữ liệu MySQL thông qua đối tượng `mysqli`.

2. **Kiểm Tra Nếu Có Tham Số `id` Trong URL:**
   ```php
   if(isset($_GET["id"])){
   ```
   - Kiểm tra xem có tham số `id` được truyền vào URL hay không.

   ```php
   $product_id = $_GET["id"];
   $sql = "SELECT * FROM cart WHERE product_id = $procut_id";
   $result = $conn->query($sql);
   $total_cart = "SELECT * FROM cart";
   $total_cart_result = $conn->query($total_cart);
   $cart_num = mysqli_num_rows($total_cart_result);
   ```
   - Nếu có, lấy giá trị của `id` và thực hiện một truy vấn SQL để kiểm tra xem sản phẩm có trong giỏ hàng (`cart`) hay không.
   - Đếm tổng số mục trong giỏ hàng và lưu vào biến `$cart_num`.

   ```php
   if(mysqli_num_rows($result)>0){
       $in_cart = "already In cart";
       echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
   }else{
       $insert ="INSERT INTO cart(product_id) VALUES($product_id)";
       if($conn->query($insert)===true){
           $in_cart = "added into cart";
           echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
       }else{
           echo "<script>alert(It doesn't insert)</script>";
       }
   }
   ```
   - Nếu sản phẩm đã có trong giỏ hàng, trả về thông báo "already In cart" và số lượng mục trong giỏ hàng.
   - Nếu không, thực hiện một truy vấn INSERT để thêm sản phẩm vào giỏ hàng và trả về thông báo "added into cart" và số lượng mục trong giỏ hàng.
   - Nếu có lỗi trong quá trình INSERT, hiển thị một cảnh báo thông báo lỗi.

3. **Kiểm Tra Nếu Có Tham Số `cart_id` Trong URL:**
   ```php
   if(isset($_GET["cart_id"])){
   ```
   - Kiểm tra xem có tham số `cart_id` được truyền vào URL hay không.

   ```php
   $product_id = $_GET["cart_id"];
   $sql = "DELETE FROM cart WHERE product_id=".$product_id;
   if($conn->query($sql)===true){
       echo "Removed from cart";
   }
   ```
   - Nếu có, lấy giá trị của `cart_id` và thực hiện một truy vấn SQL để xóa sản phẩm từ giỏ hàng.
   - Nếu xóa thành công, trả về thông báo "Removed from cart".

Tóm lại, đoạn mã này xử lý các yêu cầu được gửi từ trình duyệt thông qua tham số trong URL để thêm sản phẩm vào giỏ hàng hoặc xóa sản phẩm khỏi giỏ hàng trong cơ sở dữ liệu. Nó cũng trả về thông tin về số lượng mục trong giỏ hàng sau mỗi thao tác. -->