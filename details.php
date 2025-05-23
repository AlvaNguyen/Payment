<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
     <!-- Thêm Font Awesome từ CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- Jquery -->
	  <script src="assets\js\jquery-1.8.3.min.js"></script>

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
       padding: 6px 90px; /* Giảm padding */
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
    <a href="register.php" id="login-link" class="header__top-action">Đăng nhập / Đăng ký</a>
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


<!--=============== BANNER KHUYẾN MÃI ===============-->
 <div class="shipping-promo">
  <span class="star">&#9733;</span>
  <span class="promo-text"> Cùng Chic Đón Giáng Sinh Lung Linh </span>
  <span class="star">&#9733;</span>
</div>

      <!--=============== CHI TIẾT SẢN PHẨM ===============-->
      <section class="details section--lg">
        <div class="details__container container grid">
          <!-- Nhóm đầu tiên: Hình ảnh sản phẩm -->
          <div class="product-images"> 
            <!-- Carousel chứa thumbnails -->
              <div class="thumbnails-carousel">
                <div class="thumbnails">
                  <img src="assets/img/urbanxmas.jpg" alt="Set Urban Chic" class="thumbnail active">
                  <img src="assets/img/shirleytemple.png" alt="Gương trái tim Shirley Temple" class="thumbnail">
                  <img src="assets/img/bellini.png" alt="Kẹp tóc Bellini" class="thumbnail">
                  <img src="assets/img/kol.png" alt="KOL" class="thumbnail">
                </div>
              </div>
              
              <!-- Hình ảnh chính -->
                <div class="main-image">
                  <img src="assets/img/urbanxmas.jpg" data-zoom-image="assets/img/urbanxmas_big.png" id="zoom">
                </div>
          </div>

          <!-- Thêm JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const thumbnails = document.querySelectorAll(".thumbnail");
    const mainImage = document.querySelector("#zoom");

    thumbnails.forEach((thumbnail) => {
      thumbnail.addEventListener("click", function () {
        // Lấy URL của ảnh nhỏ
        const newSrc = this.getAttribute("src");
        const newZoomImage = newSrc.replace(".jpg", "_big.jpg"); // Giả sử ảnh lớn có hậu tố _big.jpg

        // Cập nhật ảnh chính
        mainImage.setAttribute("src", newSrc);
        mainImage.setAttribute("data-zoom-image", newZoomImage);

        // Đổi trạng thái active cho thumbnail
        document.querySelector(".thumbnail.active")?.classList.remove("active");
        this.classList.add("active");
      });
    });
  });
