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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

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
            <span class="count">0</span> <!-- Số lượng sản phẩm trong giỏ hàng -->
          </a>
          <!-- Nút mở menu dọc -->
          <div class="header__action-btn nav__toggle" id="nav-toggle">
            <img src="./assets//img/menu-burger.png" alt="">
          </div>
        </div>
      </nav>
    </header>


   
  
     <!--=============== MAIN ===============-->
     <main class="main">
      <!--=============== DISCOUNT BANNER ===============-->
        <section class="home section">
          <div class="home__slider">
              <div class="home__slide active">
                  <div class="home__container container grid">
                      <div class="home__content">
                          <span class="home__subtitle">Sale Dịp Lễ</span>
                          <h1 class="home__title">
                              Cùng Chic Chào Đón <br> <span>Ngày Phụ Nữ Việt Nam</span>
                          </h1>
                          <p class="home__description">
                              Giảm giá 10% tổng giá trị đơn hàng
                          </p>
                          <a href="shop.php" class="btn">Mua Ngay</a>
                      </div>
                      <div class="home__image-container">
                          <img src="assets/img/20thang10.png" class="home__img" alt="Black Friday Sale" />
                      </div>
                  </div>
              </div>
      
              <div class="home__slide">
                  <div class="home__container container grid">
                      <div class="home__content">
                          <span class="home__subtitle">Ưu Đãi Siêu Sale</span>
                          <h1 class="home__title">
                              Chào Đón Ngày Đôi <br> <span>Cùng Siêu Sale 12/12</span>
                          </h1>
                          <p class="home__description">
                              Tưng bừng săn deal cùng Chic
                          </p>
                          <a href="shop.php" class="btn">Khám Phá Ngay</a>
                      </div>
                      <div class="home__image-container">
                          <img src="assets/img/sieusale.png" class="home__img" alt="Winter Collection" />
                      </div>
                  </div>
              </div>
      
              <div class="home__slide">
                  <div class="home__container container grid">
                      <div class="home__content">
                          <span class="home__subtitle">Sale Cuối Năm</span>
                          <h1 class="home__title">
                              Ưu Đãi Mùa Lễ Hội <br> <span> Ra Mắt Bộ Sưu Tập Mới</span>
                          </h1>
                          <p class="home__description">
                              Ưu đãi lên đến 30% 
                          </p>
                          <a href="shop.php" class="btn">Sắm Ngay</a>
                      </div>
                      <div class="home__image-container">
                          <img src="assets/img/xmasdeal.png" class="home__img" alt="Tech Collection" />
                      </div>
                  </div>
              </div>
              
              <div class="home__navigation">
                  <div class="home__prev-btn">&lt;</div>
                  <div class="home__next-btn">&gt;</div>
              </div>
              
              <div class="home__pagination">
                  <span class="home__pagination-dot active"></span>
                  <span class="home__pagination-dot"></span>
                  <span class="home__pagination-dot"></span>
              </div>
          </div>
        </section>
        <!-- Swiper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>
  
        <script>
          document.addEventListener('DOMContentLoaded', () => {
              const slider = document.querySelector('.home__slider');
              const slides = document.querySelectorAll('.home__slide');
              const paginationDots = document.querySelectorAll('.home__pagination-dot');
              const prevBtn = document.querySelector('.home__prev-btn');
              const nextBtn = document.querySelector('.home__next-btn');
              
              let currentSlide = 0;
              const totalSlides = slides.length;
      
              // Function to show specific slide
              function showSlide(index) {
                  // Remove active class from all slides and dots
                  slides.forEach(slide => slide.classList.remove('active'));
                  paginationDots.forEach(dot => dot.classList.remove('active'));
      
                  // Ensure index wraps around
                  currentSlide = (index + totalSlides) % totalSlides;
      
                  // Add active class to current slide and dot
                  slides[currentSlide].classList.add('active');
                  paginationDots[currentSlide].classList.add('active');
              }
      
              // Next slide function
              function nextSlide() {
                  showSlide(currentSlide + 1);
              }
      
              // Previous slide function
              function prevSlide() {
                  showSlide(currentSlide - 1);
              }
      
              // Event listeners for navigation buttons
              nextBtn.addEventListener('click', nextSlide);
              prevBtn.addEventListener('click', prevSlide);
      
              // Event listeners for pagination dots
              paginationDots.forEach((dot, index) => {
                  dot.addEventListener('click', () => {
                      showSlide(index);
                  });
              });
      
              // Optional: Auto slide every 5 seconds
              setInterval(nextSlide, 5000);
          });
      </script>

       <!--=============== DANH MỤC SẢN PHẨM ===============-->
      <section id="custom-categories" class="custom-categories-container section">
        <h3 class="section__title_category"> 
          <span>DANH MỤC</span> SẢN PHẨM
        </h3>
        <p class="section__subtitle_category">
          Chọn Danh Mục Sản Phẩm <i class="fas fa-ribbon"></i>
        </p>
        
        <div class="custom-categories-grid">
          <a href="shop.php" class="custom-category-item">
            <img src="assets/img/kepvuong.png" alt="" class="custom-category-img" />
            <div class="custom-category-overlay">
              <div class="custom-category-title">Kẹp Vuông</div>
              <div class="custom-category-content">
                Thuần khiết và thanh lịch
              </div>
            </div>
          </a>
      
          <a href="shop.php" class="custom-category-item">
            <img src="assets/img/keptron.png" alt="" class="custom-category-img" />
            <div class="custom-category-overlay">
              <div class="custom-category-title">Kẹp Tròn</div>
              <div class="custom-category-content">
                Quyến rũ và nổi bật như chính bạn
              </div>
            </div>
          </a>
      
          <a href="shop.php" class="custom-category-item">
            <img src="assets/img/kepnho.png" alt="" class="custom-category-img" />
            <div class="custom-category-overlay">
              <div class="custom-category-title">Kẹp Nhỏ</div>
              <div class="custom-category-content">
                Bùng nổ phong cách toả sáng chất riêng
              </div>
            </div>
          </a>
      
          <a href="shop.php" class="custom-category-item">
            <img src="assets/img/guong.png" alt="" class="custom-category-img" />
            <div class="custom-category-overlay">
              <div class="custom-category-title">Gương</div>
              <div class="custom-category-content">
                Phản chiếu chính mình yêu thương trọn vẹn
              </div>
            </div>
          </a>
        </div>
      </section>


      <!--=============== PHẦN TRƯNG BÀY SẢN PHẨM ===============-->
      <section class="products container section">
        <div class="tab__btns">
          <!-- Nút tab "Khuyến mãi" -->
          <span class="tab__btn active-tab" data-target="#featured"
            >Khuyến mãi</span>
          <!-- Nút tab "Bán chạy", chuyển đổi sang nội dung bán chạy -->
          <span class="tab__btn" data-target="#popular">Bán chạy</span>
          
        </div>
           <!-- Phần sản phẩm "Khuyến mãi" -->
        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
               <!-- Sản phẩm 1 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product5.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product5.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-30%</div>
                </div>
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp vuông</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Bí Ẩn Đêm Đen</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span> (32)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">98.000 VND</span>
                    <span class="old__price">140.000 VND</span>
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                       class="action__btn cart__btn" 
                       aria-label="Thêm vào Giỏ hàng" 
                       data-inventory="22">
                       <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                </div>
              </div>
              
               <!-- Sản phẩm 2 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product6.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product6.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-22%</div>
                </div>
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp vuông</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Tinh Tú Mơ Màng</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <span> (111)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">109.000 VND</span>
                    <span class="old__price">140.000 VND</span>
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                       class="action__btn cart__btn" 
                       aria-label="Thêm vào Giỏ hàng" 
                       data-inventory="7">
                       <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                </div>
              </div>

               <!-- Sản phẩm 3 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
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
                   <!-- Nút chức năng -->
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
                <!-- Phần nội dung sản phẩm -->
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
                    <span> (171)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">46.800 VND</span>
                    <span class="old__price">60.000 VND</span>
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="29">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
                </div>
              </div>
               <!-- Sản phẩm 4 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product9.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product9.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-30%</div>
                </div>
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp nhỏ</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Ánh Trăng Lấp Lánh</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span> (91)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">42.000 VND</span>
                    <span class="old__price">60.000 VND</span>
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                       class="action__btn cart__btn" 
                       aria-label="Thêm vào Giỏ hàng" 
                       data-inventory="26">
                       <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                </div>
              </div>
               
               <!-- Sản phẩm 5 -->
             <div class="product__item">
              <!-- Hình ảnh sản phẩm-->
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img
                  src="assets/img/product10.1.png"
                  alt=""
                  class="product__img default"
                />
                <img
                  src="assets/img/product10.2.png"
                  alt=""
                  class="product__img hover"
                />
              </a>
               <!-- Nút chức năng -->
              <div class="product__actions">
                <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                  <i class="fa-solid fa-up-right-from-square"></i>
                </a>
                <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>
              </div>
              <div class="product__badge light-blue">-22%</div>
            </div>
            <!-- Phần nội dung sản phẩm -->
            <div class="product__content">
              <span class="product__category">Gương</span>
              <a href="details.php">
                <h3 class="product__title">Gương Sa Mạc Vàng</h3>
              </a>
              <div class="product__rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span> (106)</span>
              </div>
              <div class="product__price flex">
                <span class="new__price">156.000 VND</span>
                <span class="old__price">200.000 VND</span>
              </div>
              <!-- Nút thêm vào giỏ hàng -->
              <a href="#" 
                   class="action__btn cart__btn" 
                   aria-label="Thêm vào Giỏ hàng" 
                   data-inventory="5">
                   <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
            </div>
          </div>

           <!-- Sản phẩm 6 -->
          <div class="product__item">
            <!-- Hình ảnh sản phẩm-->
            <div class="product__banner">
              <a href="details.php" class="product__images">
                <img
                  src="assets/img/product11.1.png"
                  alt=""
                  class="product__img default"
                />
                <img
                  src="assets/img/product11.2.png"
                  alt=""
                  class="product__img hover"
                />
              </a>
               <!-- Nút chức năng -->
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
            <!-- Phần nội dung sản phẩm -->
            <div class="product__content">
              <span class="product__category">Gương</span>
              <a href="details.php">
                <h3 class="product__title">Gương Lọ Lem</h3>
              </a>
              <div class="product__rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span> (24)</span>
              </div>
              <div class="product__price flex">
                <span class="new__price">156.000 VND</span>
                <span class="old__price">200.000 VND</span>
              </div>
              <!-- Nút thêm vào giỏ hàng -->
              <a href="#" 
              class="action__btn cart__btn" 
              aria-label="Thêm vào Giỏ hàng" 
              data-inventory="1">
              <i class="fi fi-rs-shopping-bag-add"></i>
           </a>
            </div>
          </div>
        </div>
      </div>
          
          <!-- Phần sản phẩm "Bán chạy" -->
          <div class="tab__item" content id="popular">
            <div class="products__container grid">
               <!-- Sản phẩm 1 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product1.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product1.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-pink">Hot</div>
                </div>
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp vuông</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Nơ Xanh Mát</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span> (99)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">120.000 VND</span>
                 
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="12">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
                </div>
              </div>

               <!-- Sản phẩm 2 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product2.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product2.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">Hot</div>
                </div>
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp vuông</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Hoa Sứ Xinh Xắn</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span> (211)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">120.000 VND</span>
            
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="3">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
                </div>
              </div>

               <!-- Sản phẩm 3 -->
              <div class="product__item">
                <!-- Hình ảnh sản phẩm-->
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img
                      src="assets/img/product3.1.png"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product3.2.png"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                   <!-- Nút chức năng -->
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
                <!-- Phần nội dung sản phẩm -->
                <div class="product__content">
                  <span class="product__category">Kẹp vuông</span>
                  <a href="details.php">
                    <h3 class="product__title">Kẹp Cherry Ngọt Ngào</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <span> (119)</span>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">130.000 VND</span>
            
                  </div>
                  <!-- Nút thêm vào giỏ hàng -->
                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="11">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
                </div>
              </div>
      </section>


      <!--=============== PHẦN ĐẾM NGƯỢC GIẢM GIÁ ===============-->
