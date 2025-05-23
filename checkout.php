<?php
session_start();


// Xử lý khi người dùng chọn quận và gửi form tính phí vận chuyển
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_shipping'])) {
    $district = trim($_POST['district'] ?? '');


    $districts_with_15000 = ['Quận 1', 'Quận 2', 'Quận 3', 'Quận 5', 'Quận 4', 'Quận 8', 'Quận Bình Thạnh', 'Quận Phú Nhuận', 'Quận Gò Vấp', 'Quận 10', 'Quận 11'];
    $shipping_fee = in_array($district, $districts_with_15000) ? 15000 : 20000;


    $_SESSION['selected_district'] = $district;
    $_SESSION['shipping_fee'] = $shipping_fee;
}


// Lấy từ session ra
$selected_district = $_SESSION['selected_district'] ?? 'Chưa chọn';
$shipping_fee = $_SESSION['shipping_fee'] ?? 0;


// Tính tổng đơn
$total = 0;
foreach ($_SESSION['cart'] ?? [] as $item) {
    $total += $item['price'] * $item['quantity'];
}
$final_total = $total + $shipping_fee;
?>

<?php
// Kết nối database
$conn = new mysqli("localhost", "root", "", "btphp");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form, xử lý tránh lỗi
    $full_name = $_POST['full_name'] ?? '';
    $street_address = $_POST['street_address'] ?? '';
    $district = $_POST['district'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $note = $_POST['note'] ?? '';
    $invoice = isset($_POST['invoice']) ? 1 : 0;

    // Câu lệnh SQL thêm dữ liệu
    $sql = "INSERT INTO orders (full_name, street_address, district, phone, email, note, invoice)
            VALUES ('$full_name', '$street_address', '$district', '$phone', '$email', '$note', $invoice)";

    if ($conn->query($sql) === TRUE) {
        // Chuyển hướng theo nút nhấn
        if (isset($_POST['paypal'])) {
            header("Location: xulythanhtoanpaypal.php");
            exit;
        } elseif (isset($_POST['momo_qr'])) {
            header("Location: xulythanhmomo.php");
            exit;
        } elseif (isset($_POST['momo_atm'])) {
            header("Location: xulythanhtoanmomoatm.php");
            exit;
        } else {
            echo "";
        }
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "";
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!--=============== FLATICON ===============-->
  <!-- Thêm Font Awesome từ CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <link rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css" />


  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />


  <!--================ Chỉnh lại Style Heading =============-->
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    th {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>


  <style>
    /* Phần hiệu ứng chuyển động và màu sắc mạnh */
    .intense-sparkle {
      font-weight: bold;
      /* Chữ in đậm */
      font-size: 16px;
      /* Kích thước chữ */
      text-decoration: none;
      /* Bỏ gạch chân */
      background: linear-gradient(90deg, #f3e458, #f0ffa5, #ff93c7, #ff00aa, #ffa0d0);
      /* Gradient nhiều màu */
      background-size: 300% 300%;
      /* Kích thước gradient lớn hơn vùng chữ */
      color: transparent;
      /* Chữ trong suốt */
      background-clip: text;
      -webkit-background-clip: text;
      /* Nền gradient cho text */
      animation: intenseColor 1.5s linear infinite, sparkleEffect 0.5s ease-in-out infinite;
      /* Hiệu ứng động */
      position: relative;
      /* Cho phép thêm ánh sáng */
    }


    /* Animation chuyển động gradient từ trái qua phải */
    @keyframes intenseColor {
      0% {
        background-position: 0% 50%;
      }


      /* Gradient bắt đầu bên trái */
      50% {
        background-position: 100% 50%;
      }


      /* Gradient di chuyển sang phải */
      100% {
        background-position: 0% 50%;
      }


      /* Quay về ban đầu */
    }


    /* Phần container cho dòng chữ khuyến mãi */
    .shipping-promo {
      margin-top: 150px;
      /* Khoảng cách trên */
      display: flex;
      justify-content: center;
      align-items: center;
      /* Căn giữa ngang dọc */
      font-size: 16px;
      background-color: #f5b5d9eb;
      /* Nền hồng nhạt */
      padding: 5px 80px;
      /* Khoảng cách xung quanh */
      border-style: dashed;
      border-color: #ff3791;
      /* Viền hồng đậm */
    }


    /* Dòng chữ khuyến mãi */
    .promo-text {
      font-family: 'Lucida Sans', Geneva, Verdana, sans-serif;
      /* Font chữ */
      color: white;
      font-size: large;
      /* Màu và kích thước chữ */
      margin: 0 8px;
      /* Khoảng cách ngang */
      font-weight: lighter;
      align-items: center;
      /* Làm chữ mảnh */
    }


    /* Ngôi sao trang trí */
    .star {
      color: #ffe601;
      /* Màu vàng */
      font-size: 50px;
      /* Kích thước ngôi sao */
      animation: blink 1.5s infinite;
      /* Nhấp nháy */
      margin-bottom: 4px;
      /* Khoảng cách dưới */
    }


    /* Animation nhấp nháy */
    @keyframes blink {


      0%,
      100% {
        opacity: 1;
      }


      /* Đầy đủ hiển thị */
      50% {
        opacity: 0;
      }


      /* Tạm ẩn */
    }


    /* Màn hình lớn >= 1200px */
    @media screen and (min-width: 1200px) {
      .shipping-promo {
        margin-top: 100px;
        padding: 6px 90px;
        /* Giảm padding */
      }


      .promo-text {
        font-size: 20px;
        /* Chữ nhỏ hơn */
      }


      .star {
        font-size: 30px;
        /* Ngôi sao nhỏ hơn */
      }
    }


    /* Màn hình vừa từ 480px đến 768px */
    @media screen and (max-width: 768px) {
      .shipping-promo {
        padding: 5px 20px;
        /* Giảm padding */
      }


      .promo-text {
        font-size: 14px;
        /* Chữ nhỏ lại */
      }


      .star {
        font-size: 30px;
        /* Kích thước ngôi sao */
      }
    }


    /* Màn hình nhỏ < 480px */
    @media screen and (max-width: 480px) {
      .shipping-promo {
        padding: 5px 10px;
        /* Giảm padding tối thiểu */
      }


      .promo-text {
        font-size: 8px;
        /* Chữ cực nhỏ */
      }


      .star {
        font-size: 25px;
        /* Kích thước ngôi sao nhỏ */
      }
    }
  </style>


  <!-- Logo nhỏ hiển thị trên tab -->
  <link rel="icon" href="assets/img/1.png" type="image/x-icon">


  <!-- Tên tab -->
  <title>ChicCharm Official Store</title>
</head>

<script src="https://www.paypal.com/sdk/js?client-id=ASKQhhCPG5UlMwSXjwzwy1rX4FTPQzYoyy3xdyEsGoMSx-VaWHS1BY1nnIxrIM56ymq_rJ6IB_SE0Zp_&currency=USD"></script>

<body>
  <!--=============== HEADER ===============-->
  <header class="header">
    <div class="header__top">
      <!-- Khung khuyến mãi header đầu trang -->
      <div class="header__container container">
        <div class="header__contact">
          <span id="contact1">Merry Chrismas</span>
        </div>
        <!-- Hiển thị thông báo ưu đãi -->
        <p class="header__alert-news" id="news" style="color: #ff97c9">ƯU ĐÃI SIÊU GIÁ TRỊ - TIẾT KIỆM THÊM VỚI NHIỀU MÃ
          GIẢM GIÁ</p>
        <!-- Liên kết đăng nhập/ đăng ký -->
        <a href="login-register.php" id="login-link" class="header__top-action">Đăng nhập / Đăng ký</a>
      </div>
    </div>


    <!-- Thanh điều hướng chính -->
    <nav class="nav container">
      <!-- Logo trang web -->
      <a href="index.php" class="nav__logo">
        <img class="nav__logo-img" src="assets/img/1.png" alt="website logo" />
      </a>
      <!-- Menu điều hướng -->
      <div class="nav__menu" id="nav-menu">
        <div class="nav__menu-top">
          <a href="index.php" class="nav__menu-logo">
            <img src="assets/img/1.png" alt="">
          </a>
          <!-- Nút đóng menu -->
          <div class="nav__close" id="nav-close">
            <i class="fi fi-rs-cross-small"></i>
          </div>
        </div>
        <!-- Danh sách liên kết trong menu -->
        <ul class="nav__list">
          <li class="nav__item">
            <!-- Liên kết đến trang chủ -->
            <a href="index.php" class="nav__link">Trang Chủ</a>
          </li>
          <li class="nav__item dropdown">
            <!-- Liên kết đến trang cửa hàng -->
            <a href="shop.php" class="nav__link">Cửa Hàng</a>
            <!-- Liên kết đến từng danh mục sản phẩm  với menu thả xuống -->
            <ul class="dropdown__menu">
              <li><a href="shop.php">Kẹp vuông</a></li>
              <li><a href="shop.php">Kẹp nhỏ</a></li>
              <li><a href="shop.php">Kẹp tròn</a></li>
              <li><a href="shop.php">Gương</a></li>
            </ul>
          </li>
          <li class="nav__item">
            <!-- Liên kết đến trang tài khoản -->
            <a href="accounts.php" class="nav__link">Tài Khoản</a>
          </li>
          <li class="nav__item">
            <!-- Liên kết đến phần khuyến mãi -->
            <a href="index.php#featured" class="nav__link intense-sparkle">Khuyến mãi</a>
          </li>
        </ul>


        <!-- Tìm kiếm trong header -->
        <div class="header__search">
          <input type="text" placeholder="" class="form__input" />
          <!-- Ô nhập để tìm kiếm -->
          <button class="search__btn">
            <img src="assets/img/search.png" alt="search icon" />
          </button>
        </div>
      </div>
      <div class="header__user-actions">
        <!-- Nút đăng nhập -->
        <a href="login.php" class="header__action-btn" title="Đăng nhập">
          <img src="assets/img/user.png" alt="" />
        </a>
        <!-- Nút danh sách yêu thích -->
        <a href="wishlist.php" class="header__action-btn" title="Wishlist">
          <img src="assets/img/icon-heart.svg" alt="" />
          <!-- Số lượng mục trong wishlist -->
          <span class="count">3</span>
        </a>
        <!-- Nút giỏ hàng -->
        <a href="cart.php" class="header__action-btn" title="Giỏ hàng">
          <img src="assets/img/icon-cart.svg" alt="" />
          <span class="count">0</span>
        </a>
        <!-- Nút mở menu dọc -->
        <div class="header__action-btn nav__toggle" id="nav-toggle">
          <img src="./assets//img/menu-burger.png" alt="">
        </div>
      </div>
    </nav>
  </header>


  <!--=============== BANNER KHUYẾN MÃI ===============-->
  <div class="shipping-promo">
    <!-- Phần banner khuyến mãi chứa thông báo giảm giá -->
    <span class="star">&#9733;</span>
    <span class="promo-text">Nhập Mã XMAS24 Để Nhận Được Ưu Đãi Giảm 10%</span>
    <span class="star">&#9733;</span>
  </div>


 <!--=============== Giao diện tiến hành đặt hàng ===============-->
  <section class="checkout section--lg">
    <!-- Container chính bao quanh các nhóm thông tin thanh toán -->
    <div class="checkout__container container grid">
      <!-- Nhóm thông tin giao hàng -->
      <div class="checkout__group">
        <!-- Tiêu đề phần thông tin giao hàng -->
        <h3 class="section__title" style="font-size: 25px; color:hsla(328, 100%, 57%, 0.712); margin-top: 30px;">
          THÔNG TIN GIAO HÀNG
        </h3>
    <!-- CSS cơ bản (có thể thêm vào file CSS) -->
<style>
  .form__input {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 10px;
  }
</style>


<!-- Form nhập thông tin giao hàng -->
<form class="form grid" method="POST" action="checkout.php" id="checkoutForm">
    <input type="hidden" name="calculate_shipping" value="1">


  <!-- Họ tên -->
  <input
    type="text"
    id="full_name"
    name="full_name"
    placeholder="Họ Tên *"
    required
    class="form__input"
  />


  <!-- Địa chỉ: Số nhà, tên đường -->
  <input
    type="text"
    id="street_address"
    name="street_address"
    placeholder="Số nhà, tên đường *"
    required
    class="form__input"
  />


  <form class="form grid" method="POST" action="checkout.php" id="checkoutForm">
  <input type="hidden" name="calculate_shipping" value="1">


  <!-- Các trường khác như họ tên, địa chỉ v.v -->


 <form class="form grid" method="POST" action="checkout.php" id="checkoutForm">
  <input type="hidden" name="calculate_shipping" value="1">


  <!-- Các trường khác ở đây -->


  <label for="district">Chọn quận/huyện</label>
  <select
    id="district"
    name="district"
    required
    class="form__input"
    onchange="document.getElementById('checkoutForm').submit();"
  >
    <option value="">Chọn quận/huyện</option>
    <?php
      $districts = ['Quận 1', 'Quận 2', 'Quận 3', 'Quận 5', 'Quận 4', 'Quận 8', 'Quận Bình Thạnh', 'Quận Phú Nhuận', 'Quận Gò Vấp', 'Quận 10', 'Quận 11', 'Quận 7', 'Huyện Bình Chánh', 'Quận 12', 'TP Thủ Đức'];
      foreach ($districts as $d) {
        $selected = ($district == $d) ? 'selected' : '';
        echo "<option value=\"$d\" $selected>$d</option>";
      }
    ?>
  </select>


  <!-- Hiển thị phí giao hàng -->
  <p>Phí giao hàng: <strong><?php echo number_format($shipping_fee); ?>đ</strong></p>


  <!-- Các trường khác & nút đặt hàng -->
</form>


   
            </select>
          <input type="text" id="phone" placeholder="Số điện thoại *" required class="form__input"
            style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px; border-radius: 4px; font-size: 16px; width: 100%; box-sizing: border-box;" />
          <input type="email" id="email" placeholder="Email" class="form__input"
            style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px; border-radius: 4px; font-size: 16px; width: 100%; box-sizing: border-box;" />


          <!-- Tiêu đề ghi chú -->
          <h3 class="checkout__title">Ghi chú</h3>
          <!-- Textarea ghi chú -->
          <textarea name="" id="note" placeholder="Ghi chú đơn hàng" class="form__input textarea"
            style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px; border-radius: 4px; font-size: 16px; width: 100%; box-sizing: border-box;"></textarea>


          <!-- Checkbox xuất hóa đơn -->
          <div class="form__group" style="margin-top: 10px;">
            <input type="checkbox" id="invoice" name="invoice" class="form__checkbox" style="margin-right: 10px;" />
            <label for="invoice" style="font-size: 17px;">Xuất hoá đơn cho đơn hàng</label>
          </div>
        </form>


        <!-- Phần nhập mã giảm giá -->
        <div class="cart__coupon">
          <!-- Tiêu đề phần mã giảm giá -->
          <h3 class="section__title">Mã Giảm Giá</h3>


          <!-- Ô nhập mã giảm giá -->
          <div class="coupon__input"
            style="display: flex; justify-content: center; align-items: center; gap: 10px; padding: 15px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 30px;">
            <input type="text" id="couponCode" class="form__input"
              style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px; border-radius: 4px; font-size: 16px; width: 78%; box-sizing: border-box;"
              placeholder="Nhập mã giảm giá" />
            <button type="button" class="btn btn--sm apply-coupon" onclick="applyCoupon()"
              style="white-space: nowrap;">Áp Dụng</button>
          </div>


          <!-- Danh sách voucher -->
          <div class="coupon__grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
            <!-- Voucher 1 -->
            <div class="coupon__item"
              style="text-align: center; padding: 15px; border: 1px solid #ccc; border-radius: 4px;">
              <p style="font-size: 13px; color: #333; padding-bottom: 10px;">Voucher 1 - LAMQUEN</p>
              <button class="btn btn--sm apply-coupon" onclick="applyVoucher('LAMQUEN')">Áp Dụng</button>
            </div>


            <!-- Voucher 2 -->
            <div class="coupon__item"
              style="text-align: center; padding: 15px; border: 1px solid #ccc; border-radius: 4px;">
              <p style="font-size: 13px; color: #333; padding-bottom: 10px;">Voucher 2 - GIAM10</p>
              <button class="btn btn--sm apply-coupon" onclick="applyVoucher('GIAM10')">Áp Dụng</button>
            </div>


            <!-- Voucher 3 -->
            <div class="coupon__item"
              style="text-align: center; padding: 15px; border: 1px solid #ccc; border-radius: 4px;">
              <p style="font-size: 13px; color: #333; padding-bottom: 10px;">Voucher 3 - FREESHIP</p>
              <button class="btn btn--sm apply-coupon" onclick="applyVoucher('FREESHIP')">Áp Dụng</button>
            </div>
          </div>


          <!-- Hiển thị kết quả áp mã -->
          <div id="couponResult" style="margin-top: 15px; font-size: 16px; color: green; display: none;">
            <!-- Kết quả sẽ được hiển thị ở đây -->
          </div>
        </div>


        <script>
          // Hàm áp dụng mã giảm giá nhập vào
          function applyCoupon() {
            // Lấy giá trị từ ô input mã giảm giá và loại bỏ khoảng trắng thừa ở đầu/cuối
            const couponCode = document.getElementById("couponCode").value.trim();
            // Lấy thẻ div dùng để hiển thị kết quả
            const resultDiv = document.getElementById("couponResult");


            // Kiểm tra nếu người dùng chưa nhập mã giảm giá
            if (couponCode === "") {
              resultDiv.style.color = "red"; // Màu thông báo là đỏ
              resultDiv.textContent = "Hãy nhập mã giảm giá!"; // Thông báo yêu cầu nhập mã
            }
            // Kiểm tra mã "LAMQUEN" hợp lệ
            else if (couponCode === "LAMQUEN") {
              resultDiv.style.color = "green"; // Màu thông báo là xanh
              resultDiv.textContent = "Áp dụng mã giảm giá LAMQUEN thành công! Bạn được giảm 20K."; // Thông báo giảm giá cụ thể
            }
            // Kiểm tra mã "GIAM10" hợp lệ
            else if (couponCode === "GIAM10") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá GIAM10 thành công! Bạn được giảm 10%."; // Thông báo giảm phần trăm
            }
            // Kiểm tra mã "FREESHIP" hợp lệ
            else if (couponCode === "FREESHIP") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá FREESHIP thành công! Bạn được giảm 20K phí vận chuyển."; // Thông báo miễn phí vận chuyển
            }
            // Kiểm tra mã "XMAS24" hợp lệ
            else if (couponCode === "XMAS24") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá XMAS24 thành công! Bạn được giảm 10%."; // Thông báo giảm giá cho mã đặc biệt
            }
            // Nếu mã không hợp lệ
            else {
              resultDiv.style.color = "red";
              resultDiv.textContent = "Mã giảm giá này không hợp lệ."; // Thông báo mã sai
            }


            // Hiển thị thông báo giảm giá cho người dùng
            resultDiv.style.display = "block";
          }


          // Hàm áp dụng mã giảm giá từ các voucher được chọn sẵn
          function applyVoucher(couponCode) {
            // Lấy thẻ div dùng để hiển thị kết quả
            const resultDiv = document.getElementById("couponResult");


            // Kiểm tra nếu mã giảm giá rỗng
            if (couponCode === "") {
              resultDiv.style.color = "red"; // Màu đỏ cho thông báo lỗi
              resultDiv.textContent = "Hãy nhập mã giảm giá!"; // Thông báo nhắc nhở người dùng
            }
            // Kiểm tra mã "LAMQUEN" hợp lệ
            else if (couponCode === "LAMQUEN") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá LAMQUEN thành công! Bạn được giảm 20K."; // Thông báo cụ thể
            }
            // Kiểm tra mã "GIAM10" hợp lệ
            else if (couponCode === "GIAM10") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá GIAM10 thành công! Bạn được giảm 10%."; // Thông báo giảm phần trăm
            }
            // Kiểm tra mã "FREESHIP" hợp lệ
            else if (couponCode === "FREESHIP") {
              resultDiv.style.color = "green";
              resultDiv.textContent = "Áp dụng mã giảm giá FREESHIP thành công! Bạn được giảm 20K phí vận chuyển."; // Thông báo giảm phí ship
            }
            // Nếu mã không hợp lệ
            else {
              resultDiv.style.color = "red";
              resultDiv.textContent = "Mã giảm giá này không tồn tại."; // Thông báo mã không đúng
            }


            // Hiển thị kết quả trên màn hình
            resultDiv.style.display = "block";
          }
        </script>
      </div>


      <!-- Thông tin thanh toán chi tiết -->
      <div class="checkout__group">


        <!-- Khai báo và tùy chỉnh CSS cho các thành phần hiển thị -->
        <style>
          .order__table thead {
            background-color: #ff66b3;
            /* Màu nền của tiêu đề bảng là màu hồng nhạt */
          }


          .order__table thead th {
            color: white !important;
            /* Màu chữ của tiêu đề bảng là trắng */
            padding: 10px;
            /* Khoảng cách bên trong giữa chữ và viền */
            text-align: left;
            /* Căn chữ sang trái */
          }


          .product-link {
            color: #ff69b4;
            /* Màu hồng rực cho liên kết */
            text-decoration: none;
            /* Loại bỏ gạch chân mặc định */
            transition: color 0.5s ease;
            /* Tạo hiệu ứng mượt khi màu thay đổi */
          }


          .quantity {
            max-width: 60px;
            /* Đặt chiều rộng tối đa cho ô nhập số lượng */
            padding-block: 0.5rem;
            /* Khoảng cách trên dưới của nội dung */
            padding-inline: 1rem 0.5rem;
            /* Khoảng cách hai bên ô nhập liệu */
            border-radius: 0.25rem;
            /* Bo tròn các góc của ô nhập liệu */
          }
        </style>


        <!-- Tiêu đề của phần thông tin thanh toán -->
        <h3 class="section__title" style="font-size: 20px; margin-top: 5px;">TỔNG ĐƠN HÀNG</h3>


        <!-- Bảng hiển thị danh sách sản phẩm trong giỏ hàng -->