</script>
          
          <!-- Nhóm thứ hai: Thông tin chi tiết sản phẩm -->
            <div class="details__group">
              <h3 class="details__title" style="font-family: Arial, Helvetica, sans-serif; font-size: 39px;">Set Urban Chic</h3>
              <!-- Giá sản phẩm bao gồm giá mới, giá cũ và mức giảm giá -->
                <div class="details__price flex">
                  <span class="new__price" style="font-family: Arial, Helvetica, sans-serif; font-size: 30px;">100.000đ</span>
                  <span class="old__price" style="font-family: Arial, Helvetica, sans-serif;">110.000đ</span>
                  <span class="save__price" style="font-family: Arial, Helvetica, sans-serif; font-size: 1rem; color: red; border: 2px solid red; padding: 5px 10px; display: inline-block; text-align: center;">10% OFF</span>
                </div>
                
                <!-- Đánh giá số sao -->
                <div class="details__rating" style="display: flex; margin-top: 20px;">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                  <!-- Số lượt đánh giá -->
                  <a href="#reviews" class="review-count" style="font-family: Arial, Helvetica, sans-serif; font-size: 17px; margin-left: 10px; text-decoration: underline; margin-top: 1.5px;">
                    (0 đánh giá)
                  </a>  
                </div>

                <!-- Nhãn "Hiển thị số lượng tồn kho" -->
                <div class="stock-label shining" style="margin-top: 20px; font-size: 1.2rem; color: white; background-color: rgb(255, 127, 172); border-radius: 15px; padding: 5px 12px; display: inline-block; line-height: 1.2; overflow: hidden;"> Chỉ còn 5 sản phẩm <div class="shine"></div> </div>

                <p class="short__description" style="font-family: Arial, Helvetica, sans-serif; font-size: 17px; line-height: 2;">
                  💕 Set Urban Chic bao gồm:<br>
                  ○ 1 gương cầm tay Shirley Temple (giá lẻ 65.000đ)<br>
                  ○ 1 kẹp tóc Bellini (giá lẻ 45.000đ)</ul> 
                  <ul style="border: 2px solid pink; padding: 10px; margin-top: 10px;  background-color: #ffffff; border-radius: 20px; color: #333; line-height: 1.5; font-weight: bold;">
                    ✨ Đặc biệt, các quý cô sẽ được tự do lựa chọn Charm mình iu thích để gắn lên hai bé điệu này khi rinh về nha!</ul>
                </p><br><br>

                <ul class="products__list">
                  <li class="list__item flex" style="font-size: 15px;">
                    <i class="fi-rs-crown"></i> Bảo hành keo sản phẩm 1 tháng
                  </li>
                  <li class="list__item flex" style="font-size: 15px;">
                    <i class="fi-rs-refresh"></i> 1 Đổi 1 cho sản phẩm lỗi
                  </li>
                  <li class="list__item flex" style="font-size: 15px;">
                    <i class="fi-rs-credit-card"></i> Ship COD toàn quốc
                  </li>
                </ul>
                <div class="details__color flex">
                  <span class="details__lettercharm-title">Chọn màu charm chữ:</span>
                  <ul class="color__list">
                    <li>
                      <a
                        href="#"
                        class="color__link active-link"
                        style="background-color: #ffb2dbb6"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="color__link"
                        style="background-color: hsl(206, 98%, 83%)"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="color__link"
                        style="background-color: #000000"
                      ></a>
                    </li>
                  </ul>
                </div>
                
                <div class="details__color flex">
                  <span class="details__letterinput-title">Điền tên custom (A-Z | 0-9):</span>
                  <ul class="color__list">
                    <input
                    type="text"
                    placeholder="Tối đa 6 ký tự"
                    class="form__input"
                  />
                  </ul>
                </div>
                
                <div class="details__size flex">
                  <span class="details__decorcharm-title">Chọn charm hình:</span>
                  <ul class="size__list">
                    <li>
                      <a href="#" class="size__link size-active">Charm nơ</a>
                    </li>
                    <li>
                      <a href="#" class="size__link">Charm bướm</a>
                    </li>
                    <li>
                      <a href="#" class="size__link">Charm vỏ sò</a>
                    </li>
                    <li>
                      <a href="#" class="size__link">Charm sao biển</a>
                    </li>
                  </ul>
                </div>
                
                <!-- Hành động thêm vào giỏ hàng -->
                  <div class="details__action" style="margin-top: 20px;">
                    <input type="number" class="quantity" value="1" />
                    <a href="#" class="btn btn--sm" id="add-to-cart">Thêm vào giỏ hàng</a>
                    <a href="checkout.php" class="btn btn--sm">Mua ngay</a>
                    <a href="wishlist.php" class="details__action-btn" id="add-to-wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <!-- Hiển thị SKU và danh mục sản phẩm -->
                  <ul class="details__meta">
                    <li class="meta__list flex"><span>SKU:</span>COMBO01</li>
                    <li class="meta__list flex">
                      <span>Danh mục: Gương vuông, Kẹp tóc
                    </li>
                  </ul>
      </section>
 
      <!--========= CÁC MỤC ĐỂ XEM THÊM THÔNG TIN ==========-->
      <section class="details__tab container">
        <!-- Phân chia 2 tab chính là Xem thêm thông tin và Đánh giá -->
        <div class="detail__tabs">
          <span class="detail__tab active-tab" data-target="#info" style="font-family:Arial, Helvetica, sans-serif; font-size: 18px;">Thông Tin Sản Phẩm</span>
          <span class="detail__tab" data-target="#reviews" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;">Đánh Giá (3)</span>
        </div>
        <div class="details__tabs-content" style="font-family:Arial, Helvetica, sans-serif; font-size: 17px;">
          <div class="details__tab-content active-tab" content id="info">

            <p><strong>Set Urban Chic gồm:</strong><br><br>
              • 1 gương cầm tay <strong>Shirley Temple</strong> (giá lẻ 65.000đ)<br><br>
              • 1 kẹp tóc <strong>Bellini</strong> (giá lẻ 45.000đ)<br><br>
              Các quý cô được tự do lựa chọn Charm mình iu thích nữa nèee!<br><br>
              
              ✨ Đặc biệt, Chic còn có quà dành cho các cô nàng sành điệu nữa đó. Chỉ với giá <strong>100.000đ</strong> yêu thương thôi là bạn đã có ngay full Collection.<br><br>
              
              Nhanh tay rước em ấy về nhà để luôn đẹp rạng ngời thui nàoo!<br><br></p>

            <table class="info__table">
              <tr>
                <th style="font-weight: bold; text-align: center;">Tên Set</th>
                <td>Set Urban Chic</td>
              </tr>
              <tr>
                <th style="font-weight: bold; text-align: center;">Bao gồm</th>
                <td>1 gương cầm tay Shirley Temple, 1 kẹp tóc Bellini</td>
              </tr>
              <tr>
                <th style="font-weight: bold; text-align: center;">Màu sắc</th>
                <td>Bạc, trắng</td>
              </tr>
              <tr>
                <th style="font-weight: bold; text-align: center;">Charm</th>
                <td>Charm chữ và hình tự chọn</td>
              </tr>
            </table>
          </div>
          
        <!-- Khu vực hiển thị các đánh giá -->
          <div class="details__tab-content" content id="reviews">
            <div class="reviews__container grid">
              <div class="review__single">
                <div>
                  <img
                    src="assets/img/namphuong.jpg"
                    alt=""
                    class="review__img"
                  />
                  <h4 class="review__title">Nam Phương</h4>
                </div>
                <div class="review__data">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                  <p class="review__description">
                    Gương với kẹp khá xinh, có điều mình đợi hàng hơi lâu nên cho sốp 4 sao thui nhen.
                  </p>
                  <span class="review__date">November 4, 2024 at 3:12 pm</span>
                </div>
              </div>
              <div class="review__single">
                <div>
                  <img
                    src="assets/img/myhuong.jpg"
                    class="review__img"
                  />
                  <h4 class="review__title">Mỹ Hương</h4>
                </div>
        <!--Hiển thị Xếp hạng 5 sao -->
                <div class="review__data">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                  <p class="review__description">
                    Combo gương kẹp custom siuu cưng luôn ạ, mình mua tặng bạn mình mà khen miết luôn.
                  </p>
                  <span class="review__date">August 23, 2024 at 19:45 pm</span>
                </div>
              </div>
              <div class="review__single">
                <div>
                  <img
                    src="assets/img/giahan.jpg"
                    alt=""
                    class="review__img"
                  />
                  <h4 class="review__title">Gia Hân</h4>
                </div>
                <div class="review__data">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                  <p class="review__description">
                    Trời ơi chị chủ sốp dễ thương nhiệt tình lắm luôn í, 10 điểm chất lượng nè 💯
                  </p>
                  <span class="review__date">Octorber 22, 2024 at 10:01 am</span>
                </div>
              </div>
            </div>

            <div class="review__form">
                <h4 class="review__form-title" style="font-family: 'Cambria'; font-size: 20px;">Thêm đánh giá</h4>
                <!-- Đánh giá số sao -->
                <div class="rating__star__form" style="direction: rtl;">
                  <span class="star" data-value="5">&#9733;</span>
                  <span class="star" data-value="4">&#9733;</span>
                  <span class="star" data-value="3">&#9733;</span>
                  <span class="star" data-value="2">&#9733;</span>
                  <span class="star" data-value="1">&#9733;</span>
                </div>
                <form action="" class="form grid">
                  <div class="form__group grid">
                    <input type="text" placeholder="Tên của bạn" required class="form__input">
                  </div>
                  <textarea
                    require class="form__input textarea"
                    placeholder="Viết đánh giá của bạn..." 
                  ></textarea>
                  <div class="form__btn">
                    <button class="btn">Đăng</button>
                  </div>
              </form>
            </div>          
        </div>
