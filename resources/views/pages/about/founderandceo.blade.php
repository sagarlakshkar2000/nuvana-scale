@extends('layouts.app')

@section('title', 'Vision & Mission - Gargi Industries')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">Vision & Mission</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- Mission & Vision Section -->
  <section class="mission-vision-section py-5 overflow-hidden">
    <div class="container py-4">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill fw-semibold mb-3">
          <i class="fas fa-bullseye me-2"></i>Our Purpose
        </span>
        <h2 class="display-4 fw-bold mb-3">Mission &amp; Vision</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 650px;">
          Driving precision and innovation in weighing solutions across industries
        </p>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <div class="card border-0 h-100 shadow-sm hover-lift"
            style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 20px;">
            <div class="card-body p-4 p-lg-5">
              <div class="icon-wrapper mb-4">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3" style="width: 70px; height: 70px;">
                  <i class="fas fa-rocket text-primary fs-2 m-auto"></i>
                </div>
              </div>
              <h3 class="card-title fw-bold mb-3">Our Mission</h3>
              <p class="card-text text-muted fs-5" style="line-height: 1.8;">
                To design and manufacture high-quality weighing solutions that deliver
                <span class="text-primary fw-semibold">accuracy</span>,
                <span class="text-primary fw-semibold">reliability</span>, and
                <span class="text-primary fw-semibold">value</span> to businesses across industries.
              </p>
              <p class="card-text text-muted mt-3">
                We are committed to innovation, customer satisfaction, and continuous improvement,
                ensuring every product meets the highest standards of performance and durability.
              </p>
              <div class="mt-4">
                <span class="badge bg-light text-dark px-3 py-2 me-2 mb-2">
                  <i class="fas fa-check-circle text-success me-1"></i> Innovation
                </span>
                <span class="badge bg-light text-dark px-3 py-2 me-2 mb-2">
                  <i class="fas fa-check-circle text-success me-1"></i> Quality
                </span>
                <span class="badge bg-light text-dark px-3 py-2 mb-2">
                  <i class="fas fa-check-circle text-success me-1"></i> Customer Focus
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="card border-0 h-100 shadow-sm hover-lift"
            style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 20px;">
            <div class="card-body p-4 p-lg-5">
              <div class="icon-wrapper mb-4">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3" style="width: 70px; height: 70px;">
                  <i class="fas fa-eye text-primary fs-2 m-auto"></i>
                </div>
              </div>
              <h3 class="card-title fw-bold mb-3">Our Vision</h3>
              <blockquote class="fs-4 fw-semibold text-primary mb-4" style="line-height: 1.4;">
                "Revolutionizing weighing solutions through cutting-edge technology, uncompromising accuracy, and
                exceptional customer service."
              </blockquote>
              <p class="card-text text-muted fs-5" style="line-height: 1.8;">
                At <strong class="text-dark">NUVANA</strong>, our vision is to make
                <span class="text-primary fw-semibold">every measurement count</span> —
                transforming industries through precision, innovation, and trust.
              </p>
              <div class="mt-4 pt-2">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning me-1"></i>
                    <i class="fas fa-star text-warning"></i>
                  </div>
                  <span class="text-muted small">Industry Leading Precision</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOUNDER & CEO SECTION -->
  <section class="founder-ceo-section py-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge bg-dark bg-opacity-10 text-dark px-4 py-2 rounded-pill fw-semibold mb-3">
          <i class="fas fa-users me-2"></i>Leadership
        </span>
        <h2 class="display-4 fw-bold mb-3">Founder &amp; CEO</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
          The visionaries behind Gargi Industries — driving excellence, innovation, and trust.
        </p>
      </div>

      <div class="row g-5">
        <!-- Founder Card -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <div class="card border-0 shadow-lg hover-lift h-100"
            style="border-radius: 28px; overflow: hidden; background: #ffffff;">
            <div class="card-body p-4 p-lg-5 position-relative">
              <div class="position-absolute top-0 end-0 mt-4 me-4 opacity-10">
                <i class="fas fa-quote-right fa-3x text-primary" style="opacity: 0.08;"></i>
              </div>
              <div class="d-flex align-items-center mb-4">
                <div
                  class="avatar-lg bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                  style="width: 80px; height: 80px; flex-shrink: 0;">
                  <i class="fas fa-user-tie text-primary fs-1"></i>
                </div>
                <div class="ms-3">
                  <h3 class="fw-bold mb-0">Mr. Deepak Singh</h3>
                  <p class="text-primary fw-semibold mb-0"><i class="fas fa-medal me-1"></i> Founder & Managing Director
                  </p>
                </div>
              </div>

              <div class="founder-content">
                <p class="text-muted" style="line-height: 1.8;">
                  <span class="fw-semibold text-dark">Mr. Deepak Singh</span>, Founder of Gargi Industries, has
                  established a strong reputation in the weighing industry through his unwavering commitment to quality,
                  innovation, and customer satisfaction.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  What started as a vision to deliver reliable and technologically advanced weighing solutions has today
                  evolved into a trusted brand serving businesses across multiple sectors. Under his leadership, Gargi
                  Industries has consistently focused on providing accurate, durable, and cost-effective weighing systems
                  that meet the ever-changing demands of the market.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  As a passionate technocrat and industry professional, Mr. Singh firmly believes that precision is the
                  foundation of every successful business operation. His deep understanding of weighing technology,
                  combined with a customer-centric approach, has enabled the company to develop solutions that offer both
                  performance and long-term reliability.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  Over the years, Gargi Industries has earned the trust of customers by maintaining high manufacturing
                  standards, ensuring product quality, and delivering exceptional after-sales support. This dedication has
                  helped the company build lasting relationships with clients across retail, industrial, logistics,
                  agriculture, and commercial sectors.
                </p>
              </div>

              <div class="mt-4 p-3 bg-light rounded-4" style="border-left: 4px solid #0d6efd;">
                <p class="fw-semibold text-dark mb-1"><i class="fas fa-quote-left text-primary me-2"></i>Our Mission</p>
                <p class="text-muted mb-0 fst-italic">"To provide innovative, accurate, and dependable weighing solutions
                  that empower businesses to grow with confidence."</p>
              </div>

              <div class="mt-4 d-flex flex-wrap gap-2">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">Visionary</span>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">Technocrat</span>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">Customer-Centric</span>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">Industry Expert</span>
              </div>

              <div class="mt-3 pt-2 border-top">
                <p class="text-muted small mb-0">
                  <i class="fas fa-calendar-alt me-1"></i> Founded Gargi Industries with a vision for precision weighing
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- CEO Card -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="card border-0 shadow-lg hover-lift h-100"
            style="border-radius: 28px; overflow: hidden; background: #ffffff;">
            <div class="card-body p-4 p-lg-5 position-relative">
              <div class="position-absolute top-0 end-0 mt-4 me-4 opacity-10">
                <i class="fas fa-quote-right fa-3x text-secondary" style="opacity: 0.08;"></i>
              </div>
              <div class="d-flex align-items-center mb-4">
                <div
                  class="avatar-lg bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                  style="width: 80px; height: 80px; flex-shrink: 0;">
                  <i class="fas fa-user-circle text-secondary fs-1"></i>
                </div>
                <div class="ms-3">
                  <h3 class="fw-bold mb-0">Mrs. Shalu Sengar</h3>
                  <p class="text-secondary fw-semibold mb-0"><i class="fas fa-crown me-1"></i> Chief Executive Officer</p>
                </div>
              </div>

              <div class="ceo-content">
                <p class="text-muted" style="line-height: 1.8;">
                  At Gargi Industries, our journey has always been driven by a simple philosophy — delivering excellence
                  through innovation, precision, and customer satisfaction.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  As the <span class="fw-semibold text-dark">CEO of Gargi Industries</span>, I am proud to lead a team
                  that is committed to providing reliable and high-quality weighing solutions for businesses across
                  diverse industries. In today's rapidly evolving market, accuracy and efficiency are essential, and we
                  strive to ensure that every product we deliver meets the highest standards of performance and
                  durability.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  Our success is built on the trust of our customers, partners, and employees. Their confidence inspires
                  us to continuously improve, embrace new technologies, and develop solutions that create real value for
                  our clients.
                </p>
                <p class="text-muted" style="line-height: 1.8;">
                  We believe that long-term relationships are founded on transparency, quality, and exceptional service.
                  With this vision, Gargi Industries continues to expand its capabilities while maintaining the core
                  values that define our organization.
                </p>
              </div>

              <div class="mt-4 p-3 bg-light rounded-4" style="border-left: 4px solid #6c757d;">
                <p class="fw-semibold text-dark mb-1"><i class="fas fa-quote-left text-secondary me-2"></i>Our Commitment
                </p>
                <p class="text-muted mb-0 fst-italic">"We believe that long-term relationships are founded on
                  transparency, quality, and exceptional service."</p>
              </div>

              <div class="mt-4 d-flex flex-wrap gap-2">
                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2">Innovator</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2">Customer First</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2">Visionary Leader</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2">Strategic Thinker</span>
              </div>

              <div class="mt-3 pt-2 border-top">
                <p class="text-muted small mb-0">
                  <i class="fas fa-gem me-1"></i> Leading Gargi Industries towards excellence and innovation
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Leadership Quote -->
      <div class="row mt-5" data-aos="zoom-in-up" data-aos-delay="150">
        <div class="col-12">
          <div class="bg-dark text-white p-5 rounded-5 text-center"
            style="background: linear-gradient(135deg, #0b1c2f 0%, #1a2f44 100%);">
            <i class="fas fa-handshake fa-2x mb-3 opacity-75"></i>
            <h4 class="fw-light mb-3" style="letter-spacing: 0.5px;">
              <span class="fw-bold">“</span> Together, we will continue to achieve new milestones and build a stronger
              future. <span class="fw-bold">”</span>
            </h4>
            <p class="mb-0 opacity-75 small">— Mrs. Shalu Sengar, CEO, Gargi Industries</p>
            <div class="mt-3">
              <span class="badge bg-light text-dark bg-opacity-10 px-3 py-2">Trust</span>
              <span class="badge bg-light text-dark bg-opacity-10 px-3 py-2">Innovation</span>
              <span class="badge bg-light text-dark bg-opacity-10 px-3 py-2">Excellence</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Commitment Section -->
  <section class="commitment-section py-5 bg-light" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="commitment-card p-5 text-center"
            style="border-top: 5px solid #000000; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
            <i class="fas fa-handshake fa-3x mb-4" style="color: #000000;"></i>
            <h2 class="display-6 fw-bold mb-4">Our Commitment</h2>
            <p class="lead mb-4">At Gargi Industries, we believe in building long-term relationships through quality,
              honesty, and service excellence. Our goal is to become a preferred brand in the weighing scale industry by
              delivering products that customers can trust every day.</p>
            <p class="lead mb-4">We are dedicated to offering reliable digital weighing solutions that support businesses,
              industries, and households with precision and performance.</p>
            <div class="divider my-4"></div>
            <h4 class="fw-bold mb-0" style="color: #000000;">Accurate Weighing. Trusted Quality. Reliable
              Performance.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('styles')
  <style>
    /* base */
    .white {
      color: #fff;
    }

    .fw-600 {
      font-weight: 600;
    }

    /* title banner */
    .title-banner {
      background: linear-gradient(135deg, #0b1c2f 0%, #1a2f44 100%);
      padding: 4.5rem 0;
      position: relative;
      overflow: hidden;
    }

    .title-banner::after {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(255, 215, 0, 0.04) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .title-banner h2 {
      font-size: 3.2rem;
      letter-spacing: -0.5px;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      position: relative;
      z-index: 2;
    }

    /* hover lift */
    .hover-lift {
      transition: transform 0.35s cubic-bezier(0.2, 0, 0, 1), box-shadow 0.4s ease;
    }

    .hover-lift:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.20) !important;
    }

    .commitment-card {
      background: #ffffff;
      border-radius: 40px;
      border: 1px solid #eef2f6;
    }

    .divider {
      width: 80px;
      height: 3px;
      background: #000000;
      margin: 0 auto;
    }

    .badge.bg-light {
      background: #f0f3f8 !important;
      color: #1e2b3c !important;
      border: 1px solid #e2e8f0;
      font-weight: 500;
    }

    /* avatar */
    .avatar-lg {
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* responsive */
    @media (max-width: 768px) {
      .display-4 {
        font-size: 2rem;
      }

      .display-6 {
        font-size: 1.75rem;
      }

      .lead {
        font-size: 1rem;
      }

      .title-banner h2 {
        font-size: 2.2rem;
      }

      .commitment-card {
        padding: 2rem !important;
      }

      .founder-content p,
      .ceo-content p {
        font-size: 0.95rem;
      }
    }
  </style>
@endpush
