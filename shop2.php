<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
  $productId = $_POST['product_id'];
  $inventory = $_POST['inventory'];

  // Tạo danh sách sản phẩm mẫu (id => thông tin chi tiết)
  $productList = [
    '13' => [
      'name' => 'Kẹp Hoa Yêu Thương',
      'description' => 'Combo kẹp tóc và gương trái tim cầm tay đính charm tự chọn',
      'image' => 'assets/img/product13.1.png',
      'price' => 90000
    ],
    '14' => [
      'name' => 'Kẹp Bướm Vàng Mộng Mơ',
      'description' => 'Gương trái tim cầm tay đính charm tự chọn',
      'image' => 'assets/img/product14.1.png',
      'price' => 90000
    ],
    '15' => [
      'name' => 'Kẹp Mắt Mèo Cá Tính',
      'description' => 'Kẹp tóc cá tính màu đen xám ánh bạc đính charm',
      'image' => 'assets/img/product15.1.png',
      'price' => 90000
    ]
  ];

  // Kiểm tra sản phẩm hợp lệ
  if (isset($productList[$productId])) {
    $product = $productList[$productId];

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$productId])) {
      $_SESSION['cart'][$productId]['quantity'] += 1;
    } else {
      $_SESSION['cart'][$productId] = [
        'name' => $product['name'],
        'description' => $product['description'],
        'image' => $product['image'],
        'price' => $product['price'],
        'quantity' => 1,
        'inventory' => $inventory
      ];
    }
  }
   // Ghi dữ liệu session và đóng để giải phóng
  session_write_close();
}

// Đếm số lượng
$cartCount = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += $item['quantity'];
    }
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Định nghĩa bộ mã ký tự và kích thước viewport cho thiết bị di động -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
 
    <!-- Thêm Font Awesome từ CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  
    <!-- Liên kết tới file CSS để sử dụng các icon từ Flaticon -->
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    
    <!-- Liên kết tới Swiper, thư viện để tạo slider (carousel) -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    
    <!-- Liên kết tới file CSS chính của bạn -->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    
    <style>
   
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

/*======== Thanh lọc và sắp xếp =======*/
     /* CSS cho thanh lọc (filter bar) */
.filter-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding: 10px;

  border-radius: 8px;
  background-color: hsl(324, 91%, 96%);
  
}

/* CSS cho nhóm các bộ lọc */
.filter-group {
  display: flex;
  align-items: center;
  gap: 10px;
}

/* CSS cho các nhãn trong các nhóm lọc */
.filter-group label {
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 14px;
  font-weight: bold;
  color: #555;
}

/* CSS cho các trường nhập liệu và nút */
.filter-group select,
.filter-group input {
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 11px;
  color: #333;
}

/* CSS cho nút áp dụng trong nhóm lọc */
.filter-group button {
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  background-color: #fa97ca;
  color: white;
  border: none;
  padding: 8px 15px;
  border-radius: 5px;
  cursor: pointer;
}

/* CSS khi hover vào nút */
.filter-group button:hover {
  background-color: #ff3791;
}

/* Media query cho màn hình nhỏ (Dưới 1200px) */
@media (max-width: 1200px) {
  .filter-bar {
    flex-direction: column; /* Chuyển thành thanh dọc */
    align-items: flex-start; /* Căn lề trái */
  }

  .filter-group {
    width: 100%; /* Các nhóm lọc sẽ chiếm toàn bộ chiều rộng */
    margin-bottom: 10px; /* Thêm khoảng cách giữa các nhóm lọc */
  }

  .filter-group label {
    width: 100%; /* Label sẽ chiếm toàn bộ chiều rộng */
    margin-bottom: 5px; /* Khoảng cách giữa label và select */
  }

  .filter-group select,
  .filter-group input,
  .filter-group button {
    width: 100%; /* Các input, select, button chiếm toàn bộ chiều rộng */
  }
}

/* Media query cho màn hình rất nhỏ (Dưới 480px) */
@media (max-width: 480px) {
  .filter-bar {
    padding: 20px; /* Thêm padding để không gian trông thoáng hơn */
  }
}

/*======== Popup khi ấn vào xem trước =======*/
.modal {
  display: none; /* Ban đầu ẩn popup */
  position: fixed;
  z-index: 1000;
  left: 500px;
  top: 100px;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0); /* Làm mờ nền */
  display: flex; /* Sử dụng Flexbox để căn giữa */
  align-items: center; /* Căn giữa theo chiều dọc */
  justify-content: center; /* Căn giữa theo chiều ngang */
}

