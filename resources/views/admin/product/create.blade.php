@extends('layouts.admin')

@section('title', 'Create Product - Nuvana Admin')

@section('content')
<style>
  :root {
    --primary-dark: #212529;
    --primary-hover: #000000;
    --gray-bg: #f8f9fa;
    --border-light: #e9ecef;
    --text-muted: #6c757d;
  }

  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
    background: var(--gray-bg);
  }

  /* Wizard Steps */
  .wizard-step {
    position: relative;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .step-number {
    width: 40px;
    height: 40px;
    background: white;
    border: 2px solid var(--border-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--text-muted);
    transition: all 0.2s ease;
  }

  .wizard-step.active .step-number {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
    color: white;
  }

  .wizard-step.completed .step-number {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
    color: white;
  }

  .wizard-step.completed .step-number::after {
    content: '✓';
    font-size: 18px;
  }

  .step-line {
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--border-light);
    z-index: -1;
  }

  .wizard-step.active .step-label {
    color: var(--primary-dark);
    font-weight: 600;
  }

  /* Cards */
  .form-card {
    background: white;
    border-radius: 16px;
    border: 1px solid var(--border-light);
    transition: all 0.2s ease;
  }

  .form-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  /* Form Controls */
  .form-control, .form-select {
    border-radius: 10px;
    border: 1.5px solid var(--border-light);
    padding: 10px 14px;
    transition: all 0.2s ease;
  }

  .form-control:focus, .form-select:focus {
    border-color: var(--primary-dark);
    box-shadow: 0 0 0 3px rgba(33, 37, 41, 0.1);
  }

  .form-label {
    font-weight: 600;
    font-size: 0.875rem;
    margin-bottom: 0.5rem;
    color: var(--primary-dark);
  }

  /* Drag & Drop Area */
  .drag-area {
    border: 2px dashed var(--border-light);
    border-radius: 16px;
    background: var(--gray-bg);
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .drag-area.drag-over {
    border-color: var(--primary-dark);
    background: white;
  }

  /* Badge Selector */
  .badge-option {
    cursor: pointer;
    padding: 8px 16px;
    border-radius: 40px;
    background: white;
    border: 1.5px solid var(--border-light);
    transition: all 0.2s ease;
  }

  .badge-option:hover {
    border-color: var(--primary-dark);
    transform: translateY(-1px);
  }

  .badge-option.selected {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
    color: white;
  }

  /* Preview Card */
  .preview-card {
    background: white;
    border-radius: 20px;
    border: 1px solid var(--border-light);
    overflow: hidden;
    transition: all 0.2s ease;
  }

  .preview-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
  }

  /* Buttons */
  .btn-primary-custom {
    background: var(--primary-dark);
    color: white;
    border: none;
    padding: 10px 24px;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.2s ease;
  }

  .btn-primary-custom:hover {
    background: var(--primary-hover);
    transform: translateY(-1px);
  }

  .btn-outline-custom {
    border: 1.5px solid var(--border-light);
    background: white;
    padding: 10px 24px;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.2s ease;
  }

  .btn-outline-custom:hover {
    border-color: var(--primary-dark);
    transform: translateY(-1px);
  }

  /* Animations */
  .step-content {
    animation: fadeIn 0.3s ease;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Image Grid */
  .image-item {
    position: relative;
    cursor: move;
    transition: all 0.2s ease;
  }

  .image-item:hover {
    transform: scale(1.05);
  }

  .featured-badge {
    position: absolute;
    bottom: 8px;
    left: 8px;
    background: var(--primary-dark);
    color: white;
    padding: 4px 8px;
    border-radius: 6px;
    font-size: 10px;
    font-weight: 600;
  }

  /* Scrollbar */
  ::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }

  ::-webkit-scrollbar-track {
    background: var(--gray-bg);
  }

  ::-webkit-scrollbar-thumb {
    background: var(--border-light);
    border-radius: 4px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: var(--text-muted);
  }