</section>

      <!--=============== DANH MỤC SẢN PHẨM ===============-->
      <section class="products container section--lg">
        <!--==========Hiển thị sản phẩm mua kèm===============>-->
        <h3 class="section__title"><span style="font-family: Arial, Helvetica, sans-serif, sans-serif; font-size: 20px; line-height: 2.5">SẢN PHẨM MUA KÈM </span>
        <p class="section__subtitle">Chic gợi ý các sản phẩm mua kèm  <i class="fas fa-tag"></i></p>
        <div class="products__container grid">
          <div class="product__item">
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img
                  src="assets/img/product13.1.png"
                  alt=""
                  class="product__img default"
                />
                <img
                  src="assets/img/product13.2.png"
                  alt=""
                  class="product__img hover"
                />
              </a>
              <div class="product__actions">
                <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                  <i class="fa-solid fa-up-right-from-square"></i>
                <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>
              </div>
              <div class="product__badge light-pink">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category">Kẹp tròn</span>
              <a href="details.php">
                <h3 class="product__title">Kẹp Hoa Yêu Thương</h3>
              </a>
              <div class="product__rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span> (89)</span>
              </div>
              <div class="product__price flex">
                <span class="new__price">90.000 VND</span>
              </div>
              <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="11">
              <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
                  </div>
                </div>
  
  
                <div class="product__item">
                  <div class="product__banner">
                    <a href="details.php" class="product__images">
                      <img
                        src="assets/img/product14.1.png"
                        alt=""
                        class="product__img default"
                      />
                      <img
                        src="assets/img/product14.2.png"
                        alt=""
                        class="product__img hover"
                      />
                    </a>
                    <div class="product__actions">
                      <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                        <i class="fa-solid fa-up-right-from-square"></i>
                      <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                        <i class="fi fi-rs-heart"></i>
                      </a>
                    </div>
                    <div class="product__badge light-green">Hot</div>
                  </div>
                  <div class="product__content">
                    <span class="product__category">Kẹp tròn</span>
                    <a href="details.php">
                      <h3 class="product__title">Kẹp Bướm Vàng Mộng Mơ</h3>
                    </a>
                    <div class="product__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-alt"></i>
                      <span> (167)</span>
                    </div>
                    <div class="product__price flex">
                      <span class="new__price">90.000 VND</span>
                    </div>
                    <a href="#" 
                    class="action__btn cart__btn" 
                    aria-label="Thêm vào Giỏ hàng" 
                    data-inventory="56">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                  </div>
                </div>
  
  
  
                <div class="product__item">
                  <div class="product__banner">
                    <a href="details.php" class="product__images">
                      <img
                        src="assets/img/product15.1.png"
                        alt=""
                        class="product__img default"
                      />
                      <img
                        src="assets/img/product15.2.png"
                        alt=""
                        class="product__img hover"
                      />
                    </a>
                    <div class="product__actions">
                      <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                        <i class="fa-solid fa-up-right-from-square"></i>
                      <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                        <i class="fi fi-rs-heart"></i>
                      </a>
                    </div>
                    <div class="product__badge light-orange">Hot</div>
                  </div>
                  <div class="product__content">
                    <span class="product__category">Kẹp tròn</span>
                    <a href="details.php">
                      <h3 class="product__title">Kẹp Mắt Mèo Cá Tính</h3>
                    </a>
                    <div class="product__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-alt"></i>
                      <span> (150)</span>
                    </div>
                    <div class="product__price flex">
                      <span class="new__price">90.000 VND</span>
                    </div>
                    <a href="#" 
                     class="action__btn cart__btn" 
                     aria-label="Thêm vào Giỏ hàng" 
                     data-inventory="28">
                     <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
            </div>
          </div>
        </div>



         <!--==========Hiển thị sản phẩm gợi ý===============>-->
         <h3 class="section__title"><span style="font-family: Arial, Helvetica, sans-serif, sans-serif; font-size: 20px; line-height: 2.5">SẢN PHẨM GỢI Ý </span>
          <p class="section__subtitle">Chic Nghĩ Bạn Cũng Thích  <i class="fas fa-tag"></i></p>
          <div class="products__container grid">
            <!--==========Sản phẩm gợi ý 1===============>-->
            <div class="product__item">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product20.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product13.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-pink">Hot</div>
              </div>
              <div class="product__content">
                <span class="product__category">Kẹp vuông</span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Giấc Mơ Hoa</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-alt"></i>
                  <span> (89)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">129.000 VND</span>
                </div>
                <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="11">
                <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
                    </div>
                  </div>
                  
                  <!--==========Sản phẩm gợi ý 2===============>-->
                  <div class="product__item">
                    <div class="product__banner">
                      <a href="details.php" class="product__images">
                        <img
                          src="assets/img/product7.1.png"
                          alt=""
                          class="product__img default"
                        />
                        <img
                          src="assets/img/product7.2.png"
                          alt=""
                          class="product__img hover"
                        />
                      </a>
                      <div class="product__actions">
                        <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                          <i class="fa-solid fa-up-right-from-square"></i>
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
                      <a href="#" 
                      class="action__btn cart__btn" 
                      aria-label="Thêm vào Giỏ hàng" 
                      data-inventory="56">
                      <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                    </div>
                  </div>

                  <!--==========Sản phẩm gợi ý 3===============>-->
                  <div class="product__item">
                    <div class="product__banner">
                      <a href="details.php" class="product__images">
                        <img
                          src="assets/img/product18.1.png"
                          alt=""
                          class="product__img default"
                        />
                        <img
                          src="assets/img/product18.2.png"
                          alt=""
                          class="product__img hover"
                        />
                      </a>
                      <div class="product__actions">
                        <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                          <i class="fa-solid fa-up-right-from-square"></i>
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
                      <a href="#" 
                       class="action__btn cart__btn" 
                       aria-label="Thêm vào Giỏ hàng" 
                       data-inventory="28">
                       <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
              </div>
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

    <!-- Elevate Zoom JS -->
	  <script src="assets/js/jquery.elevateZoom-3.0.8.min.js"></script>

	  <script>
		$("#zoom").elevateZoom();
	  </script>

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

