@extends('layouts.app')

@section('title', 'Founder & CEO - Gargi Industries')

@push('styles')
  <style>
    /* ===== GOOGLE FONTS ===== */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap');

    /* ===== TITLE BANNER ===== */
    .title-banner {
      background: linear-gradient(160deg, #0a1628 0%, #1a2a4a 40%, #0f2847 100%);
      padding: 100px 0 80px;
      position: relative;
      overflow: hidden;
    }

    .title-banner::before {
      content: '';
      position: absolute;
      top: -30%;
      right: -10%;
      width: 700px;
      height: 700px;
      background: radial-gradient(circle, rgba(245, 179, 66, 0.08) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .title-banner::after {
      content: '';
      position: absolute;
      bottom: -30%;
      left: -5%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(255, 215, 120, 0.04) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .title-banner .gold-line {
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, #f5b342, #d4a030);
      margin: 0 auto 20px;
      border-radius: 2px;
      position: relative;
      z-index: 2;
    }

    .title-banner .gold-line::after {
      content: '';
      position: absolute;
      width: 40px;
      height: 3px;
      background: rgba(245, 179, 66, 0.3);
      top: 6px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 2px;
    }

    .title-banner h2 {
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      letter-spacing: 3px;
      text-shadow: 0 4px 40px rgba(0, 0, 0, 0.4);
      position: relative;
      z-index: 2;
      font-weight: 700;
      color: #fff;
    }

    .title-banner h2 .highlight {
      background: linear-gradient(135deg, #f5b342, #e8a838);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .title-banner .sub-title {
      font-family: 'Inter', sans-serif;
      color: rgba(255, 255, 255, 0.6);
      font-size: 1rem;
      letter-spacing: 6px;
      text-transform: uppercase;
      margin-top: 8px;
      position: relative;
      z-index: 2;
      font-weight: 300;
    }

    .title-banner .ornament {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      margin-top: 15px;
      position: relative;
      z-index: 2;
    }

    .title-banner .ornament span {
      display: inline-block;
      width: 6px;
      height: 6px;
      background: #f5b342;
      border-radius: 50%;
      opacity: 0.6;
    }

    .title-banner .ornament .line {
      width: 40px;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(245, 179, 66, 0.4), transparent);
    }

    /* ===== LEADERSHIP SECTION ===== */
    .leadership-section {
      padding: 100px 0 120px;
      background: #f8fafc;
      position: relative;
    }

    .leadership-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent 0%, rgba(245, 179, 66, 0.3) 50%, transparent 100%);
    }

    /* ===== LEADER ROW CARD ===== */
    .leader-row {
      background: #ffffff;
      border-radius: 40px;
      box-shadow: 0 20px 60px rgba(10, 22, 40, 0.06);
      transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: 1px solid rgba(245, 179, 66, 0.05);
      overflow: hidden;
      position: relative;
      margin-bottom: 50px;
    }

    .leader-row:last-child {
      margin-bottom: 0;
    }

    .leader-row::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, #f5b342, #d4a030, #f5b342);
      background-size: 200% 100%;
      opacity: 0;
      transition: opacity 0.6s ease;
      z-index: 5;
      animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {

      0%,
      100% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }
    }

    .leader-row:hover::before {
      opacity: 1;
    }

    .leader-row:hover {
      transform: translateY(-6px);
      box-shadow: 0 40px 80px rgba(10, 22, 40, 0.10);
      border-color: rgba(245, 179, 66, 0.12);
    }

    .leader-row .row {
      min-height: 100%;
    }

    /* ===== CONTENT SIDE ===== */
    .leader-content {
      padding: 55px 50px 55px 60px;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .leader-content .badge-role {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: linear-gradient(135deg, #f5b342, #e6a332);
      color: #0a1628;
      font-family: 'Inter', sans-serif;
      font-weight: 600;
      font-size: 0.65rem;
      letter-spacing: 2px;
      padding: 6px 22px 6px 20px;
      border-radius: 50px;
      text-transform: uppercase;
      margin-bottom: 16px;
      box-shadow: 0 4px 20px rgba(245, 179, 66, 0.25);
      align-self: flex-start;
      position: relative;
    }

    .leader-content .badge-role::after {
      content: '◆';
      font-size: 0.4rem;
      margin-left: 4px;
      color: rgba(10, 22, 40, 0.5);
    }

    .leader-content .name-wrapper {
      margin-bottom: 2px;
    }

    .leader-content h3 {
      font-family: 'Playfair Display', serif;
      font-size: 2.6rem;
      font-weight: 700;
      color: #0a1628;
      letter-spacing: -0.5px;
      line-height: 1.2;
    }

    .leader-content .designation {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      font-weight: 500;
      color: #f5b342;
      letter-spacing: 0.5px;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }

    .leader-content .designation::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 30px;
      height: 2px;
      background: linear-gradient(90deg, #f5b342, transparent);
    }

    .leader-content .bio-text {
      font-family: 'Inter', sans-serif;
      color: #4a5a6e;
      font-size: 0.95rem;
      line-height: 1.9;
      margin-bottom: 10px;
      font-weight: 400;
      letter-spacing: 0.2px;
    }

    .leader-content .bio-text:last-of-type {
      margin-bottom: 0;
    }

    .leader-content .quote-block {
      background: linear-gradient(135deg, #faf6ee 0%, #f5f0e8 100%);
      padding: 24px 32px;
      border-radius: 20px;
      border-left: 4px solid #f5b342;
      margin: 16px 0 18px;
      font-family: 'Playfair Display', serif;
      font-style: italic;
      color: #1a2e44;
      font-size: 1.05rem;
      line-height: 1.8;
      font-weight: 400;
      position: relative;
      box-shadow: 0 2px 20px rgba(245, 179, 66, 0.06);
    }

    .leader-content .quote-block::before {
      content: '\201C';
      font-size: 3.5rem;
      color: #f5b342;
      position: absolute;
      top: -12px;
      left: 14px;
      opacity: 0.15;
      font-family: 'Georgia', serif;
    }

    .leader-content .quote-block .quote-mark {
      font-size: 1.8rem;
      color: #f5b342;
      opacity: 0.4;
      font-family: 'Georgia', serif;
    }

    .leader-content .meta-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      border-top: 1px solid #eef2f8;
      padding-top: 24px;
      margin-top: 20px;
    }

    .leader-content .meta-footer .signature {
      font-family: 'Playfair Display', serif;
      font-size: 1.2rem;
      color: #0a1628;
      opacity: 0.7;
      letter-spacing: 0.5px;
      font-weight: 600;
      position: relative;
    }

    .leader-content .meta-footer .signature::before {
      content: '— ';
      color: #f5b342;
      opacity: 0.5;
    }

    .leader-content .meta-footer .badge-company {
      font-family: 'Inter', sans-serif;
      background: #0a1628;
      color: #fff;
      font-size: 0.6rem;
      font-weight: 600;
      padding: 6px 22px;
      border-radius: 50px;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      transition: all 0.4s ease;
      border: 1px solid transparent;
    }

    .leader-row:hover .meta-footer .badge-company {
      background: transparent;
      color: #f5b342;
      border-color: #f5b342;
    }

    /* ===== IMAGE SIDE ===== */
    .leader-image {
      height: 100%;
      min-height: 420px;
      position: relative;
      overflow: hidden;
      background: linear-gradient(145deg, #0a1628 0%, #162a44 60%, #1a2a4a 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px;
    }

    .leader-image .bg-blur-image {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: blur(2px) brightness(0.3);
      transform: scale(1.2);
      pointer-events: none;
      z-index: 0;
    }

    .leader-image .bg-pattern {
      position: absolute;
      inset: 0;
      opacity: 0.03;
      background-image:
        radial-gradient(circle at 20% 50%, #f5b342 1px, transparent 1px),
        radial-gradient(circle at 80% 80%, #f5b342 1px, transparent 1px);
      background-size: 60px 60px;
      pointer-events: none;
    }

    .leader-image .glow-ring {
      position: absolute;
      border-radius: 50%;
      pointer-events: none;
    }

    .leader-image .glow-ring.r1 {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(245, 179, 66, 0.06) 0%, transparent 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: pulse-glow 4s ease-in-out infinite;
    }

    .leader-image .glow-ring.r2 {
      width: 350px;
      height: 350px;
      background: radial-gradient(circle, rgba(245, 179, 66, 0.04) 0%, transparent 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: pulse-glow 4s ease-in-out infinite 1s;
    }

    @keyframes pulse-glow {

      0%,
      100% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.5;
      }

      50% {
        transform: translate(-50%, -50%) scale(1.1);
        opacity: 1;
      }
    }

    .leader-image .img-wrapper {
      width: 100%;
      max-width: 340px;
      aspect-ratio: 1/1;
      border-radius: 8px;
      overflow: hidden;
      border: 4px solid rgba(245, 179, 66, 0.3);
      padding: 6px;
      background: linear-gradient(135deg, rgba(245, 179, 66, 0.2), rgba(200, 150, 50, 0.1));
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4), inset 0 0 60px rgba(245, 179, 66, 0.05);
      transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      z-index: 2;
    }

    .leader-row:hover .leader-image .img-wrapper {
      transform: scale(1.02);
      border-color: #f5b342;
      box-shadow: 0 40px 100px rgba(245, 179, 66, 0.15), 0 0 80px rgba(245, 179, 66, 0.05);
    }

    .leader-image .img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
      background: #1a2a44;
      display: block;
      filter: grayscale(10%) contrast(1.02);
      transition: filter 0.6s ease;
    }

    .leader-row:hover .leader-image .img-wrapper img {
      filter: grayscale(0%) contrast(1.05);
    }

    .leader-image .img-wrapper .ring-pulse {
      position: absolute;
      inset: -8px;
      border-radius: 8px;
      border: 1px solid rgba(245, 179, 66, 0.15);
      animation: ring-pulse 3s ease-in-out infinite;
      pointer-events: none;
    }

    .leader-image .img-wrapper .ring-pulse:nth-child(2) {
      animation-delay: 1s;
      border-color: rgba(245, 179, 66, 0.08);
    }

    @keyframes ring-pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      100% {
        transform: scale(1.15);
        opacity: 0;
      }
    }

    /* ===== DECORATIVE CORNER ===== */
    .leader-image .corner-deco {
      position: absolute;
      width: 120px;
      height: 120px;
      border: 1px solid rgba(245, 179, 66, 0.06);
      pointer-events: none;
    }

    .leader-image .corner-deco.tl {
      top: 20px;
      left: 20px;
      border-right: none;
      border-bottom: none;
      border-radius: 4px 0 0 0;
    }

    .leader-image .corner-deco.br {
      bottom: 20px;
      right: 20px;
      border-left: none;
      border-top: none;
      border-radius: 0 0 4px 0;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
      .leader-content {
        padding: 45px 40px 45px 50px;
      }

      .leader-content h3 {
        font-size: 2.2rem;
      }

      .leader-image .img-wrapper {
        max-width: 280px;
      }
    }

    @media (max-width: 992px) {
      .leader-content {
        padding: 40px 35px 40px 40px;
      }

      .leader-content h3 {
        font-size: 2rem;
      }

      .leader-image .img-wrapper {
        max-width: 240px;
      }

      .title-banner h2 {
        font-size: 3.2rem;
      }
    }

    @media (max-width: 768px) {
      .title-banner {
        padding: 60px 0 50px;
      }

      .title-banner h2 {
        font-size: 2.5rem;
        letter-spacing: 2px;
      }

      .title-banner .sub-title {
        font-size: 0.8rem;
        letter-spacing: 4px;
      }

      .title-banner .gold-line {
        width: 60px;
      }

      .leadership-section {
        padding: 50px 0 70px;
      }

      .leader-row {
        border-radius: 28px;
        margin-bottom: 30px;
      }

      .leader-content {
        padding: 30px 25px 35px;
        order: 2;
      }

      .leader-content h3 {
        font-size: 1.8rem;
      }

      .leader-content .designation {
        font-size: 0.9rem;
      }

      .leader-content .quote-block {
        font-size: 0.95rem;
        padding: 18px 22px;
      }

      .leader-content .quote-block::before {
        font-size: 2.5rem;
        top: -6px;
        left: 10px;
      }

      .leader-content .bio-text {
        font-size: 0.9rem;
        line-height: 1.8;
      }

      .leader-content .meta-footer {
        flex-direction: column;
        align-items: center;
        gap: 14px;
        text-align: center;
      }

      .leader-content .meta-footer .signature {
        font-size: 1.05rem;
      }

      .leader-content .meta-footer .signature::before {
        content: '';
      }

      .leader-image {
        min-height: 280px;
        padding: 30px;
        order: 1;
        border-radius: 28px 28px 0 0;
      }

      .leader-image .img-wrapper {
        max-width: 180px;
        border-width: 3px;
        padding: 4px;
      }

      .leader-image .glow-ring.r1 {
        width: 300px;
        height: 300px;
      }

      .leader-image .glow-ring.r2 {
        width: 200px;
        height: 200px;
      }

      .leader-image .corner-deco {
        width: 60px;
        height: 60px;
      }

      .leader-image .corner-deco.tl {
        top: 12px;
        left: 12px;
      }

      .leader-image .corner-deco.br {
        bottom: 12px;
        right: 12px;
      }
    }

    @media (max-width: 576px) {
      .title-banner h2 {
        font-size: 2rem;
      }

      .title-banner .ornament .line {
        width: 20px;
      }

      .leader-image {
        min-height: 220px;
        padding: 20px;
      }

      .leader-image .img-wrapper {
        max-width: 140px;
        border-width: 3px;
        padding: 3px;
      }

      .leader-content {
        padding: 25px 18px 30px;
      }

      .leader-content h3 {
        font-size: 1.5rem;
      }

      .leader-content .badge-role {
        font-size: 0.55rem;
        padding: 5px 16px 5px 14px;
      }

      .leader-content .designation {
        font-size: 0.8rem;
      }

      .leader-content .bio-text {
        font-size: 0.85rem;
      }

      .leader-content .quote-block {
        font-size: 0.85rem;
        padding: 14px 18px;
        border-left-width: 3px;
      }

      .leader-content .quote-block::before {
        font-size: 2rem;
        top: -4px;
        left: 8px;
      }

      .leader-content .meta-footer .badge-company {
        font-size: 0.5rem;
        padding: 4px 16px;
      }

      .leader-image .glow-ring {
        display: none;
      }
    }

    /* ===== UTILITY ===== */
    .fw-600 {
      font-weight: 600;
    }

    .fw-700 {
      font-weight: 700;
    }

    .white {
      color: #ffffff;
    }

    .text-center {
      text-align: center;
    }

    /* ===== SCROLL ANIMATIONS ===== */
    .leader-row {
      opacity: 0;
      animation: fadeUp 0.8s ease forwards;
    }

    .leader-row:first-child {
      animation-delay: 0.1s;
    }

    .leader-row:last-child {
      animation-delay: 0.3s;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
@endpush

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <div class="gold-line"></div>
      <h2 class="text-center">
        <span class="highlight">Founder</span> &amp; <span class="highlight">CEO</span>
      </h2>
      <p class="sub-title text-center">Leadership &amp; Vision</p>
      <div class="ornament">
        <span class="line"></span>
        <span></span>
        <span class="line"></span>
      </div>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- LEADERSHIP SECTION START -->
  <section class="leadership-section">
    <div class="container">

      {{-- FOUNDER ROW --}}
      <div class="leader-row">
        <div class="row g-0">

          {{-- Content - Left --}}
          <div class="col-lg-7 col-md-7 order-2 order-md-1">
            <div class="leader-content">
              <span class="badge-role">Founder</span>
              <div class="name-wrapper">
                <h3>Mr. Deepak Singh</h3>
              </div>
              <div class="designation">Founder &amp; Managing Director</div>

              <p class="bio-text">
                Mr. Deepak Singh, Founder of Gargi Industries, has established a strong reputation in the weighing
                industry
                through his unwavering commitment to quality, innovation, and customer satisfaction.
              </p>
              <p class="bio-text">
                What started as a vision to deliver reliable and technologically advanced weighing solutions has today
                evolved into a trusted brand serving businesses across multiple sectors. Under his leadership, Gargi
                Industries has consistently focused on providing accurate, durable, and cost-effective weighing systems
                that
                meet the ever-changing demands of the market.
              </p>
              <p class="bio-text">
                As a passionate technocrat and industry professional, Mr. Sharma firmly believes that precision is the
                foundation of every successful business operation. His deep understanding of weighing technology, combined
                with a customer-centric approach, has enabled the company to develop solutions that offer both performance
                and long-term reliability.
              </p>
              <p class="bio-text">
                Over the years, Gargi Industries has earned the trust of customers by maintaining high manufacturing
                standards, ensuring product quality, and delivering exceptional after-sales support. This dedication has
                helped the company build lasting relationships with clients across retail, industrial, logistics,
                agriculture, and commercial sectors.
              </p>
              <p class="bio-text">
                Today, the company continues to move forward with a clear mission:
              </p>

              <div class="quote-block">
                "To provide innovative, accurate, and dependable weighing solutions that empower businesses to grow with
                confidence."
              </div>

              <p class="bio-text">
                With a focus on continuous improvement, advanced technology, and customer satisfaction, Mr. Deepak Singh
                remains committed to leading Gargi Industries towards a future of excellence and innovation in the
                weighing
                industry.
              </p>

              <div class="meta-footer">
                <span class="signature">Mr. Deepak Singh</span>
                <span class="badge-company">Gargi Industries (NUVANA)</span>
              </div>
            </div>
          </div>

          {{-- Image - Right --}}
          <div class="col-lg-5 col-md-5 order-1 order-md-2">
            <div class="leader-image">
              <img src="{{ asset('assets/media/images/founder-deepak-singh.jpeg') }}" class="bg-blur-image" alt="">
              <div class="bg-pattern"></div>
              <div class="glow-ring r1"></div>
              <div class="glow-ring r2"></div>
              <div class="corner-deco tl"></div>
              <div class="corner-deco br"></div>
              <div class="img-wrapper">
                <div class="ring-pulse"></div>
                <div class="ring-pulse"></div>
                <img src="{{ asset('assets/media/images/founder-deepak-singh.jpeg') }}" alt="Mr. Deepak Singh - Founder"
                  loading="lazy">
              </div>
            </div>
          </div>

        </div>
      </div>

      {{-- CEO ROW --}}
      <div class="leader-row">
        <div class="row g-0">

          {{-- Content - Left --}}
          <div class="col-lg-7 col-md-7 order-2 order-md-1">
            <div class="leader-content">
              <span class="badge-role">CEO</span>
              <div class="name-wrapper">
                <h3>Mrs. Shalu Sengar</h3>
              </div>
              <div class="designation">Chief Executive Officer (CEO)</div>

              <p class="bio-text">
                At Gargi Industries, our journey has always been driven by a simple philosophy — delivering excellence
                through innovation, precision, and customer satisfaction.
              </p>
              <p class="bio-text">
                As the CEO of Gargi Industries, I am proud to lead a team that is committed to providing reliable and
                high-quality weighing solutions for businesses across diverse industries. In today's rapidly evolving
                market, accuracy and efficiency are essential, and we strive to ensure that every product we deliver meets
                the highest standards of performance and durability.
              </p>
              <p class="bio-text">
                Our success is built on the trust of our customers, partners, and employees. Their confidence inspires us
                to
                continuously improve, embrace new technologies, and develop solutions that create real value for our
                clients.
              </p>
              <p class="bio-text">
                We believe that long-term relationships are founded on transparency, quality, and exceptional service.
                With
                this vision, Gargi Industries continues to expand its capabilities while maintaining the core values that
                define our organization.
              </p>
              <p class="bio-text">
                I sincerely thank our customers, business associates, and dedicated team members for being an integral
                part
                of our journey. Together, we will continue to achieve new milestones and build a stronger future.
              </p>

              <div class="meta-footer">
                <span class="signature">Mrs. Shalu Sengar</span>
                <span class="badge-company">Gargi Industries</span>
              </div>
            </div>
          </div>

          {{-- Image - Right --}}
          <div class="col-lg-5 col-md-5 order-1 order-md-2">
            <div class="leader-image">
              <img src="{{ asset('assets/media/images/ceo-shalu-sengar.jpeg') }}" class="bg-blur-image" alt="">
              <div class="bg-pattern"></div>
              <div class="glow-ring r1"></div>
              <div class="glow-ring r2"></div>
              <div class="corner-deco tl"></div>
              <div class="corner-deco br"></div>
              <div class="img-wrapper">
                <div class="ring-pulse"></div>
                <div class="ring-pulse"></div>
                <img src="{{ asset('assets/media/images/ceo-shalu-sengar.jpeg') }}" alt="Mrs. Shalu Sengar - CEO"
                  loading="lazy">
              </div>
            </div>
          </div>

        </div>
      </div>

      {{-- Bottom trust line --}}
      <div class="row mt-5">
        <div class="col-12 text-center">
          <div
            style="display: flex; align-items: center; justify-content: center; gap: 16px; padding-top: 40px; border-top: 1px solid #eef2f8; max-width: 600px; margin: 0 auto;">
            <span style="display: inline-block; width: 4px; height: 4px; background: #f5b342; border-radius: 50%;"></span>
            <span
              style="font-family: 'Inter', sans-serif; font-size: 0.8rem; letter-spacing: 1px; color: #8a9aa8; text-transform: uppercase; font-weight: 400;">
              Built on trust, driven by innovation
            </span>
            <span style="display: inline-block; width: 4px; height: 4px; background: #f5b342; border-radius: 50%;"></span>
          </div>
          <p
            style="font-family: 'Playfair Display', serif; font-size: 0.9rem; color: #b8c4d0; margin-top: 6px; letter-spacing: 2px;">
            Gargi Industries (NUVANA)
          </p>
        </div>
      </div>

    </div>
  </section>
  <!-- LEADERSHIP SECTION END -->

@endsection
