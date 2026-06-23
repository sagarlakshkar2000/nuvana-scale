@extends('layouts.app')

@section('title', 'Founder Story - Gargi Industries')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">Founder Story</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- STORY SECTION START -->
  <section class="story-section py-5 my-5" data-aos="fade-in" data-aos-duration="1000">
    <div class="container">
      <div class="row align-items-center row-gap-4">
        <div class="col-xl-6" data-aos="fade-right">
          <div class="about-image-container position-relative">
             <img src="{{ asset('assets/media/about/about-image-1.jpeg') }}" alt="Founder" class="w-100 br-10 position-relative z-1 shadow-lg" style="border-radius: 16px;">
          </div>
        </div>
        <div class="col-xl-6" data-aos="fade-left">
          <div class="story-content ps-xl-4">
            <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill fw-semibold mb-3">
              <i class="fas fa-book-open me-2"></i>Our History
            </span>
            <h2 class="mb-4 fw-bold black display-6">Our Journey</h2>
            <p class="mb-3 fs-5" style="line-height: 1.8;"><strong>Gargi Industries</strong> was founded with a clear vision: to revolutionize the weighing scale industry by providing precision, durability, and innovation. What started as a small manufacturing unit has now grown into a trusted name across India and international markets.</p>

            <p class="mb-4 fs-5 text-muted" style="line-height: 1.8;">Our founder believed that every measurement counts. With years of dedication and a commitment to uncompromising quality, we have built a legacy of trust. Today, our products serve a diverse range of industries, from retail and household to heavy-duty industrial applications.</p>
            
            <div class="mt-4 pt-2">
              <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                  <i class="fas fa-check"></i>
                </div>
                <h5 class="mb-0 fw-bold">Years of Trust & Excellence</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- STORY SECTION END -->

@endsection

@push('styles')
@endpush
