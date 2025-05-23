<?php
session_start(); // nếu chưa có thì thêm vào đầu file


// Xử lý khi cập nhật số lượng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_quantity'])) {
    $productId = $_POST['update_quantity'];
    $newQuantity = max(1, intval($_POST['quantity'])); // không cho nhỏ hơn 1


    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $newQuantity;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_shipping'])) {
    $province = $_POST['province'] ?? '';
    $district = $_POST['district'] ?? '';


    // Tính phí vận chuyển dựa trên quận
    switch ($district) {
        case 'Quận 1':
        case 'Quận 2':
        case 'Quận 3':
        case 'Quận 4':
        case 'Quận 5':
        case 'Quận 10':
        case 'Quận 7':
        case 'Quận 8':
        case 'Quận 6':
        $shipping_fee = 15000;
            break;
        default:
            $shipping_fee = 20000;
    }


    // Lưu vào SESSION để dùng ở checkout.php
    $_SESSION['selected_district'] = $district;
    $_SESSION['shipping_fee'] = $shipping_fee;
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
        <?php
        // Nếu có yêu cầu xóa sản phẩm
        if (isset($_GET['remove']) && isset($_SESSION['cart'][$_GET['remove']])) {
        unset($_SESSION['cart'][$_GET['remove']]);
       }
        ?>


       <a href="cart.php" class="header__action-btn" title="Giỏ hàng">
       <img src="assets/img/icon-cart.svg" alt="" />
       <span class="count">


       <?php
      $cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; // Kiểm tra và lấy số lượng sản phẩm trong giỏ hàng
      echo $cart_count;
      ?>
       </span>
       </a>


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
    <span class="promo-text"> Đăng Ký Thành Viên Để Nhận 10% Giảm Giá Cho Lần Mua Đầu Tiên </span>
    <span class="star">&#9733;</span>
  </div>


  <!--=============== TIÊU ĐỀ GIỎ HÀNG ===============-->
  <div class="cart-page">
    <!-- Phần tiêu đề chính của trang giỏ hàng -->
    <div class="header">
      <!-- Tiêu đề "GIỎ HÀNG" với kiểu chữ nổi bật -->
      <h1 class="header-cart"
        style="font-size: 35px; text-align: center; color:hsla(328, 100%, 57%, 0.712); margin-top: 50px; margin-bottom: 30px;">
        GIỎ HÀNG</h1>
      <!-- Đường dẫn trở về trang mua sắm -->
      <a href="shop.php" class="continue-shopping" title="Continue Shopping">✨Tiếp tục mua sắm✨</a>
    </div>
  </div>


  <!--=============== CART ===============-->
  <section class="cart section--lg container">
    <style>
      /* Thêm khoảng đệm trên và dưới cho phần tử có class .section--lg */
      .section--lg {
        padding-block: 2.5rem;
      }


      /* Cấu hình font chữ mặc định cho toàn bộ trang Giỏ hàng */
      body {
        font-family: Arial, sans-serif;
        /* Chọn font Arial làm font mặc định */
        margin: 0;
        /* Loại bỏ khoảng cách bên ngoài của phần tử body */
        padding: 0;
        /* Loại bỏ khoảng cách bên trong của phần tử body */
      }


      /* Cấu hình cho phần tử chứa bảng */
      .table-container {
        width: 100%;
        /* Chiếm hết chiều rộng của phần tử chứa */
        overflow-x: auto;
        /* Nếu bảng rộng hơn, sẽ có thanh cuộn ngang */
        margin: 20px auto;
        /* Căn giữa và thêm khoảng cách 20px ở trên và dưới */
        padding: 10px;
        /* Thêm padding 10px cho phần tử */
        box-sizing: border-box;
        /* Đảm bảo padding không làm tăng kích thước phần tử */
      }


      /* Cấu hình bảng */
      table {
        width: 100%;
        /* Bảng chiếm toàn bộ chiều rộng của phần tử chứa */
        max-width: 1200px;
        /* Bảng không rộng quá 1200px */
        border-collapse: collapse;
        /* Loại bỏ khoảng cách giữa các đường biên */
        margin: 0 auto;
        /* Căn giữa bảng */
        background-color: #fff;
        /* Đặt màu nền của bảng là màu trắng */
      }


      /* Cấu hình cho các th (thẻ tiêu đề của bảng) và td (thẻ dữ liệu của bảng) */
      th,
      td {
        text-align: center;
        /* Căn giữa nội dung trong th và td */
        padding: 15px;
        /* Thêm khoảng đệm 15px cho th và td */
      }


      /* Cấu hình cho th (tiêu đề bảng) */
      th {
        font-size: 20px;
        /* Đặt kích thước font chữ là 20px */
        background-color: #f982bd;
        /* Màu nền là hồng đậm */
        color: white;
        /* Màu chữ là trắng */
      }


      /* Cấu hình cho các cột hình ảnh */
      th.img-col,
      td.img-col {
        width: 20%;
        /* Đặt chiều rộng của cột hình ảnh là 20% */
      }


      /* Cấu hình cho các cột tên sản phẩm */
      th.name-col,
      td.name-col {
        width: 40%;
        /* Đặt chiều rộng của cột tên sản phẩm là 40% */
      }


      /* Cấu hình cho các cột giá tiền */
      th.price-col,
      td.price-col {
        width: 20%;
        /* Đặt chiều rộng của cột giá tiền là 20% */
      }


      /* Cấu hình cho các cột số lượng */
      th.quantity-col,
      td.quantity-col {
        width: 20%;
        /* Đặt chiều rộng của cột số lượng là 20% */
      }


      /* Cấu hình đường biên của các hàng trong bảng */
      tr {
        border: 2px solid pink;
        /* Đặt đường viền của hàng là 2px và màu hồng */
      }


      /* Cấu hình cho các mô tả, giá, và số lượng */
      .table__description,
      .table__price,
      .quantity {
        font-size: 15px;
        /* Đặt kích thước font chữ là 15px */
      }


      /* Media query cho màn hình có độ rộng từ 1025px trở lên */
      @media screen and (min-width: 1025px) {


        th,
        td {
          padding: 15px;
          /* Thêm padding 15px cho th và td */
          font-size: 20px;
          /* Đặt kích thước font chữ là 20px */
        }
      }


      /* Media query cho màn hình có độ rộng từ 1024px trở xuống */
      @media screen and (max-width: 1024px) {


        th,
        td {
          padding: 12px;
          /* Thêm padding 12px cho th và td */
          font-size: 16px;
          /* Đặt kích thước font chữ là 16px */
        }
      }


      /* Media query cho màn hình có độ rộng từ 768px trở xuống */
      @media screen and (max-width: 768px) {


        th,
        td {
          padding: 8px;
          /* Thêm padding 8px cho th và td */
          font-size: 14px;
          /* Đặt kích thước font chữ là 14px */
        }
      }


      /* Media query cho màn hình có độ rộng từ 480px trở xuống */
      @media screen and (max-width: 480px) {


        th,
        td {
          padding: 5px;
          /* Thêm padding 5px cho th và td */
          font-size: 12px;
          /* Đặt kích thước font chữ là 12px */
        }
      }


      /* Cấu hình cho liên kết sản phẩm */
      .product-link {
        color: #ff69b4;
        /* Màu chữ mặc định là màu hồng rực rỡ */
        text-decoration: none;
        /* Loại bỏ gạch chân mặc định */
        transition: color 0.5s ease;
        /* Hiệu ứng mượt khi thay đổi màu chữ */
      }


      /* Cấu hình cho tiêu đề bảng */
      .table__title {
        font-size: 17px;
        /* Đặt kích thước font chữ là 17px */
        line-height: 1.5;
        /* Đặt chiều cao dòng là 1.5 */
        color: #ff69b4;
        /* Màu chữ là màu hồng */
        display: inline-block;
        /* Hiển thị dưới dạng inline-block */
        padding: 0.375rem 0.75rem;
        /* Thêm padding cho tiêu đề */
        position: relative;
        /* Đặt vị trí của phần tử là relative */
        font-weight: bolder;
        /* Đặt font chữ đậm */
        overflow: hidden;
        /* Ẩn phần nội dung tràn ra ngoài */
        z-index: 1;
        /* Đảm bảo nội dung không bị che khuất */
        transition: color 0.5s ease;
        /* Hiệu ứng mượt khi thay đổi màu chữ */
      }


      /* Hiệu ứng hover cho tiêu đề bảng */
      .table__title::before {
        content: '';
        /* Tạo một phần tử trước khi tiêu đề */
        position: absolute;
        /* Đặt vị trí của phần tử là absolute */
        top: 0;
        left: 0;
        width: 0%;
        /* Đặt chiều rộng là 0% ban đầu */
        height: 100%;
        /* Chiều cao bằng 100% */
        background-color: #ff69b4;
        /* Màu nền là màu hồng */
        z-index: -1;
        /* Đảm bảo phần tử này không che khuất nội dung */
        transition: width 0.5s ease;
        /* Hiệu ứng mở rộng từ trái sang phải */
      }


      /* Khi hover, phần tử trước sẽ mở rộng đầy đủ */
      .table__title:hover::before {
        width: 100%;
        /* Mở rộng chiều rộng đến 100% khi hover */
      }


      /* Khi hover, thay đổi màu chữ của liên kết thành màu trắng */
      .table__title:hover a {
        color: white !important;
        /* Đảm bảo màu chữ trắng khi hover */
      }


      /* Khi hover, thay đổi màu chữ của tiêu đề thành màu trắng */
      .table__title:hover {
        color: white;
        /* Đổi màu chữ thành trắng khi hover */
      }


      /* Cấu hình cho các cột trong giỏ hàng */
      .cart__columns {
        display: flex;
        /* Sử dụng flexbox để tạo các cột song song */
        justify-content: center;
        /* Căn giữa các cột */
        gap: 50px;
        /* Khoảng cách giữa các cột */
      }


      /* Cấu hình cho các phần tử giỏ hàng (vận chuyển, tổng tiền) */
      .cart__shipping,
      .cart__total-info {
        width: 50%;
        /* Mỗi phần tử chiếm 50% chiều rộng */
      }


      /* Cấu hình cho phần vận chuyển */
      .cart__shipping {
        padding: 25px;
        /* Thêm padding 25px */
        background-image: url('assets/img/product15.3.png');
        /* Thêm hình ảnh nền */
        background-size: cover;
        /* Làm cho hình ảnh phủ kín toàn bộ */
        background-position: center;
        /* Canh giữa hình ảnh */
        background-repeat: no-repeat;
        /* Không lặp lại hình ảnh */
        color: white;
        /* Màu chữ trắng */
        border-radius: 8px;
        /* Bo góc cho phần tử */
      }


      /* Cấu hình cho mô tả và ghi chú vận chuyển */
      .cart__shipping-description,
      .cart__shipping-note {
        color: white;
        /* Màu chữ trắng */
        font-size: 14px;
        /* Kích thước font chữ là 14px */
        margin-bottom: 20px;
        /* Thêm khoảng cách dưới */
      }


      /* Cấu hình cho biểu mẫu vận chuyển */
      .cart__shipping-form {
        background-color: rgba(0, 0, 0, 0.5);
        /* Lớp phủ mờ phía trên nền */
        padding: 15px;
        /* Thêm padding cho form */
        border-radius: 8px;
        /* Bo góc form */
        margin-bottom: 20px;
        /* Khoảng cách dưới form */
      }


      /* Cấu hình cho nhãn form */
      .form-group label {
        display: block;
        /* Hiển thị nhãn dưới dạng block */
        font-weight: bold;
        /* Làm đậm chữ */
        font-size: 14px;
        /* Kích thước font chữ là 14px */
        margin-bottom: 5px;
        /* Khoảng cách dưới nhãn */
      }


      /* Cấu hình cho các trường chọn và nhập trong form */
      .cart__shipping-select,
      .cart__shipping-input {
        width: 100%;
        /* Chiếm hết chiều rộng */
        padding: 10px;
        /* Thêm padding 10px */
        font-size: 14px;
        /* Kích thước font chữ là 14px */
        border: 1px solid #ddd;
        /* Đặt đường viền mờ */
        border-radius: 4px;
        /* Bo góc */
      }


      /* Cấu hình cho nút vận chuyển */
      .cart__shipping-btn {
        background-color: #ff69b4;
        /* Màu nền là hồng */
        color: white;
        /* Màu chữ trắng */
        padding: 12px;
        /* Thêm padding */
        font-size: 16px;
        /* Kích thước font chữ là 16px */
        border: none;
        /* Không có đường viền */
        border-radius: 4px;
        /* Bo góc cho nút */
        cursor: pointer;
        /* Hiển thị con trỏ tay khi di chuột lên nút */
      }


      /* Cấu hình cho hiệu ứng hover của nút vận chuyển */
      .cart__shipping-btn:hover {
        background-color: #ff3b8b;
        /* Đổi màu nền khi hover */
      }


      /* Cấu hình cho ghi chú vận chuyển */
      .cart__shipping-note {
        font-size: 12px;
        /* Kích thước font chữ là 12px */
        margin-top: 15px;
        /* Khoảng cách trên */
      }


      /* Cấu hình cho bảng tổng hợp trong giỏ hàng */
      .cart__total-table {
        width: 100%;
        /* Chiếm toàn bộ chiều rộng */
        border-collapse: collapse;
        /* Xóa khoảng cách giữa các ô */
      }


      /* Cấu hình cho các ô trong bảng tổng hợp */
      .cart__total-table td {
        padding: 10px;
        /* Thêm padding 10px cho ô */
        font-size: 14px;
        /* Kích thước font chữ là 14px */
      }


      /* Cấu hình cho ô tổng giá trị */
      .cart__total-value {
        font-weight: bold;
        /* Làm đậm chữ */
        font-size: 18px;
        /* Kích thước font chữ là 18px */
      }


      /* Cấu hình cho ô tổng cộng */
      .cart__total-summary {
        font-weight: bold;
        /* Làm đậm chữ */
        font-size: 16px;
        /* Kích thước font chữ là 16px */
        color: #ff69b4;
        /* Màu chữ hồng */
      }
    </style>


    <!-- Phần tử div chứa bảng sản phẩm -->
    <div class="table-container">
      <!-- Tạo bảng với thông tin sản phẩm trong giỏ hàng -->
      <table>
        <!-- Đầu bảng, chứa các tiêu đề của các cột -->
        <thead>
          <tr>
            <!-- Tiêu đề cột Hình ảnh -->
            <th class="img-col">Hình ảnh</th>
            <!-- Tiêu đề cột Tên sản phẩm -->
            <th class="name-col">Tên sản phẩm</th>
            <!-- Tiêu đề cột Giá tiền -->
            <th class="price-col">Giá tiền</th>
            <!-- Tiêu đề cột Số lượng -->
            <th class="quantity-col">Số lượng</th>
          </tr>
        </thead>
       <tbody>


      <?php if (!empty($_SESSION['cart'])): ?>
      <?php foreach ($_SESSION['cart'] as $productId => $item): ?>
      <tr>
         <td class="img-col">
           <img src="<?= htmlspecialchars($item['image']) ?>" alt="" class="table__img" />
         </td>
         <td class="name-col">
           <h3 class="table__title">
             <a href="details.php?id=<?= $productId ?>" class="product-link"><?= htmlspecialchars($item['name']) ?></a>
           </h3><br>
           <p class="table__description"><?= htmlspecialchars($item['description']) ?></p>
         </td>
         <td class="price-col"><span class="table__price"><?= number_format($item['price']) ?> VND</span></td>
         <td class="quantity-col">
               <form method="post" action="cart.php" class="update-form">
  <input type="hidden" name="update_quantity" value="<?= $productId ?>">
  <input type="number" name="quantity" value="<?= $item['quantity'] ?>" class="quantity" min="1" onchange="this.form.submit()" />
