@extends('layouts.app')

@push('styles')
  {{-- Slick Slider --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

  {{-- Font Awesome 6 Pro (Free version) --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  {{-- Google Fonts: Inter & Playfair Display --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet">

  <style>
    /* ============================================================
           PREMIUM PRODUCT DETAIL PAGE — REDESIGNED
           Clean, Modern, Luxurious feel
           ============================================================ */

    /* ----- ROOT VARIABLES (Premium Palette) ----- */
    :root {
      --pd-primary: #0A3D2E;
      --pd-primary-dark: #06281D;
      --pd-primary-light: #E8F5F0;
      --pd-primary-gradient: linear-gradient(135deg, #0A3D2E, #1A6B4A);
      --pd-accent: #C8A96E;
      --pd-accent-light: #F5EDE0;

      --pd-dark: #0D0D0D;
      --pd-dark-card: #141414;
      --pd-gray-50: #F8F9FA;
      --pd-gray-100: #F0F2F4;
      --pd-gray-200: #E4E6E9;
      --pd-gray-300: #C8CBD0;
      --pd-gray-400: #A8ACB4;
      --pd-gray-500: #7C818C;
      --pd-gray-600: #565C66;
      --pd-gray-700: #3A3F47;
      --pd-gray-800: #24282E;
      --pd-gray-900: #121418;

      --pd-white: #FFFFFF;
      --pd-off-white: #FAFBFD;

      --pd-shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
      --pd-shadow-md: 0 4px 24px rgba(0, 0, 0, 0.06);
      --pd-shadow-lg: 0 8px 48px rgba(0, 0, 0, 0.08);
      --pd-shadow-hover: 0 16px 56px rgba(0, 0, 0, 0.12);
      --pd-shadow-glow: 0 4px 20px rgba(10, 61, 46, 0.15);

      --pd-radius-sm: 8px;
      --pd-radius-md: 14px;
      --pd-radius-lg: 24px;
      --pd-radius-xl: 32px;
      --pd-radius-full: 9999px;

      --pd-transition: 0.35s cubic-bezier(0.25, 0, 0, 1);
      --pd-transition-slow: 0.5s cubic-bezier(0.25, 0, 0, 1);

      --font-heading: 'Playfair Display', serif;
      --font-body: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }

    /* ----- BASE ----- */
    .pd-body {
      background: var(--pd-gray-50);
      font-family: var(--font-body);
      color: var(--pd-gray-900);
      -webkit-font-smoothing: antialiased;
    }

    /* ============================================================
           TITLE BANNER — Dark & Luxurious
           ============================================================ */
    .pd-hero {
      background: var(--pd-primary-gradient);
      padding: 64px 0 56px;
      position: relative;
      overflow: hidden;
    }

    .pd-hero::before {
      content: '';
      position: absolute;
      top: -40%;
      right: -10%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(200, 169, 110, 0.08) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .pd-hero::after {
      content: '';
      position: absolute;
      bottom: -50%;
      left: -10%;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(200, 169, 110, 0.05) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .pd-hero .pd-container {
      position: relative;
      z-index: 2;
    }

    .pd-hero h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.2rem, 4vw, 3.6rem);
      font-weight: 700;
      color: var(--pd-white);
      text-align: center;
      letter-spacing: -0.02em;
      line-height: 1.1;
    }

    .pd-hero h1 .pd-gold {
      color: var(--pd-accent);
    }

    .pd-hero .pd-breadcrumb {
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.85rem;
      margin-top: 14px;
      font-weight: 400;
      letter-spacing: 0.3px;
    }

    .pd-hero .pd-breadcrumb a {
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      transition: var(--pd-transition);
    }

    .pd-hero .pd-breadcrumb a:hover {
      color: var(--pd-accent);
    }

    .pd-hero .pd-breadcrumb .pd-sep {
      margin: 0 10px;
      color: rgba(255, 255, 255, 0.15);
    }

    .pd-hero .pd-breadcrumb .pd-current {
      color: var(--pd-accent);
    }

    /* ============================================================
           MAIN CONTENT WRAPPER
           ============================================================ */
    .pd-main {
      padding: 48px 0 64px;
      background: var(--pd-gray-50);
    }

    .pd-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .pd-card {
      background: var(--pd-white);
      border-radius: var(--pd-radius-lg);
      box-shadow: var(--pd-shadow-sm);
      border: 1px solid rgba(0, 0, 0, 0.04);
      transition: var(--pd-transition);
    }

    .pd-card:hover {
      box-shadow: var(--pd-shadow-md);
    }

    .pd-card-inner {
      padding: 40px 44px;
    }

    @media (max-width: 768px) {
      .pd-card-inner {
        padding: 24px 20px;
      }

      .pd-main {
        padding: 24px 0 40px;
      }

      .pd-hero {
        padding: 40px 0 32px;
      }
    }

    @media (max-width: 576px) {
      .pd-card-inner {
        padding: 16px;
      }

      .pd-container {
        padding: 0 12px;
      }
    }

    /* ============================================================
           IMAGE GALLERY
           ============================================================ */
    .pd-gallery .pd-main-slider .slick-slide {
      outline: none;
    }

    .pd-gallery .pd-main-slider .slick-slide img {
      width: 100%;
      height: 520px;
      object-fit: contain;
      background: var(--pd-gray-50);
      border-radius: var(--pd-radius-md);
      padding: 16px;
    }

    @media (max-width: 991px) {
      .pd-gallery .pd-main-slider .slick-slide img {
        height: 380px;
      }
    }

    @media (max-width: 576px) {
      .pd-gallery .pd-main-slider .slick-slide img {
        height: 260px;
        padding: 8px;
      }
    }

    /* Thumbnail Slider */
    .pd-gallery .pd-thumb-slider {
      margin-top: 18px;
    }

    .pd-gallery .pd-thumb-slider .slick-slide {
      padding: 0 6px;
      cursor: pointer;
      opacity: 0.4;
      transition: var(--pd-transition);
    }

    .pd-gallery .pd-thumb-slider .slick-slide.slick-current,
    .pd-gallery .pd-thumb-slider .slick-slide:hover {
      opacity: 1;
    }

    .pd-gallery .pd-thumb-slider .slick-slide img {
      width: 100%;
      height: 82px;
      object-fit: contain;
      border: 2px solid transparent;
      border-radius: var(--pd-radius-sm);
      background: var(--pd-white);
      padding: 4px;
      transition: var(--pd-transition);
    }

    .pd-gallery .pd-thumb-slider .slick-slide.slick-current img {
      border-color: var(--pd-primary);
      box-shadow: 0 0 0 4px rgba(10, 61, 46, 0.1);
    }

    .pd-gallery .pd-thumb-slider .slick-slide:hover img {
      border-color: var(--pd-gray-300);
    }

    /* Slick Arrows — Minimal & Premium */
    .pd-gallery .slick-prev,
    .pd-gallery .slick-next {
      z-index: 5;
      width: 44px;
      height: 44px;
      background: rgba(255, 255, 255, 0.92);
      border-radius: 50%;
      box-shadow: var(--pd-shadow-sm);
      transition: var(--pd-transition);
      backdrop-filter: blur(4px);
    }

    .pd-gallery .slick-prev:hover,
    .pd-gallery .slick-next:hover {
      background: var(--pd-primary);
      box-shadow: var(--pd-shadow-glow);
    }

    .pd-gallery .slick-prev:hover:before,
    .pd-gallery .slick-next:hover:before {
      color: #ffffff !important;
    }

    .pd-gallery .slick-prev:before,
    .pd-gallery .slick-next:before {
      color: var(--pd-gray-700) !important;
      font-size: 18px !important;
      opacity: 1;
      font-weight: 300;
    }

    .pd-gallery .slick-prev {
      left: -6px;
    }

    .pd-gallery .slick-next {
      right: -6px;
    }

    /* ============================================================
           PRODUCT INFO
           ============================================================ */
    .pd-info {
      /* Padding removed to let Bootstrap's gx-5 handle the gap */
    }

    @media (max-width: 991px) {
      .pd-info {
        margin-top: 28px;
      }
    }

    .pd-info .pd-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 14px;
    }

    .pd-info .pd-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 16px;
      border-radius: var(--pd-radius-full);
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .pd-info .pd-badge-cat {
      background: var(--pd-primary-light);
      color: var(--pd-primary);
      border: 1px solid rgba(10, 61, 46, 0.08);
    }

    .pd-info .pd-badge-feat {
      background: var(--pd-primary-gradient);
      color: var(--pd-white);
      box-shadow: var(--pd-shadow-glow);
    }

    .pd-info .pd-name {
      font-family: var(--font-heading);
      font-size: clamp(1.6rem, 2.8vw, 2.8rem);
      font-weight: 700;
      color: var(--pd-gray-900);
      line-height: 1.15;
      margin-bottom: 8px;
    }

    .pd-info .pd-sku {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.85rem;
      color: var(--pd-gray-500);
      margin-bottom: 18px;
    }

    .pd-info .pd-sku .pd-sku-label {
      font-weight: 600;
      color: var(--pd-gray-700);
    }

    .pd-info .pd-desc {
      color: var(--pd-gray-700);
      line-height: 1.85;
      font-size: 1.05rem;
      margin-bottom: 32px;
      padding-left: 20px;
      border-left: 3px solid var(--pd-accent);
      position: relative;
    }

    .pd-info .pd-desc i {
      color: var(--pd-accent);
      margin-right: 8px;
    }

    /* ============================================================
           SPECIFICATIONS TABLE
           ============================================================ */
    .pd-specs {
      margin-bottom: 28px;
    }

    .pd-specs .pd-specs-head {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.9rem;
      font-weight: 700;
      color: var(--pd-gray-800);
      margin-bottom: 12px;
    }

    .pd-specs .pd-specs-head i {
      color: var(--pd-primary);
    }

    .pd-specs table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      border-radius: var(--pd-radius-sm);
      overflow: hidden;
      border: 1px solid var(--pd-gray-200);
      font-size: 0.9rem;
    }

    .pd-specs table td {
      padding: 11px 18px;
      border-color: var(--pd-gray-200);
      vertical-align: middle;
    }

    .pd-specs table td:first-child {
      background: var(--pd-gray-50);
      font-weight: 600;
      color: var(--pd-gray-800);
      width: 36%;
    }

    .pd-specs table td:last-child {
      color: var(--pd-gray-600);
    }

    /* ============================================================
           WHATSAPP BUTTON
           ============================================================ */
    .pd-whatsapp {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      padding: 16px 36px;
      background: linear-gradient(135deg, #25D366, #128C7E);
      color: #ffffff;
      border-radius: var(--pd-radius-full);
      text-decoration: none;
      font-weight: 700;
      font-size: 1rem;
      transition: var(--pd-transition);
      box-shadow: 0 8px 28px rgba(37, 211, 102, 0.25);
      border: none;
      width: 100%;
      letter-spacing: 0.3px;
    }

    .pd-whatsapp:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 40px rgba(37, 211, 102, 0.35);
      color: #ffffff;
    }

    .pd-whatsapp i {
      font-size: 22px;
    }

    /* ============================================================
           SECTION HEADER
           ============================================================ */
    .pd-section-head {
      display: flex;
      align-items: center;
      gap: 12px;
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--pd-gray-900);
      margin-bottom: 20px;
    }

    .pd-section-head i {
      color: var(--pd-primary);
      font-size: 1.3rem;
    }

    .pd-section-head .pd-underline {
      flex: 1;
      height: 2px;
      background: linear-gradient(90deg, var(--pd-accent), transparent);
      margin-left: 12px;
    }

    /* ============================================================
           FEATURES GRID
           ============================================================ */
    .pd-features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 16px;
    }

    .pd-feature {
      background: var(--pd-white);
      border-radius: var(--pd-radius-md);
      padding: 22px 14px;
      text-align: center;
      border: 1px solid var(--pd-gray-200);
      transition: var(--pd-transition);
      position: relative;
      overflow: hidden;
    }

    .pd-feature::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--pd-primary-gradient);
      opacity: 0;
      transition: var(--pd-transition);
    }

    .pd-feature:hover::before {
      opacity: 1;
    }

    .pd-feature:hover {
      transform: translateY(-5px);
      box-shadow: var(--pd-shadow-hover);
      border-color: var(--pd-primary);
    }

    .pd-feature .pd-f-icon {
      width: 52px;
      height: 52px;
      margin: 0 auto 10px;
      background: var(--pd-primary-light);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--pd-transition);
    }

    .pd-feature:hover .pd-f-icon {
      background: var(--pd-primary);
    }

    .pd-feature .pd-f-icon i {
      font-size: 1.4rem;
      color: var(--pd-primary);
      transition: var(--pd-transition);
    }

    .pd-feature:hover .pd-f-icon i {
      color: var(--pd-white);
    }

    .pd-feature span {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--pd-gray-800);
      display: block;
    }

    /* ============================================================
           SPECIFICATION LIST
           ============================================================ */
    .pd-spec-list {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px 36px;
      padding: 0;
      list-style: none;
    }

    @media (max-width: 576px) {
      .pd-spec-list {
        grid-template-columns: 1fr;
        gap: 4px;
      }
    }

    .pd-spec-list li {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid var(--pd-gray-100);
      font-size: 0.92rem;
    }

    .pd-spec-list li .pd-spec-key {
      font-weight: 600;
      color: var(--pd-gray-800);
    }

    .pd-spec-list li .pd-spec-val {
      color: var(--pd-gray-600);
    }

    /* ============================================================
           IDEAL FOR GRID
           ============================================================ */
    .pd-ideal-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 14px;
    }

    .pd-ideal {
      background: var(--pd-white);
      border-radius: var(--pd-radius-md);
      padding: 18px 12px;
      text-align: center;
      border: 1px solid var(--pd-gray-200);
      transition: var(--pd-transition);
    }

    .pd-ideal:hover {
      border-color: var(--pd-primary);
      transform: translateY(-3px);
      box-shadow: var(--pd-shadow-md);
    }

    .pd-ideal i {
      font-size: 1.6rem;
      color: var(--pd-primary);
      margin-bottom: 6px;
      display: block;
    }

    .pd-ideal span {
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--pd-gray-700);
    }

    /* ============================================================
           WHY CHOOSE — Premium Dark Card
           ============================================================ */
    .pd-why {
      background: var(--pd-primary-gradient);
      border-radius: var(--pd-radius-lg);
      padding: 48px 44px;
      margin: 20px 0 30px;
      position: relative;
      overflow: hidden;
    }

    .pd-why::before {
      content: '';
      position: absolute;
      top: -40%;
      right: -10%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(200, 169, 110, 0.06) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .pd-why .pd-why-title {
      font-family: var(--font-heading);
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--pd-white);
      margin-bottom: 28px;
      position: relative;
      z-index: 1;
    }

    .pd-why .pd-why-title i {
      color: var(--pd-accent);
      margin-right: 10px;
    }

    .pd-why-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px 40px;
      position: relative;
      z-index: 1;
    }

    @media (max-width: 768px) {
      .pd-why {
        padding: 32px 20px;
        border-radius: var(--pd-radius-md);
      }

      .pd-why-grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .pd-why .pd-why-title {
        font-size: 1.3rem;
      }
    }

    .pd-why-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
    }

    .pd-why-item .pd-w-icon {
      width: 40px;
      height: 40px;
      min-width: 40px;
      background: rgba(200, 169, 110, 0.12);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--pd-accent);
      font-size: 15px;
      border: 1px solid rgba(200, 169, 110, 0.08);
    }

    .pd-why-item .pd-w-text {
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .pd-why-item .pd-w-text strong {
      color: #ffffff;
      display: block;
      margin-bottom: 2px;
    }

    /* ============================================================
           FAQ ACCORDION
           ============================================================ */
    .pd-faq .accordion-item {
      border: 1px solid var(--pd-gray-200);
      border-radius: var(--pd-radius-sm) !important;
      margin-bottom: 10px;
      overflow: hidden;
      background: var(--pd-white);
    }

    .pd-faq .accordion-button {
      background: var(--pd-white);
      font-weight: 600;
      color: var(--pd-gray-800);
      padding: 18px 22px;
      border: none;
      box-shadow: none;
      font-size: 0.95rem;
      transition: var(--pd-transition);
    }

    .pd-faq .accordion-button:not(.collapsed) {
      background: var(--pd-primary-light);
      color: var(--pd-primary);
      box-shadow: none;
    }

    .pd-faq .accordion-button:focus {
      border-color: var(--pd-primary);
      box-shadow: 0 0 0 3px rgba(10, 61, 46, 0.1);
    }

    .pd-faq .accordion-button::after {
      transition: var(--pd-transition);
    }

    .pd-faq .accordion-body {
      padding: 18px 22px 22px;
      color: var(--pd-gray-600);
      font-size: 0.92rem;
      line-height: 1.7;
    }

    /* ============================================================
           RELATED PRODUCTS
           ============================================================ */
    .pd-related .pd-related-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 24px;
    }

    .pd-related .pd-related-head .pd-r-title {
      font-family: var(--font-heading);
      font-size: 1.4rem;
      font-weight: 700;
      color: var(--pd-gray-900);
      margin: 0;
    }

    .pd-related .pd-related-head .pd-r-title i {
      color: var(--pd-primary);
      margin-right: 8px;
    }

    .pd-related .pd-related-head .pd-r-link {
      color: var(--pd-primary);
      text-decoration: none;
      font-weight: 600;
      transition: var(--pd-transition);
      font-size: 0.9rem;
    }

    .pd-related .pd-related-head .pd-r-link:hover {
      color: var(--pd-primary-dark);
    }

    .pd-related .pd-related-head .pd-r-link i {
      transition: var(--pd-transition);
    }

    .pd-related .pd-related-head .pd-r-link:hover i {
      transform: translateX(4px);
    }

    .pd-related-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    @media (max-width: 991px) {
      .pd-related-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 768px) {
      .pd-related-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
      }
    }

    @media (max-width: 480px) {
      .pd-related-grid {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
      }
    }

    .pd-related-card {
      background: var(--pd-white);
      border-radius: var(--pd-radius-md);
      padding: 16px;
      border: 1px solid var(--pd-gray-200);
      transition: var(--pd-transition);
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .pd-related-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--pd-shadow-hover);
      border-color: var(--pd-primary);
    }

    .pd-related-card .pd-r-img {
      position: relative;
      overflow: hidden;
      border-radius: var(--pd-radius-sm);
      background: var(--pd-gray-50);
      margin-bottom: 12px;
    }

    .pd-related-card .pd-r-img img {
      width: 100%;
      height: 160px;
      object-fit: contain;
      transition: var(--pd-transition-slow);
      padding: 8px;
    }

    .pd-related-card:hover .pd-r-img img {
      transform: scale(1.04);
    }

    .pd-related-card .pd-r-badge {
      position: absolute;
      top: 8px;
      left: 8px;
      background: var(--pd-primary-gradient);
      color: #fff;
      font-size: 0.6rem;
      font-weight: 700;
      padding: 3px 14px;
      border-radius: var(--pd-radius-full);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 12px rgba(10, 61, 46, 0.2);
    }

    .pd-related-card .pd-r-cat {
      font-size: 0.7rem;
      color: var(--pd-gray-500);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-weight: 600;
      margin-bottom: 4px;
    }

    .pd-related-card .pd-r-name {
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--pd-gray-800);
      text-decoration: none;
      transition: var(--pd-transition);
      margin-bottom: 6px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .pd-related-card .pd-r-name:hover {
      color: var(--pd-primary);
    }

    .pd-related-card .pd-r-meta {
      font-size: 0.8rem;
      color: var(--pd-gray-500);
      margin-top: auto;
    }

    .pd-related-card .pd-r-meta i {
      color: var(--pd-primary);
      margin-right: 4px;
    }

    /* ============================================================
           UTILITY & ANIMATIONS
           ============================================================ */
    .pd-mb-0 {
      margin-bottom: 0;
    }

    .pd-mb-16 {
      margin-bottom: 16px;
    }

    .pd-mb-24 {
      margin-bottom: 24px;
    }

    .pd-mb-32 {
      margin-bottom: 32px;
    }

    .pd-mt-24 {
      margin-top: 24px;
    }

    .pd-mt-32 {
      margin-top: 32px;
    }

    .pd-pt-16 {
      padding-top: 16px;
    }

    .pd-pt-32 {
      padding-top: 32px;
    }

    .pd-pb-16 {
      padding-bottom: 16px;
    }

    /* Fade-up animation */
    @keyframes pdFadeUp {
      from {
        opacity: 0;
        transform: translateY(24px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .pd-animate {
      opacity: 0;
      animation: pdFadeUp 0.6s ease forwards;
    }

    .pd-animate-1 {
      animation-delay: 0.05s;
    }

    .pd-animate-2 {
      animation-delay: 0.15s;
    }

    .pd-animate-3 {
      animation-delay: 0.25s;
    }

    .pd-animate-4 {
      animation-delay: 0.35s;
    }

    .pd-animate-5 {
      animation-delay: 0.45s;
    }

    /* Scrollbar style */
    .pd-thumb-slider::-webkit-scrollbar {
      height: 4px;
    }

    .pd-thumb-slider::-webkit-scrollbar-track {
      background: var(--pd-gray-100);
      border-radius: 4px;
    }

    .pd-thumb-slider::-webkit-scrollbar-thumb {
      background: var(--pd-gray-300);
      border-radius: 4px;
    }
  </style>
@endpush

@section('content')

  {{-- ============================================================
  HERO / TITLE BANNER
  ============================================================ --}}
  <section class="pd-hero">
    <div class="pd-container">
      <h1>
        {{ $product['name'] }}
        <span class="pd-gold">✦</span>
      </h1>
      <div class="pd-breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="pd-sep">/</span>
        <a href="{{ route('products.index') }}">Products</a>
        <span class="pd-sep">/</span>
        <span class="pd-current">{{ $product['name'] }}</span>
      </div>
    </div>
  </section>

  {{-- ============================================================
  MAIN CONTENT
  ============================================================ --}}
  <section class="pd-main">
    <div class="pd-container">

      {{-- PRODUCT DETAIL CARD --}}
      <div class="pd-card pd-animate pd-animate-1">
        <div class="pd-card-inner">
          <div class="row gx-5 gy-4 align-items-center">

            {{-- LEFT: Gallery --}}
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="pd-gallery">
                <div class="pd-main-slider">
                  @foreach($product->images as $img)
                    <div>
                      <img src="{{ asset('storage/' . $img->image_url) }}" alt="{{ $product->name }}" loading="lazy">
                    </div>
                  @endforeach
                </div>
                <div class="pd-thumb-slider">
                  @foreach($product->images as $img)
                    <div>
                      <img src="{{ asset('storage/' . $img->image_url) }}" alt="Thumbnail" loading="lazy">
                    </div>
                  @endforeach
                </div>
              </div>
            </div>

            {{-- RIGHT: Info --}}
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="pd-info">

                {{-- Badges --}}
                <div class="pd-badges">
                  <span class="pd-badge pd-badge-cat">
                    <i class="fa-solid fa-tag"></i> {{ $product->category->name ?? 'Product' }}
                  </span>
                  @if(!empty($product->badge))
                    <span class="pd-badge pd-badge-feat">
                      <i class="fa-solid fa-star"></i> {{ $product->badge }}
                    </span>
                  @endif
                </div>

                {{-- Name --}}
                <h1 class="pd-name">{{ $product['name'] }}</h1>

                {{-- SKU --}}
                <div class="pd-sku">
                  <span class="pd-sku-label">SKU:</span>
                  <span>{{ $product['sku'] }}</span>
                </div>

                {{-- Description --}}
                <div class="pd-desc">
                  <i class="fa-solid fa-quote-left"></i>
                  {{ $product['description'] ?? 'Premium quality product designed for professionals who demand excellence.' }}
                </div>


                {{-- WhatsApp Button --}}
                @php
                  $whatsapp_message = urlencode("Hello, I'm interested in " . $product['name'] . " (SKU: " . $product['sku'] . "). Could you please provide more information?");
                  $whatsapp_number = "919829797963";
                  $whatsapp_url = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
                @endphp
                <a href="{{ $whatsapp_url }}" target="_blank" class="pd-whatsapp">
                  <i class="fa-brands fa-whatsapp"></i>
                  Enquiry on WhatsApp
                </a>

              </div>
            </div>

          </div>
        </div>
      </div>

      {{-- ============================================================
      BEST FEATURES
      ============================================================ --}}
      @php
        $features = is_string($product->features) ? json_decode($product->features, true) : $product->features;
      @endphp
      @if(!empty($features) && count((array) $features) > 0)
        <div class="pd-card pd-mt-32 pd-animate pd-animate-2">
          <div class="pd-card-inner">
            <div class="pd-section-head">
              <i class="fa-solid fa-star"></i> Best Features
              <span class="pd-underline"></span>
            </div>
            <div class="pd-features-grid">
              @foreach((array) $features as $feature)
                @php
                  $isString = is_string($feature);
                  $fIcon = $isString ? 'fa-solid fa-check-circle' : (!empty($feature['icon']) ? $feature['icon'] : 'fa-solid fa-check-circle');
                  $fTitle = $isString ? $feature : ($feature['title'] ?? '');
                  $fDesc = $isString ? '' : ($feature['description'] ?? '');
                @endphp
                <div class="pd-feature">
                  <div class="pd-f-icon">
                    @if(str_starts_with($fIcon, 'fa-'))
                      <i class="{{ $fIcon }}"></i>
                    @else
                      <span style="font-size: 1.4rem; line-height: 1;">{{ $fIcon }}</span>
                    @endif
                  </div>
                  <span>{{ $fTitle }}</span>
                  @if($fDesc)
                    <p class="text-muted small mt-2 mb-0" style="font-weight: 400; line-height: 1.4;">{{ $fDesc }}</p>
                  @endif
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif

      {{-- ============================================================
      PRODUCT SPECIFICATIONS (Full List)
      ============================================================ --}}
      @if($product->specifications->count() > 0)
        <div class="pd-card pd-mt-32 pd-animate pd-animate-3">
          <div class="pd-card-inner">
            <div class="pd-section-head">
              <i class="fa-solid fa-clipboard-list"></i> Product Specifications
              <span class="pd-underline"></span>
            </div>
            <ul class="pd-spec-list">
              @foreach($product->specifications as $spec)
                <li>
                  <span class="pd-spec-key">{{ $spec->key }}</span>
                  <span class="pd-spec-val">{{ $spec->value }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

      {{-- ============================================================
      IDEAL PRODUCT FOR
      ============================================================ --}}
      @php
        $ideal_for = is_string($product->ideal_for) ? json_decode($product->ideal_for, true) : $product->ideal_for;
      @endphp
      @if(!empty($ideal_for) && count((array) $ideal_for) > 0)
        <div class="pd-card pd-mt-32 pd-animate pd-animate-4">
          <div class="pd-card-inner">
            <div class="pd-section-head">
              <i class="fa-solid fa-bullseye"></i> Ideal Product For
              <span class="pd-underline"></span>
            </div>
            <div class="pd-ideal-grid">
              @foreach((array) $ideal_for as $ideal)
                @php
                  $isString = is_string($ideal);
                  $iIcon = $isString ? 'fa-solid fa-check-circle' : (!empty($ideal['icon']) ? $ideal['icon'] : 'fa-solid fa-check-circle');
                  $iTitle = $isString ? $ideal : ($ideal['title'] ?? '');
                  $iDesc = $isString ? '' : ($ideal['description'] ?? '');
                @endphp
                <div class="pd-ideal">
                  <div class="pd-i-icon-wrapper" style="font-size: 1.6rem; color: var(--pd-primary); margin-bottom: 6px; display: block;">
                    @if(str_starts_with($iIcon, 'fa-'))
                      <i class="{{ $iIcon }}"></i>
                    @else
                      <span style="line-height: 1;">{{ $iIcon }}</span>
                    @endif
                  </div>
                  <span>{{ $iTitle }}</span>
                  @if($iDesc)
                    <p class="text-muted small mt-2 mb-0" style="font-weight: 400; line-height: 1.4;">{{ $iDesc }}</p>
                  @endif
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif

      {{-- ============================================================
      WHY CHOOSE
      ============================================================ --}}
      @php
        $why_choose = is_string($product->why_choose_nuvana) ? json_decode($product->why_choose_nuvana, true) : $product->why_choose_nuvana;
      @endphp
      @if(!empty($why_choose) && count((array) $why_choose) > 0)
        <div class="pd-why pd-mt-32 pd-animate pd-animate-5">
          <div class="pd-why-title">
            <i class="fa-solid fa-gem"></i> Why Choose Us?
          </div>
          <div class="pd-why-grid">
            @foreach((array) $why_choose as $reason)
              <div class="pd-why-item">
                <div class="pd-w-icon">
                  <i class="fa-solid fa-check"></i>
                </div>
                <div class="pd-w-text">
                  <strong>{{ $reason['title'] ?? '' }}</strong>
                  {{ $reason['description'] ?? '' }}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif

      {{-- ============================================================
      FAQ
      ============================================================ --}}
      @php
        $faqs = is_string($product->faqs) ? json_decode($product->faqs, true) : $product->faqs;
      @endphp
      @if(!empty($faqs) && count((array) $faqs) > 0)
        <div class="pd-card pd-mt-32 pd-animate pd-animate-5">
          <div class="pd-card-inner">
            <div class="pd-section-head">
              <i class="fa-solid fa-circle-question"></i> Frequently Asked Questions
              <span class="pd-underline"></span>
            </div>
            <div class="pd-faq accordion" id="pdFaqAccordion">
              @foreach((array) $faqs as $index => $faq)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="pdFaq{{ $index }}">
                    <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                      data-bs-toggle="collapse" data-bs-target="#pdCollapse{{ $index }}"
                      aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="pdCollapse{{ $index }}">
                      {{ $faq['question'] ?? '' }}
                    </button>
                  </h2>
                  <div id="pdCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                    aria-labelledby="pdFaq{{ $index }}" data-bs-parent="#pdFaqAccordion">
                    <div class="accordion-body">
                      {{ $faq['answer'] ?? '' }}
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif

      {{-- ============================================================
      RELATED PRODUCTS
      ============================================================ --}}
      @if($related_products->count() > 0)
        <div class="pd-related pd-mt-32">
          <div class="pd-card">
            <div class="pd-card-inner">
              <div class="pd-related-head">
                <h3 class="pd-r-title">
                  <i class="fa-solid fa-arrow-right"></i> You May Also Like
                </h3>
                <a href="{{ route('products.index') }}" class="pd-r-link">
                  View All <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
              <div class="pd-related-grid">
                @foreach($related_products as $related)
                  <div class="pd-related-card">
                    <div class="pd-r-img">
                      <img
                        src="{{ $related->images->first() ? asset('storage/' . $related->images->first()->image_url) : asset('images/default.jpg') }}"
                        alt="{{ $related->name }}" loading="lazy">
                      @if(!empty($related->badge))
                        <span class="pd-r-badge">{{ $related->badge }}</span>
                      @endif
                    </div>
                    <span class="pd-r-cat">{{ $related->category->name ?? '' }}</span>
                    <a href="{{ route('product-detail', ['slug' => $related->slug]) }}" class="pd-r-name">
                      {{ $related->name }}
                    </a>
                    @php
                      $capacity = $related->specifications->first(function ($spec) {
                        return strtolower($spec->key) === 'capacity';
                      })->value ?? null;
                    @endphp
                    @if($capacity)
                      <div class="pd-r-meta">
                        <i class="fa-solid fa-weight-scale"></i> Capacity: {{ $capacity }}
                      </div>
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endif

    </div>
  </section>

@endsection

@push('scripts')
{{-- Slick Slider --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  $(document).ready(function () {
    const $main = $('.pd-main-slider');
    const $thumb = $('.pd-thumb-slider');

    $main.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      asNavFor: $thumb,
      infinite: true,
      speed: 400,
      responsive: [
        { breakpoint: 768, settings: { arrows: false } }
      ]
    });

    $thumb.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: $main,
      dots: false,
      arrows: false,
      focusOnSelect: true,
      infinite: true,
      speed: 300,
      responsive: [
        { breakpoint: 576, settings: { slidesToShow: 3 } },
        { breakpoint: 400, settings: { slidesToShow: 3 } }
      ]
    });
  });
</script>
@endpush