.modal-content {
  background-color: #f7f5f7; 
  padding: 20px;
  border: none; /* Loại bỏ viền cũ */
  border-style:dashed;
  font-size:smaller;
  width: 300px; /* Kích thước cố định */
  max-width: 90%; /* Đảm bảo không bị tràn màn hình nhỏ */
  border-radius: 12px; /* Góc bo mềm mại */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25); /* Hiệu ứng đổ bóng */
  position: relative; /* Vị trí để căn chỉnh nút đóng */
  animation: fadeIn 0.3s ease; /* Hiệu ứng mở */
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.close {
  color: #666; /* Màu chữ nhạt */
  font-size: 20px;
  font-weight: bold;
  position: absolute; /* Đặt góc trên bên phải */
  top: 10px;
  right: 10px;
  background: none;
  border: none;
  cursor: pointer;
  transition: color 0.3s ease;
}

.close:hover {
  color: #e74c3c; /* Màu đỏ khi hover */
  text-decoration: none;
}


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

/* Điều chỉnh responsive design cho nút xem trước và thêm vào wishlist*/
@media (max-width: 1100px) {
  .product__actions{
    display: none; /*Ẩn nút*/
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
              <a href="index.php" class="nav__link">Trang Chủ</a>
            </li>
            <li class="nav__item dropdown">
              <a href="shop.php" class="nav__link active-link">Cửa Hàng</a>
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
          <?php if ($cartCount > 0): ?>
          <span class="count"><?= $cartCount ?></span>
          <?php endif; ?>

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
    
    <!-- Phần thanh lọc sản phẩm -->
    <section class="products container section--lg">
      <!-- Thanh lọc -->
      <div class="filter-bar">
        <!-- Lọc theo loại sản phẩm -->
        <div class="filter-group">
          <label for="category">Phân loại:</label>
          <select id="category">
            <option value="all">Tất cả</option>
            <option value="hairclip1">Kẹp vuông</option>
            <option value="hairclip2">Kẹp nhỏ</option>
            <option value="hairclip3">Kẹp tròn</option>
            <option value="mirror">Gương</option>
          </select>
        </div>

        <!-- Lọc theo thương hiệu -->
        <div class="filter-group">
          <label for="brand">Thương hiệu:</label>
          <select id="brand">
            <option value="all">Tất cả</option>
            <option value="Emijay">Emijay</option>
            <option value="Flowerknows">FLowerknows</option>
            <option value="Chunks">Chunks</option>
          </select>
        </div>


        <!-- Lọc theo màu sắc -->
        <div class="filter-group">
          <label for="color">Màu sắc:</label>
          <select id="color">
            <option value="all">Tất cả</option>
            <option value="pink">Hồng</option>
            <option value="yellow">Vàng</option>
            <option value="orange">Cam</option>
            <option value="white">Trắng </option>
            <option value="blue">Xanh</option>
            <option value="black">Đen</option>
            <option value="red">Đỏ</option>
            <option vaue="violet">Tím</option>
          </select>
        </div>

        <!-- Lọc theo giá tiền -->
        <div class="filter-group">
          <label for="price">Giá tiền:</label>
          <select id="price">
            <option value="all">Tất cả</option>
            <option value="low-to-high">Nhỏ hơn 50.000 VND</option>
            <option value="high-to-low">Lớn hơn 50.000 VND</option>
          </select>
        </div>

        <!-- Lọc theo tag (Chẳng hạn: Hot, Sale) -->
        <div class="filter-group">
          <label for="tag">Tag:</label>
          <select id="tag">
            <option value="all">Tất cả</option>
            <option value="hot">Hot</option>
            <option value="sale">Sale</option>
          </select>
        </div>

        <!-- Lọc theo cách sắp xếp (Mới nhất, Cũ nhất) -->
        <div class="filter-group">
          <label for="sort">Sắp xếp:</label>
          <select id="sort">
            <option value="newest">Mới nhất</option>
            <option value="oldest">Cũ nhất</option>
          </select>
        </div>
        

        <!-- Nút Áp dụng bộ lọc -->
        <div class="filter-group">
          <button id="apply-filters">Áp dụng</button>
        </div>
      </div>

      <!-- Danh sách sản phẩm -->
      <p class="total__products">Chic tìm thấy <span>3</span> phụ kiện dành cho nàng!</p> <!-- Cập nhật số lượng sản phẩm hiển thị -->
      <div class="products__container grid">
       
        <!-- Sản phẩm thứ 1 -->  
        <div class="product__item">
          <div class="product__banner">
            <!-- Hình ảnh sản phẩm (trạng thái mặc định và khi hover) -->
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
            <!-- Các nút chức năng cho sản phẩm -->
            <div class="product__actions">
              <a href="#" class="action__btn" aria-label="Xem trước">
                <i class="fi fi-rs-eye"></i>
              </a>
              <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>
            <div class="product__badge light-pink">Hot</div>
          </div>
           <!-- Phần nội dung sản phẩm -->
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

            <!-- Nút thêm vào giỏ hàng -->
            <form method="POST" action="shop2.php" style="display: inline;">
            <input type="hidden" name="product_id" value="13">
            <input type="hidden" name="inventory" value="11">
            <button type="submit" name="add_to_cart" class="action__btn cart__btn" title="Thêm vào giỏ hàng">
            <i class="fi fi-rs-shopping-bag-add"></i>
            </button>
            </form>

                </div>
              </div>


              <!-- Sản phẩm thứ 2 -->
              <div class="product__item">
                <div class="product__banner">
                  <!-- Hình ảnh sản phẩm -->
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
                   <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem trước">
                      <i class="fi fi-rs-eye"></i>
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
                  <!-- Nút thêm vào giỏ hàng -->
                  <form method="POST" action="shop2.php" style="display: inline;">
            <input type="hidden" name="product_id" value="14">
            <input type="hidden" name="inventory" value="11">
            <button type="submit" name="add_to_cart" class="action__btn cart__btn" title="Thêm vào giỏ hàng">
            <i class="fi fi-rs-shopping-bag-add"></i>
            </button>
            </form>
                </div>
              </div>


               <!-- Sản phẩm thứ 3 -->
              <div class="product__item">
                <div class="product__banner">
                   <!-- Hình ảnh sản phẩm -->
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
                  <!-- Nút chức năng -->
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Xem trước">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Thêm vào Wishlist" id="addToWishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                  </div>
                  <div class="product__badge light-orange">Hot</div>
                </div>
                <!-- Nội dung sản phẩm -->
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
                  <!-- Nút thêm vào giỏ hàng -->
                  <form method="POST" action="shop2.php" style="display: inline;">
            <input type="hidden" name="product_id" value="15">
            <input type="hidden" name="inventory" value="11">
            <button type="submit" name="add_to_cart" class="action__btn cart__btn" title="Thêm vào giỏ hàng">
            <i class="fi fi-rs-shopping-bag-add"></i>
            </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Thanh phân trang -->
      <ul class="pagination">
        <li><a href="shop.php" class="pagination__link_icon"> <i class="fi-rs-angle-double-small-left"></i></a></li> <!-- Quay lại trang trước -->
           <li><a href="shop.php" class="pagination__link">01</a></li> <!-- Trang 1 -->
           <li><a href="shop2.php" class="pagination__link active">02</a></li>  <!-- Trang 2, đang hoạt động -->
           </ul>
    </section>

    <!--TẠO CỬA SỔ POPUP KHI NHẤN VÀO XEM TRƯỚC-->
    <div id="quickViewModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="productDetails">
        </div>
      </div>
    </div>
  

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
   


    <script>
      //=========LẮNG NGHE SỰ KIỆN CUỘN TRANG=====//
window.onscroll = function() {
  // Lấy thanh menu
  var nav = document.querySelector('.nav');

  // Kiểm tra vị trí cuộn của trang
  if (window.scrollY > 160) { // Khi cuộn xuống 160px
    nav.classList.add('fixed-menu'); // Thêm lớp cố định cho nav
  } else {
    nav.classList.remove('fixed-menu'); // Bỏ lớp cố định khi lên đầu trang
  }
};
    </script>

    <!--========XỬ LÝ THANH LỌC VÀ SẮP XẾP SẢN PHẨM========-->
    <!-- JavaScript để xử lý việc lọc và sắp xếp sản phẩm -->
    <script>
      // Lấy danh sách sản phẩm và các tiêu chí lọc
      const products = document.querySelectorAll('.product__item');
      const categoryFilter = document.getElementById('category');
      const brandFilter = document.getElementById('brand');
      const colorFilter = document.getElementById('color');
      const priceFilter = document.getElementById('price');
      const tagFilter = document.getElementById('tag');
      const sortFilter = document.getElementById('sort');
      const applyFiltersBtn = document.getElementById('apply-filters');
     
      // Tạo các thông tin giả lập cho bộ lọc
      const productData = [
  {
    element: products[0],
    category: 'hairclip3',
    color: 'pink',
    price: 90.000,
    tag: 'hot',
    brand: 'Chunks', // Thêm thuộc tính thương hiệu
    createdAt: new Date('2023-12-01'),
  },
  {
    element: products[1],
    category: 'hairclip3',
    color: 'yellow',
    price: 90.000,
    tag: 'hot',
    brand: 'Chunks',
    createdAt: new Date('2023-11-20'),
  },
  {
    element: products[2],
    category: 'hairclip3',
    color: 'orange',
    price: 90.000,
    tag: 'hot',
    brand: 'Chunks',
    createdAt: new Date('2023-11-10'),
  },
];

// Lấy giá trị của bộ lọc
function filterProducts() {
  const selectedCategory = categoryFilter.value;
  const selectedColor = colorFilter.value;
  const selectedPrice = priceFilter.value;
  const selectedTag = tagFilter.value;
  const selectedBrand = brandFilter.value; // Lấy giá trị của bộ lọc thương hiệu
  const selectedSort = sortFilter.value;

 // Lặp qua từng sản phẩm trong dữ liệu sản phẩm
 productData.forEach((product) => {
    // Lấy các thuộc tính cần thiết của sản phẩm từ đối tượng `product`
    const { element, category, color, price, tag, brand, createdAt } = product;
    // `element`: Thẻ DOM đại diện cho sản phẩm
    // `category`: Danh mục của sản phẩm
    // `color`: Màu sắc của sản phẩm
    // `price`: Giá của sản phẩm
    // `tag`: Thẻ mô tả sản phẩm (nếu có)
    // `brand`: Thương hiệu của sản phẩm
    // `createdAt`: Ngày tạo sản phẩm (dùng cho sắp xếp theo thời gian)

    // Kiểm tra từng tiêu chí
    const categoryMatch =
      selectedCategory === 'all' || selectedCategory === category;
    const colorMatch = selectedColor === 'all' || selectedColor === color;
    const priceMatch =
      selectedPrice === 'all' ||
      (selectedPrice === 'low-to-high' && price <= 50.000) ||
      (selectedPrice === 'high-to-low' && price > 50.000);
    const tagMatch = selectedTag === 'all' || selectedTag === tag;
    const brandMatch = selectedBrand === 'all' || selectedBrand === brand; // Thêm kiểm tra thương hiệu

    // Ẩn hoặc hiện sản phẩm dựa trên kết quả
    if (categoryMatch && colorMatch && priceMatch && tagMatch && brandMatch) {
      element.style.display = 'block';
    } else {
      element.style.display = 'none';
    }
  });

  // Sắp xếp sản phẩm
  if (selectedSort === 'newest') {
    productData.sort((a, b) => b.createdAt - a.createdAt);
  } else if (selectedSort === 'oldest') {
    productData.sort((a, b) => a.createdAt - b.createdAt);
  }

  // Cập nhật thứ tự sản phẩm trong DOM
  const container = document.querySelector('.products__container');
  productData.forEach((product) => container.appendChild(product.element));
}
    
      // Thêm sự kiện cho nút áp dụng
      applyFiltersBtn.addEventListener('click', filterProducts);
  

  //====== HIỂN THỊ ĐÚNG SỐ LƯỢNG SẢN PHẨM =====//

// Hàm lọc sản phẩm theo các tiêu chí đã chọn
function filterProducts() {
  // Lấy giá trị từ các bộ lọc (category, color, price, tag, brand, sort)
  const selectedCategory = categoryFilter.value;
  const selectedColor = colorFilter.value;
  const selectedPrice = priceFilter.value;
  const selectedTag = tagFilter.value;
  const selectedBrand = brandFilter.value;
  const selectedSort = sortFilter.value;

  // Biến dùng để đếm số lượng sản phẩm hiển thị
  let visibleCount = 0;

  // Duyệt qua từng sản phẩm trong dữ liệu sản phẩm (productData)
  productData.forEach((product) => {
    // Destructuring để lấy các thông tin từ đối tượng sản phẩm
    const { element, category, color, price, tag, brand, createdAt } = product;

    // Kiểm tra các tiêu chí lọc (category, color, price, tag, brand)
    const categoryMatch =
      selectedCategory === 'all' || selectedCategory === category; // Kiểm tra category
    const colorMatch = selectedColor === 'all' || selectedColor === color; // Kiểm tra color
    const priceMatch =
      selectedPrice === 'all' ||
      (selectedPrice === 'low-to-high' && price <= 50.000) || // Kiểm tra price (low-to-high)
      (selectedPrice === 'high-to-low' && price > 50.000); // Kiểm tra price (high-to-low)
    const tagMatch = selectedTag === 'all' || selectedTag === tag; // Kiểm tra tag
    const brandMatch = selectedBrand === 'all' || selectedBrand === brand; // Kiểm tra brand

    // Kiểm tra tất cả các tiêu chí lọc
    // Nếu tất cả các tiêu chí đều đúng, hiển thị sản phẩm, ngược lại ẩn đi
    if (categoryMatch && colorMatch && priceMatch && tagMatch && brandMatch) {
      element.style.display = 'block'; // Hiển thị sản phẩm
      visibleCount++; // Tăng số lượng sản phẩm hiển thị
    } else {
      element.style.display = 'none'; // Ẩn sản phẩm
    }
  });

  // Sắp xếp sản phẩm theo thứ tự (mới nhất hoặc cũ nhất) dựa trên ngày tạo (createdAt)
  if (selectedSort === 'newest') {
    productData.sort((a, b) => b.createdAt - a.createdAt); // Sắp xếp mới nhất trước
  } else if (selectedSort === 'oldest') {
    productData.sort((a, b) => a.createdAt - b.createdAt); // Sắp xếp cũ nhất trước
  }

  // Cập nhật lại thứ tự của các sản phẩm trong DOM (sắp xếp lại theo thứ tự đã chọn)
  const container = document.querySelector('.products__container'); // Lấy phần tử chứa sản phẩm
  productData.forEach((product) => container.appendChild(product.element)); // Thêm lại sản phẩm vào container

  // Cập nhật số lượng sản phẩm hiển thị vào phần tử `.total__products`
  const totalProductsText = document.querySelector('.total__products span'); // Lấy phần tử hiển thị tổng số sản phẩm
  totalProductsText.textContent = visibleCount; // Cập nhật số lượng sản phẩm hiển thị
}



      
    //========HIỆN POPUP KHI NHẤN VÀO XEM TRƯỚC========//
      // Lấy các phần tử cần thiết
const quickViewButtons = document.querySelectorAll('.product__actions .fi-rs-eye');
const modal = document.getElementById('quickViewModal');
const modalContent = document.getElementById('productDetails');
const closeModal = document.querySelector('.modal .close');

// Lắng nghe sự kiện khi nhấn vào nút Quick View
quickViewButtons.forEach((button, index) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();

    // Lấy sản phẩm hiện tại từ dữ liệu sản phẩm dựa trên chỉ số index được cung cấp
    const product = productData[index];
    // Cập nhật nội dung của modal 
    modalContent.innerHTML = `
     <h2 style="color:hsla(328, 100%, 57%, 0.712) ;">${product.element.querySelector('.product__title').textContent}</h2>
      <p> <i class="fas fa-money-bill-wave"></i> Giá: ${product.price}.000 VND</p>
      <p> <i class="fas fa-globe"></i> Thương hiệu: ${product.brand}</p>
      <p> <i class="fas fa-heart"></i> Tỏa sáng với phụ kiện thời trang siêu đáng yêu! Những thiết kế xinh xắn, đậm chất riêng sẽ là điểm nhấn hoàn hảo cho phong cách của bạn. </p>
      <img src="${product.element.querySelector('.hover').src}" alt="Product Image">
  
       <a
          href="#"
          class="action__btn cart__btn"
          aria-label="Add To Cart"
          >
          <i class="fi fi-rs-shopping-bag-add"></i>
          </a>
              
       `;

    // Hiển thị modal
    modal.style.display = 'block';
  });
});

// Đóng modal
closeModal.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Đóng modal khi nhấn ra ngoài
window.addEventListener('click', (e) => {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

// Đảm bảo modal ẩn khi trang tải
window.onload = function() {
  var modal = document.getElementById("quickViewModal");
  modal.style.display = "none"; // Modal ẩn khi tải trang
};

// Khi người dùng bấm vào nút Quick View, modal sẽ hiển thị
document.getElementById("quickViewBtn").onclick = function() {
  var modal = document.getElementById("quickViewModal");
  modal.style.display = "block"; // Hiển thị modal
}

// Đóng modal khi nhấn nút đóng
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  var modal = document.getElementById("quickViewModal");
  modal.style.display = "none"; // Ẩn modal khi nhấn nút đóng
}

// Đóng modal nếu người dùng nhấn ngoài modal
window.onclick = function(event) {
  var modal = document.getElementById("quickViewModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
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
