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
          <div class="header__contact">
            <span id="contact1">Merry Chrismas</span>
          </div>
          <p class="header__alert-news" id="news" style="color: #fa97ca">ƯU ĐÃI SIÊU GIÁ TRỊ - TIẾT KIỆM THÊM VỚI NHIỀU MÃ GIẢM GIÁ</p>
          <a href="login-register.php" id="login-link" class="header__top-action">Đăng nhập / Đăng ký</a>
        </div>
      </div>

     <nav class="nav container">
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
         <div class="nav__close" id="nav-close">
           <i class="fi fi-rs-cross-small"></i>
         </div>
       </div>
       <ul class="nav__list">
         <li class="nav__item">
           <a href="index.php" class="nav__link">Trang Chủ</a>
         </li>
         <li class="nav__item dropdown">
           <a href="shop.php" class="nav__link">Cửa Hàng</a>
           <ul class="dropdown__menu">
             <li><a href="shop.php">Kẹp vuông</a></li>
             <li><a href="shop.php">Kẹp nhỏ</a></li>
             <li><a href="shop.php">Kẹp tròn</a></li>
             <li><a href="shop.php">Gương</a></li>
           </ul>
         </li>
         <li class="nav__item">
           <a href="accounts.php" class="nav__link">Tài Khoản</a>
         </li>
         <li class="nav__item">
           <a href="index.php#featured" class="nav__link intense-sparkle">Khuyến mãi</a>
         </li>
       </ul>
       
       <div class="header__search">
         <input
           type="text"
           placeholder=""
           class="form__input"
         />
         <button class="search__btn">
           <img src="assets/img/search.png" alt="search icon" />
         </button>
       </div>
     </div>
     <div class="header__user-actions">
       <a href="login.php" class="header__action-btn" title="Đăng nhập">
         <img src="assets/img/user.png" alt="" />
       </a>
       <a href="wishlist.php" class="header__action-btn" title="Wishlist">
         <img src="assets/img/icon-heart.svg" alt="" />
         <span class="count">3</span>
       </a>
       <a href="cart.php" class="header__action-btn" title="Giỏ hàng">
         <img src="assets/img/icon-cart.svg" alt="" />
         <span class="count">3</span>
       </a>
       <div class="header__action-btn nav__toggle" id="nav-toggle">
         <img src="./assets//img/menu-burger.png" alt="">
       </div>
     </div>
   </nav>
 </header>
      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
         
          <div class="register">
            <h3 class="section__title" style="text-align: center; margin-right: 100px ">Tạo tài khoản</h3>
            <form class="form grid">
              <input
                type="text"
                placeholder="Tên người dùng"
                class="form__input"
              />
              <input
                type="email"
                placeholder="Địa chỉ Email"
                class="form__input"
              />
              <input
                type="password"
                placeholder="Mật khẩu"
                class="form__input"
              />
              <input
                type="password"
                placeholder="Xác nhận mật khẩu"
                class="form__input"
              />
              <div class="form__btn">
                <button class="btn">Đăng ký</button>
              </div>
            </form>
          </div>
        </div>
      </section>


       <!--=============== NEWSLETTER ===============-->
       <section class="newsletter section home__newsletter">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img
              src="./assets/img/icon-email.svg"
              alt=""
              class="newsletter__icon"
            />
            ĐĂNG KÝ ĐỂ NHẬN TIN
          </h3>
          <p class="newsletter__description">
            ...và nhận 10% giảm giá cho lần mua đầu tiên.
          </p>
          <form action="" class="newsletter__form">
            <input
              type="text"
              placeholder="Nhập Email của bạn"
              class="newsletter__input"
            />
            <button type="submit" class="newsletter__btn">Đăng ký</button>
          </form>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
      <div class="footer__container grid">
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
        <div class="footer__content">
          <h3 class="footer__title">Tài Khoản</h3>
          <ul class="footer__links">
            <li><a href="login.php" class="footer__link">Đăng Nhập</a></li>
            <li><a href="cart.php" class="footer__link">Giỏ Hàng</a></li>
            <li><a href="wishlist.php" class="footer__link">Wishlist</a></li>
            <li><a href="#" class="footer__link">Đơn Hàng</a></li>
            <li><a href="#" class="footer__link">Giúp Đỡ</a></li>
            <li><a href="#" class="footer__link">Đặt Hàng</a></li>
          </ul>
        </div>
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
  </body>
</html>
