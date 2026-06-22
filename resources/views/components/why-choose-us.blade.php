@php
  // Benefits data array with the actual image URLs you provided
  $benefits = [
    [
      'icon' => 'https://cdn.shopaccino.com/equalscale/images/011-893216-24416498846407_l.png?v=717?v=1',
      'title' => 'Innovation Focused',
      'description' => 'Cutting-edge technology and continuous innovation to deliver precise weighing solutions for modern industrial needs.',
      'alt_text' => 'Innovation Focused Icon'
    ],
    [
      'icon' => 'https://cdn.shopaccino.com/equalscale/images/02-431824-24438381681647_l.png?v=717?v=1',
      'title' => 'Quality Management',
      'description' => 'ISO certified manufacturing with stringent quality control measures ensuring accuracy and durability.',
      'alt_text' => 'Quality Management Icon'
    ],
    [
      'icon' => 'https://cdn.shopaccino.com/equalscale/images/03-942083-24456979151164_l.png?v=717?v=1',
      'title' => 'Diverse Range',
      'description' => 'Complete range of weighing solutions from jewellery scales to heavy-duty weighbridges for every industry need.',
      'alt_text' => 'Diverse Range Icon'
    ],
    [
      'icon' => 'https://cdn.shopaccino.com/equalscale/images/04-548482-24476801153764_l.png?v=717?v=1',
      'title' => 'Customer Support',
      'description' => '24/7 dedicated technical support and service network across India for hassle-free maintenance.',
      'alt_text' => 'Customer Support Icon'
    ]
  ];

  // Section configuration
  $benefits_config = [
    'title' => 'Why Choose Us',
    'subtitle' => 'Experience unmatched quality, trust, and results with our premium weighing solutions.'
  ];
@endphp

<!-- WHY CHOOSE US START -->
<section class="benefit-section py-40 bg-white" data-aos="fade-up">
  <div class="container-fluid">
    <div class="row row-gap-3">
      @foreach($benefits as $index => $benefit)
        <div class="col-xl-3 col-lg-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
          <div class="benefit-block d-flex flex-column gap-24 p-24 h-100">
            <div class="benefit-icon">
              <img src="{{ $benefit['icon'] }}" alt="{{ $benefit['alt_text'] }}" loading="lazy">
            </div>
            <div class="d-flex flex-column gap-12 black">
              <h6>{{ $benefit['title'] }}</h6>
              <p>{{ $benefit['description'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- WHY CHOOSE US END -->
