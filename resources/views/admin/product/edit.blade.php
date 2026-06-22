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

          <!-- Tab Navigation -->
          <ul class="nav nav-pills mb-4 bg-white p-2 rounded-3 shadow-sm" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active px-4 fw-semibold" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">
                <i class="fas fa-info-circle me-2"></i>General
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link px-4 fw-semibold" id="media-tab" data-bs-toggle="pill" data-bs-target="#media" type="button" role="tab" aria-controls="media" aria-selected="false">
                <i class="fas fa-image me-2"></i>Media
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link px-4 fw-semibold" id="specifications-tab" data-bs-toggle="pill" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">
                <i class="fas fa-list-ul me-2"></i>Specifications
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link px-4 fw-semibold" id="marketing-tab" data-bs-toggle="pill" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">
                <i class="fas fa-bullseye me-2"></i>Marketing & FAQs
              </button>
            </li>
          </ul>

          <div class="tab-content" id="productTabsContent">
            
            <!-- GENERAL TAB -->
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
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

            <!-- MEDIA TAB -->
            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
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
            </div>

            <!-- SPECIFICATIONS TAB -->
            <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
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
                              value="{{ old('predefined_specs.' . $specKey, $product->predefined_specs[$specKey] ?? '') }}" placeholder="Enter {{ $specKey }}">
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>

                  <!-- Custom Specifications Section -->
                  <div class="my-3">
                    <div id="specificationsContainer">
                      @if(old('specifications', $product->specifications))
                        @foreach(old('specifications', $product->specifications) as $index => $spec)
                          <div class="spec-row row g-2 mb-3">
                            <div class="col-md-5">
                              <input type="text" class="form-control" name="specifications[{{ $index }}][key]"
                                value="{{ $spec['key'] ?? '' }}" placeholder="Property name (e.g., Battery Life)">
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" name="specifications[{{ $index }}][value]"
                                value="{{ $spec['value'] ?? '' }}" placeholder="Value (e.g., 24 hours)">
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

            <!-- MARKETING TAB -->
            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
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
                        @php
                          $isString = is_string($feature);
                          $fIcon = $isString ? '' : ($feature['icon'] ?? '');
                          $fTitle = $isString ? $feature : ($feature['title'] ?? '');
                          $fDesc = $isString ? '' : ($feature['description'] ?? '');
                        @endphp
                        <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                          <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
                              <input type="text" class="form-control" name="features[{{ $index }}][icon]" value="{{ $fIcon }}" placeholder="e.g. ⭐, 🎯">
                            </div>
                            <div class="col-md-6">
                              <label class="form-label small fw-semibold text-muted mb-1">Title</label>
                              <input type="text" class="form-control" name="features[{{ $index }}][title]" value="{{ $fTitle }}" placeholder="e.g. High Quality">
                            </div>
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                              <textarea class="form-control" name="features[{{ $index }}][description]" rows="2" placeholder="Detailed description...">{{ $fDesc }}</textarea>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                          <i class="fas fa-times"></i>
                        </button>
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
                            <input type="text" class="form-control" name="features[0][icon]" placeholder="e.g. ⭐, 🎯">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted mb-1">Title</label>
                            <input type="text" class="form-control" name="features[0][title]" placeholder="e.g. High Quality">
                          </div>
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                            <textarea class="form-control" name="features[0][description]" rows="2" placeholder="Detailed description..."></textarea>
                          </div>
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
                        @php
                          $isString = is_string($ideal);
                          $iIcon = $isString ? '' : ($ideal['icon'] ?? '');
                          $iTitle = $isString ? $ideal : ($ideal['title'] ?? '');
                          $iDesc = $isString ? '' : ($ideal['description'] ?? '');
                        @endphp
                        <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                          <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
                              <input type="text" class="form-control" name="ideal_for[{{ $index }}][icon]" value="{{ $iIcon }}" placeholder="e.g. ⭐, 🎯">
                            </div>
                            <div class="col-md-6">
                              <label class="form-label small fw-semibold text-muted mb-1">Target Name</label>
                              <input type="text" class="form-control" name="ideal_for[{{ $index }}][title]" value="{{ $iTitle }}" placeholder="e.g. Retail Shops">
                            </div>
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                              <textarea class="form-control" name="ideal_for[{{ $index }}][description]" rows="2" placeholder="Detailed description...">{{ $iDesc }}</textarea>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                          <i class="fas fa-times"></i>
                        </button>
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
                            <input type="text" class="form-control" name="ideal_for[0][icon]" placeholder="e.g. ⭐, 🎯">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted mb-1">Target Name</label>
                            <input type="text" class="form-control" name="ideal_for[0][title]" placeholder="e.g. Retail Shops">
                          </div>
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                            <textarea class="form-control" name="ideal_for[0][description]" rows="2" placeholder="Detailed description..."></textarea>
                          </div>
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
                        <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                          <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="row g-3">
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Reason Title</label>
                              <input type="text" class="form-control" name="why_choose_nuvana[{{ $index }}][title]" value="{{ $reason['title'] ?? '' }}" placeholder="e.g. Premium Quality">
                            </div>
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                              <textarea class="form-control" name="why_choose_nuvana[{{ $index }}][description]" rows="2" placeholder="Why should they choose Nuvana?">{{ $reason['description'] ?? '' }}</textarea>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                          <i class="fas fa-times"></i>
                        </button>
                        <div class="row g-3">
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Reason Title</label>
                            <input type="text" class="form-control" name="why_choose_nuvana[0][title]" placeholder="e.g. Premium Quality">
                          </div>
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
                            <textarea class="form-control" name="why_choose_nuvana[0][description]" rows="2" placeholder="Why should they choose Nuvana?"></textarea>
                          </div>
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
                        <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                          <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="row g-3">
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Question</label>
                              <textarea class="form-control" name="faqs[{{ $index }}][question]" rows="2" placeholder="Type the question here...">{{ $faq['question'] ?? '' }}</textarea>
                            </div>
                            <div class="col-12">
                              <label class="form-label small fw-semibold text-muted mb-1">Answer</label>
                              <textarea class="form-control" name="faqs[{{ $index }}][answer]" rows="2" placeholder="Type the answer here...">{{ $faq['answer'] ?? '' }}</textarea>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="dynamic-item p-3 border rounded mb-3 position-relative bg-light">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
                          <i class="fas fa-times"></i>
                        </button>
                        <div class="row g-3">
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Question</label>
                            <textarea class="form-control" name="faqs[0][question]" rows="2" placeholder="Type the question here..."></textarea>
                          </div>
                          <div class="col-12">
                            <label class="form-label small fw-semibold text-muted mb-1">Answer</label>
                            <textarea class="form-control" name="faqs[0][answer]" rows="2" placeholder="Type the answer here..."></textarea>
                          </div>
                        </div>
                      </div>
                    @endif
                  </div>
                </div>
              </div>

            </div> <!-- End Marketing Tab -->
          </div> <!-- End Tab Content -->
        </div> <!-- End Col 12 -->

        <!-- Action Buttons -->
        <div class="col-12 mt-3">
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

      // ========== TAB VALIDATION HANDLER ==========
      const form = document.getElementById('productForm');
      const submitBtn = document.getElementById('submitBtn');

      if (form) {
        form.addEventListener('submit', function (e) {
          // Find first invalid element
          const invalidInputs = form.querySelectorAll(':invalid, .is-invalid');
          if (invalidInputs.length > 0) {
            e.preventDefault();
            const firstInvalid = invalidInputs[0];
            // Find which tab pane this input belongs to
            const tabPane = firstInvalid.closest('.tab-pane');
            if (tabPane) {
              const tabId = tabPane.id;
              const tabTrigger = document.querySelector(`button[data-bs-target="#${tabId}"]`);
              if (tabTrigger) {
                // Switch to that tab
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();
                // Focus the invalid element after tab switches
                setTimeout(() => firstInvalid.focus(), 300);
              }
            }
            return;
          }
          
          if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Updating Product...';
          }
        });
      }

      // If server-side errors exist, open the first tab containing an error
      const firstServerError = document.querySelector('.is-invalid, .alert-danger');
      if (firstServerError) {
        const tabPane = firstServerError.closest('.tab-pane');
        if (tabPane) {
          const tabId = tabPane.id;
          const tabTrigger = document.querySelector(`button[data-bs-target="#${tabId}"]`);
          if (tabTrigger) {
            const tab = new bootstrap.Tab(tabTrigger);
            tab.show();
          }
        }
      }

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
                  ${index === 0 && !document.querySelector('.existing-image') ?
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
      let specCounter = {{ old('specifications', $product->specifications) ? count(old('specifications', $product->specifications)) : 0 }};
      const container = document.getElementById('specificationsContainer');
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
          row.className = 'dynamic-item p-3 border rounded mb-3 position-relative bg-light';
          row.innerHTML = templateFn(counter);
          container.appendChild(row);
          row.style.animation = 'fadeIn 0.3s ease-in';
          
          const firstInput = row.querySelector('input');
          if (firstInput) firstInput.focus();
          
          counter++;
        });
      }

      setupRepeater('addFeatureBtn', 'featuresContainer', (idx) => `
        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
          <i class="fas fa-times"></i>
        </button>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
            <input type="text" class="form-control" name="features[${idx}][icon]" placeholder="e.g. ⭐, 🎯">
          </div>
          <div class="col-md-6">
            <label class="form-label small fw-semibold text-muted mb-1">Title</label>
            <input type="text" class="form-control" name="features[${idx}][title]" placeholder="e.g. High Quality">
          </div>
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
            <textarea class="form-control" name="features[${idx}][description]" rows="2" placeholder="Detailed description..."></textarea>
          </div>
        </div>
      `);

      setupRepeater('addIdealBtn', 'idealsContainer', (idx) => `
        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
          <i class="fas fa-times"></i>
        </button>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label small fw-semibold text-muted mb-1">Icon or Emoji</label>
            <input type="text" class="form-control" name="ideal_for[${idx}][icon]" placeholder="e.g. ⭐, 🎯">
          </div>
          <div class="col-md-6">
            <label class="form-label small fw-semibold text-muted mb-1">Target Name</label>
            <input type="text" class="form-control" name="ideal_for[${idx}][title]" placeholder="e.g. Retail Shops">
          </div>
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
            <textarea class="form-control" name="ideal_for[${idx}][description]" rows="2" placeholder="Detailed description..."></textarea>
          </div>
        </div>
      `);

      setupRepeater('addReasonBtn', 'reasonsContainer', (idx) => `
        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
          <i class="fas fa-times"></i>
        </button>
        <div class="row g-3">
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Reason Title</label>
            <input type="text" class="form-control" name="why_choose_nuvana[${idx}][title]" placeholder="e.g. Premium Quality">
          </div>
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Description</label>
            <textarea class="form-control" name="why_choose_nuvana[${idx}][description]" rows="2" placeholder="Why should they choose Nuvana?"></textarea>
          </div>
        </div>
      `);

      setupRepeater('addFaqBtn', 'faqsContainer', (idx) => `
        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 removeRowBtn" style="z-index: 10;">
          <i class="fas fa-times"></i>
        </button>
        <div class="row g-3">
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Question</label>
            <textarea class="form-control" name="faqs[${idx}][question]" rows="2" placeholder="Type the question here..."></textarea>
          </div>
          <div class="col-12">
            <label class="form-label small fw-semibold text-muted mb-1">Answer</label>
            <textarea class="form-control" name="faqs[${idx}][answer]" rows="2" placeholder="Type the answer here..."></textarea>
          </div>
        </div>
      `);

      // Generic remove row handler
      document.addEventListener('click', function (e) {
        if (e.target.closest('.removeRowBtn')) {
          const btn = e.target.closest('.removeRowBtn');
          const item = btn.closest('.dynamic-item');
          if (item) {
            item.style.animation = 'fadeOut 0.2s ease-out';
            setTimeout(() => item.remove(), 200);
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
        /* Custom tab styles */
        .nav-pills .nav-link {
            color: #495057;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }
        .nav-pills .nav-link.active {
            background-color: #e0e7ff;
            color: #4f46e5;
        }
        .nav-pills .nav-link:hover:not(.active) {
            background-color: #f3f4f6;
        }
      `;
      document.head.appendChild(style);
    });
  </script>
@endpush
