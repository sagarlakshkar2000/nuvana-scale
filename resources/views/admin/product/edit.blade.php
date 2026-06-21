@extends('layouts.admin')

@section('content')
  <div class="container">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mt-2 mb-4 p-2 border-bottom">
      <div>
        <h4 class="h4 mb-1 fw-bold" style="color: #1a1e2b;">
          <i class="fas fa-edit me-2 text-primary"></i>Edit Product
        </h4>
        <p class="text-muted mb-0">Update product details</p>
      </div>
      <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-lg px-4">
        <i class="fas fa-arrow-left me-2"></i>Back to Products
      </a>
    </div>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-12">

          <!-- Basic Information Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-info-circle me-2 text-primary"></i>Basic Information
              </h5>
            </div>
            <div class="card-body px-4 pb-4">
              <div class="row g-3">
                <div class="col-md-8">
                  <label class="form-label fw-semibold">Product Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', $product->name) }}" placeholder="Enter product name" required>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-4">
                  <label class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                  <select class="form-select form-select-lg @error('category_id') is-invalid @enderror" name="category_id"
                    required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                    @endforeach
                  </select>
                  @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Slug</label>
                  <input type="text" class="form-control form-control-lg @error('slug') is-invalid @enderror" name="slug"
                    value="{{ old('slug', $product->slug) }}" placeholder="Auto-generated">
                  @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">SKU</label>
                  <input type="text" class="form-control form-control-lg @error('sku') is-invalid @enderror" name="sku"
                    value="{{ old('sku', $product->sku) }}" placeholder="Auto-generated">
                  @error('sku')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                    placeholder="Write a detailed product description...">{{ old('description', $product->description) }}</textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>

          <!-- Product Images Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-image me-2 text-primary"></i>Product Images
              </h5>
            </div>
            <div class="card-body px-4 pb-4">
              <div class="upload-area border-2 border-dashed rounded-3 p-5 text-center"
                style="background: #f8f9fa; cursor: pointer; transition: all 0.3s;" id="uploadArea">
                <input type="file" class="d-none" name="images[]" multiple accept="image/*" id="imageInput">
                <i class="fas fa-cloud-upload-alt fa-4x text-primary mb-3"></i>
                <h6 class="mb-2">Click or drag images here to upload</h6>
                <p class="text-muted small mb-0">Supports JPEG, PNG, GIF, WEBP (No limit on number of images)</p>
              </div>

              @error('images')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
              @enderror

              <div class="row mt-4" id="existingImagePreview">
                @if(isset($product) && $product->images)
                  @foreach($product->images as $img)
                    <div class="col-md-2 col-4 mb-3 image-preview-item existing-image" data-id="{{ $img->id }}">
                      <div class="position-relative">
                        <img src="{{ asset('storage/' . $img->image_url) }}" class="img-fluid rounded-3 border shadow-sm"
                          style="height: 140px; width: 100%; object-fit: cover;">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 rounded-circle"
                          onclick="removeExistingImage(this, {{ $img->id }})"
                          style="width: 32px; height: 32px; padding: 0;" title="Remove image">
                          <i class="fas fa-times"></i>
                        </button>
                        <input type="hidden" name="existing_images[]" value="{{ $img->id }}">
                      </div>
                    </div>
                  @endforeach
                @endif
              </div>
              <div class="row mt-2" id="imagePreview"></div>
            </div>
          </div>

          <!-- Specifications Card -->
          <!-- <div class="card shadow-sm mb-4 border-0 rounded-3">
                                                                                                                                                                                            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
                                                                                                                                                                                              <h5 class="mb-0 fw-semibold">
                                                                                                                                                                                                <i class="fas fa-list-ul me-2 text-primary"></i>Specifications
                                                                                                                                                                                              </h5>
                                                                                                                                                                                              <button type="button" class="btn btn-primary btn-sm px-3" id="addSpecBtn">
                                                                                                                                                                                                <i class="fas fa-plus me-1"></i> Add Specification
                                                                                                                                                                                              </button>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="card-body px-4 pb-4">
                                                                                                                                                                                              <div id="specificationsContainer">
                                                                                                                                                                                                @if(old('specifications'))
                                                                                                                                                                                                  @foreach(old('specifications') as $index => $spec)
                                                                                                                                                                                                    <div class="spec-row row g-2 mb-3">
                                                                                                                                                                                                      <div class="col-md-5">
                                                                                                                                                                                                        <input type="text" class="form-control" name="specifications[{{ $index }}][key]"
                                                                                                                                                                                                          value="{{ $spec['key'] }}" placeholder="Property name (e.g., Brand)">
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                      <div class="col-md-6">
                                                                                                                                                                                                        <input type="text" class="form-control" name="specifications[{{ $index }}][value]"
                                                                                                                                                                                                          value="{{ $spec['value'] }}" placeholder="Value (e.g., Apple)">
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                      <div class="col-md-1">
                                                                                                                                                                                                        <button type="button" class="btn btn-danger btn-sm removeSpecBtn w-100">
                                                                                                                                                                                                          <i class="fas fa-trash"></i>
                                                                                                                                                                                                        </button>
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                  @endforeach
                                                                                                                                                                                                @endif
                                                                                                                                                                                              </div>

                                                                                                                                                                                              <div id="noSpecMsg" class="text-center py-5 text-muted"
                                                                                                                                                                                                style="{{ old('specifications') ? 'display: none;' : '' }}">
                                                                                                                                                                                                <i class="fas fa-cube fa-3x mb-3 opacity-25"></i>
                                                                                                                                                                                                <p>No specifications added yet</p>
                                                                                                                                                                                                <small>Click the "Add Specification" button to start</small>
                                                                                                                                                                                              </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                          </div> -->

          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-list-ul me-2 text-primary"></i>Specifications
              </h5>
              <button type="button" class="btn btn-primary btn-sm px-3" id="addSpecBtn">
                <i class="fas fa-plus me-1"></i> Add Custom Specification
              </button>
            </div>
            <div class="card-body px-4 pb-4">
              <!-- Predefined Specifications Section -->
              <div class="mb-4">
                <label class="form-label fw-semibold mb-3">
                  <i class="fas fa-star me-1 text-warning"></i> Common Specifications
                </label>
                <div class="row g-3" id="predefinedSpecsContainer">
                  @php
                    $predefinedSpecs = [
                      'Model' => '',
                      'Capacity' => '',
                      'Display' => '',
                      'Multiple Units' => '',
                      'Pan Size' => '',
                      'Power Supply' => '',
                      'Battery Backup' => '',
                      'Operating Temp.' => '',
                      'Body Material' => '',
                      'Functions' => '',
                      'Overload Protection' => '',
                      'Auto Shut-off' => '',
                    ];
                  @endphp

                  @foreach($predefinedSpecs as $specKey => $specValue)
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light" style="min-width: 130px;">
                          <strong>{{ $specKey }}</strong>
                        </span>
                        <input type="text" class="form-control" name="predefined_specs[{{ $specKey }}]"
                          value="{{ old('predefined_specs.' . $specKey, $specValue) }}" placeholder="Enter {{ $specKey }}">
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

              <!-- Custom Specifications Section -->
              <div class="my-3">
                <div id="specificationsContainer">
                  @if(old('specifications'))
                    @foreach(old('specifications') as $index => $spec)
                      <div class="spec-row row g-2 mb-3">
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="specifications[{{ $index }}][key]"
                            value="{{ $spec['key'] }}" placeholder="Property name (e.g., Battery Life)">
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="specifications[{{ $index }}][value]"
                            value="{{ $spec['value'] }}" placeholder="Value (e.g., 24 hours)">
                        </div>
                        <div class="col-md-1">
                          <button type="button" class="btn btn-danger btn-sm removeSpecBtn w-100">
                            <i class="fas fa-trash"></i>
                          </button>
                        </div>
                      </div>
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
          </div>

          <!-- Dynamic Sections: Features, Ideal For, Why Choose Nuvana, FAQs -->
          
          <!-- Best Features Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-star me-2 text-warning"></i>Best Features
              </h5>
              <button type="button" class="btn btn-primary btn-sm px-3" id="addFeatureBtn">
                <i class="fas fa-plus me-1"></i> Add Feature
              </button>
            </div>
            <div class="card-body px-4 pb-4">
              <div id="featuresContainer">
                @if(old('features', $product->features))
                  @foreach(old('features', $product->features) as $index => $feature)
                    <div class="feature-row row g-2 mb-3">
                      <div class="col-md-11">
                        <input type="text" class="form-control" name="features[]" value="{{ $feature }}" placeholder="e.g. High Accuracy">
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="feature-row row g-2 mb-3">
                    <div class="col-md-11">
                      <input type="text" class="form-control" name="features[]" placeholder="e.g. High Accuracy">
                    </div>
                    <div class="col-md-1">
                      <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <!-- Ideal Product For Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-bullseye me-2 text-success"></i>Ideal Product For
              </h5>
              <button type="button" class="btn btn-primary btn-sm px-3" id="addIdealBtn">
                <i class="fas fa-plus me-1"></i> Add Target
              </button>
            </div>
            <div class="card-body px-4 pb-4">
              <div id="idealsContainer">
                @if(old('ideal_for', $product->ideal_for))
                  @foreach(old('ideal_for', $product->ideal_for) as $index => $ideal)
                    <div class="ideal-row row g-2 mb-3">
                      <div class="col-md-11">
                        <input type="text" class="form-control" name="ideal_for[]" value="{{ $ideal }}" placeholder="e.g. Retail Shop & Supermarkets">
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="ideal-row row g-2 mb-3">
                    <div class="col-md-11">
                      <input type="text" class="form-control" name="ideal_for[]" placeholder="e.g. Retail Shop & Supermarkets">
                    </div>
                    <div class="col-md-1">
                      <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <!-- Why Choose Nuvana Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-award me-2 text-info"></i>Why Choose Nuvana?
              </h5>
              <button type="button" class="btn btn-primary btn-sm px-3" id="addReasonBtn">
                <i class="fas fa-plus me-1"></i> Add Reason
              </button>
            </div>
            <div class="card-body px-4 pb-4">
              <div id="reasonsContainer">
                @if(old('why_choose_nuvana', $product->why_choose_nuvana))
                  @foreach(old('why_choose_nuvana', $product->why_choose_nuvana) as $index => $reason)
                    <div class="reason-row row g-2 mb-3">
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="why_choose_nuvana[{{ $index }}][title]" value="{{ $reason['title'] ?? '' }}" placeholder="Title (e.g. Premium Quality)">
                      </div>
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="why_choose_nuvana[{{ $index }}][description]" value="{{ $reason['description'] ?? '' }}" placeholder="Description">
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="reason-row row g-2 mb-3">
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="why_choose_nuvana[0][title]" placeholder="Title (e.g. Premium Quality)">
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="why_choose_nuvana[0][description]" placeholder="Description">
                    </div>
                    <div class="col-md-1">
                      <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <!-- FAQs Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-question-circle me-2 text-primary"></i>FAQs
              </h5>
              <button type="button" class="btn btn-primary btn-sm px-3" id="addFaqBtn">
                <i class="fas fa-plus me-1"></i> Add FAQ
              </button>
            </div>
            <div class="card-body px-4 pb-4">
              <div id="faqsContainer">
                @if(old('faqs', $product->faqs))
                  @foreach(old('faqs', $product->faqs) as $index => $faq)
                    <div class="faq-row row g-2 mb-3">
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="faqs[{{ $index }}][question]" value="{{ $faq['question'] ?? '' }}" placeholder="Question">
                      </div>
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="faqs[{{ $index }}][answer]" value="{{ $faq['answer'] ?? '' }}" placeholder="Answer">
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="faq-row row g-2 mb-3">
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="faqs[0][question]" placeholder="Question">
                    </div>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="faqs[0][answer]" placeholder="Answer">
                    </div>
                    <div class="col-md-1">
                      <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <!-- Settings Card -->
          <div class="card shadow-sm mb-4 border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3 px-4">
              <h5 class="mb-0 fw-semibold">
                <i class="fas fa-sliders-h me-2 text-primary"></i>Product Settings
              </h5>
            </div>
            <div class="card-body px-4 pb-4">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">
                    <i class="fas fa-certificate me-1 text-primary"></i> Product Badge
                  </label>
                  <select class="form-select form-select-lg @error('badge') is-invalid @enderror" name="badge">
                    <option value="">No Badge</option>
                    <option value="trending" {{ old('badge', $product->badge) == 'trending' ? 'selected' : '' }}>🔥 Trending</option>
                    <option value="new" {{ old('badge', $product->badge) == 'new' ? 'selected' : '' }}>✨ New</option>
                    <option value="best_seller" {{ old('badge', $product->badge) == 'best_seller' ? 'selected' : '' }}>🏆 Best Seller
                    </option>
                    <option value="sale" {{ old('badge', $product->badge) == 'sale' ? 'selected' : '' }}>💰 Sale</option>
                    <option value="hot" {{ old('badge', $product->badge) == 'hot' ? 'selected' : '' }}>🔥 Hot</option>
                  </select>
                  @error('badge')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">
                    <i class="fas fa-toggle-on me-1 text-primary"></i> Product Status
                  </label>
                  <select class="form-select form-select-lg @error('status') is-invalid @enderror" name="status">
                    <option value="active" {{ old('status', $product->is_active ? 'active' : 'inactive') == 'active' ? 'selected' : '' }}>🟢 Active</option>
                    <option value="inactive" {{ old('status', $product->is_active ? 'active' : 'inactive') == 'inactive' ? 'selected' : '' }}>🔴 Inactive</option>
                  </select>
                  @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-end gap-3 mb-5 pb-3">
          <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-lg px-5">
            <i class="fas fa-times me-2"></i>Cancel
          </a>
          <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">
            <i class="fas fa-check-circle me-2"></i>Update Product
          </button>
        </div>
      </div>
  </div>
  </form>
  </div>
