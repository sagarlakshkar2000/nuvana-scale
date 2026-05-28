@extends('layouts.app')

@section('content')

  <!-- HERO BANNER START -->
  <section class="hero-banner">
    <div class="container-fluid">
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
          <div class="hero-slide">
            <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-between gap-64">
              <h1 class="title white text-center" data-animation-in="fadeInUp" data-delay-in="0.3">Fuel Your Fitness
                Journey with
                <span class="d-block color-primary" data-animation-in="fadeInUp" data-delay-in="0.3">Premium
                  Supplements!</span>
              </h1>
              <div class="row row-gap-4 align-items-end">
                <div class="col-lg-3">
                  <p class="mb-32 white text-lg-start text-center">We are passionate about
                    helping you achieve your
                    fitness goals through the power of high-quality nutrition. Whether
                    you’re looking to build...
                  </p>
                  <div class=" mb-48">
                    <a href="shop-grid.html" class="cus-btn-arrow">
                      View Collection
                      <div class="icon">
                        <i class="fa-light fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <img src="assets/media/banner/hero-image.png" class="hero-image" alt="hero image"
                    data-animation-in="zoomIn" data-delay-in="0.4">
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide">
            <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-between gap-64">
              <h1 class="title white text-center" data-animation-in="fadeInUp" data-delay-in="0.3">Be Fit with Fuel Our
                <span class="d-block color-primary" data-animation-in="fadeInUp" data-delay-in="0.3">Premium
                  Supplements!</span>
              </h1>
              <div class="row row-gap-4 align-items-end">
                <div class="col-lg-3">
                  <p class="mb-32 white">We are passionate about helping you achieve your
                    fitness goals through the power of high-quality nutrition. Whether
                    you’re looking to build...
                  </p>
                  <div class=" mb-48">
                    <a href="blog-grid.html" class="cus-btn-arrow">
                      View Collection
                      <div class="icon">
                        <i class="fa-light fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <img src="assets/media/banner/hero-image.png" class="hero-image" alt="hero image"
                    data-animation-in="zoomIn" data-delay-in="0.3">
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide">
            <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-between gap-64">
              <h1 class="title white text-center" data-animation-in="fadeInUp" data-delay-in="0.3">Your Fitness is your
                Strength
                <span class="d-block color-primary" data-animation-in="fadeInUp" data-delay-in="0.3">Premium
                  Supplements!</span>
              </h1>
              <div class="row row-gap-4 align-items-end">
                <div class="col-lg-3">
                  <p class="mb-32 white">We are passionate about helping you achieve your
                    fitness goals through the power of high-quality nutrition. Whether
                    you’re looking to build...
                  </p>
                  <div class=" mb-48">
                    <a href="blog-grid.html" class="cus-btn-arrow">
                      View Collection
                      <div class="icon">
                        <i class="fa-light fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <img src="assets/media/banner/hero-image.png" class="hero-image" alt="hero image"
                    data-animation-in="zoomIn" data-delay-in="0.3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- HERO BANNER END -->

  <!-- PRODUCT CATEGORIES START -->
  <div class="categories-section pt-80 pb-40">
    <div class="container-fluid">
      <div class="row row-gap-4">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/01.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Vitamins & Minerals</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/02.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Mass Gainers</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/03.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Fat Burners</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/04.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Energy Boosters</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/05.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Protein Supplements</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <a href="shop-grid.html" class="category-block">
            <div class="image-box mb-16">
              <img src="assets/media/category/06.png" alt="">
            </div>
            <div class="text-box">
              <h6 class="title-text mb-8">Meal Replacements</h6>
              <p class="subtitle dark-gray">20+ Items</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- PRODUCT CATEGORIES END -->

  <!-- FEATURE PRODUCTS START -->
  <section class="feature-products py-40">
    <div class="container-fluid">
      <h2 class="fw-600 black mb-8">Feature Products</h2>
      <p class="mb-24">Discover our Feature products designed to fuel your fitness journey.</p>
      <div class="d-flex align-items-start justify-content-between flex-lg-row flex-column pb-40">
        <ul class="tabs list-unstyled">
          <li class="tab-link active" data-tab="1">All Product</li>
          <li class="tab-link" data-tab="2">Protein Powders</li>
          <li class="tab-link" data-tab="3">Pre-Workout</li>
          <li class="tab-link" data-tab="4">Post-Workout</li>
          <li class="tab-link" data-tab="4">Energy Boost</li>
        </ul>
        <a href="shop-grid-sidebar.html" class="cus-btn-arrow">
          See All Products
          <div class="icon">
            <i class="fa-light fa-chevron-right"></i>
          </div>
        </a>
      </div>
      <div class="content-wrapper">
        <div id="tab-1" class="tab-content active">
          <div class="slider-container">
            <div class="slider-arrows d-sm-flex d-none">
              <a href="javascript:;" class="sm-btn light arrow-btn btn-prev" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M15.1883 19.7337C15.5433 19.3788 15.5433 18.8031 15.1882 18.4481L6.74017 10.0002L15.1883 1.55191C15.5433 1.19694 15.5433 0.621303 15.1882 0.266273C14.8332 -0.0887576 14.2576 -0.0887576 13.9026 0.266273L4.81168 9.35742C4.6412 9.52791 4.54544 9.75912 4.54544 10.0002C4.54544 10.2413 4.64126 10.4726 4.81174 10.643L13.9027 19.7337C14.2576 20.0888 14.8333 20.0888 15.1883 19.7337Z"
                    fill="#141516" />
                </svg>
              </a>
              <a href="javascript:;" class="sm-btn light arrow-btn btn-next" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M4.81165 0.266265C4.45668 0.621235 4.45662 1.19687 4.81171 1.5519L13.2598 9.99978L4.81165 18.4481C4.45668 18.8031 4.45662 19.3787 4.81171 19.7337C5.16674 20.0888 5.74232 20.0888 6.09735 19.7337L15.1883 10.6426C15.3587 10.4721 15.4545 10.2409 15.4545 9.99978C15.4545 9.75869 15.3587 9.52742 15.1882 9.35699L6.09729 0.266326C5.74232 -0.088765 5.16668 -0.0887653 4.81165 0.266265Z"
                    fill="#141516" />
                </svg>
              </a>
            </div>
            <div class="product-slider">
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/1.png" alt="">
                  <div class="sale-label subtitle">-20%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">EFX Sports</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Karbolyn
                    Fuel</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/2.png" alt="">
                  <div class="sale-label subtitle">-15%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Olimp</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">BCAA
                    Xplode Powder</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/3.png" alt="">
                  <div class="sale-label subtitle">-25%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Olimp</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Gold
                    Beef Pro-Tein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/4.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/1.png" alt="">
                  <div class="sale-label subtitle">-20%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">EFX Sports</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Karbolyn
                    Fuel</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/2.png" alt="">
                  <div class="sale-label subtitle">-15%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Olimp</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">BCAA
                    Xplode Powder</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
              <span class="slider__label sr-only"></span>
            </div>
          </div>
        </div>
        <div id="tab-2" class="tab-content">
          <div class="slider-container">
            <div class="slider-arrows d-sm-flex d-none">
              <a href="javascript:;" class="sm-btn light arrow-btn btn-prev" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M7.90344 14.3749C7.90344 12.4999 6.15344 9.99988 4.15344 9.99988M4.15344 9.99988C5.29928 9.99988 7.90344 9.37488 7.90344 5.62488M4.15344 9.99988H16.0284"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
              <a href="javascript:;" class="sm-btn light arrow-btn btn-next" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M12.0966 14.3749C12.0966 12.4999 13.8466 9.99988 15.8466 9.99988M15.8466 9.99988C14.7007 9.99988 12.0966 9.37488 12.0966 5.62488M15.8466 9.99988H3.97156"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
            </div>
            <div class="product-slider">
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/5.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/6.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/7.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/8.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/6.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/7.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
              <span class="slider__label sr-only"></span>
            </div>
          </div>
        </div>
        <div id="tab-3" class="tab-content">
          <div class="slider-container">
            <div class="slider-arrows d-sm-flex d-none">
              <a href="javascript:;" class="sm-btn light arrow-btn btn-prev" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M7.90344 14.3749C7.90344 12.4999 6.15344 9.99988 4.15344 9.99988M4.15344 9.99988C5.29928 9.99988 7.90344 9.37488 7.90344 5.62488M4.15344 9.99988H16.0284"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
              <a href="javascript:;" class="sm-btn light arrow-btn btn-next" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M12.0966 14.3749C12.0966 12.4999 13.8466 9.99988 15.8466 9.99988M15.8466 9.99988C14.7007 9.99988 12.0966 9.37488 12.0966 5.62488M15.8466 9.99988H3.97156"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
            </div>
            <div class="product-slider">
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/9.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/10.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/11.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/12.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/9.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/10.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
              <span class="slider__label sr-only"></span>
            </div>
          </div>
        </div>
        <div id="tab-4" class="tab-content">
          <div class="slider-container">
            <div class="slider-arrows d-sm-flex d-none">
              <a href="javascript:;" class="sm-btn light arrow-btn btn-prev" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M7.90344 14.3749C7.90344 12.4999 6.15344 9.99988 4.15344 9.99988M4.15344 9.99988C5.29928 9.99988 7.90344 9.37488 7.90344 5.62488M4.15344 9.99988H16.0284"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
              <a href="javascript:;" class="sm-btn light arrow-btn btn-next" data-slide="product-slider">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M12.0966 14.3749C12.0966 12.4999 13.8466 9.99988 15.8466 9.99988M15.8466 9.99988C14.7007 9.99988 12.0966 9.37488 12.0966 5.62488M15.8466 9.99988H3.97156"
                    class="stroke-black" stroke-width="1.25" />
                </svg>
              </a>
            </div>
            <div class="product-slider">
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/10.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/5.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/9.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/10.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/10.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/5.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-block">
                <div class="image-box mb-16">
                  <img src="assets/media/products/9.png" alt="">
                  <div class="sale-label subtitle">-12%</div>
                  <div class="shopping-btns">
                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <i class="fa-regular fa-eye"></i>
                    </a>

                    <a href="javascript:;" class="">
                      <i class="fa-light fa-heart"></i>
                    </a>
                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                          fill="#141516" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="content-box">
                  <p class="eyebrow mb-12">Muscle Max</p>
                  <a href="product-detail.html" class="product-title h6 fw-500 mb-12">All-Natural Whey Protein</a>

                  <div class="d-flex align-items-center gap-8 mb-16">
                    <p class="caption">
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                      <i class="fa-solid fa-star-sharp color-quant"></i>
                    </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span>
                      &nbsp; $144.00</h5>
                    <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                          d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                          class="fill-black" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
              <span class="slider__label sr-only"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FEATURE PRODUCTS END -->

  <!-- DEALS SECTION START -->
  <section class="deal-section py-40">
    <div class="container-fluid">
      <div class="row row-gap-3">
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div
            class="deal-block d-flex align-items-sm-center align-items-start justify-content-between flex-sm-row flex-column gap-24">
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16">
                <div class="tag">Limited Edition</div>
                <h4 class="white fw-600">Hurry, While Stocks Last</h4>
              </div>
              <a href="shop-grid.html" class="text-btn text-16">Our Collections</a>
            </div>
            <div class="image-box text-center">
              <img src="assets/media/products/sm-1.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div
            class="deal-block d-flex align-items-sm-center align-items-start justify-content-between flex-sm-row flex-column gap-24">
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16">
                <div class="tag">Top Rated</div>
                <h4 class="white fw-600">Our Top Picks, Just for You</h4>
              </div>
              <a href="shop-grid.html" class="text-btn text-16">Our Collections</a>
            </div>
            <div class="image-box text-center">
              <img src="assets/media/products/sm-2.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div
            class="deal-block d-flex align-items-sm-center align-items-start justify-content-between flex-sm-row flex-column gap-24">
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16">
                <div class="tag">Hot Deals Now</div>
                <h4 class="white fw-600">Best Deals of the Season</h4>
              </div>
              <a href="shop-grid.html" class="text-btn text-16">Our Collections</a>
            </div>
            <div class="image-box text-center">
              <img src="assets/media/products/sm-3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- DEALS SECTION END -->

  <!-- NEWEST PRODUCTS START -->
  <section class="newest-section py-40">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column gap-sm-0 gap-24 mb-48">
        <div>
          <h2 class="fw-600 black mb-12">Trending Products</h2>
          <p>Explore the latest must-have products everyone’s talking about.</p>
        </div>
        <a href="shop-grid.html" class="cus-btn-arrow">
          View Collection
          <div class="icon">
            <i class="fa-light fa-chevron-right"></i>
          </div>
        </a>
      </div>
      <div class="row row-gap-3">
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/6.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">Sport Supplements</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Big Whey - The
                Ultimate Whey Protein</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/13.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">Olimp</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">HMB Xplode
                Powder</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/10.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">Beast Sports Nutrition</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Beast
                Protein</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/14.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">BSN</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">NO-Xplode
                Legendary Pre-Workout</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/15.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">USN</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Blue Lab 100%
                Whey</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/16.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>
                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">NPL</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Pure
                Maltodextrin</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/12.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">CNP Professional</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Diet MRP High
                Protein Meal</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product-block">
            <div class="image-box mb-16">
              <img src="assets/media/products/8.png" alt="">
              <div class="sale-label subtitle">-20%</div>
              <div class="shopping-btns">
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href="javascript:;" class="">
                  <i class="fa-light fa-heart"></i>
                </a>
                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z"
                      fill="#141516" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="content-box">
              <p class="eyebrow mb-12">NPL</p>
              <a href="product-detail.html" class="product-title h6 fw-500 mb-12">Pure
                Maltodextrin</a>

              <div class="d-flex align-items-center gap-8 mb-16">
                <p class="caption">
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                  <i class="fa-solid fa-star-sharp color-quant"></i>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="black"><span class="h6 text-decoration-line-through dark-gray">$180.00</span> &nbsp;
                  $144.00</h5>
                <a href="#" class="sm-btn light" data-bs-toggle="modal" data-bs-target="#productQuickView">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z"
                      class="fill-black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- NEWEST PRODUCTS END -->

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