<script>
/*=============== ZOOM SẢN PHẨM ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const thumbnails = document.querySelectorAll(".thumbnail");
  const mainImage = document.querySelector("#zoom");

  thumbnails.forEach((thumbnail, index) => {
      thumbnail.addEventListener("click", function () {
          // Lấy URL của ảnh nhỏ
          const newSrc = this.getAttribute("src");
          const newZoomImage = newSrc.replace(".jpg", "_big.jpg"); // Giả sử ảnh lớn có hậu tố _big.jpg

          // Cập nhật ảnh chính
          mainImage.setAttribute("src", newSrc);

          // Thêm zoom cho ảnh thứ 1,2,3,4
          if (index === 0 || index === 1 || index === 2 || index === 3) {
              mainImage.setAttribute("data-zoom-image", newZoomImage);
              $("#zoom").data("elevateZoom")?.swaptheimage(newSrc, newZoomImage);
          } else {
              mainImage.removeAttribute("data-zoom-image");
              $("#zoom").data("elevateZoom")?.destroy();
          }

          // Đổi trạng thái active cho thumbnail
          document.querySelector(".thumbnail.active")?.classList.remove("active");
          this.classList.add("active");
      });
  });
});
</script>

<script>
/*=============== TAB THÔNG TIN SẢN PHẨM VÀ ĐÁNH GIÁ ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".detail__tab");
  const tabContents = document.querySelectorAll(".details__tab-content");

  tabs.forEach((tab, index) => {
      tab.addEventListener("click", function () {
          // Xóa trạng thái active khỏi tất cả các tab
          document.querySelector(".detail__tab.active-tab")?.classList.remove("active-tab");
          document.querySelector(".details__tab-content.active-tab")?.classList.remove("active-tab");

          // Thêm trạng thái active cho tab được nhấn
          this.classList.add("active-tab");
          tabContents[index].classList.add("active-tab");
      });
  });
});
</script>

<script>
/*=============== CẬP NHẬT SỐ LƯỢT ĐÁNH GIÁ ===============*/
document.addEventListener("DOMContentLoaded", function () {
  // Lấy số lượt đánh giá từ tab "Đánh Giá"
  const reviewTab = document.querySelector(".detail__tab[data-target='#reviews']");
  const reviewCount = reviewTab.textContent.match(/\d+/); // Lấy số đầu tiên trong chuỗi

  // Cập nhật số lượt đánh giá trong phần thông tin sản phẩm
  const productReviewCount = document.querySelector(".details__rating .review-count");
  if (reviewCount && productReviewCount) {
    productReviewCount.textContent = `(${reviewCount[0]} đánh giá)`;
  }
});
</script>