</form>
                   <a href="cart.php?remove=<?= $productId ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
  <i class="fi fi-rs-trash table__trash"></i>
</a>


         </td>
       </tr>


  <?php endforeach; ?>
<?php else: ?>


  <tr>
    <td colspan="4" style="text-align:center;">Giỏ hàng trống.</td>
  </tr>
<?php endif; ?>
</tbody>


      </table>
    </div>


    <!-- Phần tử div chứa nút hành động giỏ hàng -->
    <div class="cart__actions">
      <!-- Nút cập nhật giỏ hàng -->
      <a href="#" class="btn flex btn__md update-cart">
        <!-- Biểu tượng làm mới -->
        <i class="fi-rs-shuffle"></i> Cập nhật giỏ hàng
      </a>
    </div>
  </section>


  <?php
  $total_price = 0;
$shipping_fee = $_SESSION['shipping_fee'] ?? 0;


if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Tính tổng giá trị đơn hàng từ giỏ hàng
    foreach ($_SESSION['cart'] as $item) {
       $total_price += $item['price'] * $item['quantity'];
    }
}
?>






 <section>
    <!-- Phần tổng hợp giỏ hàng và tính toán phí vận chuyển -->
    <div class="cart__total">
        <!-- Cột bên trái chứa thông tin về phí vận chuyển và thuế -->
        <div class="cart__columns responsive-layout">
            <div class="cart__shipping">
                <!-- Tiêu đề phần Phí vận chuyển & Thuế -->
                <h3 class="section__title">PHÍ VẬN CHUYỂN & THUẾ</h3>
                <!-- Mô tả yêu cầu nhập địa chỉ để tính toán phí vận chuyển -->
                <p class="cart__shipping-description">Nhập Địa Chỉ Của Bạn Để Xem Phí Vận Chuyển Dự Kiến</p>


                <form method="post" class="cart__shipping-form">
    <div class="form-group">
        <label for="province">TỈNH/THÀNH PHỐ *</label>
        <select id="province" name="province" class="cart__shipping-select">
            <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
        </select>
    </div>


    <div class="form-group">
        <label for="district">QUẬN/HUYỆN *</label>
        <select id="district" name="district" class="cart__shipping-select">
            <option value="Quận 1">Quận 1</option>
            <option value="Quận 2">Quận 2</option>
            <option value="Quận 3">Quận 3</option>
            <option value="Quận 4">Quận 4</option>
            <option value="Quận 5">Quận 5</option>
            <option value="Quận 6">Quận 6</option>
            <option value="Quận 7">Quận 7</option>
            <option value="Quận 8">Quận 8</option>
            <option value="Quận 10">Quận 10</option>
            <option value="Quận 11">Quận 11</option>
            <option value="Quận 12">Quận 12</option>
            <option value="Quận Bình Thạnh">Quận Bình Thạnh</option>
            <option value="Quận Gò Vấp">Quận Gò Vấp</option>
            <option value="Quận Phú Nhuận">Quận Phú Nhuận</option>
            <option value="Huyện Nhà Bè">Huyện Nhà Bè</option>
            <option value="Huyện Bình Chánh">Huyện Bình Chánh</option>
            <option value="Huyện Củ Chi">Huyện Củ Chi</option>
        </select>
    </div>


    <div class="form-group">
        <label for="zip">MÃ ZIP </label>
        <input type="text" id="zip" name="zip" class="cart__shipping-input" />
    </div>


    <button type="submit" name="calculate_shipping" class="btn flex btn--md">
        <i class="fi fi-rs-box-alt"></i> TÍNH TOÁN PHÍ VẬN CHUYỂN
    </button>