<table class="order__table">
  <thead>
    <tr>
      <th style="width: 20%;">Hình ảnh</th>
      <th style="width: 35%;">Tên sản phẩm</th>
      <th style="width: 20%;">Số lượng</th>
      <th style="width: 25%;">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $total = 0; // Tổng tiền hàng


    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0):
        foreach ($_SESSION['cart'] as $item):
            $item_total = $item['price'] * $item['quantity'];
            $total += $item_total;
    ?>
    <tr>
      <td>
        <img src="<?= htmlspecialchars($item['image']) ?>" alt="" class="table__img" />
      </td>
      <td>
        <h3 class="table__title">
          <a href="details.php" class="product-link"><?= htmlspecialchars($item['name']) ?></a>
        </h3>
      </td>
      <td class="quantity-col">
        <input type="number" value="<?= intval($item['quantity']) ?>" class="quantity" />
        <i class="fi fi-rs-trash table__trash"></i>
      </td>
      <td>
        <span class="table__price"><?= number_format($item_total, 0, ',', '.') ?> VND</span>
      </td>
    </tr>
    <?php
        endforeach;
    else:
    ?>
    <tr>
      <td colspan="4" style="text-align: center;">Giỏ hàng trống</td>
    </tr>
    <?php endif; ?>


    <?php if (!empty($_SESSION['cart'])): ?>
    <!-- Hàng tổng tiền -->
    <tr>
      <td colspan="3"><span class="order__subtitle">Tổng tiền</span></td>
      <td><span class="table__price"><?= number_format($total, 0, ',', '.') ?> VND</span></td>
    </tr>