<script>
/*=============== Khi nhấp vào số lượng đánh giá sẽ tự động cuộn đến tab đánh giá ===============*/
document.addEventListener("DOMContentLoaded", function () {
  // Lấy liên kết "Số lượt đánh giá"
  const reviewLink = document.querySelector(".review-count");
  const reviewsTab = document.querySelector(".detail__tab[data-target='#reviews']");
  const tabsContainer = document.querySelector(".detail__tabs"); // Phần chứa các tab

  reviewLink.addEventListener("click", function (event) {
    event.preventDefault(); // Ngăn hành động mặc định (chuyển hướng)

    // Kích hoạt tab "Đánh Giá"
    document.querySelector(".detail__tab.active-tab")?.classList.remove("active-tab");
    reviewsTab.classList.add("active-tab");

    // Ẩn nội dung tab khác và hiển thị nội dung "Đánh Giá"
    document.querySelector(".details__tab-content.active-tab")?.classList.remove("active-tab");
    document.querySelector("#reviews").classList.add("active-tab");

    // Cuộn đến phần tabsContainer
    tabsContainer.scrollIntoView({ behavior: "smooth" });
  });
});
</script>

<script>
/*=============== Khi nhấp vào sao đánh giá sẽ tự động cuộn đến mục thêm đánh giá ===============*/
document.addEventListener("DOMContentLoaded", function () {
  // Lấy danh sách ngôi sao
  const ratingStars = document.querySelectorAll(".details__rating .star");
  const reviewsTab = document.querySelector(".detail__tab[data-target='#reviews']");
  const reviewForm = document.querySelector(".review__form");

  ratingStars.forEach((star) => {
    star.addEventListener("click", function () {
      // Kích hoạt tab "Đánh Giá"
      document.querySelector(".detail__tab.active-tab")?.classList.remove("active-tab");
      reviewsTab.classList.add("active-tab");

      // Ẩn nội dung tab khác và hiển thị tab "Đánh Giá"
      document.querySelector(".details__tab-content.active-tab")?.classList.remove("active-tab");
      document.querySelector("#reviews").classList.add("active-tab");

      // Cuộn mượt đến phần "Thêm đánh giá"
      reviewForm.scrollIntoView({ behavior: "smooth" });
    });
  });
});
</script>

