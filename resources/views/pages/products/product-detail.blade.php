@extends('layouts.app')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">{{ $product['name'] }}</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- PRODUCT DETAIL START -->
  <section class="shop-detail-page py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <div class="row row-gap-3">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div id="lens"></div>

            <div id="slideshow-items-container">
              @foreach($product->images as $img)
                <img class="slideshow-items {{ $loop->first ? 'active' : '' }}"
                  src="{{ asset('storage/' . $img->image_url) }}" alt="Product Image">
              @endforeach
            </div>

            <div id="result"></div>

            <!-- <div class="d-flex flex-row justify-content-evenly py-2 px-1 mt-2 border rounded-3">
                                                                                                                                                                                                                                                                          @foreach($product->images as $img)
                                                                                                                                                                                                                                                                            <img class="slideshow-thumbnails {{ $loop->first ? 'active' : '' }}"
                                                                                                                                                                                                                                                                              src="{{ asset('storage/' . $img->image_url) }}" alt="Product Thumbnail">
                                                                                                                                                                                                                                                                          @endforeach
                                                                                                                                                                                                                                                                        </div> -->

            <div class="thumbnail-wrapper">
              @foreach($product->images as $img)
                <img class="slideshow-thumbnails {{ $loop->first ? 'active' : '' }}"
                  src="{{ asset('storage/' . $img->image_url) }}" alt="Product Thumbnail">
              @endforeach
            </div>
          </div>

          <!-- Content -->
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="product-text-container product-text-page">
              <p class="eyebrow mb-12">
                {{ $product->category->name ?? '' }}

                @if(!empty($product->badge))
                  <span class="badge bg-primary">{{ $product->badge }}</span>
                @endif
              </p>
              <h3 class="black fw-700 mb-12">{{ $product['name'] }}</h3>

              <!-- SKU -->
              <div class="mb-12" style="display: flex; align-items: center; gap: 10px;">
                <h6 class="fw-600 black" style="margin: 0;">SKU :</h6>
                <span class="dark-gray font-sec text-16" style="margin: 0;">{{ $product['sku'] }}</span>
              </div>

              <!-- Specifications Table -->
              @if(!empty($product['specifications']))
                <h6 class="fw-600 black mb-12">Specifications :</h6>
                <div class="specifications-table mb-24">
                  <table class="table table-bordered mb-3">
                    <tbody>
                      @foreach($groupedSpecs as $spec)
                        <tr>
                          <td class="bg-lightest-gray fw-600" style="width: 40%;">
                            {{ $spec->key }}
                          </td>
                          <td>{{ $spec->value }}</td>
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
                <img src="{{ $related->images->first() ? asset('storage/' . $related->images->first()->image_url) : asset('images/default.jpg') }}" alt="{{ $related->name }}" loading="lazy" class="img-fluid">
                @if(!empty($related->badge))
                  <div class="sale-label subtitle">{{ $related->badge }}</div>
                @endif
              </div>
              <div class="content-box">
                <p class="eyebrow mb-12">{{ $related->category->name ?? '' }}</p>
                <a href="{{ route('product-detail', ['slug' => $related->slug]) }}"
                  class="product-title h6 fw-500 mb-12">{{ $related->name }}</a>

                @php
                  $capacity = $related->specifications->first(function($spec) {
                      return strtolower($spec->key) === 'capacity';
                  })->value ?? null;
                @endphp
                @if($capacity)
                  <p class="caption mb-8 dark-gray">Capacity: {{ $capacity }}</p>
                @elseif(!empty($related->feature))
                  <p class="caption mb-8 dark-gray">{{ $related->feature }}</p>
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

@push('styles')
  <style>
    /* FIX FOR IMAGE OVERLAPPING ISSUE */
    #slideshow-items-container {
      position: relative;
      width: 100%;
      aspect-ratio: 1 / 1;
      overflow: hidden;
      background: transparent;
    }

    /* Main Image - FIXED */
    .slideshow-items {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: none;
      transition: opacity 0.3s ease;
      background: #fff;
    }

    .slideshow-items.active {
      display: block !important;
    }

    /* Thumbnail Wrapper */
    .thumbnail-wrapper {
      display: flex;
      gap: 10px;
      margin-top: 12px;
      padding: 8px;
      border: 1px solid #eee;
      border-radius: 8px;
      overflow-x: auto;
      scrollbar-width: thin;
    }

    .thumbnail-wrapper::-webkit-scrollbar {
      height: 6px;
    }

    .thumbnail-wrapper::-webkit-scrollbar-thumb {
      background: #ccc;
      border-radius: 10px;
    }

    /* Thumbnails */
    .slideshow-thumbnails {
      min-width: 70px;
      height: 70px;
      object-fit: contain;
      cursor: pointer;
      border-radius: 8px;
      opacity: 0.7;
      border: 2px solid #f1f1f1;
      background: #fff;
      padding: 4px;
      transition: all 0.2s ease;
    }

    .slideshow-thumbnails:hover {
      opacity: 1;
      transform: scale(1.08);
    }

    .slideshow-thumbnails.active {
      opacity: 1;
      border-color: #000;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .product-text-container {
      padding-left: 24px;
    }

    @media (max-width: 768px) {
      .product-text-container {
        padding-left: 0;
        margin-top: 20px;
      }
    }

    /* MOBILE FIX */
    @media (max-width: 768px) {
      #result {
        display: none !important;
      }

      .slideshow-items.active {
        cursor: pointer;
      }
    }
  </style>
@endpush

@push('scripts')
  <script>
    $(document).ready(function () {
      const $container = $('#slideshow-items-container');
      const $images = $('.slideshow-items');
      const $thumbnails = $('.slideshow-thumbnails');

      /* THUMBNAIL CLICK - CHANGE SLIDE */
      $thumbnails.on('click', function () {
        changeSlide($(this));
      });

      function changeSlide(elm) {
        let index = elm.index();

        $images.removeClass('active').eq(index).addClass('active');
        $thumbnails.removeClass('active').eq(index).addClass('active');

        scrollToActiveThumbnail();
      }

      /* SCROLL TO ACTIVE THUMBNAIL */
      function scrollToActiveThumbnail() {
        const container = document.querySelector('.thumbnail-wrapper');
        const active = document.querySelector('.slideshow-thumbnails.active');

        if (active && container) {
          container.scrollLeft = active.offsetLeft - container.offsetWidth / 2 + active.offsetWidth / 2;
        }
      }
    });
  </script>
@endpush
