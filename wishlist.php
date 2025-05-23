<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />

    <!--=============== SWIPER CSS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <style>
       /* Hiệu ứng chuyển động màu chữ */
/* Hiệu ứng chuyển động gradient và chiếu sáng mạnh */
.intense-sparkle {
  font-weight: bold;
  font-size: 16px;
  text-decoration: none;
  background: linear-gradient(90deg, #f3e458, #f0ffa5, #ff93c7, #ff00aa, #ffa0d0);
  background-size: 300% 300%;
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text; /* Hỗ trợ WebKit */
  animation: intenseColor 1.5s linear infinite, sparkleEffect 0.5s ease-in-out infinite;
  position: relative; /* Để thêm hiệu ứng ánh sáng */
}

/* Tạo chuyển động gradient nhanh */
@keyframes intenseColor {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

 /* CSS cho khung chứa dòng chữ và ngôi sao */
 .shipping-promo {
     margin-top: 150px;
     margin-bottom: -80px;
     display: flex; /* Sử dụng flexbox để căn chỉnh các phần tử */
     justify-content: center; /* Căn giữa nội dung */
     align-items: center; /* Căn giữa theo chiều dọc */
     font-size: 16px; /* Kích thước chữ */
     background-color: #f5b5d9eb; /* Màu nền */
     padding: 5px 80px; /* Padding xung quanh */
     border-style:dashed;
     border-color:#ff3791;
   
   }
   
   .promo-text {
     font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     color: white;
     font-size:large;
     margin: 0 8px; /* Khoảng cách giữa ngôi sao và dòng chữ */
     font-weight:lighter; /* Làm đậm chữ */
     align-items: center;
   }
   
   .star {
     color: #ffe601; /* Màu vàng cho ngôi sao */
     font-size: 50px; /* Kích thước ngôi sao */
     animation: blink 1.5s infinite; /* Thêm hiệu ứng nhấp nháy */
     margin-bottom: 4px;
   }
   
   /* Hiệu ứng nhấp nháy cho ngôi sao */
   @keyframes blink {
     0%, 100% {
       opacity: 1;
     }
     50% {
       opacity: 0;
     }
   }
   
   /* Media Query cho màn hình lớn hơn 1200px */
   @media screen and (min-width: 1200px) {
     .shipping-promo {
       margin-top:100px;
       padding: 7px 90px; /* Giảm padding */
     }
     
     .promo-text {
      align-items: center;
       font-size: 20px; /* Giảm kích thước chữ */
     }
     
     .star {
       font-size: 30px; /* Giảm kích thước ngôi sao */
     }
   }

   @media screen and (max-width: 768px) {
     .shipping-promo {
       padding: 5px 20px; /* Giảm padding */
     }
     
     .promo-text {
      align-items: center;
       font-size: 14px; /* Giảm kích thước chữ */
     }
     
     .star {
       font-size: 30px; /* Giảm kích thước ngôi sao */
     }
   }
   
   /* Media Query cho màn hình nhỏ hơn 480px (ví dụ điện thoại) */
   @media screen and (max-width: 480px) {
     .shipping-promo {
       padding: 5px 10px; /* Giảm thêm padding */
     }
   
     .promo-text {
      align-items: center;
       font-size: 8px; /* Giảm kích thước chữ */
     }
   
     .star {
       font-size: 25px; /* Giảm kích thước ngôi sao */
     }
   }


   /* Căn giữa nút Tiếp tục mua sắm theo chiều ngang và dọc */
.center-screen {
  display: flex; /* Sử dụng Flexbox */
  justify-content: center; /* Căn giữa theo chiều ngang */
  align-items: center; /* Căn giữa theo chiều dọc */
}

/* Nút Tiếp tục mua sắm */
.continue-shopping {
  padding: 10px 20px; /* Thêm khoảng cách trong và ngoài nút */
  background-color: #f9f9f9; /* Màu nền cho nút */
  color: rgb(0, 0, 0); /* Màu chữ trắng */
  text-align: center; /* Căn giữa chữ trong nút */
  font-size: 16px; /* Kích thước chữ */
  text-decoration: none; /* Loại bỏ gạch chân */
  border-radius: 5px; /* Bo góc cho nút */
  transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu nền khi hover */
}

/* Thêm hiệu ứng hover cho nút */
.continue-shopping:hover {
  background-color: #ff8ec7; /* Màu nền khi hover vào nút */
}

/*==== BẢNG WISHLIST==== */

   /* Giữ khoảng cách giữa hai icon */
.table__trash-container {
  margin-left: 10px; /* Tạo khoảng cách giữa hai icon */
}

/* Tô màu nền giống nhau cho tất cả tiêu đề bảng */
.table th {
  background-color: #ff6dbd; /* Màu nền cho tiêu đề bảng */
  color: white; /* Màu chữ trắng */
  font-weight: bold; /* Làm đậm chữ tiêu đề */
  text-align: center; /* Căn giữa tiêu đề */
  padding: 10px; /* Thêm khoảng cách giữa nội dung và viền */
}


/* Tô màu nền cho hàng khi hover */
.table tbody tr:hover {
  background-color: #f1f1f1; /* Màu nền khi hover vào hàng */
}

/* Tô màu nền cho các tiêu đề bảng khi hover */
.table th:hover {
  background-color: #ffdcea; /* Màu nền khi hover vào tiêu đề */
  cursor: pointer; /* Thay đổi con trỏ chuột thành dấu tay khi hover vào tiêu đề */
}

/* Cải thiện hiệu ứng hover của hàng */
.table tbody tr:hover td {
  transition: background-color 0.3s ease; /* Thêm hiệu ứng chuyển màu mượt mà */
}

/* Thu nhỏ bảng khi màn hình nhỏ hơn 768px */
@media (max-width: 768px) {
  .table {
    font-size: 12px; /* Giảm kích thước chữ trong bảng */
    width: 100%; /* Đảm bảo bảng không bị tràn */
    overflow-x: auto; /* Cho phép cuộn ngang nếu cần */
  }

  .table th, .table td {
    padding: 8px; /* Giảm khoảng cách trong các ô */
  }
}

/*Hiệu ứng tên sản phẩm*/
.table__title a {
  display: inline-block;
  text-decoration: none;
  color: black; /* Màu chữ mặc định là đen */
  padding: 10px 20px; /* Khoảng cách trong của liên kết */
  position: relative;
  overflow: hidden;
  font-size: 14px; /* Kích thước chữ */
  font-weight: bold; /* Làm chữ đậm (tùy chọn) */
  letter-spacing: 1px; /* Khoảng cách giữa các chữ cái */
  text-transform: uppercase; /* Viết hoa chữ cái */
  transition: color 0.4s ease; /* Hiệu ứng chuyển màu chữ mượt mà */
}

.table__title a::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgb(248, 115, 184); /* Màu nền gradient */
  transition: left 0.6s ease-in-out; /* Hiệu ứng chuyển động nền mượt mà */
  z-index: -1; /* Đặt nền phía sau chữ */
}

.table__title a:hover::before {
  left: 0; /* Di chuyển nền gradient từ trái sang phải khi hover */
}

.table__title a:hover {
  color: white; /* Màu chữ chuyển sang trắng khi hover */
  transform: scale(1.05); /* Hiệu ứng phóng to nhẹ khi hover */
}



    </style>

     <!--================Chỉnh lại Style Heading=============-->
     <style>
      h1, h2, h3, h4, h5, h6, th {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
    </style>

    <!--================Thêm logo cho trang=============-->
    <link rel="icon" href="assets/img/1.png" type="image/x-icon">
    <title>ChicCharm Official Store</title>
  </head>
  <body>
 <!--=============== HEADER ===============-->
 <header class="header">
  <div class="header__top">
    <div class="header__container container">
        <!-- Hiển thị thông điệp liên hệ -->
      <div class="header__contact">
        <span id="contact1">Merry Chrismas</span> 
      </div>
        <!-- Hiển thị thông báo ưu đãi -->
      <p class="header__alert-news" id="news" style="color: #ff97c9">ƯU ĐÃI SIÊU GIÁ TRỊ - TIẾT KIỆM THÊM VỚI NHIỀU MÃ GIẢM GIÁ</p>
      <!-- Liên kết đăng nhập/đăng ký -->
      <a href="login-register.php" id="login-link" class="header__top-action">Đăng nhập / Đăng ký</a>
    </div>
  </div>
  

<!-- Thanh điều hướng chính -->
  <nav class="nav container">
     <!-- Logo của trang web -->
    <a href="index.php" class="nav__logo">
      <img
        class="nav__logo-img"
        src="assets/img/1.png"
        alt="website logo"
      />
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
          <a href="index.php" class="nav__link">Trang Chủ</a>
        </li>
        <li class="nav__item dropdown">
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
          <a href="accounts.php" class="nav__link">Tài Khoản</a>  <!-- Liên kết đến trang tài khoản -->
        </li>
        <li class="nav__item">
          <a href="index.php#featured" class="nav__link intense-sparkle">Khuyến mãi</a> <!-- Liên kết đến phần khuyến mãi -->
        </li>
      </ul>
      
      <!-- Tìm kiếm trong header -->
      <div class="header__search">
        <input
          type="text"
          placeholder=""
          class="form__input"
        />

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
        <span class="count">3</span> <!-- Số lượng mục trong wishlist -->
      </a>
      <!-- Nút giỏ hàng -->
      <a href="cart.php" class="header__action-btn" title="Giỏ hàng">
        <img src="assets/img/icon-cart.svg" alt="" />
        <span class="count">0</span> <!-- Số lượng sản phẩm trong giỏ hàng -->
      </a>
      <!-- Nút mở menu dọc -->
      <div class="header__action-btn nav__toggle" id="nav-toggle">
        <img src="./assets//img/menu-burger.png" alt="">
      </div>
    </div>
  </nav>
</header>

<!-- Phần thông báo khuyến mãi vận chuyển -->
<div class="shipping-promo">
  <span class="star">&#9733;</span>
  <span class="promo-text"> Freeship cho đơn hàng từ 50.000 VND</span>
  <span class="star">&#9733;</span>
</div>


    <!--=============== MAIN ===============-->
    <main class="main">
      <!-- Tiêu đề của trang Danh sách Yêu thích -->
      <h1 class="wishlist__header">
        <span class="wishlist__header--pink">Danh Sách</span> 
        <span class="wishlist__header--black">Yêu Thích</span>
      </h1>
    <!-- Liên kết tiếp tục mua sắm, di chuyển đến trang shop -->
      <div class="center-screen">
        <a href="shop.php" class="continue-shopping" title="Continue Shopping">✨Tiếp tục mua sắm✨</a>
      </div>
      

      <!--=============== WISHLIST ===============-->
        <!-- Phần hiển thị danh sách sản phẩm yêu thích -->
      <section class="wishlist section--lg container">
        <div class="table__container">
        <!-- Bảng hiển thị các sản phẩm trong danh sách yêu thích -->
          <table class="table">
            <thead>
              <tr>
                <th>Hình sản phẩm</th>
                <th>Tên</th>
                <th>Giá tiền</th>
                <th>Trạng thái tồn kho</th>
                <th>Thêm/Xóa</th>
              </tr>
            </thead>
            <tbody>
              <!-- Dòng sản phẩm 1 -->
              <tr>
                <td>
                  <img src="./assets/img/product1.1.png" alt="" class="table__img" />
                </td>
                <td>
                  <h3 class="table__title"><a href="details.php">KẸP NƠ XANH MÁT</a></h3>
                  <p class="table__description">Mang đến vẻ đẹp dịu dàng và thanh lịch.</p>
                </td>
                <td>
                  <span class="table__price">120.000 VND</span>
                </td>
                <td><span class="table__stock">Còn hàng</span></td>
                <td>
                  <!-- Nút giỏ hàng -->
                  <a href="#" class="btn btn--sm" data-inventory="12">
                    <i class="fi fi-rs-shopping-cart"></i>
                  </a>
                
                  <!-- Nút xóa -->
                  <a href="#" class="table__trash-container">
                    <i class="fi fi-rs-trash table__trash" onclick="confirmDelete(this)" style="cursor: pointer;"></i>
                  </a>
                </td>
              </tr>

              <!-- Dòng sản phẩm 2 -->
              <tr>
                <td>
                  <img src="./assets/img/product11.1.png" alt="" class="table__img" />
                </td>
                <td>
                  <h3 class="table__title"><a href="details.php">GƯƠNG LỌ LEM</a></h3>
                  <p class="table__description">Lấy cảm hứng từ chiếc gương thần trong câu chuyện Lọ Lem.</p>
                </td>
                <td>
                  <span class="table__price">156.000 VND</span>
                </td>
                <td><span class="table__stock">Còn hàng</span></td>
                <td>
                  <!-- Nút giỏ hàng -->
                  <a href="#" class="btn btn--sm" data-inventory="12">
                    <i class="fi fi-rs-shopping-cart"></i>
                  </a>
                
                  <!-- Nút xóa -->
                  <a href="#" class="table__trash-container">
                    <i class="fi fi-rs-trash table__trash" onclick="confirmDelete(this)" style="cursor: pointer;"></i>
                  </a>
                </td>
              </tr>

              <!-- Dòng sản phẩm 3 -->
              <tr>
                <td>
                  <img src="./assets/img/product13.1.png" alt="" class="table__img" />
                </td>
                <td>
                  <h3 class="table__title"><a href="details.php">KẸP BƯỚM VÀNG MỘNG MƠ</a></h3>
                  <p class="table__description">Được thiết kế tinh tế và mang màu sắc vàng óng ánh.</p>
                </td>
                <td>
                  <span class="table__price">90.000 VND</span>
                </td>
                <td><span class="table__stock">Còn hàng</span></td>
                <td>
                  <!-- Nút giỏ hàng -->
                  <a href="#" class="btn btn--sm" data-inventory="12">
                    <i class="fi fi-rs-shopping-cart"></i>
                  </a>
                
                  <!-- Nút xóa -->
                  <a href="#" class="table__trash-container">
                    <i class="fi fi-rs-trash table__trash" onclick="confirmDelete(this)" style="cursor: pointer;"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      

      
      
      <!--=============== PHẦN ĐĂNG KÝ NHẬN THƯ ===============-->
  <section class="newsletter section home__newsletter">
    <!-- Container chính chứa nội dung của phần newsletter -->
    <div class="newsletter__container container grid">
       <!-- Tiêu đề của phần newsletter -->
      <h3 class="newsletter__title flex">
        <img
          src="./assets/img/icon-email.svg"
          alt=""
          class="newsletter__icon"
        />
        ĐĂNG KÝ ĐỂ NHẬN TIN
      </h3>
      <!-- Mô tả ngắn khuyến khích người dùng đăng ký -->
      <p class="newsletter__description">
        ...và nhận 10% giảm giá cho lần mua đầu tiên.
      </p>
      <!-- Biểu mẫu để người dùng nhập email và nhấn đăng ký -->
      <form action="" class="newsletter__form">
         <!-- Trường nhập email -->
        <input
          type="text"
          placeholder="Nhập Email của bạn"
          class="newsletter__input"
        />
        <!-- Nút đăng ký -->
        <button type="submit" class="newsletter__btn">Đăng ký</button>
      </form>
    </div>
  </section>
</main>

<!--=============== PHẦN CHÂN TRANG ===============-->
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
            <img
              src="./assets/img/icon-facebook.svg"
              alt=""
              class="footer__social-icon"
            />
          </a>
          </a>
          <a href="https://www.instagram.com/chiccharm.official_?igsh=MXJpM3pqZDFvMmlzaw==">
            <img
              src="./assets/img/icon-instagram.svg"
              alt=""
              class="footer__social-icon"
            />
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
      <img
        src="./assets/img/payment-method.png"
        alt=""
        class="payment__img"
      />
    </div>
  </div>
</footer>
 

 <!--=============== SWIPER JS ===============-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="assets/js/main.js"></script>

    <script>
      //=========LẮNG NGHE SỰ KIỆN CUỘN TRANG=====//
window.onscroll = function() {
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
      //======= HIỆN THÔNG BÁO KHI THÊM VÀO GIỎ HÀNG =====//
    document.addEventListener('DOMContentLoaded', function() {
  // Chọn tất cả các nút "Thêm vào giỏ hàng"
  const addToCartButtons = document.querySelectorAll('.btn.btn--sm');

  addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

      // Lấy số lượng tồn kho từ thuộc tính data-inventory
      let inventory = parseInt(button.getAttribute('data-inventory'), 10);

      // Tạo phần tử thông báo
      const successMessage = document.createElement('div');

      if (inventory > 0) {
        inventory--; // Giảm số lượng tồn kho
        button.setAttribute('data-inventory', inventory); // Cập nhật tồn kho

        // Thêm nội dung thông báo
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
      } else {
        // Thông báo hết hàng
        successMessage.innerHTML = 'Sản phẩm này đã hết hàng!';
        successMessage.classList.add('error-message'); // Thêm lớp CSS cho thông báo lỗi

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
      }
    });
  });
});