<script>
/*=============== Thêm đánh giá sản phẩm ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const stars = document.querySelectorAll(".rating__star__form .star");  // Tất cả các ngôi sao
  const reviewForm = document.querySelector(".review__form form");
  let ratingValue = 0;  // Lưu trữ số sao người dùng chọn

  // Xử lý khi người dùng nhấp vào ngôi sao
  stars.forEach(star => {
    star.addEventListener("click", function () {
      ratingValue = parseInt(this.getAttribute("data-value"));
      highlightStars(ratingValue);  // Làm sáng các sao đã chọn
    });
  });

  // Xử lý khi người dùng hover vào sao (chỉ để thay đổi màu sắc sao)
  stars.forEach(star => {
    star.addEventListener("mouseover", function () {
      const hoverValue = parseInt(this.getAttribute("data-value"));
      highlightStars(hoverValue);  // Làm sáng sao khi hover
    });

    star.addEventListener("mouseout", function () {
      highlightStars(ratingValue);  // Giữ nguyên màu sắc sao đã chọn khi không hover
    });
  });

  // Hàm để làm sáng các sao
  function highlightStars(rating) {
    stars.forEach(star => {
      const starValue = parseInt(star.getAttribute("data-value"));
      if (starValue <= rating) {
        star.style.color = "#ffcc00";  // Màu vàng khi chọn
      } else {
        star.style.color = "#ccc";  // Màu xám khi chưa chọn
      }
    });
  }

  // Xử lý khi gửi form
  reviewForm.addEventListener("submit", function (event) {
    event.preventDefault();  // Ngăn gửi form (để kiểm tra thông tin)
    
    const username = reviewForm.querySelector("input[type='text']").value;
    const reviewText = reviewForm.querySelector("textarea").value;
    
    // Kiểm tra xem người dùng đã chọn sao chưa
    if (ratingValue === 0) {
      alert("Bạn vui lòng chọn số sao!");
      return;
    }

    // Kiểm tra xem các trường còn lại có hợp lệ không
    if (!username || !reviewText) {
      alert("Bạn vui lòng điền đầy đủ thông tin!");
      return;
    }

    // Reset form sau khi gửi
    reviewForm.reset();
    ratingValue = 0;  // Reset ratingValue khi gửi đánh giá
    highlightStars(0);  // Reset các sao về màu xám
    alert("Cảm ơn bạn đã đánh giá!");
  });
});
</script>

<script>
/*=============== LƯU LỰA CHỌN MÀU CHARM ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const colorLinks = document.querySelectorAll(".color__link");

  // Xóa trạng thái đã lưu khi tải lại trang
  localStorage.removeItem("selectedColor");

  // Xử lý khi chọn màu
  colorLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      // Ngăn trang cuộn lên đầu
      event.preventDefault();

      // Loại bỏ lớp 'active' khỏi tất cả các màu
      colorLinks.forEach((item) => item.classList.remove("active"));

      // Thêm lớp 'active' vào màu được chọn
      this.classList.add("active");

      // Lưu màu đã chọn
      const selectedColor = this.dataset.color || this.style.backgroundColor;
      localStorage.setItem("selectedColor", selectedColor);
      console.log("Selected color:", selectedColor);
    });
  });

  // Tự động áp dụng màu đã lưu khi tải lại trang (nếu cần giữ trạng thái giữa lần tải lại)
  const savedColor = localStorage.getItem("selectedColor");
  if (savedColor) {
    colorLinks.forEach((link) => {
      const color = link.dataset.color || link.style.backgroundColor;
      if (color === savedColor) {
        link.classList.add("active");
      }
    });
  } else {
    // Nếu không lưu trạng thái, xóa lớp 'active' khỏi tất cả các màu
    colorLinks.forEach((item) => item.classList.remove("active"));
  }
});
</script>

<script>
/*=============== LƯU LỰA CHỌN CHARM HÌNH ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const sizeLinks = document.querySelectorAll(".size__link");

  // Xóa trạng thái đã lưu khi tải lại trang
  localStorage.removeItem("selectedCharm");

  // Xử lý khi chọn charm
  sizeLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      // Ngăn trang cuộn lên đầu
      event.preventDefault();

      // Loại bỏ lớp 'active' khỏi tất cả các charm
      sizeLinks.forEach((item) => item.classList.remove("active"));

      // Thêm lớp 'active' vào charm được chọn
      this.classList.add("active");

      // Lưu charm đã chọn
      const selectedCharm = this.textContent.trim();
      localStorage.setItem("selectedCharm", selectedCharm);
      console.log("Selected charm:", selectedCharm);
    });
  });

  // Tự động áp dụng charm đã lưu khi tải lại trang
  const savedCharm = localStorage.getItem("selectedCharm");
  if (savedCharm) {
    sizeLinks.forEach((link) => {
      if (link.textContent.trim() === savedCharm) {
        link.classList.add("active");
      }
    });
  } else {
    // Nếu không lưu trạng thái, xóa lớp 'active' khỏi tất cả các charm
    sizeLinks.forEach((item) => item.classList.remove("active"));
  }
});
</script>

<script>
/*=============== Ngăn cuộn trang và tạo Alert khi nhấn nút THÊM VÀO GIỎ HÀNG ===============*/
document.addEventListener("DOMContentLoaded", function () {
  const addToCartButton = document.getElementById("add-to-cart");

  // Ngăn trang cuộn lên đầu khi nhấn nút "Thêm vào giỏ hàng"
  addToCartButton.addEventListener("click", function (event) {
    // Ngừng hành động mặc định (nếu có)
    event.preventDefault();
  });
});
</script>