@endsection

@push('scripts')

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // ========== IMAGE UPLOAD WITH DRAG & DROP ==========
      const uploadArea = document.getElementById('uploadArea');
      const imageInput = document.getElementById('imageInput');
      const imagePreview = document.getElementById('imagePreview');
      let filesArray = [];

      if (uploadArea) {
        uploadArea.addEventListener('click', () => imageInput.click());

        uploadArea.addEventListener('dragover', (e) => {
          e.preventDefault();
          uploadArea.classList.add('drag-over');
        });

        uploadArea.addEventListener('dragleave', () => {
          uploadArea.classList.remove('drag-over');
        });

        uploadArea.addEventListener('drop', (e) => {
          e.preventDefault();
          uploadArea.classList.remove('drag-over');
          const files = Array.from(e.dataTransfer.files);
          handleFiles(files);
        });
      }

      if (imageInput) {
        imageInput.addEventListener('change', function () {
          handleFiles(Array.from(this.files));
        });
      }

      function handleFiles(files) {
        const validFiles = files.filter(file => {
          const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/jpg'];
          const isValid = validTypes.includes(file.type);
          if (!isValid) alert(`${file.name} is not a valid image format`);
          return isValid;
        });

        filesArray = [...filesArray, ...validFiles];
        updatePreview();
        updateFileInput();
      }

      function updatePreview() {
        if (!imagePreview) return;
        imagePreview.innerHTML = '';

        filesArray.forEach((file, index) => {
          const reader = new FileReader();
          reader.onload = function (e) {
            const col = document.createElement('div');
            col.className = 'col-md-2 col-4 mb-3 image-preview-item';
            col.innerHTML = `
                                                                                                                                                                          <div class="position-relative">
                                                                                                                                                                              <img src="${e.target.result}" class="img-fluid rounded-3 border shadow-sm"
                                                                                                                                                                                   style="height: 140px; width: 100%; object-fit: cover;">
                                                                                                                                                                              <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 rounded-circle"
                                                                                                                                                                                      onclick="window.removeImage(${index})"
                                                                                                                                                                                      style="width: 32px; height: 32px; padding: 0;">
                                                                                                                                                                                  <i class="fas fa-times"></i>
                                                                                                                                                                              </button>
                                                                                                                                                                              ${index === 0 ?
                '<span class="position-absolute bottom-0 start-0 bg-primary text-white px-3 py-1 small m-2 rounded-pill">' +
                '<i class="fas fa-star me-1"></i>Main Image</span>' : ''}
                                                                                                                                                                          </div>
                                                                                                                                                                      `;
            imagePreview.appendChild(col);
          };
          reader.readAsDataURL(file);
        });
      }

      window.removeImage = function (index) {
        filesArray.splice(index, 1);
        updatePreview();
        updateFileInput();
      };

      window.removeExistingImage = function(btn, id) {
        const container = document.createElement('input');
        container.type = 'hidden';
        container.name = 'delete_images[]';
        container.value = id;
        document.getElementById('productForm').appendChild(container);
        
        const item = btn.closest('.existing-image');
        item.style.animation = 'fadeOut 0.2s ease-out';
        setTimeout(() => item.remove(), 200);
      };

      function updateFileInput() {
        if (!imageInput) return;
        const dataTransfer = new DataTransfer();
        filesArray.forEach(file => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
      }

      // ========== CUSTOM SPECIFICATIONS ==========
      let specCounter = {{ old('specifications') ? count(old('specifications')) : 0 }};
      const container = document.getElementById('specificationsContainer');
      const noSpecMsg = document.getElementById('noSpecMsg');
      const addSpecBtn = document.getElementById('addSpecBtn');

      if (addSpecBtn) {
        addSpecBtn.addEventListener('click', function () {
          specCounter++;
          const specRow = document.createElement('div');
          specRow.className = 'spec-row row g-2 mb-3';
          specRow.innerHTML = `
                                                                                                                                                                      <div class="col-md-5">
                                                                                                                                                                          <input type="text" class="form-control"
                                                                                                                                                                                 name="specifications[${specCounter}][key]"
                                                                                                                                                                                 placeholder="Property name (e.g., Battery Life)">
                                                                                                                                                                      </div>
                                                                                                                                                                      <div class="col-md-6">
                                                                                                                                                                          <input type="text" class="form-control"
                                                                                                                                                                                 name="specifications[${specCounter}][value]"
                                                                                                                                                                                 placeholder="Value (e.g., 24 hours)">
                                                                                                                                                                      </div>
                                                                                                                                                                      <div class="col-md-1">
                                                                                                                                                                          <button type="button" class="btn btn-danger btn-sm removeSpecBtn w-100">
                                                                                                                                                                              <i class="fas fa-trash"></i>
                                                                                                                                                                          </button>
                                                                                                                                                                      </div>
                                                                                                                                                                  `;
          container.appendChild(specRow);
          if (noSpecMsg) noSpecMsg.style.display = 'none';
          specRow.style.animation = 'fadeIn 0.3s ease-in';
          specRow.querySelector('input').focus();
        });
      }

      // Remove custom specification
      document.addEventListener('click', function (e) {
        if (e.target.closest('.removeSpecBtn')) {
          const row = e.target.closest('.spec-row');
          if (row) {
            row.style.animation = 'fadeOut 0.2s ease-out';
            setTimeout(() => {
              row.remove();
              if (container && container.children.length === 0 && noSpecMsg) {
                noSpecMsg.style.display = 'block';
                specCounter = 0;
              }
            }, 200);
          }
        }
      });

      // ========== DYNAMIC SECTIONS HANDLERS ==========
      function setupRepeater(addBtnId, containerId, templateFn) {
        const addBtn = document.getElementById(addBtnId);
        const container = document.getElementById(containerId);
        if (!addBtn || !container) return;

        let counter = container.children.length;

        addBtn.addEventListener('click', function () {
          const row = document.createElement('div');
          row.className = 'row g-2 mb-3 dynamic-row';
          row.innerHTML = templateFn(counter);
          container.appendChild(row);
          row.style.animation = 'fadeIn 0.3s ease-in';
          
          const firstInput = row.querySelector('input');
          if (firstInput) firstInput.focus();
          
          counter++;
        });
      }

      setupRepeater('addFeatureBtn', 'featuresContainer', () => `
        <div class="col-md-11">
          <input type="text" class="form-control" name="features[]" placeholder="e.g. High Accuracy">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100"><i class="fas fa-trash"></i></button>
        </div>
      `);

      setupRepeater('addIdealBtn', 'idealsContainer', () => `
        <div class="col-md-11">
          <input type="text" class="form-control" name="ideal_for[]" placeholder="e.g. Retail Shop & Supermarkets">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100"><i class="fas fa-trash"></i></button>
        </div>
      `);

      setupRepeater('addReasonBtn', 'reasonsContainer', (idx) => `
        <div class="col-md-4">
          <input type="text" class="form-control" name="why_choose_nuvana[${idx}][title]" placeholder="Title (e.g. Premium Quality)">
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control" name="why_choose_nuvana[${idx}][description]" placeholder="Description">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100"><i class="fas fa-trash"></i></button>
        </div>
      `);

      setupRepeater('addFaqBtn', 'faqsContainer', (idx) => `
        <div class="col-md-4">
          <input type="text" class="form-control" name="faqs[${idx}][question]" placeholder="Question">
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control" name="faqs[${idx}][answer]" placeholder="Answer">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-danger btn-sm removeRowBtn w-100"><i class="fas fa-trash"></i></button>
        </div>
      `);

      // Generic remove row handler
      document.addEventListener('click', function (e) {
        if (e.target.closest('.removeRowBtn')) {
          const btn = e.target.closest('.removeRowBtn');
          const row = btn.closest('.row');
          if (row) {
            row.style.animation = 'fadeOut 0.2s ease-out';
            setTimeout(() => row.remove(), 200);
          }
        }
      });

      // ========== AUTO SKU GENERATION ==========
      const nameInput = document.querySelector('input[name="name"]');
      const skuInput = document.querySelector('input[name="sku"]');
      const slugInput = document.querySelector('input[name="slug"]');

      if (nameInput && skuInput) {
        nameInput.addEventListener('blur', function () {
          if (!skuInput.value.trim()) {
            const name = this.value.trim();
            if (name) {
              const sku = name.toUpperCase()
                .replace(/[^A-Z0-9]/g, '')
                .substring(0, 8) + '-' +
                Math.random().toString(36).substring(2, 6).toUpperCase();
              skuInput.value = sku;
            }
          }
        });
      }

      // ========== FORM SUBMISSION ==========
      const form = document.getElementById('productForm');
      const submitBtn = document.getElementById('submitBtn');

      if (form && submitBtn) {
        form.addEventListener('submit', function () {
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Creating Product...';
        });
      }

      // ========== ANIMATIONS ==========
      const style = document.createElement('style');
      style.textContent = `
                                                                                                                                                              @keyframes fadeIn {
                                                                                                                                                                  from { opacity: 0; transform: scale(0.95); }
                                                                                                                                                                  to { opacity: 1; transform: scale(1); }
                                                                                                                                                              }
                                                                                                                                                              @keyframes fadeOut {
                                                                                                                                                                  from { opacity: 1; transform: scale(1); }
                                                                                                                                                                  to { opacity: 0; transform: scale(0.95); }
                                                                                                                                                              }
                                                                                                                                                              .spec-row {
                                                                                                                                                                  animation: fadeIn 0.3s ease-in;
                                                                                                                                                              }
                                                                                                                                                              .upload-area.drag-over {
                                                                                                                                                                  background-color: #cfe2ff !important;
                                                                                                                                                                  border-color: #0d6efd !important;
                                                                                                                                                              }
                                                                                                                                                          `;
      document.head.appendChild(style);
    });
  </script>
@endpush
