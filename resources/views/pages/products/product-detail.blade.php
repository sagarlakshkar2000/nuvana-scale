@extends('layouts.app')

@section('content')


  @php
    dd($product);
  @endphp

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">product-detail</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- PRODUCT DETAIL START -->
  <section class="shop-detail-page py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <div class="row row-gap-3">
          <div class="col-xl-6">
            <div class="product-image-container">
              <div class="product-slider-asnav">
                <div class="nav-image">
                  <img src="assets/media/products/nav-image-1.png" alt="">
                </div>
                <div class="nav-image">
                  <img src="assets/media/products/nav-image-2.png" alt="">
                </div>
                <div class="nav-image">
                  <img src="assets/media/products/nav-image-3.png" alt="">
                </div>
                <div class="nav-image">
                  <img src="assets/media/products/nav-image-4.png" alt="">
                </div>
              </div>
              <div class="product-detail-slider">
                <div class="detail-image">
                  <img src="assets/media/products/large-image-1.png" alt="">
                </div>
                <div class="detail-image">
                  <img src="assets/media/products/large-image-2.png" alt="">
                </div>
                <div class="detail-image">
                  <img src="assets/media/products/large-image-3.png" alt="">
                </div>
                <div class="detail-image">
                  <img src="assets/media/products/large-image-4.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="product-text-container product-text-page">
              <p class="eyebrow mb-12">Sport Supplements</p>
              <h3 class="black fw-700 mb-16">Big Whey - The Ultimate Whey Protein </h3>
              <p class="quick-view-text mb-16">
                Fuel your workouts with Big Whey, the premium whey protein blend designed for
                muscle recovery and growth. Packed
                with essential amino acids, it's your perfect companion for achieving peak
                performance and fitness goals.
              </p>
              <h6 class="fw-600 black mb-12">Weight</h6>
              <div class="select-size mb-32">
                <input class="hidden radio-label" type="radio" name="sizes" id="gram250" checked="">
                <label class="button-label" for="gram250">
                  250 g
                </label>
                <input class="hidden radio-label" type="radio" name="sizes" id="gram500">
                <label class="button-label" for="gram500">
                  500 g
                </label>
                <input class="hidden radio-label" type="radio" name="sizes" id="gram1000">
                <label class="button-label" for="gram1000">
                  1000 g
                </label>
              </div>
              <p class="black font-primary fw-600 mb-16 h6">SKU: <span class="dark-gray font-sec text-16">
                  GH-001-NY</span></p>
              <div class="row row-gap-3 mb-16">
                <div class="col-sm-6">
                  <a href="javascript:;" class="cus-btn-2 text-center w-100">Enquiry on Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT DETAIL END -->

  <!-- Product Description Start -->
  <section class="product-description pt-40 pb-80">
    <div class="container-fluid">
      <div class="description-wrapper">
        <h4 class="mb-16 fw-600 black">Description:</h4>
        <p class="mb-8">
          Big Whey is the premier choice for those dedicated to achieving their fitness goals.
          This high-quality whey protein
          blend is engineered to provide rapid muscle recovery and promote growth. Packed with
          essential amino acids, each serving
          fuels your body after intense workouts, ensuring you feel stronger and more
          energized. Enjoy its delicious flavors and
          smooth texture, making it easy to incorporate into your daily regimen. Whether
          you're lifting weights or training for
          endurance, Big Whey supports your journey toward peak performance. Elevate your
          nutrition and enhance your results with
          Big Whey!
        </p>
        <p>
          Our fresh, crisp lettuce is the perfect base for your salads, sandwiches, and wraps.
          Grown with care, this nutrient-rich
          leafy green is a kitchen staple, known for its refreshing taste and versatility.
          Whether you’re preparing a light salad,
          adding crunch to your burgers, or crafting a healthy wrap, our lettuce provides the
          perfect balance of flavor and
          texture.
        </p>
      </div>
    </div>
  </section>
  <!-- Product Description End -->

  <!-- Liked Product Start -->
  <section class="liked-products pt-40 pb-80">
    <div class="container-fluid">
      <div class="mb-48">
        <h2 class="fw-600 black mb-12">You May Also Like</h2>
        <p>Explore the latest must-have products everyone’s talking about.</p>
      </div>
      <div class="row row-gap-4">
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
      </div>
    </div>
  </section>
  <!-- Liked Product End -->

@endsection
