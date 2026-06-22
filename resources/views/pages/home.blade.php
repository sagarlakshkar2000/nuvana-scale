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
    // Section configuration
    $section_config = [
      'title' => 'Trending Products',
      'subtitle' => 'Discover our most popular weighing solutions trusted by industries worldwide',
      'button_text' => 'View All Products',
      'button_link' => '/products',
      'products_per_row' => 4,
      'show_rating' => true,
      'show_feature' => true
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
  <section class="hero-banner" data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid w-100 px-0">
      <div class="hero-wrapper position-relative">
        @if($hero_slides->count() > 0)
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <!-- Dynamic Indicators -->
            <div class="carousel-indicators">
              @foreach($hero_slides as $index => $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                  class="{{ $loop->first ? 'active' : '' }}" {{ $loop->first ? 'aria-current="true"' : '' }}
                  aria-label="Slide {{ $index + 1 }}"></button>
              @endforeach
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">
              @foreach($hero_slides as $slide)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                  <!-- Background Image -->
                  <img src="{{ asset('storage/' . $slide->image) }}" class="d-block w-100"
                    style="object-fit: cover; height: 600px;" alt="{{ $slide->title ?? 'Banner' }}">

                  <!-- Dark Overlay layer -->
                  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.2);"></div>

                  <!-- Content -->
                  @if($slide->title || $slide->subtitle || $slide->button_text)
                    <div class="carousel-caption d-none d-md-block">
                      @if($slide->title)
                        <h3 class="text-primary">{{ $slide->title }}</h3>
                      @endif
                      @if($slide->subtitle)
                        <p>{{ $slide->subtitle }}</p>
                      @endif
                      @if($slide->button_text && $slide->link)
                        <a href="{{ $slide->link }}" class="btn btn-primary">{{ $slide->button_text }}</a>
                      @endif
                    </div>
                  @endif

                  <!-- Full image link fallback -->
                  @if($slide->link && !$slide->button_text)
                    <a href="{{ $slide->link }}" class="position-absolute top-0 start-0 w-100 h-100 z-3"></a>
                  @endif
                </div>
              @endforeach
            </div>

            <!-- Controls -->
            @if($hero_slides->count() > 1)
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            @endif
          </div>
        @else
          <!-- Empty State -->
          <div class="w-100 d-flex align-items-center justify-content-center bg-light" style="height: 600px;">
            <h4 class="text-muted">No banners available.</h4>
          </div>
        @endif
      </div>
    </div>
  </section>
  <!-- HERO BANNER END -->

  <x-why-choose-us />

  <!-- TRENDING PRODUCTS START -->
  <section class="newest-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48"
        data-aos="fade-up">
        <div class="text-center text-sm-start position-relative">
          <div class="d-inline-block position-relative mb-2">
            <h2 class="fw-700 black mb-0 position-relative z-1">
              <?php echo $section_config['title']; ?>
            </h2>
            <svg class="position-absolute z-0"
              style="bottom: -2px; left: 0; width: 100%; height: 10px; pointer-events: none;" viewBox="0 0 100 12"
              preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 9.5C25 -1.83333 75 -3.1 98 9.5" stroke="var(--color-secondary)" stroke-width="4"
                stroke-linecap="round" fill="none" opacity="0.5" />
            </svg>
          </div>
          <p class="mb-0 te style=" letter-spacing: 0.5px;"><?php echo $section_config['subtitle']; ?></p>
        </div>
        <a href="<?php echo $section_config['button_link']; ?>"
          class="cus-btn d-inline-flex align-items-center justify-content-center gap-2"
          style="padding: 12px 28px !important; font-size: 15px !important; border-radius: 50px; text-decoration: none;">
          <span class="fw-600"><?php echo $section_config['button_text']; ?></span>
          <i class="fa-regular fa-arrow-right"></i>
        </a>
      </div>

      <div class="row row-gap-3">
        @forelse($trending_products as $index => $product)
          <div class="col-xl-3 col-lg-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <div class="product-block">
              <div class="image-box mb-16">
                <img
                  src="{{ $product->images->first() ? asset('storage/' . $product->images->first()->image_url) : asset('images/default.jpg') }}"
                  alt="{{ $product->name }}" loading="lazy" class="img-fluid">

                @if(!empty($product['badge']))
                  <div class="sale-label subtitle">{{ $product['badge'] }}</div>
                @endif
              </div>
              <div class="content-box">
                <p class="eyebrow mb-12">{{ $product->category->name ?? '' }}</p>
                <a href="{{ route('product-detail', ['slug' => $product['slug']]) }}"
                  class="product-title h6 fw-500 mb-12">{{ $product->name }}</a>

                @php
                  $capacity = $product->specifications->first(function ($spec) {
                    return strtolower($spec->key) === 'capacity';
                  })->value ?? null;
                @endphp
                @if($capacity)
                  <p class="caption mb-8 dark-gray">Capacity: {{ $capacity }}</p>
                @elseif(!empty($product->feature))
                  <p class="caption mb-8 dark-gray">{{ $product->feature }}</p>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5">
            <div class="empty-state">
              <i class="fa-light fa-box-open fa-4x mb-3 color-gray-400"></i>
              <h5>No products found</h5>
              <p class="dark-gray">Please try different filters or search terms.</p>
              <button type="button" class="cus-btn-arrow mt-3" id="resetFiltersEmpty">
                Reset All Filters
              </button>
            </div>
          </div>
        @endforelse
      </div>

    </div>
  </section>
  <!-- TRENDING PRODUCTS END -->

  <!-- BLOGS SECTION START -->
  <!-- <section class="blog-section py-40">
                                                                                        <div class="container-fluid">
                                                                                          <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
                                                                                            <div>
                                                                                              <h2 class="fw-600 black mb-12">{{ $blog_config['title'] }}</h2>
                                                                                              <p>{{ $blog_config['subtitle'] }}</p>
                                                                                            </div>
                                                                                            <a href="{{ $blog_config['button_link'] }}" class="cus-btn-arrow d-none d-sm-block">
                                                                                              {{ $blog_config['button_text'] }}
                                                                                              <div class="icon">
                                                                                                <i class="fa-light fa-chevron-right"></i>
                                                                                              </div>
                                                                                            </a>
                                                                                          </div>

                                                                                          <div class="row row-gap-4">
                                                                                            <div class="col-xl-6 col-12">
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

                                                                                            <div class="col-xl-6 col-12">
                                                                                              <div class="row row-gap-4">
                                                                                                @foreach($regular_blogs as $blog)
                                                                                                  <div class="col-lg-6 col-6">
                                                                                                    <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
                                                                                                      <a href="{{ url('/blog/' . $blog['slug']) }}" class="card-image">
                                                                                                        <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" loading="lazy" class="img-fluid">
                                                                                                      </a>
                                                                                                      <div class="d-flex flex-column gap-32 p-16">
                                                                                                        <div class="d-flex flex-column gap-16 black">
                                                                                                          <div class="create-by d-none d-sm-block">
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
                                                                                      </section> -->
  <!-- BLOGS SECTION END -->

@endsection
