<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = [
    'name',
    'category_id',
    'sku',
    'description',
    'badge',
    'status',
    'is_active',
    'specifications',
  ];


  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function images()
  {
    return $this->hasMany(ProductImage::class);
  }

  public function specifications()
  {
    return $this->hasMany(ProductSpecification::class);
  }
}
