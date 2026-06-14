<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name',
    'category_id',
    'slug',
    'sku',
    'description',
    'badge',
    'is_active',
    'price',
    'old_price',
    'stock_status',
    'is_active',
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function specifications()
  {
    return $this->hasMany(ProductSpecification::class);
  }

  public function specificationsFormatted()
  {
    return $this->specifications->pluck('value', 'key');
  }

  public function images()
  {
    return $this->hasMany(ProductImage::class)->orderBy('sort_order');
  }
}
