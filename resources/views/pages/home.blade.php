@extends('layouts.app')

@section('content')
  @php
    // Benefits data array with the actual image URLs you provided
    $benefits = [
      [
        'icon' => 'https://cdn.shopaccino.com/equalscale/images/011-893216-24416498846407_l.png?v=717?v=1',
        'title' => 'Innovation Focused',
        'description' => 'Cutting-edge technology and continuous innovation to deliver precise weighing solutions for modern industrial needs.',
        'alt_text' => 'Innovation Focused Icon'
      ],
      [
        'icon' => 'https://cdn.shopaccino.com/equalscale/images/02-431824-24438381681647_l.png?v=717?v=1',
        'title' => 'Quality Management',
        'description' => 'ISO certified manufacturing with stringent quality control measures ensuring accuracy and durability.',
        'alt_text' => 'Quality Management Icon'
      ],
      [
        'icon' => 'https://cdn.shopaccino.com/equalscale/images/03-942083-24456979151164_l.png?v=717?v=1',
        'title' => 'Diverse Range',
        'description' => 'Complete range of weighing solutions from jewellery scales to heavy-duty weighbridges for every industry need.',
        'alt_text' => 'Diverse Range Icon'
      ],
      [
        'icon' => 'https://cdn.shopaccino.com/equalscale/images/04-548482-24476801153764_l.png?v=717?v=1',
        'title' => 'Customer Support',
        'description' => '24/7 dedicated technical support and service network across India for hassle-free maintenance.',
        'alt_text' => 'Customer Support Icon'
      ]
    ];

    // Section configuration
    $benefits_config = [
      'title' => 'Why Choose Us',
      'subtitle' => 'Experience unmatched quality, trust, and results with our premium weighing solutions.'
    ];
  @endphp

  @php
    // Real product data from EQUAL SCALE website
    $trending_products = [
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

  <!-- BLOGS SECTION START -->
  @php
    // Blog posts data array - This can be moved to Controller and passed as variable
    $featured_blog = [
      'id' => 1,
      'image' => 'https://cdn.shopaccino.com/equalscale/images/esblog-banners-10-162937.jpg',
      'date' => '15 Mar, 2026',
      'author' => 'Rajesh Kumar',
      'author_role' => 'Technical Director',
      'title' => 'How to Choose the Right Weighing Scale for Your Business',
      'excerpt' => 'Selecting the perfect weighing scale for your industrial needs can be challenging. Learn about accuracy classes, capacity requirements, and environmental factors that impact your decision.',
      'slug' => 'how-to-choose-right-weighing-scale',
      'category' => 'Buying Guide',
      'read_time' => 8
    ];

    $regular_blogs = [
      [
        'id' => 2,
        'image' => 'https://cdn.shopaccino.com/equalscale/articles/weighing-scale-103726148074981_l.png?v=717',
        'date' => '10 Mar, 2026',
        'author' => 'Priya Sharma',
        'author_role' => 'Quality Manager',
        'title' => 'Essential Maintenance Tips for Your Weighbridge',
        'excerpt' => 'Regular maintenance ensures accuracy and longevity of your weighbridge. Discover key maintenance practices to prevent downtime.',
        'slug' => 'weighbridge-maintenance-tips',
        'category' => 'Maintenance',
        'read_time' => 5
      ],
      [
        'id' => 3,
        'image' => 'https://cdn.shopaccino.com/equalscale/articles/here-you-find-all-products-108738261342594_s.png?v=717',
        'date' => '5 Mar, 2026',
        'author' => 'Amit Verma',
        'author_role' => 'R&D Head',
        'title' => 'Understanding Load Cell Technology: A Complete Guide',
        'excerpt' => 'From strain gauges to digital load cells, understand how different load cell technologies work and which suits your application.',
        'slug' => 'load-cell-technology-guide',
        'category' => 'Technology',
        'read_time' => 7
      ],
      [
        'id' => 4,
        'image' => 'https://cdn.shopaccino.com/equalscale/articles/weighing-scale-isnt-telling-you-92553477978759_l.png?v=717',
        'date' => '28 Feb, 2026',
        'author' => 'Sanjay Mehta',
        'author_role' => 'Product Specialist',
        'title' => 'Digital vs Analog Weighing Scales: Which One Should You Choose?',
        'excerpt' => 'Compare digital and analog weighing scales to make an informed decision for your specific weighing requirements.',
        'slug' => 'digital-vs-analog-weighing-scales',
        'category' => 'Comparison',
        'read_time' => 6
      ],
      [
        'id' => 5,
        'image' => 'https://cdn.shopaccino.com/equalscale/articles/untitled-design-3-508585_s.png?v=717',
        'date' => '20 Feb, 2026',
        'author' => 'Neha Gupta',
        'author_role' => 'Calibration Expert',
        'title' => 'The Importance of Regular Calibration for Weighing Equipment',
        'excerpt' => 'Learn why regular calibration is crucial for accuracy, compliance, and quality control in your weighing processes.',
        'slug' => 'importance-of-calibration',
        'category' => 'Best Practices',
        'read_time' => 6
      ]
    ];

    // Section configuration
    $blog_config = [
      'title' => 'Our Recent Blogs',
      'subtitle' => 'Catch up on the latest insights, tips, and trends from our weighing industry experts.',
      'button_text' => 'See More Blogs',
      'button_link' => '/blog',
      'show_featured' => true
    ];
  @endphp

  <!-- HERO BANNER START -->
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

  <x-why-choose-us />

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
              <a href="/products/<?php  echo $product['slug']; ?>" class="product-title mb-12">
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

  <x-our-certificate />

  <!-- BLOGS SECTION START -->
  <section class="blog-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12">{{ $blog_config['title'] }}</h2>
          <p>{{ $blog_config['subtitle'] }}</p>
        </div>
        <a href="{{ $blog_config['button_link'] }}" class="cus-btn-arrow">
          {{ $blog_config['button_text'] }}
          <div class="icon">
            <i class="fa-light fa-chevron-right"></i>
          </div>
        </a>
      </div>

      <div class="row row-gap-4">
        <div class="col-xl-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16 h-100">
            <a href="{{ url('/blog/' . $featured_blog['slug']) }}" class="card-image">
              <img src="{{ $featured_blog['image'] }}" alt="{{ $featured_blog['title'] }}" loading="lazy"
                class="img-fluid">
            </a>
            <div class="d-flex flex-column gap-32 p-24">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">{{ $featured_blog['date'] }}</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By {{ $featured_blog['author'] }}</p>
                </div>
                <a href="{{ url('/blog/' . $featured_blog['slug']) }}" class="h4">{{ $featured_blog['title'] }}</a>
                <p>{{ $featured_blog['excerpt'] }}</p>
              </div>
              <a href="{{ url('/blog/' . $featured_blog['slug']) }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
          <div class="row row-gap-4">
            @foreach($regular_blogs as $blog)
              <div class="col-lg-6">
                <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                  <a href="{{ url('/blog/' . $blog['slug']) }}" class="card-image">
                    <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" loading="lazy" class="img-fluid">
                  </a>
                  <div class="d-flex flex-column gap-32 p-16">
                    <div class="d-flex flex-column gap-16 black">
                      <div class="create-by">
                        <p class="fw-500">{{ $blog['date'] }}</p>
                        <div class="dot"></div>
                        <p class="dark-gray">By {{ $blog['author'] }}</p>
                      </div>
                      <a href="{{ url('/blog/' . $blog['slug']) }}" class="h6">{{ $blog['title'] }}</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOGS SECTION END -->

@endsection
