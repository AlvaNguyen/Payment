<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== FLATICON ===============-->
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css"  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!--=============== SWIPER CSS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"  />
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
    </style>
    <!--================Chỉnh lại Style Heading=============-->
    <style>
      h1, h2, h3, h4, h5, h6, th {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
    </style>

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
              <a href="index.php" class="nav__link active-link">Trang Chủ</a>
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
            <span class="count">3</span> <!-- Số lượng sản phẩm trong giỏ hàng -->
          </a>
          <!-- Nút mở menu dọc -->
          <div class="header__action-btn nav__toggle" id="nav-toggle">
            <img src="./assets//img/menu-burger.png" alt="">
          </div>
        </div>
      </nav>
    </header>

      <!--=============== PHẦN TÀI KHOẢN ===============-->
      <section class="accounts section--lg">
        
        <!-- Container chứa các tab và nội dung của từng tab -->
        <div class="accounts__container container grid">
          <!-- Phần danh sách các tab để chuyển đổi giữa các nội dung khác nhau -->
          <div class="account__tabs">
            <!-- Tab Đơn hàng -->
            <p class="account__tab" data-target="#orders">
              <i class="fi fi-rs-shopping-bag"></i> Đơn hàng
            </p>
            <!-- Tab Danh sách yêu thích -->
            <p class="account__tab" data-target="#account-wishlist">
              <i class="fi fi-rs-heart"></i> Danh sách yêu thích
            </p>
            <!-- Tab Cập nhật thông tin -->
            <p class="account__tab" data-target="#update-profile">
              <i class="fi fi-rs-user"></i> Cập nhật thông tin
            </p>
            <!-- Tab Thay đổi mật khẩu -->
            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-settings-sliders"></i> Thay đổi mật khẩu
            </p>
            <!-- Tab Đăng xuất -->
            <p class="account__tab">
              <a href="index.php" class="logout__link">
                <i class="fi fi-rs-exit"></i> Đăng xuất
              </a>
            </p>
          </div>
         <!-- Phần nội dung tương ứng với từng tab -->
          <div class="tabs__content">
            <!-- Nội dung cho tab Đơn hàng -->
            <div class="tab__content" content id="orders">
              <h3 class="tab__header">Đơn hàng</h3>
              <div class="tab__body">
                <!-- Bảng hiển thị thông tin các đơn hàng đã đặt -->
                <table class="placed__order-table">
                  <!-- Phần đầu: Tiêu đề của các cột -->
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Ngày đặt</th>
                      <th>Tình trạng</th>
                      <th>Tổng tiền</th>
                      <th>Theo dõi</th>
                    </tr>
                  </thead>
                  <!-- Phần thân: Thông tin các đơn hàng -->
                  <tbody>
                    <tr>
                      <td>#1357</td>
                      <td>16/20/2024</td>
                      <td>Đã tiếp nhận</td>
                      <td>95.000VNĐ</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>
                    <tr>
                      <td>#2468</td>
                      <td>18/10/2024</td>
                      <td>Đã giao</td>
                      <td>364.000VNĐ</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>
                    <tr>
                      <td>#2366</td>
                      <td>20/10/2024</td>
                      <td>Đang vận chuyển</td>
                      <td>280.000VNĐ</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Nội dung cho tab Danh sách yêu thích -->
            <div class="tab__content" content id="account-wishlist">
              <h3 class="tab__header">Danh sách yêu thích</h3>
              <div class="tab__body">
                <table class="wishlist-table">
                  <!-- Phần đầu: Tiêu đề của các cột -->
                  <thead>
                    <tr>
                      <th>Hình sản phẩm</th>
                      <th>Tên</th>
                      <th>Giá tiền</th>
                      <th>Trạng thái tồn kho</th>
                    </tr>
                  </thead>
                  <!-- Phần thân: Thông tin các sản phẩm yêu thích -->
                  <tbody>
                    <tr>
                      <td><img
                        src="./assets//img/product1.1.png"
                        alt=""
                        class="table__img"
                      /></td>
                      <td><a href="shop.php" class="link">Kẹp Nơ Xanh Mát</a></td>
                      <td>120.000VND</td>
                      <td>Còn hàng</td>
                    </tr>
                    <tr>
                      <td><img
                        src="./assets//img/product11.1.png"
                        alt=""
                        class="table__img"
                      /></td>
                      <td><a href="shop.php" class="link">Gương Lọ Lem</a></td>
                      <td>156.000VND</td>
                      <td>Còn hàng</td>
                    </tr>
                    <tr>
                      <td><img
                        src="./assets//img/product13.1.png"
                        alt=""
                        class="table__img"
                      /></td>
                      <td><a href="shop.php" class="link">Kẹp Bướm Vàng Mộng Mơ</a></td>
                      <td>90.000VND</td>
                      <td>Còn hàng</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

             <!-- Nội dung cho tab Thông tin cập nhật -->
            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Thông tin cập nhật</h3>
              <!-- Phần chứa form cập nhật thông tin -->
              <div class="tab__body">
                <form class="form grid">
                   <!-- Input nhập tên người dùng -->
                  <input
                    type="text"
                    placeholder="Tên người dùng"
                    class="form__input"
                  />
                   <!-- Input nhập SĐT -->
                  <input
                    type="number"
                    placeholder="SĐT"
                    class="form__input"
                  />
                   <!-- Input nhập Email người dùng -->
                  <input
                    type="text"
                    placeholder="Email"
                    class="form__input"
                  />
                   <!-- Input nhập địa chỉ -->
                  <input
                    type="text"
                    placeholder="Địa chỉ cập nhật"
                    class="form__input"
                  />
                  <!-- Nút lưu thông tin -->
                  <div class="form__btn">
                    <button class="btn btn--md">Lưu</button>
                  </div>
                </form>
              </div>
              <!-- Phần hiển thị thông tin hiện tại -->
              <h3 class="tab__header">Thông tin hiện tại</h3>
              <div class="tab__body">
                <!-- Hiển thị tên người dùng hiện tại -->
                <address class="name">
                  Nguyễn Văn A <br />                              
                </address>
               <!-- Hiển thị SĐT hiện tại -->
                <address class="phone">
                  123-456-789 <br />                              
                </address>
               <!-- Hiển thị địa chỉ hiện tại -->
                <address class="address">
                  279 Nguyễn Tri Phương P.5 Q.10 <br />                              
                </address>
                <p class="city">Thành phố Hồ Chí Minh</p>
              </div>
            </div>
           <!-- Nội dung cho tab Đổi mật khẩu -->
            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Đổi mật khẩu</h3>
              <!-- Phần thân chứa form đổi mật khẩu -->
              <div class="tab__body">
                <form class="form grid">
                  <!-- Input nhập mật khẩu hiện tại -->
                  <input
                    type="password"
                    placeholder="Mật khẩu hiện tại"
                    class="form__input"
                  />
                  <!-- Input nhập mật khẩu mới -->
                  <input
                    type="password"
                    placeholder="Mật khẩu mới"
                    class="form__input"
                  />
                  <!-- Input xác nhận mật khẩu mới -->
                  <input
                    type="password"
                    placeholder="Xác nhận mật khẩu"
                    class="form__input"
                  />
                  <div class="form__btn">
                    <button class="btn btn--md">Lưu</button>
                  </div>
                </form>
              </div>
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
  if (window.scrollY > 300) { // Khi cuộn xuống 100px
    nav.classList.add('fixed-menu'); // Thêm lớp cố định cho nav
  } else {
    nav.classList.remove('fixed-menu'); // Bỏ lớp cố định khi lên đầu trang
  }
};
    </script>


   
    <!--Banner thay đổi thông tin liên tục-->
    <script>
      let news = document.getElementById('news');
 
      // Mảng các tin tức
      const newsArray = [
        "CHỈ CÒN 2 NGÀY DUY NHẤT - NHANH TAY CHỐT ĐƠN",
        "MIỄN PHÍ VẬN CHUYỂN NỘI THÀNH TP.HCM"
      ];
 
      // Hàm thay đổi tin tức
      let newsIndex = 0;
      function changeNews() {
        // Ẩn tin tức hiện tại với hiệu ứng mờ
        news.classList.add('hidden');
 
        setTimeout(() => {
          // Thay đổi tin tức sau khi mờ đi
          news.textContent = newsArray[newsIndex];
          newsIndex = (newsIndex + 1) % newsArray.length;
 
          // Hiện lại tin tức mới với hiệu ứng mờ
          news.classList.remove('hidden');
        }, 1000); // Chờ 1 giây (thời gian mờ đi) trước khi thay đổi tin tức
      }
 
      // Khởi động interval để thay đổi tin tức
      setInterval(() => {
        changeNews(); // Thay đổi tin tức
      }, 3000); // Thay đổi mỗi 2 giây
    </script>


  </body>
</html>