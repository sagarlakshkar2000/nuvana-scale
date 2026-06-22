<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductImage;
use Illuminate\Support\Str;

$productsData = [
  [
    'name' => 'Jewellery Scale Silver F&B',
    'category' => 'Jewellery Scale',
    'sku' => 'GIT-01',
    'pan_size' => '175x225 mm',
    'capacity' => '3 / 6 Kg',
    'accuracy' => '100 / 200 mg',
  ],
  [
    'name' => 'Jewellery Scale Silver F&B',
    'category' => 'Jewellery Scale',
    'sku' => 'GIT-02',
    'pan_size' => '175x225 mm',
    'capacity' => '6 / 15 Kg',
    'accuracy' => '200 / 500 mg',
  ],
  [
    'name' => 'Jewellery Scale Silver F&B',
    'category' => 'Jewellery Scale',
    'sku' => 'GIT-03',
    'pan_size' => '175x225 mm',
    'capacity' => '15 / 20 Kg',
    'accuracy' => '0.5 / 1 g',
  ],
  [
    'name' => 'Table Top ABS Mini',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-04',
    'pan_size' => '170x220 mm',
    'capacity' => '20 / 30 Kg',
    'accuracy' => '2 / 5 g',
  ],
  [
    'name' => 'Table Top MS-1 New',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-05',
    'pan_size' => '175x225 mm',
    'capacity' => '20 / 30 Kg',
    'accuracy' => '2 / 5 g',
  ],
  [
    'name' => 'Table Top MS-3 New Pole',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-06',
    'pan_size' => '250x300 mm',
    'capacity' => '10 / 20 / 30 Kg',
    'accuracy' => '1 / 2 / 5 g',
  ],
  [
    'name' => 'Table Top MS-3 B2B',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-07',
    'pan_size' => '250x300 mm',
    'capacity' => '10 / 20 / 30 Kg',
    'accuracy' => '1 / 2 / 5 g',
  ],
  [
    'name' => 'Table Top MS-3 B2B Normal',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-06/ECO',
    'pan_size' => '250x300 mm',
    'capacity' => '10 / 20 / 30 Kg',
    'accuracy' => '1 / 2 / 5 g',
  ],
  [
    'name' => 'Table Top SS-1',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-09',
    'pan_size' => '175x225 mm',
    'capacity' => '20 / 30 Kg',
    'accuracy' => '2 / 5 g',
  ],
  [
    'name' => 'Table Top SS-3 Pole',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-10',
    'pan_size' => '250x300 mm',
    'capacity' => '10 / 20 / 30 Kg',
    'accuracy' => '1 / 2 / 5 g',
  ],
  [
    'name' => 'Table Top SS-3 B2B',
    'category' => 'Table Top Scale',
    'sku' => 'GIT-11',
    'pan_size' => '250x300 mm',
    'capacity' => '10 / 20 / 30 Kg',
    'accuracy' => '1 / 2 / 5 g',
  ],
];

foreach ($productsData as $data) {
  // Get or Create Category
  $category = Category::firstOrCreate(
    ['name' => $data['category']],
    [
      'slug' => Str::slug($data['category']),
      'is_active' => true,
    ]
  );

  // Create Product
  $product = Product::updateOrCreate(
    ['sku' => $data['sku']],
    [
      'name' => $data['name'],
      'category_id' => $category->id,
      'slug' => Str::slug($data['name'] . '-' . $data['sku']),
      'description' => "High precision {$data['name']} designed for accuracy and durability. Perfect for commercial and industrial weighing needs.",
      'is_active' => true,
      'price' => rand(3000, 8000), // Dummy price
      'stock_status' => 'in_stock', // FIXED
      'features' => ['High precision load cell', 'Overload protection', 'Auto zero tracking', 'Bright Green LED Display', 'Long battery backup'],
      'ideal_for' => ['Retail Shops', 'Grocery Stores', 'Jewellery Shops', 'Warehouses'],
      'why_choose_nuvana' => ['ISO Certified', '1 Year Warranty', '24/7 Support', 'Durable Build'],
      'faqs' => [
        ['question' => 'What is the warranty period?', 'answer' => 'We offer a standard 1-year warranty on all manufacturing defects.'],
        ['question' => 'Is it battery operated?', 'answer' => 'Yes, it comes with a built-in rechargeable battery for continuous operation during power cuts.']
      ]
    ]
  );

  // Delete existing specs and images if updating
  $product->specifications()->delete();
  $product->images()->delete();

  // Create Specifications
  $specs = [
    ['key' => 'Pan Size', 'value' => $data['pan_size']],
    ['key' => 'Capacity', 'value' => $data['capacity']],
    ['key' => 'Accuracy', 'value' => $data['accuracy']],
    ['key' => 'Class', 'value' => 'III'],
    ['key' => 'Display', 'value' => 'Green LED'],
  ];

  foreach ($specs as $spec) {
    $product->specifications()->create($spec);
  }

  // Create Image (using default placeholder)
  $product->images()->create([
    'image_url' => 'assets/media/products/product-1.png',
    'sort_order' => 1
  ]);

  echo "Created: " . $product->name . "\n";
}

echo "All products seeded successfully!\n";