<tr>
  <td colspan="3"><span class="order__subtitle">Quận giao hàng</span></td>
  <td><span class="table__price"><?= htmlspecialchars($selected_district) ?></span></td>
</tr>
<tr>
  <td colspan="3"><span class="order__subtitle">Phí vận chuyển</span></td>
  <td><span class="table__price"><?= number_format($shipping_fee, 0, ',', '.') ?> VND</span></td>
</tr>
<tr>
  <td colspan="3"><span class="order__grand-total">Thành tiền</span></td>
  <td><span class="order__grand-total"><?= number_format($final_total, 0, ',', '.') ?> VND</span></td>
</tr>


    <?php endif; ?>
  </tbody>
</table>


      <div class="paypal-container">
    <h3> Thanh toán bằng PayPal:</h3>
    <div id="paypal-button-container"></div>
  </div>

   <h3>Thanh toán bằng MOMO:</h3>

<style>
  .momo-form {
    margin-bottom: 15px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }

  .full-width-btn {
    width: 100%;
    display: block;
    text-align: center;
    height: 48px;
    line-height: 48px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }

  h3 {
    margin-top: 20px;
    margin-bottom: 20px; /* Tạo khoảng cách dưới tiêu đề */
  }
</style>

<form method="post" action="xulythanhtoanmomo.php" target="_blank" enctype="application/x-www-form-urlencoded" class="momo-form">
  <input type="hidden" name="amount" value="<?php echo $final_total; ?>">
  <input type="hidden" name="orderInfo" value="Thanh toán đơn hàng tại CHICCHARM">
  <input type="submit" name="momo" value="Thanh Toán MoMo QR Code" class="btn btn-danger full-width-btn">
