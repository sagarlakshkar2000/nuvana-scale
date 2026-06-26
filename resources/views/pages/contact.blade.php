@extends('layouts.app')

@section('title', 'Contact Us - Gargi Industries')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">Contact Us</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- CONTACT SECTION START -->
  <section class="contact-section py-5">
    <div class="container">
      <!-- Get In Touch Section -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
          <h4 class="fw-600 mb-3" style="color: #212529; font-size: 1.75rem;">Get In Touch with Gargi Industries</h4>
          <p class="mb-3">We are here to help you with all your weighing scale requirements. Whether you need product
            information, pricing details, bulk orders, dealership inquiries, or technical support, our team is ready to
            assist you.</p>
          <p class="mb-0">At Gargi Industries, we believe in providing quick responses, reliable support, and complete
            customer satisfaction.</p>
        </div>
      </div>

      <!-- Contact Information Row -->
      <div class="row g-4 mb-5">
        <!-- Office Address Card -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
              <div class="d-flex mb-3">
                <div class="me-3">
                  <i class="fas fa-building fa-2x" style="color: #212529;"></i>
                </div>
                <div>
                  <h5 class="fw-600 mb-2" style="color: #212529;">Office Address</h5>
                  @php
                    $companyName = !empty($general_setting->company_name) ? $general_setting->company_name : 'Gargi Industries';
                    $officeAddress = !empty($general_setting->office_address) ? $general_setting->office_address : 'E-43, Garden City Beelwa, Sanganer, Jaipur - 302022';
                  @endphp
                  <p class="mb-0 text-muted">{{ $companyName }}</p>
                  <p class="mb-0 text-muted">Address: {{ $officeAddress }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Details Card -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
              <div class="d-flex mb-3">
                <div class="me-3">
                  <i class="fas fa-envelope fa-2x" style="color: #212529;"></i>
                </div>
                <div>
                  <h5 class="fw-600 mb-2" style="color: #212529;">Email & Hours</h5>
                  @php $emailValue = !empty($general_setting->emails[0]['value']) ? $general_setting->emails[0]['value'] : 'Info@gargiindustries.com'; @endphp
                  <p class="mb-1 text-muted">Email: <a href="mailto:{{ $emailValue }}"
                      class="text-decoration-none">{{ $emailValue }}</a></p>
                  <p class="mb-0 text-muted">Hours: 9:00 AM To 6:00 PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Working Hours & Mobile Row -->
      <div class="row g-4 mb-5">
        <!-- Working Hours Card -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
              <div class="d-flex mb-3">
                <div class="me-3">
                  <i class="fas fa-clock fa-2x" style="color: #212529;"></i>
                </div>
                <div>
                  <h5 class="fw-600 mb-2" style="color: #212529;">Working Hours</h5>
                  <p class="mb-1 text-muted">Monday – Saturday: 9:00 AM – 6:00 PM</p>
                  <p class="mb-0 text-danger fw-500">Sunday: Closed</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Number Card -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
              <div class="d-flex mb-3">
                <div class="me-3">
                  <i class="fas fa-phone-alt fa-2x" style="color: #212529;"></i>
                </div>
                <div>
                  <h5 class="fw-600 mb-2" style="color: #212529;">Mobile Number</h5>
                  @php 
                    $phoneValue = !empty($general_setting->phones[0]['value']) ? $general_setting->phones[0]['value'] : '+91 8058710932'; 
                    $phoneLink = preg_replace('/[^0-9+]/', '', $phoneValue);
                  @endphp
                  <p class="mb-0 text-muted">
                    <a href="tel:{{ $phoneLink }}" class="text-decoration-none">{{ $phoneValue }}</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form Section -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
          <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4 p-lg-5">
              <h4 class="fw-600 mb-3 text-center" style="color: #212529;">Send Us Your Inquiry</h4>
              <p class="text-center text-muted mb-4">Have questions or need a custom weighing solution? Fill out the
                contact form or connect with us directly via phone or email. Our team will get back to you as soon as
                possible.</p>

              <div id="form-alert" class="alert d-none" role="alert"></div>

              <form method="post" id="contactForm" class="contact-form" action="{{ route('contact.submit') }}">
                @csrf
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                      <label for="phone">Phone Number (Optional)</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating">
                      <textarea name="message" id="message" class="form-control" placeholder="Your Message"
                        style="height: 150px" required></textarea>
                      <label for="message">Your Message</label>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" id="submitBtn" class="btn px-5 py-2 mt-3"
                      style="background: #212529; color: white; border-radius: 50px;">
                      <span id="btnText">Send Message <i class="fas fa-paper-plane ms-2"></i></span>
                      <span id="btnLoader" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Closing Text -->
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <div class="p-4 rounded-4" style="background: #f8f9fa;">
            <p class="mb-0 fw-500" style="color: #212529; font-size: 1.1rem;">
              Gargi Industries — Your Trusted Partner for Accurate Weighing Solutions.
            </p>
          </div>
        </div>
      </div>

      <!-- Google Map -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.205382626478!2d75.7875467!3d26.857394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dcb1b5f7f5b5f%3A0x9b9e3c8b3b5b3b5b!2sJaipur%2C%20Rajasthan%2C%20India!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT SECTION END -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactForm');
      const submitBtn = document.getElementById('submitBtn');
      const btnText = document.getElementById('btnText');
      const btnLoader = document.getElementById('btnLoader');
      const formAlert = document.getElementById('form-alert');

      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        submitBtn.disabled = true;
        btnText.classList.add('d-none');
        btnLoader.classList.remove('d-none');
        formAlert.classList.add('d-none');
        formAlert.classList.remove('alert-success', 'alert-danger');

        const formData = new FormData(form);

        fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        })
        .then(response => response.json())
        .then(data => {
          // Hide loading state
          submitBtn.disabled = false;
          btnText.classList.remove('d-none');
          btnLoader.classList.add('d-none');

          if (data.success || data.message === 'Message sent successfully!') {
            formAlert.classList.add('alert-success');
            formAlert.classList.remove('d-none');
            formAlert.textContent = data.message || 'Message sent successfully!';
            form.reset();
          } else {
            // Handle validation errors or other failures
            formAlert.classList.add('alert-danger');
            formAlert.classList.remove('d-none');
            formAlert.textContent = data.message || 'Validation failed. Please check your inputs.';
          }
        })
        .catch(error => {
          // Hide loading state
          submitBtn.disabled = false;
          btnText.classList.remove('d-none');
          btnLoader.classList.add('d-none');
          
          formAlert.classList.add('alert-danger');
          formAlert.classList.remove('d-none');
          formAlert.textContent = 'An error occurred while sending the message. Please try again later.';
        });
      });
    });
  </script>
@endsection

@push('styles')
  <style>
    .form-floating>.form-control,
    .form-floating>.form-select {
      height: calc(3.5rem + 2px);
      border-radius: 12px;
      border: 1px solid #dee2e6;
    }

    .form-floating>.form-control:focus,
    .form-floating>.form-select:focus {
      border-color: #212529;
      box-shadow: 0 0 0 0.2rem rgba(33, 37, 41, 0.1);
    }

    .form-floating>label {
      padding: 1rem 0.75rem;
    }

    .btn:hover {
      background: #000 !important;
      transform: translateY(-2px);
      transition: all 0.3s ease;
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }

    @media (max-width: 768px) {
      .title-banner {
        padding: 50px 0 !important;
      }

      .title-banner h2 {
        font-size: 2rem !important;
      }

      .card-body {
        padding: 1.5rem !important;
      }
    }
  </style>
@endpush
