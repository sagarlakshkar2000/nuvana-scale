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

  <!-- Mission Section -->
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
              industries, and households
              with precision and performance.</p>
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
    /* Mission Card */
    .mission-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
      border: 1px solid #e9ecef;
    }

    /* Commitment Card */
    .commitment-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
      border: 1px solid #e9ecef;
      background-color: #fff;
    }

    .divider {
      width: 80px;
      height: 3px;
      background: var(--color-secondary);
      margin: 0 auto;
    }

    /* Badge styling */
    .badge {
      font-size: 0.875rem;
      letter-spacing: 1px;
    }

    /* Responsive adjustments */
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

      .mission-card,
      .commitment-card {
        padding: 2rem !important;
      }
    }
  </style>
@endpush
