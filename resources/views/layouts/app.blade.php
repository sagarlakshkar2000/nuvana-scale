<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/templates/powerup/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2026 13:03:14 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="PowerUp">

  <title>{{ $title ?? 'Nuvana' }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-animation.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

  <!-- Additional CSS for specific pages -->
  @stack('styles')
</head>

<body class="tt-smooth-scroll">

  <!-- Preloader -->
  <div id="preloader">
    <div class="loading loading07">
      <span data-text="N">N</span>
      <span data-text="U">U</span>
      <span data-text="V">V</span>
      <span data-text="A">A</span>
      <span data-text="N">N</span>
      <span data-text="A">A</span>
    </div>
  </div>
  <!-- Preloader -->

  <!-- Main Wrapper Start -->
  <div id="scroll-container" class="main-wrapper">

    <x-navbar />

    <!-- Main Sections -->
    <main class="main-wrapper">

      {{ $slot ?? '' }}
      @yield('content')

      <x-footer />
    </main>
  </div>
  <!-- Main Wrapper End -->

  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fa-light fa-chevron-up"></i></a>


  <!-- Mobile Menu Start -->
  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
      <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="assets/media/logo.png" alt=""></a>
      </div>
      <div class="mobile-nav__container"></div>
      <ul class="mobile-nav__contact list-unstyled">
        <li>
          <i class="fas fa-envelope"></i>
          <a href="mailto:example@company.com">example@company.com</a>
        </li>
        <li>
          <i class="fa fa-phone-alt"></i>
          <a href="tel:+12345678">+123 (4567) -890</a>
        </li>
      </ul>
      <div class="mobile-nav__social">
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- Mobile Menu End -->

  <!-- Modal -->
  <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="shop-detail">
            <div class="detail-wrapper">
              <div class="row">
                <div class="col-lg-6">
                  <div class="quick-image-box">
                    <img src="assets/media/products/quick-view.png" alt="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product-text-container bg-white br-20">
                    <div class="close-content text-end">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <p class="eyebrow mb-12">Sport Supplements</p>
                    <h3 class="black fw-700 mb-16">Big Whey - The Ultimate Whey Protein </h3>
                    <div class="d-flex align-items-center flex-wrap gap-16 mb-16">
                      <h6 class="color-quant">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                          class="text-16 fw-400 dark-black">(02 Reviews)</span></h6>
                    </div>
                    <div class="d-flex align-items-center gap-16 mb-16">
                      <h6 class="dark-gray text-decoration-line-through">$450.00</h6>
                      <h5 class="black">$400.00</h5>
                    </div>
                    <p class="quick-view-text mb-16">
                      Fuel your workouts with Big Whey, the premium whey protein blend designed
                      for muscle recovery and growth. Packed
                      with essential amino acids, it's your perfect companion for achieving peak
                      performance and fitness goals.
                    </p>
                    <div class="hr-line bg-sept mb-24"></div>
                    <div class="function-bar mb-16">
                      <p class="subtitle font-primary fw-500 black mb-8">Quantity:</p>
                      <div class="quantity quantity-wrap mb-24">
                        <div class="input-area quantity-wrap">
                          <input class="decrement" type="button" value="-">
                          <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                          <input class="increment" type="button" value="+">
                        </div>
                      </div>
                      <p class="black font-primary fw-500 mb-24">SKU: <span class="dark-gray font-sec">
                          GH-001-NY</span></p>
                      <div class="cart-btn">
                        <a href="#" class="cus-btn-2">ADD TO CART</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- Modal -->
  <div class="modal fade" id="comparepopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog compare-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="zui-wrapper">
            <div class="close-content text-end">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="container" class="zui-scroller">
              <table class="zui-table">
                <thead>
                  <tr>
                    <th class="zui-sticky-col">Product</th>
                    <th id="product-col" class="table-col">
                      <span class="text-16 fw-400 mb-16">
                        <a href="#" class="product-link">Marbella Poplin Dress</a>
                      </span>
                      <img class="product-img" src="assets/media/products/1.png" alt="">
                    </th>
                    <th class="table-col">
                      <span class="text-16 fw-400 mb-16">
                        <a href="#" class="product-link">Relaxed Fit Culottes
                        </a>
                      </span>
                      <img class="product-img" src="assets/media/products/2.png" alt="">
                    </th>
                    <th class="table-col">
                      <span class="text-16 fw-400 mb-16">
                        <a href="#" class="product-link">Short Hem Top
                        </a>
                      </span>
                      <img class="product-img" src="assets/media/products/3.png" alt="">
                    </th>
                    <th class="table-col">
                      <span class="text-16 fw-400 mb-16">
                        <a href="#" class="product-link">Belted Linen Outerwear
                        </a>
                      </span>
                      <img class="product-img" src="assets/media/products/4.png" alt="">
                    </th>
                    <th class="table-col">
                      <span class="text-16 fw-400 mb-16">
                        <a href="#" class="product-link">Marbella Poplin Dress</a>
                      </span>
                      <img class="product-img" src="assets/media/products/5.png" alt="">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="zui-sticky-col">Price</td>
                    <td class="text-center"><strong>$85.00</strong></td>
                    <td class="text-center"><strong>$700.00</strong></td>
                    <td class="text-center"><strong>$50.00</strong></td>
                    <td class="text-center"><strong>$500.00</strong></td>
                    <td class="text-center"><strong>$150.00</strong></td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col zui-stripe-row">Description</td>
                    <td>AS4500</td>
                    <td>AS8500</td>
                    <td>AS6000</td>
                    <td>AS4600</td>
                    <td>AS1000</td>
                  </tr>
                  <tr>
                    <td class="zui-sticky-col">Availablity</td>
                    <td><i class="far fa-plus-circle"></i>Optional</td>
                    <td><i class="far fa-check-circle"></i>Included</td>
                    <td><i class="far fa-check-circle"></i>Included</td>
                    <td><i class="far fa-check-circle"></i>Included</td>
                    <td><i class="far fa-check-circle"></i>Included</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Shopping Cart Popup Start -->
  <aside id="sidebar-cart">
    <div class="title-cart-block mb-32 bg-lightest-gray">
      <h6>Shopping Cart (02)</h6>
      <a href="#" class="close-button close-popup"><span class="close-icon">X</span></a>
    </div>
    <ul class="product-list p-24">
      <li class="product-item mb-24">
        <div class="d-flex align-items-center gap-12">
          <div class="item-image">
            <img src="assets/media/products/sm-1.png" alt="Product Photo">
          </div>
          <div class="prod-title">
            <a href="#" class="h6 black mb-8">Vitamins & Minerals</a>
            <p class="mb-4p">Quantity: 1</p>
            <p>$30.00</p>
          </div>
        </div>
        <div class="text-end">
          <a href="javascript:;" class="cancel mb-12">
            <img src="assets/media/icons/cancel.png" alt="">
          </a>
          <div class="quantity quantity-wrap">
            <div class="input-area quantity-wrap">
              <input class="decrement" type="button" value="-">
              <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
              <input class="increment" type="button" value="+">
            </div>
          </div>
        </div>
      </li>
      <li class="hr-line mb-24"></li>
      <li class="product-item mb-24">
        <div class="d-flex align-items-center gap-12">
          <div class="item-image">
            <img src="assets/media/products/sm-2.png" alt="Product Photo">
          </div>
          <div class="prod-title">
            <a href="#" class="h6 black mb-8">Mass Gainers</a>
            <p class="mb-4p">Quantity: 1</p>
            <p>$1230.00</p>
          </div>
        </div>
        <div class="text-end">
          <a href="javascript:;" class="cancel mb-12">
            <img src="assets/media/icons/cancel.png" alt="">
          </a>
          <div class="quantity quantity-wrap">
            <div class="input-area quantity-wrap">
              <input class="decrement" type="button" value="-">
              <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
              <input class="increment" type="button" value="+">
            </div>
          </div>
        </div>
      </li>
      <li class="hr-line mb-24"></li>
    </ul>
    <div class="price-total p-24">
      <span class="h5">SUBTOTAL</span>
      <span class="h5">$281.98</span>
    </div>
    <div class="hr-line mb-24"></div>
    <div class="action-buttons p-24">
      <a href="#" class="cus-btn-2">VIEW CART</a>
      <a href="#" class="cus-btn active-btn">CHECKOUT</a>
    </div>
  </aside>
  <div id="sidebar-cart-curtain" class="close-popup"></div>
  <!-- Shopping Cart Popup End -->


  <!-- Jquery Js -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/slickAnimation.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  @stack('scripts')

</body>


<!-- Mirrored from uiparadox.co.uk/templates/powerup/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2026 13:03:34 GMT -->

</html>