</form>

<form method="post" action="xulythanhtoanmomoatm.php" target="_blank" enctype="application/x-www-form-urlencoded" class="momo-form">
  <input type="hidden" name="amount" value="<?php echo $final_total; ?>">
  <input type="hidden" name="orderInfo" value="Thanh toán đơn hàng tại CHICCHARM">
  <input type="submit" name="momo" value="Thanh Toán MoMo ATM" class="btn btn-danger full-width-btn">
</form>

  </section>

  



  <!--========== Hiển thị sản phẩm gợi ý ===============>-->
  <section class="products container section--lg">
    <!-- Tiêu đề của danh mục sản phẩm -->
    <h3 class="section__title">
      <span style="font-family:Cambria, serif; font-size: 20px; line-height: 2.5">SẢN PHẨM MUA KÈM</span>
      <!-- Mô tả phụ giải thích thêm -->
      <p class="section__subtitle" style="margin-left: 0; text-align: left;">
        Chic Gợi Ý Các Sản Phẩm Mua Kèm <i class="fas fa-tag"></i>
      </p>


      <!-- Container chia danh sách sản phẩm thành dạng lưới -->
      <div class="products__container grid">
        <!-- Sản phẩm thứ nhất -->
        <div class="product__item">
          <!-- Khu vực chứa banner của sản phẩm, bao gồm ảnh và các nút hành động -->
          <div class="product__banner">
            <!-- Liên kết đến trang chi tiết sản phẩm -->
            <a href="details.php" class="product__images">
              <!-- Ảnh mặc định -->
              <img src="assets/img/product20.1.png" alt="" class="product__img default" />
              <!-- Ảnh hiển thị khi hover -->
              <img src="assets/img/product13.2.png" alt="" class="product__img hover" />
            </a>
            <!-- Các nút hành động của sản phẩm -->
            <div class="product__actions">
              <!-- Liên kết đến cửa hàng -->
              <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                <i class="fa-solid fa-up-right-from-square"></i>
              </a>
              <!-- Nút thêm vào danh sách yêu thích -->
              <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>
            <!-- Nhãn trạng thái sản phẩm (ví dụ: "Hot") -->
            <div class="product__badge light-pink">Hot</div>
          </div>


          <!-- Nội dung chi tiết của sản phẩm -->
          <div class="product__content">
            <!-- Loại sản phẩm -->
            <span class="product__category">Kẹp vuông</span>
            <!-- Tên sản phẩm -->
            <a href="details.php">
              <h3 class="product__title">Kẹp Giấc Mơ Hoa</h3>
            </a>
            <!-- Đánh giá sản phẩm -->
            <div class="product__rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
              <span> (89)</span>
            </div>
            <!-- Giá sản phẩm -->
            <div class="product__price flex">
              <span class="new__price">129.000 VND</span>
            </div>
            <!-- Nút thêm vào giỏ hàng -->
            <a href="#" class="action__btn cart__btn" aria-label="Thêm vào Giỏ hàng" data-inventory="11">
              <i class="fi fi-rs-shopping-bag-add"></i>
            </a>
          </div>
        </div>


        <!-- Sản phẩm thứ hai -->
        <div class="product__item">
          <div class="product__banner">
            <a href="details.php" class="product__images">
              <img src="assets/img/product7.1.png" alt="" class="product__img default" />
              <img src="assets/img/product7.2.png" alt="" class="product__img hover" />
            </a>
            <div class="product__actions">
              <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                <i class="fa-solid fa-up-right-from-square"></i>
              </a>
              <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>
            <div class="product__badge light-green">-22%</div>
          </div>
          <div class="product__content">
            <span class="product__category">Kẹp nhỏ</span>
            <a href="details.php">
              <h3 class="product__title">Kẹp Trái Tim Rực Rỡ</h3>
            </a>
            <div class="product__rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
              <span> (17)</span>
            </div>
            <div class="product__price flex">
              <span class="new__price">46.800 VND</span>
              <span class="old__price">60.000 VND</span>
            </div>
            <a href="#" class="action__btn cart__btn" aria-label="Thêm vào Giỏ hàng" data-inventory="56">
              <i class="fi fi-rs-shopping-bag-add"></i>
            </a>
          </div>
        </div>


        <!-- Sản phẩm thứ ba -->
        <div class="product__item">
          <div class="product__banner">
            <a href="details.php" class="product__images">
              <img src="assets/img/product18.1.png" alt="" class="product__img default" />
              <img src="assets/img/product18.2.png" alt="" class="product__img hover" />
            </a>
            <div class="product__actions">
              <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                <i class="fa-solid fa-up-right-from-square"></i>
              </a>
              <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>
            <div class="product__badge light-orange">Hot</div>
          </div>
          <div class="product__content">
            <span class="product__category">Kẹp tròn</span>
            <a href="details.php">
              <h3 class="product__title">Kẹp Trái Tim Đại Dương</h3>
            </a>
            <div class="product__rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
              <span> (10)</span>
            </div>
            <div class="product__price flex">
              <span class="new__price">67.000 VND</span>
            </div>
            <a href="#" class="action__btn cart__btn" aria-label="Thêm vào Giỏ hàng" data-inventory="28">
              <i class="fi fi-rs-shopping-bag-add"></i>
            </a>
          </div>
        </div>
      </div>
  </section>


  <!--=============== PHẦN ĐĂNG KÝ NHẬN THƯ ===============-->
  <section class="newsletter section home__newsletter">
    <!-- Container chính chứa nội dung của phần newsletter -->
    <div class="newsletter__container container grid">
      <!-- Tiêu đề của phần newsletter -->
      <h3 class="newsletter__title flex">
        <img src="./assets/img/icon-email.svg" alt="" class="newsletter__icon" />
        ĐĂNG KÝ ĐỂ NHẬN TIN
      </h3>
      <!-- Mô tả ngắn khuyến khích người dùng đăng ký -->
      <p class="newsletter__description">
        ...và nhận 10% giảm giá cho lần mua đầu tiên.
      </p>
      <!-- Biểu mẫu để người dùng nhập email và nhấn đăng ký -->
      <form action="" class="newsletter__form">
        <!-- Hộp nhập liệu để nhập email -->
        <input type="text" placeholder="Nhập Email của bạn" class="newsletter__input" />
        <!-- Nút đăng ký -->
        <button type="submit" class="newsletter__btn">Đăng ký</button>
      </form>
    </div>
  </section>
  </main>


  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <!-- Container chính của phần footer -->
    <div class="footer__container grid">
      <!-- Phần thông tin liên hệ -->
      <div class="footer__content">
        <a href="index.php" class="footer__logo">
          <img src="./assets/img/logo.svg" alt="" class="footer__logo-img" />
        </a>
        <h4 class="footer__subtitle">Liên hệ</h4>
        <p class="footer__description">
          <span>Địa chỉ:</span> 279 Nguyễn Tri Phương, Phường 5, Quận 10
        </p>
        <p class="footer__description">
          <span>SĐT:</span> +01 2222 365 /(+91) 01 2345 6789
        </p>
        <p class="footer__description">
          <span>Thời gian:</span> 10:00 - 18:00, T2-T7
        </p>
        <div class="footer__social">
          <h4 class="footer__subtitle">Theo dõi chúng tôi</h4>
          <div class="footer__links flex">
            <a href="https://www.facebook.com/share/1784WE225P/?mibextid=LQQJ4d">
              <img src="./assets/img/icon-facebook.svg" alt="" class="footer__social-icon" />
            </a>
            </a>
            <a href="https://www.instagram.com/chiccharm.official_?igsh=MXJpM3pqZDFvMmlzaw==">
              <img src="./assets/img/icon-instagram.svg" alt="" class="footer__social-icon" />
            </a>
          </div>
        </div>
      </div>


      <!-- Phần liên kết nhanh -->
      <div class="footer__content">
        <h3 class="footer__title">Địa chỉ</h3>
        <ul class="footer__links">
          <li><a href="#" class="footer__link">Về Chúng Tôi</a></li>
          <li><a href="#" class="footer__link">Chính Sách Vận Chuyển</a></li>
          <li><a href="#" class="footer__link">Chính Sách Riêng Tư</a></li>
          <li><a href="#" class="footer__link">Điều Khoản & Điều Kiện</a></li>
          <li><a href="#" class="footer__link">Liên Hệ</a></li>
          <li><a href="#" class="footer__link">Trung Tâm Hỗ Trợ</a></li>
        </ul>
      </div>


      <!-- Phần thông tin tài khoản của khách hàng -->
      <div class="footer__content">
        <h3 class="footer__title">Tài Khoản</h3>
        <ul class="footer__links">
          <li><a href="login.php" class="footer__link">Đăng Nhập</a></li>
          <li><a href="cart.php" class="footer__link">Giỏ Hàng</a></li>
          <li><a href="wishlist.php" class="footer__link">Wishlist</a></li>
          <li><a href="accounts.php" class="footer__link">Đơn Hàng</a></li>
          <li><a href="#" class="footer__link">Giúp Đỡ</a></li>
          <li><a href="cart.php" class="footer__link">Đặt Hàng</a></li>
        </ul>
      </div>
      <!-- Phần phương thức thanh toán -->
      <div class="footer__content">
        <h3 class="footer__title">Phương Thức Thanh Toán</h3>
        <img src="./assets/img/payment-method.png" alt="" class="payment__img" />
      </div>
    </div>
  </footer>


  <!--=============== SWIPER JS ===============-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>




  <script>
    //========= LẮNG NGHE SỰ KIỆN CUỘN TRANG =====//
    window.onscroll = function () {
      // Lấy thanh menu
      var nav = document.querySelector('.nav');


      // Kiểm tra vị trí cuộn của trang
      if (window.scrollY > 100) { // Khi cuộn xuống 100px
        nav.classList.add('fixed-menu'); // Thêm lớp cố định cho nav
      } else {
        nav.classList.remove('fixed-menu'); // Bỏ lớp cố định khi lên đầu trang
      }
    };


  </script>


  <script>
    //=============== TẠO ALERT KHI ĐẶT HÀNG ===============//
    document.addEventListener("DOMContentLoaded", function () {
      const orderButton = document.querySelector(".order-button");


      orderButton.addEventListener("click", function () {
        alert("Đơn hàng của bạn đã được đặt thành công!");
      });
    });
  </script>


  <script>
    //=========TẠO ALERT KHI NHẤN VÀO NÚT THÊM VÀO WISHLIST=====//
  document.addEventListener('DOMContentLoaded', function() {
  // Lấy tất cả các nút "Thêm vào Wishlist"
  const addToWishlistBtns = document.querySelectorAll('.action__btn[aria-label="Thêm vào Wishlist"]');
 
  addToWishlistBtns.forEach(function(button) {
    button.addEventListener('click', function(e) {
      e.preventDefault(); // Ngừng hành động mặc định của liên kết


      // Tạo phần tử thông báo
      const successMessage = document.createElement('div');
      successMessage.textContent = 'Đã thêm vào Wishlist thành công!';
      successMessage.classList.add('success-message'); // Thêm lớp CSS cho hiệu ứng


      // Thêm thông báo vào body
      document.body.appendChild(successMessage);


      // Hiển thị thông báo với hiệu ứng
      setTimeout(function() {
        successMessage.classList.add('show');
      }, 50); // Hiển thị với hiệu ứng sau khi tạo phần tử


      // Tự động ẩn sau 3 giây
      setTimeout(function() {
        successMessage.classList.remove('show'); // Ẩn thông báo với hiệu ứng
      }, 2000); // Ẩn sau 3 giây
    });
  });
});
  </script>


  <script>
    //=========TẠO ALERT KHI NHẤN VÀO NÚT THÊM VÀO GIỎ HÀNG=====//
