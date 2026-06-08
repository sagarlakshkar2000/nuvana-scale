@php
  $certificates = [
    [
      'image' => 'https://cdn.shopaccino.com/equalscale/images/1-422235406662748_l.png?v=717',
      'title' => 'ISO 9001:2015',
      'description' => 'Quality Management System Certification',
      'alt_text' => 'ISO 9001:2015 Certificate'
    ],
    [
      'image' => 'https://cdn.shopaccino.com/equalscale/images/2-422245092501671_l.png?v=717',
      'title' => 'ISO 14001:2015',
      'description' => 'Environmental Management System Certification',
      'alt_text' => 'ISO 14001:2015 Certificate'
    ],
    [
      'image' => 'https://cdn.shopaccino.com/equalscale/images/3-422258528427637_l.png?v=717',
      'title' => 'ISO 45001:2018',
      'description' => 'Occupational Health & Safety Management',
      'alt_text' => 'ISO 45001:2018 Certificate'
    ],
    [
      'image' => 'https://cdn.shopaccino.com/equalscale/images/4-422267263125871_l.png?v=717',
      'title' => 'CE Certified',
      'description' => 'European Conformity Certification',
      'alt_text' => 'CE Certificate'
    ]
  ];

  $certificate_config = [
    'title' => 'Our Certifications',
    'subtitle' => 'Committed to quality, safety, and international standards',
    'bg_color' => 'bg-light'
  ];
@endphp



<!-- CERTIFICATE SECTION START -->
<section class="certificate-section py-40 bg-white-f1">
  <div class="container-fluid">
    <div class="text-left mb-48">
      <h2 class="fw-600 black mb-12">{{ $certificate_config['title'] }}</h2>
      <p>{{ $certificate_config['subtitle'] }}</p>
    </div>

    <div class="row justify-content-center row-gap-4">
      @foreach($certificates as $certificate)
        <div class="col-xl-3 col-lg-4 col-6">
          <div class="certificate-card text-center">
            <div class="certificate-image">
              <img src="{{ $certificate['image'] }}" alt="{{ $certificate['alt_text'] }}" loading="lazy">
            </div>
            <div class="certificate-content mt-24">
              <h5 class="fw-600 black mb-8">{{ $certificate['title'] }}</h5>
              <p class="caption dark-gray">{{ $certificate['description'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- CERTIFICATE SECTION END -->
