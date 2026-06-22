@extends('layouts.app')

@section('title', 'About Us - Gargi Industries')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">About us</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- ABOUT SECTION START -->
  <section class="about-section py-40" data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
      <div class="row align-items-center row-gap-4">
        <div class="col-xl-6" data-aos="fade-right">
          <div class="about-content">
            <h2 class="mb-16 fw-600 black">Trusted Digital Weighing Scale
              Manufacturer & Supplier</h2>
            <p class="mb-12"><strong>Gargi Industries</strong> is a trusted name in the field of <strong>weighing
                scale</strong> solutions,
              delivering
              high-quality and accurate weighing machines across India and international markets. With years of industry
              experience and a strong commitment to quality, we provide reliable weighing solutions for commercial,
              industrial, and household use.</p>

            <p class="mb-32">We specialize in manufacturing and supplying a wide range of digital weighing machines
              designed with advanced technology, durability, and precision. Our products are widely used in retail shops,
              supermarkets, warehouses, kitchens, factories, and various industrial sectors where accurate measurement is
              essential.</p>
          </div>
        </div>
        <div class="col-xl-6" data-aos="fade-left">
          <div class="about-image-container position-relative">
            <img src="{{ asset('assets/media/about/about-image-1.jpeg') }}" alt=""
              class="w-100 br-10 position-relative z-1">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ABOUT SECTION END -->

  <!-- Product Range Section -->
  <section class="product-range-section py-5" data-aos="fade-up">
    <div class="container">
      <div class="text-center mb-5 position-relative">
        <div class="d-inline-block position-relative mb-2">
          <h2 class="display-6 fw-bold mb-0 position-relative z-1">Our Product Range</h2>
          <svg class="position-absolute z-0"
            style="bottom: 0px; left: 0; width: 100%; height: 12px; pointer-events: none;" viewBox="0 0 100 12"
            preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 9.5C25 -1.83333 75 -3.1 98 9.5" stroke="var(--color-secondary)" stroke-width="4"
              stroke-linecap="round" fill="none" opacity="0.5" />
          </svg>
        </div>
        <p class="lead text-muted mt-3">We offer a complete range of digital weighing solutions, including</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="0">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-utensils fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0">Digital Kitchen Weighing Scales</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-weight-hanging fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0">Platform Weighing Machines</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-cash-register fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0"> Counter Weighing Scales</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-chart-line fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0">Commercial Weighing Scales</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-industry fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0">Industrial Weighing Machines</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="500">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-table fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0">Table Top Weighing Scales</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="600">
          <div class="product-card text-center p-4 h-100">
            <div class="icon-box mb-3">
              <i class="fas fa-truck fa-2x" style="color: var(--color-primary);"></i>
            </div>
            <h5 class="fw-bold mb-0"> Heavy Duty Weighing Systems</h5>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <div class="alert alert-light border rounded-3 p-4">
          <p class="mb-0 fs-5">Our weighing machines are known for their accuracy, user-friendly operation, long-lasting
            performance, and modern design.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <!-- ============================================
                        MISSION & VISION SECTION
                        ============================================ -->

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

  <!-- Why Choose Us Section -->
  <section class="why-choose-section py-5">
    <div class="container">
      <div class="text-center mb-5 position-relative" data-aos="fade-up">
        <div class="d-inline-block position-relative mb-2">
          <h2 class="display-6 fw-bold mb-0 position-relative z-1">Why Choose Gargi Industries?</h2>
          <svg class="position-absolute z-0"
            style="bottom: 0px; left: 0; width: 100%; height: 12px; pointer-events: none;" viewBox="0 0 100 12"
            preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 9.5C25 -1.83333 75 -3.1 98 9.5" stroke="var(--color-secondary)" stroke-width="4"
              stroke-linecap="round" fill="none" opacity="0.5" />
          </svg>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
          <div class="feature-card p-4 h-100">
            <div class="feature-icon mb-3">
              <i class="fas fa-trophy fa-2x" style="color: var(--color-secondary);"></i>
            </div>
            <h4 class="fw-bold mb-3">High Quality Products</h4>
            <p class="text-muted mb-0">We use premium components and advanced manufacturing techniques to ensure every
              weighing machine meets high industry standards.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card p-4 h-100">
            <div class="feature-icon mb-3">
              <i class="fas fa-chart-line fa-2x" style="color: var(--color-secondary);"></i>
            </div>
            <h4 class="fw-bold mb-3">Precision & Accuracy</h4>
            <p class="text-muted mb-0">Our digital weighing scales are designed to provide precise and reliable
              measurement results for daily commercial and
              industrial use.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card p-4 h-100">
            <div class="feature-icon mb-3">
              <i class="fas fa-globe fa-2x" style="color: var(--color-secondary);"></i>
            </div>
            <h4 class="fw-bold mb-3">Wide Market Reach</h4>
            <p class="text-muted mb-0">We proudly supply our products across India and also serve international clients
              with dependable weighing solutions.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card p-4 h-100">
            <div class="feature-icon mb-3">
              <i class="fas fa-smile fa-2x" style="color: var(--color-secondary);"></i>
            </div>
            <h4 class="fw-bold mb-3">Customer Satisfaction</h4>
            <p class="text-muted mb-0">Customer trust and satisfaction are the foundation of our business. We focus on
              delivering quality products, timely service, and long-term support.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card p-4 h-100">
            <div class="feature-icon mb-3">
              <i class="fas fa-microchip fa-2x" style="color: var(--color-secondary);"></i>
            </div>
            <h4 class="fw-bold mb-3">Advanced Technology</h4>
            <p class="text-muted mb-0">We continuously upgrade our products with the latest technology to improve
              efficiency, durability, and performance.</p>
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

  <section class="mission-vision-section py-5 overflow-hidden">
    <div class="container py-4">

      {{-- ============================================
      CORE VALUES
      ============================================ --}}
      <div class="mt-5 pt-3">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="badge bg-success bg-opacity-10 text-success px-4 py-2 rounded-pill fw-semibold mb-3">
            <i class="fas fa-gem me-2"></i>Core Values
          </span>
          <h2 class="display-5 fw-bold mb-3">What Drives Us</h2>
          <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
            The principles that guide everything we do
          </p>
        </div>

        {{-- Values Grid --}}
        <div class="row g-4">

          {{-- Value 1: Accuracy --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3"
                    style="width: 64px; height: 64px;">
                    <i class="fas fa-bullseye text-primary fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Accuracy</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  Every measurement matters. Precision and consistency are at the heart of everything we manufacture.
                </p>
              </div>
            </div>
          </div>

          {{-- Value 2: Quality --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex p-3"
                    style="width: 64px; height: 64px;">
                    <i class="fas fa-award text-success fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Quality</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  We maintain strict quality standards to deliver durable, reliable, and high-performing products.
                </p>
              </div>
            </div>
          </div>

          {{-- Value 3: Innovation --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex p-3" style="width: 64px; height: 64px;">
                    <i class="fas fa-lightbulb text-info fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Innovation</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  We continuously improve our technology and products to meet the evolving needs of our customers.
                </p>
              </div>
            </div>
          </div>

          {{-- Value 4: Customer Commitment --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex p-3"
                    style="width: 64px; height: 64px;">
                    <i class="fas fa-handshake text-warning fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Customer Commitment</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  Our customers are our priority. We provide exceptional service, support, and long-term value.
                </p>
              </div>
            </div>
          </div>

          {{-- Value 5: Integrity --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex p-3"
                    style="width: 64px; height: 64px;">
                    <i class="fas fa-shield-alt text-danger fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Integrity</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  We conduct our business with honesty, transparency, and professionalism in every relationship.
                </p>
              </div>
            </div>
          </div>

          {{-- Value 6: Excellence --}}
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="value-card card border-0 h-100 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; transition: all 0.3s ease;">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-purple bg-opacity-10 d-inline-flex p-3"
                    style="width: 64px; height: 64px;">
                    <i class="fas fa-medal text-purple fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Excellence</h4>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                  We pursue excellence in manufacturing, service, and operations to exceed customer expectations.
                </p>
              </div>
            </div>
          </div>

        </div>

        {{-- Value 7: Reliability (Full Width) --}}
        <div class="row mt-4 justify-content-center" data-aos="fade-up" data-aos-delay="350">
          <div class="col-lg-6 col-md-8">
            <div class="value-card card border-0 text-center p-4 shadow-sm hover-lift"
              style="border-radius: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
              <div class="card-body">
                <div class="value-icon mx-auto mb-3">
                  <div class="rounded-circle bg-dark bg-opacity-10 d-inline-flex p-3" style="width: 64px; height: 64px;">
                    <i class="fas fa-check-double text-dark fs-3 m-auto"></i>
                  </div>
                </div>
                <h4 class="fw-bold mb-2">Reliability</h4>
                <p class="text-muted mb-0" style="font-size: 1rem; line-height: 1.7; max-width: 500px; margin: 0 auto;">
                  We build products that businesses can trust every day for accurate and dependable performance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Bottom CTA --}}
      <div class="text-center mt-5 pt-4" data-aos="fade-up" data-aos-delay="400">
        <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg">
          <i class="fas fa-arrow-right me-2"></i>Discover Our Solutions
        </a>
      </div>

    </div>
  </section>

@endsection

@push('styles')
  <style>
    /* Product Cards */
    .product-card {
      background: white;
      border-radius: 16px;
      transition: all 0.3s ease;
      border: 1px solid #e9ecef;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border-color: transparent;
    }

    .product-card .icon-box {
      width: 60px;
      height: 60px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8f9fa;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .product-card:hover .icon-box {
      background: var(--color-primary);
    }

    .product-card:hover .icon-box i {
      color: white !important;
    }

    /* Feature Cards */
    .feature-card {
      background: white;
      border-radius: 16px;
      transition: all 0.3s ease;
      border: 1px solid #e9ecef;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      border-color: var(--color-primary);
    }

    .feature-icon {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--color-primary-light);
      border-radius: 10px;
    }

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
    }

    .divider {
      width: 80px;
      height: 3px;
      background: var(--color-secondary);
      margin: 0 auto;
    }

    /* Stat Cards */
    .stat-card {
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      transform: scale(1.05);
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

      .product-card,
      .feature-card {
        padding: 1.5rem !important;
      }

      .mission-card,
      .commitment-card {
        padding: 2rem !important;
      }
    }
  </style>
@endpush