</form>


                <!-- Lưu ý về phí vận chuyển chỉ mang tính dự kiến -->
                <p class="cart__shipping-note">
                    <strong>Lưu Ý:</strong> Đây chỉ là chi phí dự kiến. Để biết chính xác cước phí giao hàng, hãy chuyển đến
                    bước Thanh Toán.
                </p>
            </div>


           <div class="cart__shipping__total">
           <h3 class="section__title">TỔNG GIÁ TRỊ ĐƠN HÀNG</h3>
           <p class="cart__shipping-description">Vui Lòng Bấm Thanh Toán Để Biết Số Tiền Chính Xác</p>
    <table class="cart__total-table">
        <tr>
            <td class="cart__total-title">Tổng giá trị sản phẩm:</td>
            <td class="cart__total-price"><?php echo number_format($total_price, 0, ',', '.') ?> VND</td>
        </tr>
        <tr>
            <td class="cart__total-title">Phí vận chuyển:</td>
            <td class="cart__total-price"><?php echo number_format($shipping_fee, 0, ',', '.') ?> VND</td>
        </tr>
        <tr>
            <td class="cart__total-title"><strong>Tổng cộng:</strong></td>
            <td class="cart__total-price"><strong><?php echo number_format($total_price + $shipping_fee, 0, ',', '.') ?> VND</strong></td>
        </tr>
    </table>
 
    <a href="checkout.php" class="btn flex btn--md" style="margin-top: 20px;">
        <i class="fi fi-rs-box-alt"></i> THANH TOÁN
    </a>


    <p class="cart__shipping-note">
                    <strong>Lưu Ý:</strong> Đây chỉ là chi phí dự kiến. Để biết chính xác cước phí giao hàng, hãy chuyển đến
                    bước Thanh Toán.
                </p>
               