document.addEventListener('DOMContentLoaded', function() {
  // Chọn tất cả các nút "Thêm vào Giỏ hàng"
  const addToCartBtns = document.querySelectorAll('.action__btn[aria-label="Thêm vào Giỏ hàng"]');


  addToCartBtns.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      event.preventDefault(); // Ngừng hành động mặc định của liên kết


      // Lấy số lượng tồn kho từ thuộc tính data-inventory
      const inventory = btn.getAttribute("data-inventory") || 0;


      // Tạo phần tử thông báo
      const successMessage = document.createElement('div');
      successMessage.innerHTML = `Đã thêm vào giỏ hàng thành công!<br>Còn lại ${inventory} sản phẩm trong kho.`;
     
      successMessage.classList.add('success-message'); // Thêm lớp CSS cho hiệu ứng


      // Thêm thông báo vào body
      document.body.appendChild(successMessage);


      // Hiển thị thông báo với hiệu ứng
      setTimeout(function() {
        successMessage.classList.add('show');
      }, 50); // Hiển thị với hiệu ứng sau khi tạo phần tử


      // Tự động ẩn sau 3 giây
      setTimeout(function() {
        successMessage.classList.remove('show'); // Ẩn thông báo với hiệu ứng
      }, 2000); // Ẩn sau 3 giây
    });
  });
});
  </script>


  <script>
    //======== Tạo Alert "Đã xoá sản phẩm"=====//
    // Chọn tất cả các biểu tượng thùng rác
    const trashIcons = document.querySelectorAll('.fi.fi-rs-trash.table__trash');


    // Lặp qua từng biểu tượng và thêm sự kiện click
    trashIcons.forEach((trashIcon) => {
      trashIcon.addEventListener('click', (event) => {
        // Hiển thị hộp thoại xác nhận
        const isConfirmed = confirm("Bạn có chắc muốn xoá sản phẩm không?");


        if (isConfirmed) {
          // Nếu người dùng bấm "Xác nhận", xóa dòng chứa sản phẩm
          alert("Sản phẩm đã được xoá khỏi trang thanh toán.");
          const row = event.target.closest('tr'); // Tìm dòng cha gần nhất
          row.remove(); // Xóa dòng khỏi bảng
        } else {
          // Nếu người dùng bấm "Huỷ", đóng hộp thoại
          alert("Hành động đã bị huỷ.");
        }
      });
    });
  </script>
  
<script>
    function calculateTotalUSD() {
      const vnd = <?= json_encode($final_total) ?>;
      const usd = (vnd / 24000).toFixed(2);
      return usd;
    }

    paypal.Buttons({
      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: calculateTotalUSD()
            }
          }]
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          alert('Thanh toán thành công cho ' + details.payer.name.given_name);
          console.log(details);
        });
      }
    }).render('#paypal-button-container');
  </script>

</body>


</html>
