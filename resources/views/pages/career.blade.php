@extends('layouts.app')

@section('title', 'Career - Gargi Industries')

@section('content')

    <!-- TITLE BANNER START -->
    <section class="title-banner">
      <div class="container">
        <h2 class="white fw-600 text-center">Career Opportunities</h2>
      </div>
    </section>
    <!-- TITLE BANNER END -->

    <!-- CAREER SECTION START -->
    <section class="career-section py-5">
      <div class="container">
        
        <!-- Intro Text -->
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center">
            <h4 class="fw-600 mb-3" style="color: #212529; font-size: 1.75rem;">Join our growing team and make an impact</h4>
            <p class="mb-3 text-muted">We are always looking for talented individuals to join Gargi Industries. Explore our open positions below and apply today.</p>
          </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @foreach($jobs as $index => $job)
                <div class="card border-0 shadow-sm rounded-4 mb-5">
                    
                    <div class="card-body p-4 p-lg-5">
                        <h4 class="fw-600 mb-4" style="color: #212529;">{{ $job['title'] }}</h4>
                        
                        <!-- Details Table -->
                        <div class="table-responsive mb-4">
                            <table class="table table-bordered text-center align-middle mb-0" style="border-color: #dee2e6;">
                                <thead style="background-color: #f8f9fa;">
                                    <tr>
                                        <th class="fw-600 text-muted">Job Type</th>
                                        <th class="fw-600 text-muted">Experience</th>
                                        <th class="fw-600 text-muted">Higher Qualification</th>
                                        <th class="fw-600 text-muted">Hiring Process</th>
                                        <th class="fw-600 text-muted">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-500" style="color: #212529;">{{ $job['job_type'] }}</td>
                                        <td class="text-muted">{{ $job['experience'] }}</td>
                                        <td class="text-muted">{{ $job['qualification'] }}</td>
                                        <td class="text-muted">{{ $job['hiring_process'] }}</td>
                                        <td class="text-muted">{{ $job['location'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Accordion Section -->
                        <div class="accordion mb-5" id="accordionJob{{ $index }}">
                            
                            <!-- Job Summary -->
                            <div class="accordion-item border-0 border-bottom">
                                <h2 class="accordion-header" id="headingSummary{{ $index }}">
                                    <button class="accordion-button fw-600 shadow-none px-0 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSummary{{ $index }}" aria-expanded="true" aria-controls="collapseSummary{{ $index }}">
                                        Job Summary
                                    </button>
                                </h2>
                                <div id="collapseSummary{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="headingSummary{{ $index }}" data-bs-parent="#accordionJob{{ $index }}">
                                    <div class="accordion-body px-0 text-muted">
                                        {{ $job['summary'] }}
                                    </div>
                                </div>
                            </div>

                            <!-- Skills -->
                            <div class="accordion-item border-0 border-bottom">
                                <h2 class="accordion-header" id="headingSkills{{ $index }}">
                                    <button class="accordion-button collapsed fw-600 shadow-none px-0 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSkills{{ $index }}" aria-expanded="false" aria-controls="collapseSkills{{ $index }}">
                                        Skills Required
                                    </button>
                                </h2>
                                <div id="collapseSkills{{ $index }}" class="accordion-collapse collapse" aria-labelledby="headingSkills{{ $index }}" data-bs-parent="#accordionJob{{ $index }}">
                                    <div class="accordion-body px-0 text-muted">
                                        <ul class="mb-0 ps-3">
                                            @foreach($job['skills'] as $skill)
                                                <li class="mb-2">{{ $skill }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Responsibilities -->
                            <div class="accordion-item border-0 border-bottom">
                                <h2 class="accordion-header" id="headingResp{{ $index }}">
                                    <button class="accordion-button collapsed fw-600 shadow-none px-0 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResp{{ $index }}" aria-expanded="false" aria-controls="collapseResp{{ $index }}">
                                        Responsibilities
                                    </button>
                                </h2>
                                <div id="collapseResp{{ $index }}" class="accordion-collapse collapse" aria-labelledby="headingResp{{ $index }}" data-bs-parent="#accordionJob{{ $index }}">
                                    <div class="accordion-body px-0 text-muted">
                                        <ul class="mb-0 ps-3">
                                            @foreach($job['responsibilities'] as $resp)
                                                <li class="mb-2">{{ $resp }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @php
                            $subject = rawurlencode('Job Application: ' . $job['title']);
                            $body = rawurlencode("Hello Nuvana HR Team,\n\nI would like to apply for the position of " . $job['title'] . ".\n\nPlease find my details attached.\n\nThank you,\n[Your Name]\n[Your Contact Number]");
                        @endphp

                        <!-- Apply Now Button -->
                        <div class="text-center mt-4">
                            <a href="mailto:info@gargiindustries.com?subject={{ $subject }}&body={{ $body }}" class="btn px-5 py-2 mt-3" style="background: #212529; color: white; border-radius: 50px;">
                                Apply Now <i class="fas fa-paper-plane ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </div>
    </section>
    <!-- CAREER SECTION END -->

@endsection

@push('styles')
  <style>
    .accordion-button::after {
      background-size: 1rem;
    }
    .accordion-button:not(.collapsed)::after {
      filter: invert(0);
    }
    .accordion-button:not(.collapsed) {
      color: var(--color-primary, #e25b16) !important;
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