</style>

<div class="container-fluid px-4 py-4">
  <!-- Sticky Header -->
  <div class="position-sticky top-0 bg-white z-3 mb-4 pb-3" style="background: var(--gray-bg) !important; z-index: 1000;">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="display-6 fw-bold mb-1" style="font-size: 1.75rem;">Create New Product</h1>
        <p class="text-muted mb-0">Add a new product to your inventory</p>
      </div>
      <div class="d-flex gap-2">
        <button type="button" class="btn-outline-custom" id="saveDraftBtn">
          <i class="far fa-save me-2"></i>Save Draft
        </button>
        <button type="submit" form="productForm" class="btn-primary-custom">
          <i class="fas fa-check-circle me-2"></i>Publish Product
        </button>
      </div>
    </div>

    <!-- Wizard Steps -->
    <div class="row mt-4 position-relative">
      <div class="step-line" style="top: 20px;"></div>
      <div class="col-md-3">
        <div class="wizard-step d-flex align-items-center gap-3" data-step="1">
          <div class="step-number" id="step1Num">1</div>
          <div>
            <div class="step-label fw-semibold">Basic Info</div>
            <small class="text-muted">Title & description</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="wizard-step d-flex align-items-center gap-3" data-step="2">
          <div class="step-number" id="step2Num">2</div>
          <div>
            <div class="step-label fw-semibold">Media</div>
            <small class="text-muted">Images & gallery</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="wizard-step d-flex align-items-center gap-3" data-step="3">
          <div class="step-number" id="step3Num">3</div>
          <div>
            <div class="step-label fw-semibold">Specifications</div>
            <small class="text-muted">Technical details</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="wizard-step d-flex align-items-center gap-3" data-step="4">
          <div class="step-number" id="step4Num">4</div>
          <div>
            <div class="step-label fw-semibold">Publish</div>
            <small class="text-muted">Settings & status</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form id="productForm" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row g-4">
      <!-- Left Column: Form Steps -->
      <div class="col-lg-8">
        <!-- Step 1: Basic Info -->
        <div class="step-content" id="step1">
          <div class="form-card p-4 mb-4">
            <h3 class="fw-bold mb-4" style="font-size: 1.25rem;">Basic Information</h3>

            <div class="mb-4">
              <label class="form-label">Product Title <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"
                     id="title" name="title" value="{{ old('title') }}"
                     placeholder="e.g., Digital Jewelry Scale 0.001g Precision" required>
              <small class="text-muted mt-1">Clear, descriptive title with key features</small>
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="row mb-4">
              <div class="col-md-6">
                <label class="form-label">SKU <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('sku') is-invalid @enderror"
                       id="sku" name="sku" value="{{ old('sku') }}"
                       placeholder="Auto-generated" required>
                <small class="text-muted">Unique product identifier</small>
                @error('sku')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Category <span class="text-danger">*</span></label>
                <select class="form-select @error('category') is-invalid @enderror"
                        id="category" name="category" required>
                  <option value="">Select category</option>
                  <option value="jewelry-scale">💎 Jewelry Scale</option>
                  <option value="table-top-scale">📊 Table Top Scale</option>
                  <option value="platform-scale">🏗️ Platform Scale</option>
                  <option value="mobile-bench-scale">📱 Mobile/Bench Scale</option>
                  <option value="heavy-duty-scale">🔧 Heavy Duty Scale</option>
                </select>
                @error('category')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="mb-4">
              <label class="form-label">Description <span class="text-danger">*</span></label>
              <textarea class="form-control @error('description') is-invalid @enderror"
                        id="description" name="description" rows="6"
                        placeholder="Describe the product features, benefits, and specifications...">{{ old('description') }}</textarea>
              <small class="text-muted">Detailed description helps customers make informed decisions</small>
              @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <!-- Step 2: Media Upload -->
        <div class="step-content d-none" id="step2">
          <div class="form-card p-4 mb-4">
            <h3 class="fw-bold mb-4" style="font-size: 1.25rem;">Product Media</h3>

            <!-- Drag & Drop Area -->
            <div class="drag-area p-5 text-center mb-4" id="dragArea">
              <input type="file" id="imageInput" name="images[]" multiple accept="image/*" class="d-none">
              <i class="fas fa-cloud-upload-alt fa-4x mb-3" style="color: var(--text-muted);"></i>
              <p class="mb-2 fw-semibold">Drag & drop images here</p>
              <small class="text-muted">or click to browse (JPG, PNG, GIF up to 5MB)</small>
            </div>

            <!-- Image Gallery -->
            <div class="row g-3" id="imageGallery"></div>
          </div>
        </div>

        <!-- Step 3: Specifications -->
        <div class="step-content d-none" id="step3">
          <div class="form-card p-4 mb-4">
            <h3 class="fw-bold mb-4" style="font-size: 1.25rem;">Technical Specifications</h3>

            <div class="row mb-4">
              <div class="col-md-6 mb-3">
                <label class="form-label">Material & Color</label>
                <input type="text" class="form-control" name="config[material_color]"
                       placeholder="e.g., Stainless Steel + Black">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Item Capacity</label>
                <input type="text" class="form-control" name="config[item_capacity]"
                       placeholder="e.g., 100g, 500g, 10kg">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Resolution</label>
                <input type="text" class="form-control" name="config[resolution]"
                       placeholder="e.g., 0.001g, 0.01g">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Platform Size</label>
                <input type="text" class="form-control" name="config[platform_size]"
                       placeholder="e.g., 12cm x 12cm">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Units</label>
                <input type="text" class="form-control" name="config[units]"
                       placeholder="e.g., g, kg, lb, oz">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Warranty</label>
                <input type="text" class="form-control" name="config[warranty]"
                       placeholder="e.g., 1 Year Limited">
              </div>
            </div>

            <!-- Dynamic Specifications -->
            <div class="border-top pt-4">
              <label class="form-label mb-3">Additional Specifications</label>
              <div id="dynamicSpecs"></div>
              <button type="button" class="btn-outline-custom btn-sm mt-3" id="addSpecBtn">
                <i class="fas fa-plus me-2"></i>Add Specification
              </button>
            </div>
          </div>
        </div>

        <!-- Step 4: Publish Settings -->
        <div class="step-content d-none" id="step4">
          <div class="form-card p-4 mb-4">
            <h3 class="fw-bold mb-4" style="font-size: 1.25rem;">Publish Settings</h3>

            <!-- Badge Selector -->
            <div class="mb-4">
              <label class="form-label mb-3">Product Badge</label>
              <div class="d-flex gap-3 flex-wrap">
                <div class="badge-option" data-badge="new">
                  <i class="fas fa-fire me-2"></i>New Arrival
                </div>
                <div class="badge-option" data-badge="trending">
                  <i class="fas fa-chart-line me-2"></i>Trending
                </div>
                <div class="badge-option" data-badge="best-seller">
                  <i class="fas fa-crown me-2"></i>Best Seller
                </div>
              </div>
              <input type="hidden" name="badge" id="badgeValue" value="">
            </div>

            <!-- WhatsApp Template -->
            <div class="mb-4">
              <label class="form-label">WhatsApp Message Template</label>
              <textarea class="form-control" name="whatsapp_message" rows="4"
                        placeholder="Custom WhatsApp message for this product..."></textarea>
              <small class="text-muted mt-2">
                <i class="fas fa-info-circle me-1"></i>
                Use placeholders: {product_name}, {sku}, {category}
              </small>
              <button type="button" class="btn-outline-custom btn-sm mt-3" id="previewWhatsAppBtn">
                <i class="fab fa-whatsapp me-2"></i>Preview Message
              </button>
            </div>

            <!-- Status Toggle -->
            <div class="border-top pt-4">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="isActive"
                       name="is_active" value="1" checked style="width: 3em; height: 1.5em;">
                <label class="form-check-label fw-semibold ms-2" for="isActive">
                  Publish immediately
                </label>
              </div>
              <small class="text-muted mt-2 d-block">Product will be visible on the website immediately</small>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn-outline-custom" id="prevBtn" style="display: none;">
            <i class="fas fa-arrow-left me-2"></i>Previous
          </button>
          <button type="button" class="btn-primary-custom" id="nextBtn">
            Continue <i class="fas fa-arrow-right ms-2"></i>
          </button>
        </div>
      </div>

      <!-- Right Column: Live Preview -->
      <div class="col-lg-4">
        <div class="position-sticky" style="top: 140px;">
          <div class="preview-card p-4 mb-4">
            <h5 class="fw-bold mb-3" style="font-size: 0.875rem;">Live Preview</h5>
            <div id="previewContent">
              <div class="bg-light rounded-3 mb-3" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-image fa-3x text-muted"></i>
              </div>
              <h4 id="previewTitle" class="fw-bold mb-2" style="font-size: 1rem;">Product Title</h4>
              <div id="previewBadge" class="mb-2"></div>
              <div id="previewCategory" class="small text-muted">—</div>
            </div>
          </div>

          <div class="form-card p-4">
            <h5 class="fw-bold mb-3" style="font-size: 0.875rem;">Tips</h5>
            <div class="mb-3">
              <i class="fas fa-lightbulb text-warning me-2"></i>
              <small>Use high-quality images for better conversions</small>
            </div>
            <div class="mb-3">
              <i class="fas fa-tag me-2"></i>
              <small>Clear product title improves SEO ranking</small>
            </div>
            <div>
              <i class="fas fa-chart-line me-2"></i>
              <small>Detailed specifications reduce return rates</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  // Multi-step Wizard
  let currentStep = 1;
  const totalSteps = 4;
  const formData = {};

  function updateStep(step) {
    // Hide all steps
    for (let i = 1; i <= totalSteps; i++) {
      document.getElementById(`step${i}`).classList.add('d-none');
    }
    // Show current step
    document.getElementById(`step${step}`).classList.remove('d-none');

    // Update wizard indicators
    for (let i = 1; i <= totalSteps; i++) {
      const stepDiv = document.querySelector(`.wizard-step[data-step="${i}"]`);
      const stepNum = document.getElementById(`step${i}Num`);
      if (i < step) {
        stepDiv.classList.add('completed');
        if (stepNum) stepNum.innerHTML = '';
      } else if (i === step) {
        stepDiv.classList.add('active');
        stepDiv.classList.remove('completed');
      } else {
        stepDiv.classList.remove('active', 'completed');
        if (stepNum && i < step) stepNum.innerHTML = '✓';
        else if (stepNum) stepNum.innerHTML = i;
      }
    }

    // Update navigation buttons
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    prevBtn.style.display = step === 1 ? 'none' : 'inline-flex';
    nextBtn.innerHTML = step === totalSteps ?
      '<i class="fas fa-check-circle me-2"></i>Create Product' :
      'Continue <i class="fas fa-arrow-right ms-2"></i>';
  }

  document.getElementById('nextBtn').addEventListener('click', () => {
    if (currentStep < totalSteps) {
      currentStep++;
      updateStep(currentStep);
    } else if (currentStep === totalSteps) {
      document.getElementById('productForm').submit();
    }
  });

  document.getElementById('prevBtn').addEventListener('click', () => {
    if (currentStep > 1) {
      currentStep--;
      updateStep(currentStep);
    }
  });

  document.querySelectorAll('.wizard-step').forEach(step => {
    step.addEventListener('click', () => {
      const stepNum = parseInt(step.dataset.step);
      if (stepNum <= currentStep + 1) {
        currentStep = stepNum;
        updateStep(currentStep);
      }
    });
  });

  // Drag & Drop Image Upload
  const dragArea = document.getElementById('dragArea');
  const imageInput = document.getElementById('imageInput');
  const imageGallery = document.getElementById('imageGallery');
  let images = [];

  dragArea.addEventListener('click', () => imageInput.click());
  dragArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dragArea.classList.add('drag-over');
  });
  dragArea.addEventListener('dragleave', () => {
    dragArea.classList.remove('drag-over');
  });
  dragArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dragArea.classList.remove('drag-over');
    const files = Array.from(e.dataTransfer.files);
    handleImages(files);
  });

  imageInput.addEventListener('change', (e) => {
    handleImages(Array.from(e.target.files));
  });

  function handleImages(files) {
    files.forEach(file => {
      if (file.type.startsWith('image/') && file.size <= 5 * 1024 * 1024) {
        const reader = new FileReader();
        reader.onload = (e) => {
          images.push({ file, url: e.target.result, featured: images.length === 0 });
          renderImages();
        };
        reader.readAsDataURL(file);
      } else {
        alert(`${file.name} is invalid or exceeds 5MB`);
      }
    });
    updateImageInput();
  }

  function renderImages() {
    imageGallery.innerHTML = images.map((img, index) => `
      <div class="col-md-4 col-6 image-item" draggable="true" data-index="${index}">
        <div class="position-relative">
          <img src="${img.url}" class="w-100 rounded-3" style="height: 150px; object-fit: cover;">
          ${img.featured ? '<div class="featured-badge">★ Featured</div>' : ''}
          <button type="button" class="btn btn-dark btn-sm position-absolute top-0 end-0 m-2 rounded-circle"
                  style="width: 28px; height: 28px; padding: 0;" onclick="removeImage(${index})">
            <i class="fas fa-times fa-xs"></i>
          </button>
          <button type="button" class="btn btn-light btn-sm position-absolute bottom-0 end-0 m-2"
                  onclick="setFeatured(${index})" style="font-size: 11px;">
            Set featured
          </button>
        </div>
      </div>
    `).join('');

    // Update preview
    const featuredImage = images.find(img => img.featured);
    if (featuredImage) {
      const previewImg = document.querySelector('#previewContent .bg-light');
      if (previewImg) {
        previewImg.innerHTML = `<img src="${featuredImage.url}" class="w-100 h-100" style="object-fit: cover;">`;
      }
    }
  }

  window.removeImage = (index) => {
    images.splice(index, 1);
    if (images.length > 0 && !images.some(img => img.featured)) {
      images[0].featured = true;
    }
    renderImages();
    updateImageInput();
  };

  window.setFeatured = (index) => {
    images.forEach((img, i) => img.featured = (i === index));
    renderImages();
  };

  function updateImageInput() {
    const dataTransfer = new DataTransfer();
    images.forEach(img => dataTransfer.items.add(img.file));
    imageInput.files = dataTransfer.files;
  }

  // Dynamic Specifications
  let specCount = 0;
  const dynamicSpecs = document.getElementById('dynamicSpecs');

  document.getElementById('addSpecBtn').addEventListener('click', () => {
    const specDiv = document.createElement('div');
    specDiv.className = 'row g-3 mb-3 spec-item';
    specDiv.innerHTML = `
      <div class="col-md-5">
        <input type="text" class="form-control" name="config_extra[${specCount}][key]" placeholder="Specification name">
      </div>
      <div class="col-md-5">
        <input type="text" class="form-control" name="config_extra[${specCount}][value]" placeholder="Specification value">
      </div>
      <div class="col-md-2">
        <button type="button" class="btn-outline-custom btn-sm w-100" onclick="this.closest('.spec-item').remove()">
          <i class="fas fa-trash-alt"></i>
        </button>
      </div>
    `;
    dynamicSpecs.appendChild(specDiv);
    specCount++;
  });

  // Badge Selector
  document.querySelectorAll('.badge-option').forEach(option => {
    option.addEventListener('click', () => {
      document.querySelectorAll('.badge-option').forEach(opt => opt.classList.remove('selected'));
      option.classList.add('selected');
      const badge = option.dataset.badge;
      document.getElementById('badgeValue').value = badge;

      // Update preview
      const previewBadge = document.getElementById('previewBadge');
      previewBadge.innerHTML = `<span class="badge bg-dark">${option.innerHTML}</span>`;
    });
  });

  // Live Preview Updates
  document.getElementById('title').addEventListener('input', (e) => {
    document.getElementById('previewTitle').textContent = e.target.value || 'Product Title';
  });

  document.getElementById('category').addEventListener('change', (e) => {
    const category = e.target.options[e.target.selectedIndex]?.text || '—';
    document.getElementById('previewCategory').innerHTML = `<i class="fas fa-folder me-1"></i>${category}`;
  });

  // Auto-generate SKU
  let skuGenerated = false;
  document.getElementById('category').addEventListener('change', generateSKU);
  document.getElementById('title').addEventListener('blur', generateSKU);

  function generateSKU() {
    const title = document.getElementById('title').value;
    const category = document.getElementById('category').value;
    const skuField = document.getElementById('sku');

    if (title && category && !skuField.value && !skuGenerated) {
      const prefix = category.substring(0, 3).toUpperCase();
      const titleCode = title.substring(0, 3).toUpperCase();
      const random = Math.floor(Math.random() * 1000);
      skuField.value = `${prefix}-${titleCode}-${random}`;
      skuGenerated = true;
    }
  }

  // WhatsApp Preview Modal
  document.getElementById('previewWhatsAppBtn').addEventListener('click', () => {
    const title = document.getElementById('title').value || 'Product Name';
    const sku = document.getElementById('sku').value || 'SKU';
    const category = document.getElementById('category').options[document.getElementById('category').selectedIndex]?.text || 'Category';

    let message = document.querySelector('textarea[name="whatsapp_message"]').value;
    if (!message) {
      message = `Hello! I'm interested in ${title}.\n\nSKU: ${sku}\nCategory: ${category}\n\nCan you please share more details and price?`;
    }

    message = message.replace(/{product_name}/g, title).replace(/{sku}/g, sku).replace(/{category}/g, category);

    const modalHtml = `
      <div class="modal fade" id="whatsappModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content rounded-4">
            <div class="modal-header bg-dark text-white border-0">
              <h5 class="modal-title"><i class="fab fa-whatsapp me-2"></i>WhatsApp Preview</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <div class="bg-light p-4 rounded-3" style="white-space: pre-wrap;">${message}</div>
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn-outline-custom" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    `;

    if (!document.getElementById('whatsappModal')) {
      document.body.insertAdjacentHTML('beforeend', modalHtml);
    }
    const modal = new bootstrap.Modal(document.getElementById('whatsappModal'));
    modal.show();
  });

  // Auto-save draft to localStorage
  function autoSaveDraft() {
    const formElements = document.querySelectorAll('#productForm input, #productForm textarea, #productForm select');
    const draft = {};
    formElements.forEach(el => {
      if (el.name) draft[el.name] = el.value;
    });
    localStorage.setItem('productDraft', JSON.stringify(draft));
  }

  setInterval(autoSaveDraft, 30000);

  document.getElementById('saveDraftBtn').addEventListener('click', () => {
    autoSaveDraft();
    alert('Draft saved successfully!');
  });

  // Load draft on page load
  window.addEventListener('load', () => {
    const draft = localStorage.getItem('productDraft');
    if (draft) {
      const data = JSON.parse(draft);
      for (const [key, value] of Object.entries(data)) {
        const el = document.querySelector(`[name="${key}"]`);
        if (el) el.value = value;
      }
    }
  });

  // Initialize
  updateStep(1);
</script>
@endsection
