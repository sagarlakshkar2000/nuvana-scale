@extends('layouts.app')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">About us</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- ABOUT SECTION START -->
  <section class="about-section py-40">
    <div class="container-fluid">
      <div class="row align-items-center row-gap-4">
        <div class="col-xl-6">
          <div class="about-content">
            <h2 class="mb-16 fw-600 black">Experts in High-Performance Nutrition</h2>
            <p class="mb-12">We are committed to providing high-performance nutrition that empowers athletes and fitness
              enthusiasts to reach
              their full potential. Our expert team carefully formulates each product using the latest research and
              highest-quality ingredients to ensure optimal results. Whether you’re pushing your limits at the gym or
              striving for
              peak endurance, our supplements are designed to enhance energy, accelerate recovery, and support muscle
              growth. We
              understand the demands of an active lifestyle, which is why we focus on delivering nutrition that fuels both
              your
              body and your goals. With Tangine, performance meets precision.</p>

            <p class="mb-32">We take pride in being experts in sports nutrition, offering tailored solutions for everyone
              from
              professional athletes to casual fitness lovers. Our products are tested for quality and effectiveness,
              ensuring that
              you get the best support for your training regimen.</p>

            <a href="contact.html" class="cus-btn-arrow">
              Contact Us
              <div class="icon">
                <i class="fa-light fa-chevron-right"></i>
              </div>
            </a>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="about-image-container">
            <img src="assets/media/about/about-image-1.png" alt="" class="w-100 br-10">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ABOUT SECTION END -->

  <x-why-choose-us />
  <x-our-certificate />

@endsection
