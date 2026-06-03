@extends('layouts.admin')

@section('title', 'Create Product - Nuvana Admin')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">Create New Product</h4>
            <p class="text-muted">Add a new product to your inventory</p>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <!-- Left Column -->
                <div class="col-lg-8">
                  <!-- Basic Information -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Basic Information</h5>
                    </div>
                    <div class="card-body">
                      <!-- Title -->
                      <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                          name="title" value="{{ old('title') }}" required>
                        @error('title')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <!-- Description -->
                      <div class="mb-3">
                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                          name="description" rows="5" required>{{ old('description') }}</textarea>
                        @error('description')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <!-- SKU -->
                      <div class="mb-3">
                        <label for="sku" class="form-label">SKU <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku"
                          value="{{ old('sku') }}" required>
                        <small class="text-muted">Unique product identifier (e.g., NV-JWL-001)</small>
                        @error('sku')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <!-- Product Images -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Product Images</h5>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="images" class="form-label">Images <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('images.*') is-invalid @enderror" id="images"
                          name="images[]" multiple accept="image/*" required>
                        <small class="text-muted">You can select multiple images. Supported formats: JPG, PNG, GIF</small>
                        @error('images.*')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <!-- Image Preview -->
                      <div id="imagePreview" class="row mt-3"></div>
                    </div>
                  </div>

                  <!-- Product Configuration -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Product Configuration</h5>
                      <p class="text-muted mb-0">Technical specifications and features</p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="material_color" class="form-label">Material & Color</label>
                          <input type="text" class="form-control" id="material_color" name="config[material_color]"
                            value="{{ old('config.material_color') }}">
                          <small class="text-muted">e.g., Stainless Steel + Black, ABS Plastic + White</small>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label for="item_capacity" class="form-label">Item Capacity</label>
                          <input type="text" class="form-control" id="item_capacity" name="config[item_capacity]"
                            value="{{ old('config.item_capacity') }}">
                          <small class="text-muted">e.g., 100g, 500g, 10kg</small>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label for="resolution" class="form-label">Resolution</label>
                          <input type="text" class="form-control" id="resolution" name="config[resolution]"
                            value="{{ old('config.resolution') }}">
                          <small class="text-muted">e.g., 0.001g, 0.01g, 1g</small>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label for="platform_size" class="form-label">Platform Size</label>
                          <input type="text" class="form-control" id="platform_size" name="config[platform_size]"
                            value="{{ old('config.platform_size') }}">
                          <small class="text-muted">e.g., 12cm x 12cm, 30cm x 30cm</small>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label for="units" class="form-label">Units</label>
                          <input type="text" class="form-control" id="units" name="config[units]"
                            value="{{ old('config.units') }}">
                          <small class="text-muted">e.g., g, kg, lb, oz</small>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label for="warranty" class="form-label">Warranty</label>
                          <input type="text" class="form-control" id="warranty" name="config[warranty]"
                            value="{{ old('config.warranty') }}">
                          <small class="text-muted">e.g., 1 Year, 2 Years</small>
                        </div>
                      </div>

                      <!-- Dynamic Configuration Fields -->
                      <div class="mt-3">
                        <label class="form-label">Additional Specifications</label>
                        <div id="dynamicConfigFields">
                          @if(old('config_extra'))
                            @foreach(old('config_extra') as $index => $extra)
                              <div class="row mb-2 config-extra-row">
                                <div class="col-md-5">
                                  <input type="text" class="form-control" name="config_extra[{{ $index }}][key]"
                                    placeholder="Key" value="{{ $extra['key'] ?? '' }}">
                                </div>
                                <div class="col-md-5">
                                  <input type="text" class="form-control" name="config_extra[{{ $index }}][value]"
                                    placeholder="Value" value="{{ $extra['value'] ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                  <button type="button" class="btn btn-danger remove-config-row">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </div>
                              </div>
                            @endforeach
                          @endif
                        </div>
                        <button type="button" class="btn btn-sm btn-secondary mt-2" id="addConfigField">
                          <i class="fas fa-plus"></i> Add More Specifications
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-4">
                  <!-- Category Selection -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Category</h5>
                    </div>
                    <div class="card-body">
                      <select class="form-select @error('category') is-invalid @enderror" name="category" id="category"
                        required>
                        <option value="">Select Category</option>
                        <option value="jewelry-scale" {{ old('category') == 'jewelry-scale' ? 'selected' : '' }}>Jewelry
                          Scale</option>
                        <option value="table-top-scale" {{ old('category') == 'table-top-scale' ? 'selected' : '' }}>Table
                          Top Scale</option>
                        <option value="platform-scale" {{ old('category') == 'platform-scale' ? 'selected' : '' }}>Platform
                          Scale</option>
                        <option value="mobile-bench-scale" {{ old('category') == 'mobile-bench-scale' ? 'selected' : '' }}>
                          Mobile/Bench Scale</option>
                        <option value="heavy-duty-scale" {{ old('category') == 'heavy-duty-scale' ? 'selected' : '' }}>Heavy
                          Duty Scale</option>
                      </select>
                      @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <!-- Badge Selection -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Product Badge</h5>
                    </div>
                    <div class="card-body">
                      <select class="form-select" name="badge">
                        <option value="">No Badge</option>
                        <option value="new" {{ old('badge') == 'new' ? 'selected' : '' }}>🔥 New</option>
                        <option value="trending" {{ old('badge') == 'trending' ? 'selected' : '' }}>📈 Trending</option>
                        <option value="best-seller" {{ old('badge') == 'best-seller' ? 'selected' : '' }}>⭐ Best Seller
                        </option>
                      </select>
                      <small class="text-muted">Badge will be displayed on the product card</small>
                    </div>
                  </div>

                  <!-- WhatsApp Message -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">WhatsApp Message Template</h5>
                    </div>
                    <div class="card-body">
                      <textarea class="form-control @error('whatsapp_message') is-invalid @enderror"
                        name="whatsapp_message" rows="6"
                        placeholder="Custom WhatsApp message for this product...">{{ old('whatsapp_message') }}</textarea>
                      <small class="text-muted mt-2 d-block">
                        <i class="fas fa-info-circle"></i>
                        Use placeholders: {product_name}, {price}, {sku}, {category}
                      </small>
                      @error('whatsapp_message')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror

                      <!-- Preview Button -->
                      <button type="button" class="btn btn-outline-success btn-sm mt-3" id="previewWhatsApp">
                        <i class="fab fa-whatsapp"></i> Preview Message
                      </button>
                    </div>
                  </div>

                  <!-- Status -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Product Status</h5>
                    </div>
                    <div class="card-body">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active Product</label>
                      </div>
                      <small class="text-muted">Inactive products won't be visible on the website</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Form Actions -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Product
                      </button>
                      <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                      </a>
                      <button type="reset" class="btn btn-warning">
                        <i class="fas fa-undo"></i> Reset
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
    <script>
      // Image Preview
      document.getElementById('images').addEventListener('change', function (e) {
        const preview = document.getElementById('imagePreview');
        preview.innerHTML = '';

        if (this.files) {
          Array.from(this.files).forEach((file, index) => {
            if (file.type.startsWith('image/')) {
              const reader = new FileReader();
              reader.onload = function (e) {
                const col = document.createElement('div');
                col.className = 'col-md-3 mb-3';
                col.innerHTML = `
                                                <div class="position-relative">
                                                    <img src="${e.target.result}" class="img-fluid rounded" style="height: 150px; width: 100%; object-fit: cover;">
                                                    <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" onclick="this.parentElement.parentElement.remove()">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            `;
                preview.appendChild(col);
              }
              reader.readAsDataURL(file);
            }
          });
        }
      });

      // Dynamic Configuration Fields
      let configIndex = {{ count(old('config_extra', [])) }};

      document.getElementById('addConfigField').addEventListener('click', function () {
        const container = document.getElementById('dynamicConfigFields');
        const row = document.createElement('div');
        row.className = 'row mb-2 config-extra-row';
        row.innerHTML = `
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="config_extra[${configIndex}][key]" placeholder="Key">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="config_extra[${configIndex}][value]" placeholder="Value">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-config-row">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            `;
        container.appendChild(row);
        configIndex++;
      });

      // Remove dynamic configuration row
      document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-config-row') || e.target.parentElement.classList.contains('remove-config-row')) {
          const row = e.target.closest('.config-extra-row');
          if (row) {
            row.remove();
          }
        }
      });

      // WhatsApp Message Preview
      document.getElementById('previewWhatsApp').addEventListener('click', function () {
        const title = document.getElementById('title').value || '[Product Name]';
        const sku = document.getElementById('sku').value || '[SKU]';
        const category = document.getElementById('category').options[document.getElementById('category').selectedIndex]?.text || '[Category]';

        let message = document.querySelector('textarea[name="whatsapp_message"]').value;

        if (!message) {
          message = `Hello! I'm interested in ${title}.\n\nSKU: ${sku}\nCategory: ${category}\n\nCan you please share more details and price?`;
        }

        message = message
          .replace(/{product_name}/g, title)
          .replace(/{sku}/g, sku)
          .replace(/{category}/g, category);

        alert('WhatsApp Message Preview:\n\n' + message);
      });

      // Auto-generate SKU based on category and title
      document.getElementById('category').addEventListener('change', function () {
        const title = document.getElementById('title').value;
        const category = this.value;

        if (title && category && !document.getElementById('sku').value) {
          const skuPrefix = category.substring(0, 3).toUpperCase();
          const titleCode = title.substring(0, 3).toUpperCase();
          const randomNum = Math.floor(Math.random() * 1000);
          const suggestedSKU = `${skuPrefix}-${titleCode}-${randomNum}`;

          if (confirm(`Would you like to use suggested SKU: ${suggestedSKU}?`)) {
            document.getElementById('sku').value = suggestedSKU;
          }
        }
      });

      // Reset form confirmation
      document.querySelector('button[type="reset"]').addEventListener('click', function (e) {
        if (!confirm('Are you sure you want to reset all form fields?')) {
          e.preventDefault();
        }
      });
    </script>
  @endpush

  @push('styles')
    <style>
      .card {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        border: none;
        margin-bottom: 1.5rem;
      }

      .card-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-bottom: none;
      }

      .card-header h5,
      .card-header h4 {
        color: white;
      }

      .card-header .text-muted {
        color: rgba(255, 255, 255, 0.8) !important;
      }

      .form-label {
        font-weight: 500;
        color: #333;
      }

      .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
      }

      .btn-primary:hover {
        background: linear-gradient(135deg, #5a67d8 0%, #6b46a0 100%);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
      }

      .btn {
        transition: all 0.3s ease;
      }

      #imagePreview img {
        border: 2px solid #e0e0e0;
        transition: transform 0.3s ease;
      }

      #imagePreview img:hover {
        transform: scale(1.05);
      }

      .form-select,
      .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
      }

      .form-select:focus,
      .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      }

      @media (max-width: 768px) {
        .container-fluid {
          padding: 0.5rem;
        }
      }
    </style>
  @endpush
@endsection