</div>


        </div>
    </div>
</section>


         
    <style>
/* Chỉnh hiệu ứng cho bảng tính toán tổng chi phí*/
.cart__shipping__total {
  background: rgba(0, 0, 0, 0.6); /* nền tối mờ như overlay */
  border-radius: 16px;
  padding: 28px 32px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease-in-out;
  color: #fff;
  backdrop-filter: blur(5px); /* hiệu ứng nền mờ */
}


.cart__shipping__total:hover {
  transform: translateY(-3px);
  box-shadow: 0 18px 30px rgba(0, 0, 0, 0.3);
}


.section__title {
  font-size: 1.3rem;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 16px;
  text-transform: uppercase;
  text-align: center;
}


.cart__total-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 50px;
  margin-bottom: 60px;
}


.cart__total-table td {
  padding: 50px 30px;
  font-size: 15px;
  color:rgb(0, 0, 0);
}


.cart__total-title {
  font-weight: 500;
}


.cart__total-price {
  font-weight: 600;
  text-align: right;
  color: #ff80b0;
}


.cart__total-final td {
  border-top: 1px solid #ffffff44;
  padding-top: 12px;
  font-size: 16px;
}


.btn.flex.btn--md {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12px 24px;
  background-color: #d63384;
  color: #fff;
  border: none;
  border-radius: 10px;
  text-decoration: none;
  font-weight: 600;
  font-size: 14px;
  width: 100%;
  transition: background-color 0.2s;
  box-shadow: 0 4px 12px rgba(214, 51, 132, 0.4);
}


