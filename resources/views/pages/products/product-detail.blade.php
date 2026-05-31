@extends('layouts.app')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">{{ $product['title'] }}</h2>
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
              <!-- Thumbnail Navigation -->
              <div class="product-slider-asnav">
                @foreach($product['additional_images'] as $index => $img)
                  <div class="nav-image" data-slide-index="{{ $index }}">
                    <img src="{{ $img }}" alt="{{ $product['title'] }}" class="img-fluid rounded-3">
                  </div>
                @endforeach
              </div>

              <!-- Main Slider -->
              <div class="product-detail-slider">
                @foreach($product['additional_images'] as $img)
                  <div class="detail-image p-2">
                    <img src="{{ $img }}" alt="{{ $product['title'] }}" class="img-fluid w-100 rounded-3">
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="product-text-container product-text-page">
              <p class="eyebrow mb-12">{{ $product['category'] }}

                <!-- Feature/Badge -->
                @if(!empty($product['badge']))
                  <span class="badge bg-primary text-white px-3 py-2">{{ $product['badge'] }}</span>
                @endif
              </p>
              <h3 class="black fw-700 mb-12">{{ $product['title'] }}</h3>

              <!-- SKU -->
              <div class="mb-12" style="display: flex; align-items: center; gap: 10px;">
                <h6 class="fw-600 black" style="margin: 0;">SKU :</h6>
                <span class="dark-gray font-sec text-16" style="margin: 0;">{{ $product['sku'] }}</span>
              </div>

              <!-- Specifications Table -->
              @if(!empty($product['specifications']))
                <h6 class="fw-600 black mb-12">Specifications :</h6>
                <div class="specifications-table mb-24">
                  <table class="table table-bordered">
                    <tbody>
                      @foreach($product['specifications'] as $key => $value)
                        <tr>
                          <td class="bg-lightest-gray fw-600" style="width: 40%;">{{ $key }}</td>
                          <td>{{ $value }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              @endif

              <!-- WhatsApp Enquiry Button -->
              <div class="row row-gap-3 mb-16">
                <div class="col-sm-12">
                  @php
                    $whatsapp_message = urlencode("Hello, I'm interested in " . $product['title'] . " (SKU: " . $product['sku'] . "). Could you please provide more information?");
                    $whatsapp_number = "919829797963"; // Your WhatsApp number
                    $whatsapp_url = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
                  @endphp
                  <a href="{{ $whatsapp_url }}" target="_blank" class="cus-btn-2 text-center w-100"
                    style="background: #25D366; border-color: #25D366; color: #fff;">
                    <i class="fa-brands fa-whatsapp me-2"></i> Enquiry on WhatsApp
                  </a>
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
          {{ $product['description'] ?? 'Lorem ipsum dolor sit amet consectetur. Eget massa elementum sit massa tincidunt urna vulputate. Justo massa mattis consectetur ac. Massa ipsum cras est id. Fuel your workouts with premium quality products designed for muscle recovery and growth. Packed with essential amino acids, it\'s your perfect companion for achieving peak performance and fitness goals.' }}
        </p>
        <p>
          Our fresh, high-quality products are designed to meet your needs. Whether you're a professional or just
          starting, we have the perfect solution for you. Experience the difference with our premium range of products.
        </p>
      </div>
    </div>
  </section>
  <!-- Product Description End -->

  <!-- Related Products Start -->
  <section class="liked-products pt-40 pb-80">
    <div class="container-fluid">
      <div class="mb-48">
        <h2 class="fw-600 black mb-12">You May Also Like</h2>
        <p>Explore similar products that might interest you.</p>
      </div>
      <div class="row row-gap-4">
        @forelse($related_products as $related)
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product-block">
              <div class="image-box mb-16">
                <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}">
                @if(!empty($related['badge']))
                  <div class="sale-label subtitle">{{ $related['badge'] }}</div>
                @endif
              </div>
              <div class="content-box">
                <p class="eyebrow mb-12">{{ $related['category'] }}</p>
                <a href="{{ url('/products/' . $related['slug']) }}"
                  class="product-title h6 fw-500 mb-12">{{ $related['title'] }}</a>

                @if(!empty($related['feature']))
                  <p class="caption mb-8 dark-gray">{{ $related['feature'] }}</p>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>No related products found.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
  <!-- Related Products End -->

@endsection

@push('scripts')
  <script>
    // Product image slider
    $(document).ready(function () {
      // Initialize main slider
      $('.product-detail-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.product-slider-asnav',
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-light fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-light fa-chevron-right"></i></button>'
      });

      // Initialize thumbnail slider
      $('.product-slider-asnav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.product-detail-slider',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-light fa-chevron-up"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-light fa-chevron-down"></i></button>',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              vertical: false,
              slidesToShow: 3
            }
          }
        ]
      });
    });
  </script>
@endpush
