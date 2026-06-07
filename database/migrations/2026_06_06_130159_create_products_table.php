<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();

      $table->foreignId('category_id')->constrained()->cascadeOnDelete();

      $table->string('name');
      $table->string('slug')->unique();
      $table->string('sku')->unique();

      $table->string('short_description')->nullable();
      $table->text('description')->nullable();

      $table->decimal('price', 10, 2)->nullable();
      $table->decimal('old_price', 10, 2)->nullable();

      $table->float('rating')->nullable();
      $table->integer('reviews_count')->nullable();

      $table->enum('stock_status', ['in_stock', 'out_of_stock', 'preorder'])->nullable();

      $table->enum('badge', ['trending', 'new', 'best_seller'])->nullable();

      $table->boolean('is_active')->default(true);

      $table->timestamps();

      // ⚡ Performance indexes
      $table->index('category_id');
      $table->index('stock_status');
      $table->index('badge');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
