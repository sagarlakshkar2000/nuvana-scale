@extends('layouts.app')

@push('styles')
  {{-- Slick Slider --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <style>
    /* ----- GLOBAL OVERRIDES (Premium Dark) ----- */
    :root {
      --color-primary: #000000;
      --color-primary-rgb: 0, 0, 0;
      --color-primary-dark: #0C0C0D;
      --color-primary-light: #F5F5F5;
      --color-secondary: #000000;
      --color-secondary-light: #FAFAFA;
      --color-accent: #5D3A1A;
      --color-whatsapp: #21ce5b;

      --color-white: #FFFFFF;
      --color-off-white: #FBFBFD;
      --color-gray-50: #F8F9FC;
      --color-gray-100: #F0F2F5;
      --color-gray-200: #E4E7EB;
      --color-gray-300: #CFD3D9;
      --color-gray-400: #A8AEB8;
      --color-gray-500: #7E8490;
      --color-gray-600: #5A606B;
      --color-gray-700: #3A3F47;
      --color-gray-800: #252A30;
      --color-gray-900: #121316;

      --bg-body: var(--color-off-white);
      --bg-surface: var(--color-white);
      --bg-surface-alt: var(--color-gray-50);
      --bg-card: var(--color-white);
      --bg-hero: linear-gradient(135deg, #F5FAFF 0%, #EFF5F5 100%);
      --bg-footer: #1A1E24;
      --bg-sticky-header: #F5FAFF;

      --text-primary: var(--color-gray-900);
      --text-secondary: var(--color-gray-600);
      --text-muted: var(--color-gray-500);
      --text-light: var(--color-gray-400);
      --text-white: var(--color-white);

      --border-color: var(--color-gray-200);
      --border-light: #EAEEF2;
      --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.03), 0 4px 12px rgba(0, 0, 0, 0.03);
      --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.02);
      --shadow-lg: 0 8px 28px rgba(0, 0, 0, 0.06), 0 2px 4px rgba(0, 0, 0, 0.02);
      --shadow-hover: 0 16px 32px rgba(0, 0, 0, 0.08);
      --shadow-focus: 0 0 0 3px rgba(0, 168, 107, 0.2);

      --space-1: 4px;
      --space-2: 8px;
      --space-3: 12px;
      --space-4: 16px;
      --space-5: 24px;
      --space-6: 32px;
      --space-7: 48px;
      --space-8: 64px;
      --space-9: 80px;
      --space-10: 96px;

      --radius-sm: 8px;
      --radius-md: 12px;
      --radius-lg: 20px;
      --radius-xl: 28px;
      --radius-2xl: 36px;
      --radius-full: 9999px;

      --font-family-heading: "Plus Jakarta Sans", system-ui, -apple-system, 'Segoe UI', sans-serif;
      --font-family-body: "Plus Jakarta Sans", system-ui, -apple-system, 'Segoe UI', sans-serif;

      --transition-fast: 0.15s ease;
      --transition: 0.25s cubic-bezier(0.2, 0, 0, 1);
      --transition-slow: 0.4s ease;

      --text-heading: var(--text-primary);
      --bg-default: var(--bg-body);
      --scrollbar-track: var(--bg-surface-alt);
      --scrollbar-thumb: var(--color-gray-600);
      --color-black: #0C0C0D;
      --color-error: #DD3842;
      --color-warning: #FF7A00;
      --color-success: #028845;
    }

    body {
      background: var(--bg-body);
      font-family: var(--font-family-body);
      color: var(--text-primary);
      letter-spacing: -0.01em;
    }

    .fw-600 {
      font-weight: 600;
    }

    .fw-700 {
      font-weight: 700;
    }

    .text-16 {
      font-size: 1rem;
    }

    .black {
      color: var(--color-black);
    }

    .dark-gray {
      color: var(--color-gray-700);
    }

    .bg-lightest-gray {
      background: var(--color-gray-50);
    }

    .mb-12 {
      margin-bottom: 12px;
    }

    .mb-24 {
      margin-bottom: 24px;
    }

    .mb-16 {
      margin-bottom: 16px;
    }

    .py-40 {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .pt-40 {
      padding-top: 40px;
    }

    .pb-80 {
      padding-bottom: 80px;
    }

    .py-20 {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .cus-btn-2 {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 14px 28px;
      border-radius: 60px;
      font-weight: 600;
      font-size: 1rem;
      border: 1px solid transparent;
      transition: var(--transition);
      background: #25D366;
      color: #fff;
      text-decoration: none;
    }

    .cus-btn-2:hover {
      background: #1da851;
      color: #fff;
      box-shadow: var(--shadow-md);
      transform: translateY(-1px);
    }

    /* ----- TITLE BANNER (Premium Dark) ----- */
    .title-banner {
      background: var(--color-primary-dark);
      padding: 48px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .title-banner h2 {
      font-size: 2.4rem;
      letter-spacing: -0.02em;
      color: var(--color-white);
      margin: 0;
    }

    /* ----- PRODUCT DETAIL LAYOUT ----- */
    .shop-detail-page {
      background: var(--bg-body);
    }

    .detail-wrapper {
      background: var(--bg-surface);
      border-radius: var(--radius-lg);
      padding: 32px 24px;
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--border-light);
    }

    .product-text-container {
      padding-left: 32px;
    }

    @media (max-width: 768px) {
      .product-text-container {
        padding-left: 0;
        margin-top: 24px;
      }
    }

    /* ----- IMAGE SLIDER (Slick) ----- */
    .slick-slider .slick-slide {
      outline: none;
    }

    .slick-slider .slick-slide img {
      width: 100%;
      height: 480px;
      object-fit: contain;
      background: var(--color-white);
      border-radius: var(--radius-md);
    }

    .slick-thumbnail-slider .slick-slide {
      padding: 0 4px;
      opacity: 0.6;
      transition: var(--transition);
      cursor: pointer;
    }

    .slick-thumbnail-slider .slick-slide.slick-current {
      opacity: 1;
    }

    .slick-thumbnail-slider .slick-slide img {
      width: 100%;
      height: 70px;
      object-fit: contain;
      border: 2px solid transparent;
      border-radius: var(--radius-sm);
      background: var(--color-white);
      padding: 4px;
      transition: var(--transition);
    }

    .slick-thumbnail-slider .slick-slide.slick-current img {
      border-color: var(--color-black);
      box-shadow: var(--shadow-sm);
    }

    /* Slick arrows custom */
    .slick-prev:before,
    .slick-next:before {
      color: var(--color-black) !important;
      font-size: 24px !important;
      opacity: 0.8;
    }

    .slick-prev,
    .slick-next {
      z-index: 10;
    }

    .slick-prev {
      left: -10px;
    }

    .slick-next {
      right: -10px;
    }

    /* ----- SPECS TABLE ----- */
    .specifications-table table {
      border-collapse: separate;
      border-spacing: 0;
      border-radius: var(--radius-sm);
      overflow: hidden;
      border: 1px solid var(--border-light);
    }

    .specifications-table table td {
      padding: 12px 16px;
      border-color: var(--border-light);
      vertical-align: middle;
      font-size: 0.95rem;
    }

    .specifications-table table td:first-child {
      background: var(--color-gray-50);
      font-weight: 600;
      color: var(--color-gray-800);
      width: 40%;
    }

    /* ----- FEATURES GRID (Premium) ----- */
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      gap: 16px;
    }

    .feature-item {
      background: var(--bg-surface-alt);
      border-radius: var(--radius-md);
      padding: 16px 12px;
      text-align: center;
      border: 1px solid var(--border-light);
      transition: var(--transition);
    }

    .feature-item:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
      border-color: var(--color-gray-300);
    }

    .feature-item i {
      font-size: 2rem;
      color: var(--color-black);
      margin-bottom: 8px;
      display: block;
    }

    .feature-item span {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--color-gray-800);
    }

    /* ----- IDEAL PRODUCT CARDS ----- */
    .ideal-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
      gap: 16px;
    }

    .ideal-card {
      background: var(--bg-surface);
      border-radius: var(--radius-md);
      padding: 20px 12px;
      text-align: center;
      border: 1px solid var(--border-light);
      transition: var(--transition);
    }

    .ideal-card:hover {
      border-color: var(--color-black);
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
    }

    .ideal-card i {
      font-size: 1.8rem;
      color: var(--color-black);
      margin-bottom: 8px;
      display: block;
    }

    .ideal-card span {
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--color-gray-800);
    }

    /* ----- WHY CHOOSE (Dark Section) ----- */
    .why-choose-section {
      background: var(--color-primary-dark);
      color: var(--color-white);
      border-radius: var(--radius-lg);
      padding: 48px 40px;
      margin: 40px 0;
    }

    .why-choose-section h3 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 24px;
    }

    .why-choose-section .reason {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 20px;
    }

    .why-choose-section .reason i {
      font-size: 1.6rem;
      color: var(--color-white);
      min-width: 32px;
      margin-top: 2px;
    }

    .why-choose-section .reason p {
      margin: 0;
      font-size: 1rem;
      opacity: 0.85;
      line-height: 1.5;
    }

    /* ----- FAQ (Accordion Clean) ----- */
    .faq-accordion .accordion-item {
      border: 1px solid var(--border-light);
      border-radius: var(--radius-sm) !important;
      margin-bottom: 8px;
      overflow: hidden;
      background: var(--bg-surface);
    }

    .faq-accordion .accordion-button {
      background: var(--bg-surface);
      font-weight: 600;
      color: var(--color-black);
      padding: 16px 20px;
      border: none;
      box-shadow: none;
      font-size: 1rem;
    }

    .faq-accordion .accordion-button:not(.collapsed) {
      background: var(--color-gray-50);
      color: var(--color-black);
      box-shadow: none;
    }

    .faq-accordion .accordion-button:focus {
      border-color: var(--color-black);
      box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.1);
    }

    .faq-accordion .accordion-body {
      padding: 16px 20px 20px;
      color: var(--color-gray-700);
      font-size: 0.95rem;
    }

    /* ----- RELATED PRODUCTS (tweak) ----- */
    .product-block {
      background: var(--bg-surface);
      border-radius: var(--radius-md);
      padding: 16px;
      border: 1px solid var(--border-light);
      transition: var(--transition);
      height: 100%;
    }

    .product-block:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-4px);
      border-color: var(--color-gray-300);
    }

    .product-block .image-box img {
      width: 100%;
      height: 180px;
      object-fit: contain;
      background: var(--color-white);
      border-radius: var(--radius-sm);
    }

    .product-block .sale-label {
      position: absolute;
      top: 8px;
      left: 8px;
      background: var(--color-black);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 600;
      padding: 4px 12px;
      border-radius: 20px;
    }

    .product-block .image-box {
      position: relative;
    }

    /* ----- RESPONSIVE TWEAKS ----- */
    @media (max-width: 576px) {
      .title-banner h2 {
        font-size: 1.6rem;
      }

      .detail-wrapper {
        padding: 16px;
      }

      .slick-slider .slick-slide img {
        height: 280px;
      }

      .why-choose-section {
        padding: 28px 20px;
      }

      .feature-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .ideal-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
@endpush

@section('content')
  {{-- ========== TITLE BANNER ========== --}}
  <section class="title-banner">
    <div class="container">
      <h2 class="fw-700 text-center">{{ $product['name'] }}</h2>
    </div>
  </section>

  {{-- ========== PRODUCT DETAIL ========== --}}
  <section class="shop-detail-page py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <div class="row row-gap-3">

          {{-- LEFT: IMAGE SLIDER (Slick) --}}
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="main-slider-wrapper">
              <div class="slick-main-slider">
                @foreach($product->images as $img)
                  <div>
                    <img src="{{ asset('storage/' . $img->image_url) }}" alt="Product Image" loading="lazy">
                  </div>
                @endforeach
              </div>
              <div class="slick-thumbnail-slider mt-3">
                @foreach($product->images as $img)
                  <div>
                    <img src="{{ asset('storage/' . $img->image_url) }}" alt="Thumbnail" loading="lazy">
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          {{-- RIGHT: PRODUCT INFO --}}
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="product-text-container product-text-page">

              {{-- Badge / Category --}}
              <p class="eyebrow mb-12">
                {{ $product->category->name ?? '' }}
                @if(!empty($product->badge))
                  <span class="badge bg-dark ms-2">{{ $product->badge }}</span>
                @endif
              </p>

              <h3 class="black fw-700 mb-12">{{ $product['name'] }}</h3>

              {{-- SKU --}}
              <div class="mb-12 d-flex align-items-center gap-2">
                <h6 class="fw-600 black mb-0">SKU :</h6>
                <span class="dark-gray text-16 mb-0">{{ $product['sku'] }}</span>
              </div>

              {{-- Description (short) --}}
              <div class="mb-16">
                <p class="text-secondary" style="font-size:0.95rem; line-height:1.6;">
                  {{ $product['description'] ?? 'Premium quality product designed for professionals. Engineered with precision and durability.' }}
                </p>
              </div>

              {{-- Specifications Table --}}
              @if(!empty($product['specifications']))
                <h6 class="fw-600 black mb-12">Specifications</h6>
                <div class="specifications-table mb-24">
                  <table class="table table-bordered mb-3">
                    <tbody>
                      @foreach($groupedSpecs as $spec)
                        <tr>
                          <td class="bg-lightest-gray fw-600">{{ $spec->key }}</td>
                          <td>{{ $spec->value }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              @endif

              {{-- WhatsApp Enquiry --}}
              <div class="row row-gap-3 mb-16">
                <div class="col-sm-12">
                  @php
                    $whatsapp_message = urlencode("Hello, I'm interested in " . $product['title'] . " (SKU: " . $product['sku'] . "). Could you please provide more information?");
                    $whatsapp_number = "919829797963";
                    $whatsapp_url = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
                  @endphp
                  <a href="{{ $whatsapp_url }}" target="_blank" class="cus-btn-2 w-100 text-center"
                    style="background:#25D366; border-color:#25D366; color:#fff;">
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

  {{-- ========== BEST FEATURES ========== --}}
  @if(!empty($product->features) && count($product->features) > 0)
  <section class="py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <h4 class="fw-700 black mb-24">⭐ Best Features</h4>
        <div class="feature-grid">
          @foreach($product->features as $feature)
            <div class="feature-item"><i class="fas fa-check-circle text-success"></i><span>{{ $feature }}</span></div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endif

  {{-- ========== PRODUCT SPECIFICATION (detailed) ========== --}}
  @if($product->specifications->count() > 0)
  <section class="py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <h4 class="fw-700 black mb-24">📋 Product Specification</h4>
        <div class="row">
          @php
            $specs = $product->specifications;
            $half = ceil($specs->count() / 2);
            $col1 = $specs->slice(0, $half);
            $col2 = $specs->slice($half);
          @endphp
          <div class="col-md-6">
            <ul class="list-unstyled" style="columns:2; column-gap:24px;">
              @foreach($col1 as $spec)
                <li class="mb-2"><strong>{{ $spec->key }}</strong> <span class="text-secondary">{{ $spec->value }}</span></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled" style="columns:2; column-gap:24px;">
              @foreach($col2 as $spec)
                <li class="mb-2"><strong>{{ $spec->key }}</strong> <span class="text-secondary">{{ $spec->value }}</span></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif

  {{-- ========== IDEAL PRODUCT FOR ========== --}}
  @if(!empty($product->ideal_for) && count($product->ideal_for) > 0)
  <section class="py-40">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <h4 class="fw-700 black mb-24">🎯 Ideal Product For</h4>
        <div class="ideal-grid">
          @foreach($product->ideal_for as $ideal)
            <div class="ideal-card"><i class="fas fa-bullseye text-primary"></i><span>{{ $ideal }}</span></div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endif

  {{-- ========== WHY CHOOSE NUVANA ========== --}}
  @if(!empty($product->why_choose_nuvana) && count($product->why_choose_nuvana) > 0)
  <section class="py-40">
    <div class="container-fluid">
      <div class="why-choose-section">
        <h3>✨ Why Choose Nuvana ?</h3>
        <div class="row">
          @php
            $reasons = $product->why_choose_nuvana;
            $halfReasons = ceil(count($reasons) / 2);
            $col1Reasons = array_slice($reasons, 0, $halfReasons);
            $col2Reasons = array_slice($reasons, $halfReasons);
          @endphp
          <div class="col-md-6">
            @foreach($col1Reasons as $reason)
              <div class="reason"><i class="fas fa-check-circle text-info"></i>
                <p><strong>{{ $reason['title'] ?? '' }}</strong> — {{ $reason['description'] ?? '' }}</p>
              </div>
            @endforeach
          </div>
          <div class="col-md-6">
            @foreach($col2Reasons as $reason)
              <div class="reason"><i class="fas fa-check-circle text-info"></i>
                <p><strong>{{ $reason['title'] ?? '' }}</strong> — {{ $reason['description'] ?? '' }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif

  {{-- ========== FAQ ========== --}}
  @if(!empty($product->faqs) && count($product->faqs) > 0)
  <section class="py-40 pb-80">
    <div class="container-fluid">
      <div class="detail-wrapper">
        <h4 class="fw-700 black mb-24">❓ Frequently Asked Questions</h4>
        <div class="faq-accordion accordion" id="faqAccordion">
          @foreach($product->faqs as $index => $faq)
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq{{ $index }}">
                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                  aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                  {{ $faq['question'] ?? '' }}
                </button>
              </h2>
              <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="faq{{ $index }}"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">{{ $faq['answer'] ?? '' }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endif

  {{-- ========== RELATED PRODUCTS ========== --}}
  <section class="liked-products pt-40 pb-80">
    <div class="container-fluid">
      <div class="mb-48">
        <h2 class="fw-600 black mb-12">You May Also Like</h2>
        <p class="text-secondary">Explore similar products that might interest you.</p>
      </div>
      <div class="row row-gap-4">
        @forelse($related_products as $related)
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product-block">
              <div class="image-box mb-16">
                <img
                  src="{{ $related->images->first() ? asset('storage/' . $related->images->first()->image_url) : asset('images/default.jpg') }}"
                  alt="{{ $related->name }}" loading="lazy" class="img-fluid">
                @if(!empty($related->badge))
                  <div class="sale-label">{{ $related->badge }}</div>
                @endif
              </div>
              <div class="content-box">
                <p class="eyebrow mb-12 text-muted small">{{ $related->category->name ?? '' }}</p>
                <a href="{{ route('product-detail', ['slug' => $related->slug]) }}"
                  class="product-title h6 fw-500 mb-12 text-decoration-none black">{{ $related->name }}</a>
                @php
                  $capacity = $related->specifications->first(function ($spec) {
                    return strtolower($spec->key) === 'capacity';
                  })->value ?? null;
                @endphp
                @if($capacity)
                  <p class="caption mb-8 text-secondary small">Capacity: {{ $capacity }}</p>
                @elseif(!empty($related->feature))
                  <p class="caption mb-8 text-secondary small">{{ $related->feature }}</p>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-4">
            <p>No related products found.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

@endsection

@push('scripts')
  {{-- Slick Slider JS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      // Main slider
      const $mainSlider = $('.slick-main-slider');
      const $thumbSlider = $('.slick-thumbnail-slider');

      $mainSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: $thumbSlider,
        infinite: true,
        speed: 400,
        responsive: [
          { breakpoint: 768, settings: { arrows: false } }
        ]
      });

      $thumbSlider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: $mainSlider,
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        infinite: true,
        speed: 300,
        responsive: [
          { breakpoint: 576, settings: { slidesToShow: 3 } }
        ]
      });

      // Ensure main slider height adjusts on init
      $mainSlider.on('init', function () {
        $(this).find('.slick-slide img').css('height', '480px');
      });
    });
  </script>
@endpush