.btn.flex.btn--md:hover {
  background-color: #c2186a;
}




     
/* Chọn nơi giao dự kiến*/
.cart__columns {
  display: flex;
  justify-content: space-between;
  gap: 24px;
  flex-wrap: wrap;
}


/* Cột bên trái & phải */
.cart__shipping,
.cart__shipping__total {
  flex: 1 1 45%;
  padding: 24px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
}


/* Tiêu đề */
.section__title {
  font-size: 1.25rem;
  font-weight: 600;
  color: rgba(221, 0, 96, 0.81);
  margin-bottom: 12px;
}


/* Mô tả & lưu ý */
.cart__shipping-description,
.cart__shipping-note {
  font-size: 0.95rem;
  color: white;
  margin-bottom: 16px;
  line-height: 1.4;
}


/* Nhóm form */
.form-group {
  margin-bottom: 16px;
}


/* Label */
.form-group label {
  display: block;
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 6px;
  color: #white;
}


/* Select & Input */
.cart__shipping-select,
.cart__shipping-input {
  width: 100%;
  padding: 10px 12px;
  font-size: 0.9rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  background-color: #f9f9f9;
  transition: border-color 0.3s ease;
}


.cart__shipping-select:focus,
.cart__shipping-input:focus {
  border-color: #fea9cb;
  outline: none;
}


