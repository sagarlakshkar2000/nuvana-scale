<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
  protected $fillable = [
    'product_id',
    'key',
    'value',
    'group_name',
    'is_predefined'
  ];

  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
