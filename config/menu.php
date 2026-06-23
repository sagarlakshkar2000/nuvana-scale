<?php

return [
  'items' => [
    [
      'name' => 'Home',
      'route' => 'home',
      'icon' => '',
      'class' => '',
    ],
    [
      'name' => 'About',
      'route' => 'about.index',
      'route_pattern' => 'about.*',
      'icon' => 'fa-light fa-chevron-down',
      'class' => 'dropdown',
      'submenu' => [
        [
          'name' => 'About Us',
          'route' => 'about.index',
        ],
        [
          'name' => 'Founder & CEO',
          'route' => 'about.story',
        ],
        [
          'name' => 'Vision & Mission & Values',
          'route' => 'about.vision-mission',
        ]
      ]
    ],
    [
      'name' => 'Products',
      'route' => 'products.index',
      'route_pattern' => 'products.*',
      'icon' => 'fa-light fa-chevron-down',
      'class' => 'dropdown',
      'submenu' => [
        [
          'name' => 'Jewelry Scale',
          'route' => 'products.jewelry-scale',
        ],
        [
          'name' => 'Table Top Scale',
          'route' => 'products.table-top-scale',
        ],
        [
          'name' => 'Platform Scale',
          'route' => 'products.platform-scale',
        ],
        [
          'name' => 'Mobile/Bench Scale',
          'route' => 'products.mobile-bench-scale',
        ],
        [
          'name' => 'Heavy Duty Scale',
          'route' => 'products.heavy-duty-scale',
        ],
      ],
    ],
    [
      'name' => 'Blog',
      'route' => 'blog.index',
      'route_pattern' => 'blog.*',
      'icon' => '',
      'class' => '',
    ],
    [
      'name' => 'Contact Us',
      'route' => 'contact',
      'icon' => '',
      'class' => '',
    ],
  ],
];