<section class="deals section">
  <div class="deals__container container grid">
    <!-- Hình ảnh deal giảm giá -->
    <div class="deals__item">
      <img src="assets/img/countdown.png" alt="Deals of the Day - Summer Collection" class="deals__image">
    </div>

    <!-- Mục countdown giảm giá giảm giá -->
    <div class="deals__item">
      <div class="deals__group">
        <h3 class="deals__brand">SIÊU ƯU ĐÃI DỊP CUỐI NĂM</h3>
        <span class="deals__category">✨Áp Dụng Cho Tất Cả Sản Phẩm Kẹp Tóc✨</span>
      </div>
      <h4 class="deals__title">🚴‍♀️Hãy Đến Với Cửa Hàng ChicCharm Ngay</h4>
      <div class="deals__price flex">
          <!-- Giá mới sau khi giảm -->
        <span class="new__price">99.000 VND</span>
         <!-- Giá cũ trước khi giảm -->
        <span class="old__price">199.000 VND</span>
      </div>
      <div class="deals__group">
        <p class="deals__countdown-text">⏰Chương trình sẽ kết thúc trong:</p>
        <div class="countdown">
          <!-- Phần hiển thị số ngày còn lại -->
          <div class="countdown__amount">
            <p class="countdown__period" id="days">02</p>
            <span class="unit">Ngày</span>
          </div>
          <!-- Phần hiển thị số giờ còn lại -->
          <div class="countdown__amount">
            <p class="countdown__period" id="hours">22</p>
            <span class="unit">Giờ</span>
          </div>
          <!-- Phần hiển thị số phút còn lại -->
          <div class="countdown__amount">
            <p class="countdown__period" id="minutes">57</p>
            <span class="unit">Phút</span>
          </div>
          <!-- Phần hiển thị số giây còn lại -->
          <div class="countdown__amount">
            <p class="countdown__period" id="seconds">28</p>
            <span class="unit">Giây</span>
          </div>
        </div>
      </div>
      <!-- Nút dẫn đến trang mua hàng -->
      <div class="deals__btn">
        <a href="shop.php" class="btn btn--md">Mua Ngay</a>
      </div>
    </div>
  </div>
