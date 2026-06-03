<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    return view('admin.product.create', ['title' => 'Product Management']);
  }


  public function store(Request $request)
  {
    $validated = $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'sku' => 'required|string|unique:products',
      'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'category' => 'required|in:jewelry-scale,table-top-scale,platform-scale,mobile-bench-scale,heavy-duty-scale',
      'badge' => 'nullable|in:new,trending,best-seller',
      'config' => 'array',
      'config_extra' => 'array',
      'whatsapp_message' => 'nullable|string',
      'is_active' => 'boolean'
    ]);

    // Store product logic here

    return redirect()->route('admin.products.create')
      ->with('success', 'Product created successfully!');
  }
}