<script>
// Lấy phần tử nút "Thêm vào giỏ hàng" qua ID
document.getElementById("add-to-wishlist").addEventListener("click", function (event) {
  event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

  // Tạo thông báo
  const notification = document.createElement("div");
  notification.textContent = "Đã thêm vào Wishlist!";
  notification.style.position = "fixed";
  notification.style.bottom = "20px";
  notification.style.right = "20px";
  notification.style.backgroundColor = "#ff77c0b6";
  notification.style.color = "#fff";
  notification.style.padding = "10px 20px";
  notification.style.borderRadius = "5px";
  notification.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
  notification.style.zIndex = "1000";
  notification.style.fontSize = "14px";

  // Thêm thông báo vào body
  document.body.appendChild(notification);

  // Tự động xóa thông báo sau 2 giây
  setTimeout(function () {
    notification.remove();
  }, 1500);
});
</script>

<script>
//=========TẠO ALERT KHI NHẤN VÀO NÚT THÊM VÀO WISHLIST=====//
// Lấy phần tử nút "Thêm vào Wishlist" qua ID
document.getElementById("add-to-cart").addEventListener("click", function (event) {
  event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

  // Tạo thông báo
  const notification = document.createElement("div");
  notification.textContent = "Đã thêm vào giỏ hàng!";
  notification.style.position = "fixed";
  notification.style.bottom = "20px";
  notification.style.right = "20px";
  notification.style.backgroundColor = "#ff77c0b6";
  notification.style.color = "#fff";
  notification.style.padding = "10px 20px";
  notification.style.borderRadius = "5px";
  notification.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
  notification.style.zIndex = "1000";
  notification.style.fontSize = "14px";

  // Thêm thông báo vào body
  document.body.appendChild(notification);

  // Tự động xóa thông báo sau 2 giây
  setTimeout(function () {
    notification.remove();
  }, 1500);
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
    
    

///=========TẠO ALERT KHI NHẤN VÀO NÚT THÊM VÀO GIỎ HÀNG=====//
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
  </body>
</html>