</section>

<script>
  // Thời gian kết thúc của deal (ví dụ: 2 ngày, 22 giờ, 57 phút, 28 giây từ thời điểm hiện tại)
  const endDate = new Date().getTime() + 2 * 24 * 60 * 60 * 1000; // 2 ngày từ hiện tại

  function updateCountdown() {
    const now = new Date().getTime(); // Lấy thời gian hiện tại
    const distance = endDate - now; // Tính khoảng cách thời gian giữa hiện tại và thời điểm kết thúc

    if (distance <= 0) {
      clearInterval(countdownInterval); // Dừng đồng hồ đếm ngược khi kết thúc
      return;
    }

    // Tính toán số ngày, giờ, phút, giây còn lại
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Cập nhật giá trị countdown vào các phần tử HTML
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
  }

  // Cập nhật đồng hồ đếm ngược mỗi giây
  const countdownInterval = setInterval(updateCountdown, 1000);
</script>


      <!--=============== PHẦN GIỚI THIỆU SẢN PHẨM MỚI ===============-->
      <section class="new__arrivals container section">
        <!-- Tiêu đề sản phẩm mới -->
        <h3 class="section__title"><span>SẢN PHẨM</span> MỚI</h3>
      </h3>
        <!-- Tiêu đề phụ của sản phẩm mới -->
      <p class="section__subtitle">Cùng Chic Đón Giáng Sinh Lung Linh Với Bộ Sưu Tập Mới   <i class="fas fa-tag"></i></p>
        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <!-- Sản phẩm 1 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product16.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product16.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-pink">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp nhỏ</span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Ngôi Sao Xanh</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (68)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">54.000 VND</span>
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="11">
                <i class="fi fi-rs-shopping-bag-add"></i>
             </a>
              </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product17.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product17.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-green">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp tròn</span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Hoa Mùa Hạ</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (14)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">189.000 VND</span>
            
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="11">
                <i class="fi fi-rs-shopping-bag-add"></i>
             </a>
              </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
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
                 <!-- Nút chức năng -->
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
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp nhỏ </span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Trái Tim Đại Dương</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (23)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">67.000 VND</span>
        
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="7">
                <i class="fi fi-rs-shopping-bag-add"></i>
             </a>
              </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product19.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product19.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-blue">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp vuông </span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Thiên Sứ Xanh </h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (10)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">129.000 VND</span>
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="9">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
              </div>
            </div>

            <!-- Sản phẩm 5 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product20.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product20.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-blue">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
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
                  <i class="fa fa-star"></i>
                  <span> (21)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">129.000 VND</span>
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="12">
                <i class="fi fi-rs-shopping-bag-add"></i>
             </a>
              </div>
            </div>

            <!-- Sản phẩm 7 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product21.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product21.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-blue">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp vuông </span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Ánh Sao Hồng</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (211)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">129.000 VND</span>
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Thêm vào Giỏ hàng" 
                data-inventory="11">
                <i class="fi fi-rs-shopping-bag-add"></i>
             </a>
              </div>
            </div>

            <!-- Sản phẩm 8 -->
            <div class="product__item swiper-slide">
              <!-- Hình ảnh sản phẩm-->
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img
                    src="assets/img/product1.1.png"
                    alt=""
                    class="product__img default"
                  />
                  <img
                    src="assets/img/product1.2.png"
                    alt=""
                    class="product__img hover"
                  />
                </a>
                 <!-- Nút chức năng -->
                <div class="product__actions">
                  <a href="shop.php" class="action__btn" aria-label="Cửa hàng">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                  <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>
                <div class="product__badge light-green">Hot</div>
              </div>
              <!-- Phần nội dung sản phẩm -->
              <div class="product__content">
                <span class="product__category">Kẹp vuông </span>
                <a href="details.php">
                  <h3 class="product__title">Kẹp Nơ Xanh Mát</h3>
                </a>
                <div class="product__rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span> (211)</span>
                </div>
                <div class="product__price flex">
                  <span class="new__price">120.000 VND</span>
               
                </div>
                <!-- Nút thêm vào giỏ hàng -->
                <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Thêm vào Giỏ hàng" 
                  data-inventory="11">
                  <i class="fi fi-rs-shopping-bag-add"></i>
               </a>
              </div>
            </div>
          </div>
           <!-- Nút điều hướng trước của slider -->
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
          <!-- Nút điều hướng tiếp theo của slider -->
          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
        </div>
      </section>
    
       <!--=============== ĐÁNH GIÁ CỦA KHÁCH HÀNG =====================-->
       <section id="customer-reviews" class="comments-gallery container section">
        <h3 class="section__title"><span>ĐÁNH GIÁ</span> CỦA KHÁCH HÀNG</h3>
        <p class="section__subtitle">Hãy Xem Các Khách Hàng Nói Gì Về Chic  <i class="fa-solid fa-comment"></i></p>
        <div class="comments__container swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="comment">
                <div class="comment-image">
                  <img src="assets/img/urbanxmas.png" alt="Product Image" class="product-img" />
                </div>
                <div class="comment-text">
                  <pre><strong>Mỹ Hương:</strong> Sản phẩm dễ thương, thuận tiện sử dụng 
                    rất phù hợp để làm quà tặng bạn bè!</pre>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="comment">
                <div class="comment-image">
                  <img src="assets/img/bellinixmas.png" alt="Product Image" class="product-img" />
                </div>
                <div class="comment-text">
                  <pre><strong>Yahan:</strong> Shop tư vấn nhiệt tình, giao hàng nhanh
                    sản phẩm đóng gói rất chỉnh chu</pre>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="comment">
                <div class="comment-image">
                  <img src="assets/img/shirleyxmas.png" alt="Product Image" class="product-img" />
                </div>
                <div class="comment-text">
                  <pre><strong>Unnhi:</strong> Sản phẩm thời trang phù hợp với giới trẻ
                  trang trí rất dễ thương, độc đáo</pre>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                </div>
              </div>
            </div>
      
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <div class="comment">
                <div class="comment-image">
                  <img src="assets/img/urbanchic.png" alt="Product Image" class="product-img" />
                </div>
                <div class="comment-text">
                  <pre><strong>Miannas:</strong> Sản phẩm được đóng gói rất kỹ lưỡng
                  shop có nhiều chương trình giảm giá thú vị</pre>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                </div>
              </div>
            </div>
      
            <!-- Thêm các slide bình luận khác ở đây... -->
          </div>
      
          <!-- Pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <!-- Form thêm bình luận -->
      <form id="comment-form" class="add-comment">
        <textarea id="new-comment" placeholder="Nhập bình luận của bạn..." required></textarea>
        <button type="submit">Gửi bình luận</button>
      </form>
      </section>

      <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>
    
    <script>
        // Initialize Swiper
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.comments__container', {
                // Optional parameters
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                
                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                
                // Responsive breakpoints
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    // when window width is >= 768px
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    // when window width is >= 1024px
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 40
                    }
                },
                
                // Navigation
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

            // Comment Form Handling
            const commentForm = document.getElementById('comment-form');
            const newCommentTextarea = document.getElementById('new-comment');

            commentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                if (newCommentTextarea.value.trim() === '') {
                    alert('Vui lòng nhập bình luận của bạn.');
                    return;
                }

                // Here you would typically send the comment to a server
                // For this example, we'll just show an alert
                alert('Bình luận của bạn đã được gửi. Cảm ơn!');
                
                // Clear the textarea
                newCommentTextarea.value = '';
            });
        });
    </script>

      <!--=============== PHẦN GIỚI THIỆU THÀNH VIÊN ===============-->
      <section class="categories container section">
        <!-- Tiêu đề chính của phần giới thiệu thành viên -->
        <h3 class="section__title">
          <span>THÀNH VIÊN</span> CỦA CHICCHARM 
        </h3>
        <!-- Phần mô tả ngắn về nội dung giới thiệu -->
        <p class="section__subtitle">Giới Thiệu Các Thành Viên <i class="fa-solid fa-user-group"></i> </p>

     <!-- Dòng chữ chạy -->
     <div class="marquee">
         <marquee behavior="scroll" direction="left"> <i class="fas fa-heart"></i> ChicCharm - Cửa Hàng Phụ Kiện Thời Trang <i class="fas fa-heart"></i> </marquee>
     </div>
    
     <!-- Thông tin các thành viên -->
     <main class="team-section">
     
      
      <!-- Thông tin các thành viên 2-->
         <div class="team-member">
             <div class="member-img">
                 <img src="https://i.pinimg.com/originals/de/7c/0c/de7c0cb504cafc6e144c487ccba6e435.jpg" alt="Avatar of Uyển Nhi">
             </div>
             <h2>Uyển Nhi</h2>
             <p class="role">Member</p> <br>
             <p class="description"></p> <br>
             <p><i class="fas fa-envelope"></i> Email: nhi@gmail.com</p>
             <p><i class="fas fa-phone"></i> SĐT: (234) 567-8901</p>
         </div>
      
         <!-- Thông tin các thành viên 3 -->
         <div class="team-member">
             <div class="member-img">
                 <img src="https://i.pinimg.com/originals/a5/37/fb/a537fbc36fb3b862dc4e69dc16991a96.jpg" alt="Avatar of Minh Anh">
             </div>
             <h2>Minh Anh</h2>
             <p class="role">Member</p> <br>
             <p class="description"></p>
             <p><i class="fas fa-envelope"></i> Email: anh@gmail.com</p>
             <p><i class="fas fa-phone"></i> SĐT: (456) 789-0123</p>
         </div>
        
         <!-- Thông tin các thành viên 4 -->
         <div class="team-member">
             <div class="member-img">
                 <img src="https://i.pinimg.com/originals/38/cd/b9/38cdb91ef60001d7e8713175a4a557e1.jpg" alt="Avatar of Nam Phương">
             </div>
             <h2>Nam Phương</h2>
             <p class="role">Leader</p> <br>
             <p class="description"></p>
             <p><i class="fas fa-envelope"></i> Email: phuong@gmail.com</p>
             <p><i class="fas fa-phone"></i> SĐT: (567) 890-1234</p>
         </div>
 
 
         <!-- Thông tin các thành viên 5 -->
         <div class="team-member">
             <div class="member-img">
                 <img src="https://i.pinimg.com/originals/e7/29/e6/e729e69636a8a13a12a2267dd5002a17.jpg" alt="Avatar of Gia Hân">
             </div>
             <h2>Gia Hân</h2>
             <p class="role">Member</p> <br>
             <p class="description"></p>
             <p><i class="fas fa-envelope"></i> Email: han@gmail.com</p>
             <p><i class="fas fa-phone"></i> SĐT (678) 901-2345</p>
         </div>

         <!-- Thông tin các thành viên 6-->
         <div class="team-member">
             <div class="member-img">
                 <img src="https://i.pinimg.com/originals/87/7f/9f/877f9f0fb3d4bf1cf622e7b113fc7e58.jpg" alt="Avatar of Mỹ Hương">
             </div>
             <h2>Mỹ Hương</h2>
             <p class="role">Member</p> <br>
             <p class="description"></p>
             <p><i class="fas fa-envelope"></i> Email: huong@gmail.com</p>
             <p><i class="fas fa-phone"></i> SĐT: (789) 012-3456</p>
         </div>
     </main>
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
  if (window.scrollY > 1200) { // Khi cuộn xuống 1200px
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

  </body>
</html>
