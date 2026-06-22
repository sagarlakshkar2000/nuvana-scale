<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductImage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
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

    // Define category mappings for specifications
    $specificationTemplates = [
      'Jewellery Scale' => [
        'Model' => '{sku}',
        'Capacity' => '{capacity}',
        'Display' => 'Green LED Display',
        'Multiple Units' => 'Kg, g, ct, oz',
        'Pan Size' => '{pan_size}',
        'Power Supply' => 'AC Power Cord & Rechargeable Battery (6V/5Ah)',
        'Battery Backup' => 'Up to 72 Hours (on Full Charge)',
        'Operating Temp.' => '0°C to 40°C',
        'Body Material' => 'ABS Body with Stainless Steel Pan',
        'Functions' => 'Tare, Zero, M+, MR, Unit Conversion, Auto Zero Tracking',
        'Overload Protection' => 'Yes',
        'Auto Shut-off' => 'Yes (Power Saving Mode)',
        'Accuracy' => '{accuracy}',
      ],
      'Table Top Scale' => [
        'Model' => '{sku}',
        'Capacity' => '{capacity}',
        'Display' => 'Green LED Display',
        'Multiple Units' => 'Kg, g, L',
        'Pan Size' => '{pan_size}',
        'Power Supply' => 'AC Power Cord & Rechargeable Battery (6V/5Ah)',
        'Battery Backup' => 'Up to 72 Hours (on Full Charge)',
        'Operating Temp.' => null,
        'Body Material' => 'MS Body with Stainless Steel Pan',
        'Functions' => 'Tare, Zero, M+, MR, Unit Conversion, Auto Zero Tracking',
        'Overload Protection' => 'Yes',
        'Auto Shut-off' => 'Yes (Power Saving Mode)',
        'Accuracy' => '{accuracy}',
      ],
    ];

    // Define features templates
    $featuresTemplates = [
      'Jewellery Scale' => [
        ['icon' => '🎯', 'title' => 'High Precision', 'description' => 'Accurate measurements for precious items with precision up to 0.001g.'],
        ['icon' => '💎', 'title' => 'Jewellery Mode', 'description' => 'Specialized weighing mode for gems, gold, and precious metals.'],
        ['icon' => '🛡️', 'title' => 'Stainless Steel Pan', 'description' => 'Durable, rust-resistant surface for long-lasting performance.'],
        ['icon' => '🔋', 'title' => 'Long Battery Life', 'description' => 'Up to 72 hours of continuous operation on a single charge.'],
        ['icon' => '📊', 'title' => 'Multiple Units', 'description' => 'Switch between Kg, g, ct, and oz for versatile weighing.'],
        ['icon' => '⚡', 'title' => 'Fast Response', 'description' => 'Quick stabilization for efficient weighing operations.'],
      ],
      'Table Top Scale' => [
        ['icon' => '🎯', 'title' => 'High Accuracy', 'description' => 'Precise measurements every time for reliable and consistent weighing.'],
        ['icon' => '💡', 'title' => 'Bright LED Display', 'description' => 'Clear, easy-to-read numbers even in low-light environments.'],
        ['icon' => '🛡️', 'title' => 'Stainless Steel Pan', 'description' => 'Durable, rust-resistant surface for long-lasting performance.'],
        ['icon' => '🔋', 'title' => 'Long Battery Backup', 'description' => 'Up to 72 hours of continuous operation during power cuts.'],
        ['icon' => '📦', 'title' => 'Heavy Duty Design', 'description' => 'Built to withstand daily commercial and industrial use.'],
        ['icon' => '⚙️', 'title' => 'Multiple Functions', 'description' => 'Tare, zero, unit conversion, and overload protection features.'],
      ],
    ];

    // Define ideal for templates
    $idealForTemplates = [
      'Jewellery Scale' => [
        ['icon' => '💎', 'title' => 'Jewellery Shops', 'description' => 'Perfect for weighing precious metals, gems, and finished jewelry.'],
        ['icon' => '🏪', 'title' => 'Gold & Silver Dealers', 'description' => 'Accurate weighing for buying and selling precious metals.'],
        ['icon' => '🏭', 'title' => 'Manufacturing Units', 'description' => 'Precise measurement for quality control in production.'],
        ['icon' => '🔬', 'title' => 'Laboratories', 'description' => 'High precision for scientific and research applications.'],
        ['icon' => '💼', 'title' => 'Pawnbrokers', 'description' => 'Reliable weighing for evaluating valuable items.'],
      ],
      'Table Top Scale' => [
        ['icon' => '🏬', 'title' => 'Retail Shops & Supermarkets', 'description' => 'Fast, accurate billing and daily operations.'],
        ['icon' => '📦', 'title' => 'Warehouses & Logistics', 'description' => 'Efficient weight handling for storage and shipping.'],
        ['icon' => '🏭', 'title' => 'Industries & Manufacturing', 'description' => 'Reliable performance for heavy-duty industrial use.'],
        ['icon' => '🌾', 'title' => 'Agriculture & Food Processing', 'description' => 'Ideal for produce, grains, and food weighing.'],
        ['icon' => '💎', 'title' => 'Jewelry & Precious Metals', 'description' => 'High precision for valuable and small items.'],
      ],
    ];

    // Define why choose nuvana templates
    $whyChooseNuvana = [
      ['title' => 'Why Choose Nuvana Scales?', 'description' => 'Engineered for accuracy, durability, and efficiency, Nuvana scales help businesses weigh smarter, faster, and more reliably every day.'],
    ];

    // Define FAQs templates
    $faqsTemplates = [
      [
        ['question' => 'Are Nuvana scales accurate?', 'answer' => 'Yes, they deliver precise and consistent measurements for reliable daily use.'],
        ['question' => 'Do scales work during power cuts?', 'answer' => 'Yes, built-in rechargeable battery ensures uninterrupted operation.'],
        ['question' => 'Which industries can use these scales?', 'answer' => 'Retail, warehouses, industries, agriculture, and jewelry businesses.'],
        ['question' => 'Is maintenance required frequently?', 'answer' => 'No, designed for low maintenance and long-term durability.'],
        ['question' => 'Can I switch weight units?', 'answer' => 'Yes, easily switch between kg, grams, and other units.'],
      ],
      [
        ['question' => 'What is the warranty period?', 'answer' => 'We offer a standard 1-year warranty on all manufacturing defects.'],
        ['question' => 'Is it battery operated?', 'answer' => 'Yes, it comes with a built-in rechargeable battery for continuous operation.'],
        ['question' => 'What is the accuracy level?', 'answer' => 'High precision with accuracy suitable for commercial and industrial use.'],
        ['question' => 'Is it easy to clean?', 'answer' => 'Yes, the stainless steel pan is easy to clean and maintain.'],
        ['question' => 'Can it be used in wet conditions?', 'answer' => 'The scale is designed for indoor use in standard conditions.'],
      ],
    ];

    foreach ($productsData as $index => $data) {
      // Get or Create Category
      $category = Category::firstOrCreate(
        ['name' => $data['category']],
        [
          'slug' => Str::slug($data['category']),
          'is_active' => true,
        ]
      );

      // Determine which templates to use based on category
      $categoryKey = $data['category'];
      $specsTemplate = $specificationTemplates[$categoryKey] ?? $specificationTemplates['Table Top Scale'];
      $featuresTemplate = $featuresTemplates[$categoryKey] ?? $featuresTemplates['Table Top Scale'];
      $idealForTemplate = $idealForTemplates[$categoryKey] ?? $idealForTemplates['Table Top Scale'];

      // Alternate FAQs for variety
      $faqsTemplate = $faqsTemplates[$index % count($faqsTemplates)];

      // Generate description based on category
      $descriptions = [
        'Jewellery Scale' => "High precision {$data['name']} designed for accurate weighing of precious metals, gems, and jewelry. Features a durable stainless steel pan, bright LED display, and long-lasting battery backup. Perfect for jewellery shops, gold dealers, and laboratories.",
        'Table Top Scale' => "A compact and efficient {$data['name']} weighing solution designed for use on counters, tables, or workstations. Widely used in retail shops, supermarkets, warehouses, and industrial applications. Features a durable stainless steel pan and bright LED display.",
      ];

      $description = $descriptions[$categoryKey] ?? "High quality {$data['name']} designed for accuracy and durability. Perfect for commercial and industrial weighing needs.";

      $product = Product::updateOrCreate(
        ['sku' => $data['sku']],
        [
          'name' => $data['name'],
          'category_id' => $category->id,
          'slug' => Str::slug($data['name'] . '-' . $data['sku']),
          'description' => $description,
          'badge' => $categoryKey === 'Jewellery Scale' ? 'trending' : 'best_seller',
          'is_active' => true,
          'price' => rand(3000, 8000), // Dummy price
          'stock_status' => 'in_stock',
          'features' => $featuresTemplate,
          'ideal_for' => $idealForTemplate,
          'why_choose_nuvana' => $whyChooseNuvana,
          'faqs' => $faqsTemplate,
        ]
      );

      // Delete existing specs and images if updating
      $product->specifications()->delete();
      $product->images()->delete();

      // Create Specifications from generated templates
      $generatedSpecs = $this->generateSpecs($specsTemplate, $data);
      foreach ($generatedSpecs as $key => $value) {
        if ($value !== null) {
          $product->specifications()->create([
            'key' => $key,
            'value' => $value,
            'group_name' => 'General',
            'is_predefined' => 1,
          ]);
        }
      }

      // Create Images
      $imageVariations = [
        'assets/media/products/product-' . rand(1, 5) . '.png',
        'assets/media/products/product-' . rand(1, 5) . '.png',
      ];

      foreach ($imageVariations as $index => $imagePath) {
        $product->images()->create([
          'image_url' => $imagePath,
          'sort_order' => $index + 1,
        ]);
      }
    }
  }

  /**
   * Generate predefined specifications with placeholders replaced
   */
  private function generateSpecs(array $template, array $data): array
  {
    $specs = [];
    foreach ($template as $key => $value) {
      if ($value === null) {
        $specs[$key] = null;
      } else {
        // Replace placeholders with actual values
        $specs[$key] = str_replace(
          ['{sku}', '{capacity}', '{pan_size}', '{accuracy}'],
          [$data['sku'], $data['capacity'], $data['pan_size'], $data['accuracy']],
          $value
        );
      }
    }
    return $specs;
  }
}