</script>

  <!--================== HÀM XÓA KHỎI WISHLIST ===================-->
       <!-- Hàm xóa sản phẩm khỏi danh sách yêu thích khi người dùng xác nhận -->
       <script>
       // Hàm xóa sản phẩm khỏi danh sách yêu thích khi người dùng xác nhận
function confirmDelete(trashIcon) {
  // Tạo phần tử thông báo yêu cầu xác nhận
  const confirmMessage = document.createElement('div');
  confirmMessage.innerHTML = `Bạn có muốn xóa sản phẩm này? <button class="confirm-delete-btn">Có</button> <button class="cancel-delete-btn">Không</button>`;
  confirmMessage.classList.add('custom-alert-message'); // Thêm lớp CSS mới cho thông báo

  // Thêm thông báo vào body
  document.body.appendChild(confirmMessage);

  // Ngừng cuộn trang khi hiển thị thông báo
  document.body.style.overflow = 'hidden';

  // Ngừng sự kiện cuộn (scroll) khi thông báo hiển thị
  window.addEventListener('scroll', preventScroll, { passive: false });

  // Hiển thị thông báo với hiệu ứng
  setTimeout(function() {
    confirmMessage.classList.add('show');
  }, 50); // Hiển thị với hiệu ứng sau khi tạo phần tử

  // Lấy nút "Có" và "Không"
  const confirmBtn = confirmMessage.querySelector('.confirm-delete-btn');
  const cancelBtn = confirmMessage.querySelector('.cancel-delete-btn');

  // Khi người dùng nhấn "Có", xóa sản phẩm
  confirmBtn.addEventListener('click', function() {
    // Tìm dòng sản phẩm chứa nút xóa và xóa nó
    const tableRow = trashIcon.closest("tr");
    tableRow.remove(); // Xóa dòng sản phẩm khỏi bảng

    // Hiển thị thông báo thành công
    const successMessage = document.createElement('div');
    successMessage.textContent = 'Sản phẩm đã được xóa khỏi danh sách yêu thích!';
    successMessage.classList.add('custom-alert-message'); // Thêm lớp CSS mới cho thông báo

    // Thêm thông báo vào body
    document.body.appendChild(successMessage);

    // Hiển thị thông báo với hiệu ứng
    setTimeout(function() {
      successMessage.classList.add('show');
    }, 50); // Hiển thị với hiệu ứng sau khi tạo phần tử

    // Tự động ẩn sau 3 giây
    setTimeout(function() {
      successMessage.classList.remove('show'); // Ẩn thông báo với hiệu ứng
    }, 2000); // Ẩn sau 2 giây

    // Ẩn thông báo xác nhận
    confirmMessage.classList.remove('show');
    setTimeout(function() {
      confirmMessage.remove(); // Xóa thông báo khỏi DOM sau khi ẩn
    }, 300); // Ẩn sau 300ms để hiệu ứng mượt mà

    // Khôi phục cuộn trang sau khi thông báo ẩn
    document.body.style.overflow = 'auto';
    window.removeEventListener('scroll', preventScroll); // Xóa sự kiện cuộn sau khi ẩn thông báo
  });

  // Khi người dùng nhấn "Không", ẩn thông báo
  cancelBtn.addEventListener('click', function() {
    confirmMessage.classList.remove('show');
    setTimeout(function() {
      confirmMessage.remove(); // Xóa thông báo khỏi DOM sau khi ẩn
    }, 300); // Ẩn sau 300ms

    // Khôi phục cuộn trang khi người dùng không xóa sản phẩm
    document.body.style.overflow = 'auto';
    window.removeEventListener('scroll', preventScroll); // Xóa sự kiện cuộn
  });
}

// Hàm ngừng cuộn trang
function preventScroll(event) {
  event.preventDefault();
  event.stopPropagation();
  return false;
}
      </script>
      

  </body>
</html>
