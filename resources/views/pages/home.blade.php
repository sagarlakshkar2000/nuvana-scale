@extends('layouts.app')

@section('content')


  @php
    // Real product data from EQUAL SCALE website
    $trending_products = [
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/05-109436933755456_m.jpg?v=717',
        'badge' => 'New',
        'sku' => 'EJ-03',
        'slug' => 'jewellery_01',
        'category' => 'Jewellery Scale',
        'title' => 'Equal Digital Jewellery Weighing Scale With 600g Weight Capacity',
        'rating' => 5,
        'reviews' => 128,
        'old_price' => 8999.00,
        'price' => 5999.00,
        'in_stock' => true,
        'feature' => 'Display Front & Back (With Windshield)',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-569173_m.jpg?v=717',
        'badge' => '-15%',
        'sku' => 'EQPF-05',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-10mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 10MT Weight Capacity',
        'rating' => 5,
        'reviews' => 64,
        'old_price' => 126588.00,
        'price' => 107600.00,
        'in_stock' => true,
        'feature' => 'Industrial Grade | 10 Metric Ton Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-904378_m.jpg?v=717',
        'badge' => 'Hot',
        'sku' => 'EQPF-04',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-5mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 5MT Weight Capacity',
        'rating' => 5,
        'reviews' => 92,
        'old_price' => 93059.00,
        'price' => 79100.00,
        'in_stock' => true,
        'feature' => '5 Metric Ton | Heavy Industrial Use',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-922844_m.jpg?v=717',
        'badge' => 'Best Seller',
        'sku' => 'EDXP-11',
        'slug' => 'equal-digital-platform-weighing-scale-with-10001250kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 1000/1250kg Weight Capacity',
        'rating' => 5,
        'reviews' => 156,
        'old_price' => 47824.00,
        'price' => 40650.00,
        'in_stock' => true,
        'feature' => 'Heavy Duty Platform | 1250kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-200783_m.jpg?v=717',
        'badge' => '-10%',
        'sku' => 'EDXP-10',
        'slug' => 'equal-digital-platform-weighing-scale-with-500750kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 500/750kg Weight Capacity',
        'rating' => 4,
        'reviews' => 87,
        'old_price' => 24389.00,
        'price' => 21950.00,
        'in_stock' => true,
        'feature' => 'Medium Duty | 750kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/img4558-349549_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EDXP-09',
        'slug' => 'equal-digital-platform-weighing-scale-with-200500kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 200/500kg Weight Capacity',
        'rating' => 5,
        'reviews' => 43,
        'old_price' => 17118.00,
        'price' => 14550.00,
        'in_stock' => true,
        'feature' => 'Industrial Platform | 500kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-331556_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EQPF-03',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-2mt3mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 2MT/3MT Weight Capacity',
        'rating' => 5,
        'reviews' => 71,
        'old_price' => 81529.00,
        'price' => 69300.00,
        'in_stock' => true,
        'feature' => '3 Metric Ton | Industrial Grade',
        'is_trending' => false
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/05-109436933755456_m.jpg?v=717',
        'badge' => 'New',
        'sku' => 'EJ-03',
        'slug' => 'jewellery_01',
        'category' => 'Jewellery Scale',
        'title' => 'Equal Digital Jewellery Weighing Scale With 600g Weight Capacity',
        'rating' => 5,
        'reviews' => 128,
        'old_price' => 8999.00,
        'price' => 5999.00,
        'in_stock' => true,
        'feature' => 'Display Front & Back (With Windshield)',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-569173_m.jpg?v=717',
        'badge' => '-15%',
        'sku' => 'EQPF-05',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-10mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 10MT Weight Capacity',
        'rating' => 5,
        'reviews' => 64,
        'old_price' => 126588.00,
        'price' => 107600.00,
        'in_stock' => true,
        'feature' => 'Industrial Grade | 10 Metric Ton Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-904378_m.jpg?v=717',
        'badge' => 'Hot',
        'sku' => 'EQPF-04',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-5mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 5MT Weight Capacity',
        'rating' => 5,
        'reviews' => 92,
        'old_price' => 93059.00,
        'price' => 79100.00,
        'in_stock' => true,
        'feature' => '5 Metric Ton | Heavy Industrial Use',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-922844_m.jpg?v=717',
        'badge' => 'Best Seller',
        'sku' => 'EDXP-11',
        'slug' => 'equal-digital-platform-weighing-scale-with-10001250kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 1000/1250kg Weight Capacity',
        'rating' => 5,
        'reviews' => 156,
        'old_price' => 47824.00,
        'price' => 40650.00,
        'in_stock' => true,
        'feature' => 'Heavy Duty Platform | 1250kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-200783_m.jpg?v=717',
        'badge' => '-10%',
        'sku' => 'EDXP-10',
        'slug' => 'equal-digital-platform-weighing-scale-with-500750kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 500/750kg Weight Capacity',
        'rating' => 4,
        'reviews' => 87,
        'old_price' => 24389.00,
        'price' => 21950.00,
        'in_stock' => true,
        'feature' => 'Medium Duty | 750kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/img4558-349549_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EDXP-09',
        'slug' => 'equal-digital-platform-weighing-scale-with-200500kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 200/500kg Weight Capacity',
        'rating' => 5,
        'reviews' => 43,
        'old_price' => 17118.00,
        'price' => 14550.00,
        'in_stock' => true,
        'feature' => 'Industrial Platform | 500kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-331556_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EQPF-03',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-2mt3mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 2MT/3MT Weight Capacity',
        'rating' => 5,
        'reviews' => 71,
        'old_price' => 81529.00,
        'price' => 69300.00,
        'in_stock' => true,
        'feature' => '3 Metric Ton | Industrial Grade',
        'is_trending' => false
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/05-109436933755456_m.jpg?v=717',
        'badge' => 'New',
        'sku' => 'EJ-03',
        'slug' => 'jewellery_01',
        'category' => 'Jewellery Scale',
        'title' => 'Equal Digital Jewellery Weighing Scale With 600g Weight Capacity',
        'rating' => 5,
        'reviews' => 128,
        'old_price' => 8999.00,
        'price' => 5999.00,
        'in_stock' => true,
        'feature' => 'Display Front & Back (With Windshield)',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-569173_m.jpg?v=717',
        'badge' => '-15%',
        'sku' => 'EQPF-05',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-10mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 10MT Weight Capacity',
        'rating' => 5,
        'reviews' => 64,
        'old_price' => 126588.00,
        'price' => 107600.00,
        'in_stock' => true,
        'feature' => 'Industrial Grade | 10 Metric Ton Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-904378_m.jpg?v=717',
        'badge' => 'Hot',
        'sku' => 'EQPF-04',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-5mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 5MT Weight Capacity',
        'rating' => 5,
        'reviews' => 92,
        'old_price' => 93059.00,
        'price' => 79100.00,
        'in_stock' => true,
        'feature' => '5 Metric Ton | Heavy Industrial Use',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-922844_m.jpg?v=717',
        'badge' => 'Best Seller',
        'sku' => 'EDXP-11',
        'slug' => 'equal-digital-platform-weighing-scale-with-10001250kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 1000/1250kg Weight Capacity',
        'rating' => 5,
        'reviews' => 156,
        'old_price' => 47824.00,
        'price' => 40650.00,
        'in_stock' => true,
        'feature' => 'Heavy Duty Platform | 1250kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/1-200783_m.jpg?v=717',
        'badge' => '-10%',
        'sku' => 'EDXP-10',
        'slug' => 'equal-digital-platform-weighing-scale-with-500750kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 500/750kg Weight Capacity',
        'rating' => 4,
        'reviews' => 87,
        'old_price' => 24389.00,
        'price' => 21950.00,
        'in_stock' => true,
        'feature' => 'Medium Duty | 750kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/img4558-349549_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EDXP-09',
        'slug' => 'equal-digital-platform-weighing-scale-with-200500kg-weight-capacity',
        'category' => 'Platform Scale',
        'title' => 'Equal Digital Platform Weighing Scale With 200/500kg Weight Capacity',
        'rating' => 5,
        'reviews' => 43,
        'old_price' => 17118.00,
        'price' => 14550.00,
        'in_stock' => true,
        'feature' => 'Industrial Platform | 500kg Capacity',
        'is_trending' => true
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-331556_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EQPF-03',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-2mt3mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 2MT/3MT Weight Capacity',
        'rating' => 5,
        'reviews' => 71,
        'old_price' => 81529.00,
        'price' => 69300.00,
        'in_stock' => true,
        'feature' => '3 Metric Ton | Industrial Grade',
        'is_trending' => false
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/products/3-954630_m.jpg?v=717',
        'badge' => 'Trending',
        'sku' => 'EQPF-02',
        'slug' => 'equal-digital-heavy-duty-weighing-scale-with-1mt2mt-weight-capacity',
        'category' => 'Heavy Duty Scale',
        'title' => 'Equal Digital Heavy Duty Weighing Scale With 1MT/2MT Weight Capacity',
        'rating' => 4,
        'reviews' => 112,
        'old_price' => 63294.00,
        'price' => 53800.00,
        'in_stock' => true,
        'feature' => '2 Metric Ton | Commercial Use',
        'is_trending' => true
      ]
    ];

    // Filter only trending products
    $trending_products = array_filter($trending_products, function ($product) {
      return isset($product['is_trending']) && $product['is_trending'] === true;
    });

    // Section configuration
    $section_config = [
      'title' => 'Trending Products',
      'subtitle' => 'Discover our most popular weighing solutions trusted by industries worldwide',
      'button_text' => 'View All Products',
      'button_link' => '/categories/by-products',
      'products_per_row' => 4,
      'show_rating' => true,
      'show_feature' => true
    ];


    $hero_slides = [
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Fuel Your Fitness',
        'title_line2' => 'Premium Supplements!',
        'description' => 'We are passionate about helping you achieve your fitness goals through the power of high-quality nutrition. Whether you\'re looking to build muscle, increase endurance, or enhance recovery...',
        'button_text' => 'Shop Now',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Premium Supplements Banner'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Be Fit with Fuel Our',
        'title_line2' => 'Premium Supplements!',
        'description' => 'Transform your body with our scientifically formulated supplements. Backed by research and trusted by athletes worldwide for optimal performance and results.',
        'button_text' => 'View Collection',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Fitness Supplements Banner'
      ],
      [
        'image' => 'https://cdn.shopaccino.com/equalscale/slideshows/01-1-163976569293646_l.jpg?v=717',
        'title_line1' => 'Your Fitness is your Strength',
        'title_line2' => 'Premium Supplements!',
        'description' => 'Achieve your peak performance with our premium range of supplements. From protein powders to pre-workouts, we have everything you need for your fitness journey.',
        'button_text' => 'Explore Products',
        'button_link' => 'shop-grid.html',
        'alt_text' => 'Workout Supplements Banner'
      ]
    ];
  @endphp

  <!-- HERO BANNER START --> ?>
  <section class="hero-banner">
    <div class="container-fluid w-100 px-0">
      <div class="hero-wrapper">
        <div class="slider-arrows d-sm-flex d-none">
          <a href="javascript:;" class="sm-btn light arrow-btn btn-prev" data-slide="hero-banner-slider">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M15.1883 19.7337C15.5433 19.3788 15.5433 18.8031 15.1882 18.4481L6.74017 10.0002L15.1883 1.55191C15.5433 1.19694 15.5433 0.621303 15.1882 0.266273C14.8332 -0.0887576 14.2576 -0.0887576 13.9026 0.266273L4.81168 9.35742C4.6412 9.52791 4.54544 9.75912 4.54544 10.0002C4.54544 10.2413 4.64126 10.4726 4.81174 10.643L13.9027 19.7337C14.2576 20.0888 14.8333 20.0888 15.1883 19.7337Z"
                fill="#141516" />
            </svg>
          </a>
          <a href="javascript:;" class="sm-btn light arrow-btn btn-next" data-slide="hero-banner-slider">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M4.81165 0.266265C4.45668 0.621235 4.45662 1.19687 4.81171 1.5519L13.2598 9.99978L4.81165 18.4481C4.45668 18.8031 4.45662 19.3787 4.81171 19.7337C5.16674 20.0888 5.74232 20.0888 6.09735 19.7337L15.1883 10.6426C15.3587 10.4721 15.4545 10.2409 15.4545 9.99978C15.4545 9.75869 15.3587 9.52742 15.1882 9.35699L6.09729 0.266326C5.74232 -0.088765 5.16668 -0.0887653 4.81165 0.266265Z"
                fill="#141516" />
            </svg>
          </a>
        </div>

        <div class="hero-banner-slider">
          <?php foreach ($hero_slides as $index => $slide): ?>
          <div class="hero-slide">
            <div class="w-100 h-100">
              <div class="hero-slide-content" style="background-image: url('<?php  echo $slide['image']; ?>');">
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- HERO BANNER END -->


  <!-- TRENDING PRODUCTS START -->
  <section class="newest-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12"><?php echo $section_config['title']; ?></h2>
          <p><?php echo $section_config['subtitle']; ?></p>
        </div>
        <a href="<?php echo $section_config['button_link']; ?>" class="cus-btn-arrow">
          <?php echo $section_config['button_text']; ?>
          <div class="icon">
            <i class="fa-light fa-chevron-right"></i>
          </div>
        </a>
      </div>

      <div class="row row-gap-3">
        <?php foreach ($trending_products as $product): ?>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="<?php  echo $product['image']; ?>" alt="<?php  echo $product['title']; ?>">
              <?php  if (!empty($product['badge'])): ?>
              <div class="sale-label subtitle"><?php    echo $product['badge']; ?></div>
              <?php  endif; ?>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12"><?php  echo $product['category']; ?></p>
              <a href="/products/<?php  echo $product['slug']; ?>" class="product-title h6 fw-600 mb-12">
                <?php  echo $product['title']; ?>
              </a>

              <?php  if ($section_config['show_feature'] && !empty($product['feature'])): ?>
              <p class="caption mb-8 dark-gray"><?php    echo $product['feature']; ?></p>
              <?php  endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- TRENDING PRODUCTS END -->

  <!-- BENEFITS SECTION START -->
  <section class="benefit-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-content-end justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12">Why Choose Us</h2>
          <p>Experience unmatched quality, trust, and results with our premium products.</p>
        </div>
      </div>
      <div class="row row-gap-3">
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="benefit-block d-flex flex-column gap-24 p-24 ">
            <div class="benefit-icon">
              <img src="assets/media/icons/quality-icon-3.png" alt="">
            </div>
            <div class="d-flex flex-column gap-12 black">
              <h6>Free Shipping</h6>
              <p>Free shipping on everything, arriving directly at your door!</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="benefit-block d-flex flex-column gap-24 p-24 ">
            <div class="benefit-icon">
              <img src="assets/media/icons/quality-icon-2.png" alt="">
            </div>
            <div class="d-flex flex-column gap-12 black">
              <h6>Gift Package</h6>
              <p>Memorable gifts with stylish packaging, perfect for any occasion!</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="benefit-block d-flex flex-column gap-24 p-24 ">
            <div class="benefit-icon">
              <img src="assets/media/icons/quality-icon-1.png" alt="">
            </div>
            <div class="d-flex flex-column gap-12 black">
              <h6>One Year Warranty</h6>
              <p>Enjoy peace of mind with our one-year warranty on all jewelry purchases.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="benefit-block d-flex flex-column gap-24 p-24 ">
            <div class="benefit-icon">
              <img src="assets/media/icons/quality-icon-4.png" alt="">
            </div>
            <div class="d-flex flex-column gap-12 black">
              <h6>Easy Returns</h6>
              <p>Stress-free returns for peace of mind, ensuring your satisfaction with every
                purchase.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BENEFITS SECTION END -->

  <!-- SALE BANNER START -->
  <section class="sale-banner py-40">
    <div class="container-fluid">
      <div class="sale-block p-24">
        <div class=" row align-items-center">
          <div class="col-lg-6 col-md-8">
            <div class="sale-text d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16">
                <div class="tag">Exclusive Offer</div>
                <h2 class="white"><span class="color-primary">20% OFF</span> on Upcoming
                  Products!</h2>
              </div>
              <a href="shop-grid-sidebar.html" class="cus-btn-arrow light">
                Shop Now
                <div class="icon">
                  <i class="fa-light fa-chevron-right"></i>
                </div>
              </a>
              <ul class="unstyled countdown d-flex align-items-stretch gap-16">
                <li>
                  <h3>365</h3>
                  <p>Days</p>
                </li>
                <li>
                  <h3>24</h3>
                  <p>Hrs</p>
                </li>
                <li>
                  <h3>60</h3>
                  <p>Min</p>
                </li>
                <li>
                  <h3>60</h3>
                  <p>Secs</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-4">
            <div class="sale-image text-end">
              <img src="assets/media/comming-soon/products.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SALE BANNER END -->

  <!-- TESTIMONIALS START -->
  <section class="testimonial-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-content-end justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12">Testimonials</h2>
          <p>Hear from our satisfied customers who’ve transformed their journey with us.</p>
        </div>
      </div>
      <div class="slider-container">
        <div class="testimonials-slider">
          <div class="testimonials-block d-flex flex-column gap-32 bg-lightest-gray p-24 br-12">
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center ">
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
              </div>
              <p class="dark-gray">“Amazing products! I’ve seen incredible results since
                using Tangine supplements. I’ve gained muscle, and my energy levels are through
                the roof. Highly recommend to anyone serious about fitness.”</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-16">
                <img src="assets/media/users/user-1.png" alt="user" class="user-image">
                <div class="d-flex flex-column black">
                  <h6 class=" mb-8">Stephen Robert</h6>
                  <p>Customer</p>
                </div>
              </div>
              <img src="assets/media/icons/quote.png" alt="quote">
            </div>
          </div>
          <div class="testimonials-block d-flex flex-column gap-32 bg-lightest-gray p-24 br-12">
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center ">
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
              </div>
              <p class="dark-gray">“Great value for the price! The customer service is
                outstanding. I appreciate the hassle-free returns policy. It makes the shopping
                experience stress-free and enjoyable.”</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-16">
                <img src="assets/media/users/user-2.png" alt="user" class="user-image">
                <div class="d-flex flex-column black">
                  <h6 class=" mb-8">Bella Alison</h6>
                  <p>Customer</p>
                </div>
              </div>
              <img src="assets/media/icons/quote.png" alt="quote">
            </div>
          </div>
          <div class="testimonials-block d-flex flex-column gap-32 bg-lightest-gray p-24 br-12">
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center ">
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
              </div>
              <p class="dark-gray">“Top-quality supplements with fast delivery. I’m super
                satisfied! Tangine always exceeds my expectations, and their products really
                work. I’ll definitely be a returning customer.”</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-16">
                <img src="assets/media/users/user-3.png" alt="user" class="user-image">
                <div class="d-flex flex-column black">
                  <h6 class=" mb-8">Leslie Heaney</h6>
                  <p>Customer</p>
                </div>
              </div>
              <img src="assets/media/icons/quote.png" alt="quote">
            </div>
          </div>
          <div class="testimonials-block d-flex flex-column gap-32 bg-lightest-gray p-24 br-12">
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center ">
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
                <i class="fa-solid fa-star-sharp color-quant"></i>
              </div>
              <p class="dark-gray">“Amazing products! I’ve seen incredible results since
                using Tangine supplements. I’ve gained muscle, and my energy levels are through
                the roof. Highly recommend to anyone serious about fitness.”</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-16">
                <img src="assets/media/users/user-1.png" alt="user" class="user-image">
                <div class="d-flex flex-column black">
                  <h6 class=" mb-8">Stephen Robert</h6>
                  <p>Customer</p>
                </div>
              </div>
              <img src="assets/media/icons/quote.png" alt="quote">
            </div>
          </div>
        </div>
        <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
          <span class="slider__label sr-only"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- TESTIMONIALS END -->

  <!-- BLOGS SECTION START -->
  <section class="blog-section pt-40">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12">Our Resent Blogs</h2>
          <p>Catch up on the latest insights, tips, and trends from our recent blogs.</p>
        </div>
        <a href="blog-grid.html" class="cus-btn-arrow">
          See More Blogs
          <div class="icon">
            <i class="fa-light fa-chevron-right"></i>
          </div>
        </a>
      </div>
      <div class="row row-gap-4">
        <div class="col-xl-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="blog-detail.html" class="card-image">
              <img src="assets/media/blogs/1.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="blog-detail.html" class="h4">Essential Hair Care Tips for Stronger,
                  Healthier
                  Hair</a>
                <p class="">Lorem ipsum dolor sit amet consectetur. Eget massa elementum sit
                  massa tincidunt urna vulputate. Justo massa mattis consectetur ac. Massa
                  ipsum cras est id.</p>
              </div>
              <a href="blog-detail.html" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="row row-gap-4">
            <div class="col-lg-6">
              <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                <a href="blog-detail.html" class="card-image">
                  <img src="assets/media/blogs/2.png" alt="blog image">
                </a>
                <div class="d-flex flex-column gap-32">
                  <div class="d-flex flex-column gap-16 black">
                    <div class="create-by">
                      <p class="fw-500">20 Nov, 2025</p>
                      <div class="dot"></div>
                      <p class="dark-gray">By Rosalie Jones</p>
                    </div>
                    <a href="blog-detail.html" class="h6">Essential Hair Care Tips for
                      Stronger,
                      Healthier Hair</a>
                  </div>
                  <a href="blog-detail.html" class="text-16 medium black card-btn">Read
                    More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                <a href="blog-detail.html" class="card-image">
                  <img src="assets/media/blogs/3.png" alt="blog image">
                </a>
                <div class="d-flex flex-column gap-32">
                  <div class="d-flex flex-column gap-16 black">
                    <div class="create-by">
                      <p class="fw-500">20 Nov, 2025</p>
                      <div class="dot"></div>
                      <p class="dark-gray">By Rosalie Jones</p>
                    </div>
                    <a href="blog-detail.html" class="h6">Essential Hair Care Tips for
                      Stronger,
                      Healthier Hair</a>
                  </div>
                  <a href="blog-detail.html" class="text-16 medium black card-btn">Read
                    More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                <a href="blog-detail.html" class="card-image">
                  <img src="assets/media/blogs/4.png" alt="blog image">
                </a>
                <div class="d-flex flex-column gap-32">
                  <div class="d-flex flex-column gap-16 black">
                    <div class="create-by">
                      <p class="fw-500">20 Nov, 2025</p>
                      <div class="dot"></div>
                      <p class="dark-gray">By Rosalie Jones</p>
                    </div>
                    <a href="blog-detail.html" class="h6">Essential Hair Care Tips for
                      Stronger,
                      Healthier Hair</a>
                  </div>
                  <a href="blog-detail.html" class="text-16 medium black card-btn">Read
                    More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                <a href="blog-detail.html" class="card-image">
                  <img src="assets/media/blogs/5.png" alt="blog image">
                </a>
                <div class="d-flex flex-column gap-32">
                  <div class="d-flex flex-column gap-16 black">
                    <div class="create-by">
                      <p class="fw-500">20 Nov, 2025</p>
                      <div class="dot"></div>
                      <p class="dark-gray">By Rosalie Jones</p>
                    </div>
                    <a href="blog-detail.html" class="h6">Essential Hair Care Tips for
                      Stronger,
                      Healthier Hair</a>
                  </div>
                  <a href="blog-detail.html" class="text-16 medium black card-btn">Read
                    More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOGS SECTION END -->

  <!-- BRAND SLIDER START -->
  <div class="brand-section py-80">
    <div class="container-fluid">
      <div class="brand-slider">
        <div class="brand-block">
          <img src="assets/media/brands/brand-1.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-2.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-3.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-4.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-5.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-1.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-2.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-3.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-4.png" alt="">
        </div>
        <div class="brand-block">
          <img src="assets/media/brands/brand-5.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- BRAND SLIDER END -->

@endsection