/* Nút */
.btn {
  background-color: #fea9cb;
  color: #fff;
  padding: 10px 18px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background-color 0.3s ease;
  text-decoration: none;
}


.btn:hover {
  background-color: #f286ad;
}


/* Bảng tổng giá trị */
.cart__shipping__total p {
  font-size: 0.95rem;
  margin-bottom: 10px;
  color: #333;
}


.cart__shipping__total p strong {
  color: #444;
}




/* Media Queries */
@media (max-width: 768px) {
  .cart__columns {
    flex-direction: column;
  }


  .cart__shipping,
  .cart__shipping__total {
    width: 100%;
    padding: 20px;
  }


  .section__title {
    font-size: 1.1rem;
  }


  .btn {
    width: 100%;
    justify-content: center;
    font-size: 0.9rem;
  }
}


    </style>
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
    //=========LẮNG NGHE SỰ KIỆN CUỘN TRANG=====//
    window.onscroll = function () {
      // Lấy thanh menu
      var nav = document.querySelector('.nav');


      // Kiểm tra vị trí cuộn của trang
      if (window.scrollY > 100) { // Khi cuộn xuống >100px
        nav.classList.add('fixed-menu'); // Thêm lớp 'fixed-menu' để giữ menu cố định trên đầu trang
      } else {
        nav.classList.remove('fixed-menu'); // Xóa lớp 'fixed-menu' khi quay lại đầu trang
      }
    };
  </script>


  <script>
    //======== Tạo Alert "Giỏ hàng của bạn đã được cập nhật"=====//
    document.addEventListener("DOMContentLoaded", function () {
      const updateCartButton = document.querySelector(".update-cart");


      updateCartButton.addEventListener("click", function (event) {
        event.preventDefault(); // Ngăn hành động mặc định khi nhấp vào thẻ <a>
        alert("Giỏ hàng của bạn đã được cập nhật!");
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
          alert("Sản phẩm đã được xoá khỏi giỏ hàng.");
          const row = event.target.closest('tr'); // Tìm dòng cha gần nhất
          row.remove(); // Xóa dòng khỏi bảng
        } else {
          // Nếu người dùng bấm "Huỷ", đóng hộp thoại
          alert("Hành động đã bị huỷ.");
        }
      });
    });
  </script>


</body>


</html>