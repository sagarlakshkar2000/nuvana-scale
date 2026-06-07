@extends('layouts.admin')

@section('content')
<div class="container">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mt-2 mb-4 pb-2 border-bottom">
        <div>
            <h1 class="h2 mb-1 fw-bold" style="color: #1a1e2b;">
                <i class="fas fa-plus-circle me-2 text-primary"></i>Create New Product
            </h1>
            <p class="text-muted mb-0">Add a new product to your store inventory</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-lg px-4">
            <i class="fas fa-arrow-left me-2"></i>Back to Products
        </a>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
        @csrf

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
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Product Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control form-control-lg @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{ old('name') }}"
                                       placeholder="Enter product name"
                                       required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg @error('category_id') is-invalid @enderror"
                                        name="category_id"
                                        required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-semibold">SKU</label>
                                <input type="text"
                                       class="form-control form-control-lg @error('sku') is-invalid @enderror"
                                       name="sku"
                                       value="{{ old('sku') }}"
                                       placeholder="Auto-generated">
                                @error('sku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description"
                                          rows="5"
                                          placeholder="Write a detailed product description...">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>Provide a clear and detailed description of your product.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing & Stock Card -->
                <div class="card shadow-sm mb-4 border-0 rounded-3">
                    <div class="card-header bg-white border-0 py-3 px-4">
                        <h5 class="mb-0 fw-semibold">
                            <i class="fas fa-tag me-2 text-primary"></i>Pricing & Stock
                        </h5>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Price <span class="text-danger">*</span></label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">$</span>
                                    <input type="number"
                                           class="form-control @error('price') is-invalid @enderror"
                                           name="price"
                                           value="{{ old('price') }}"
                                           step="0.01"
                                           placeholder="0.00"
                                           required>
                                </div>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Compare at Price</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">$</span>
                                    <input type="number"
                                           class="form-control @error('compare_price') is-invalid @enderror"
                                           name="compare_price"
                                           value="{{ old('compare_price') }}"
                                           step="0.01"
                                           placeholder="0.00">
                                </div>
                                <div class="form-text">Original price for sale badge</div>
                                @error('compare_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Stock Quantity</label>
                                <input type="number"
                                       class="form-control form-control-lg @error('stock') is-invalid @enderror"
                                       name="stock"
                                       value="{{ old('stock', 0) }}"
                                       placeholder="0">
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Stock Status</label>
                                <select class="form-select form-select-lg @error('stock_status') is-invalid @enderror"
                                        name="stock_status">
                                    @foreach($stockStatuses as $value => $label)
                                        <option value="{{ $value }}" {{ old('stock_status', 'in_stock') == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('stock_status')
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
                             style="background: #f8f9fa; cursor: pointer; transition: all 0.3s;"
                             id="uploadArea">
                            <input type="file"
                                   class="d-none"
                                   name="images[]"
                                   multiple
                                   accept="image/*"
                                   id="imageInput">
                            <i class="fas fa-cloud-upload-alt fa-4x text-primary mb-3"></i>
                            <h6 class="mb-2">Click or drag images here to upload</h6>
                            <p class="text-muted small mb-0">Supports JPEG, PNG, GIF, WEBP (No limit on number of images)</p>
                        </div>

                        @error('images')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror

                        <div class="row mt-4" id="imagePreview"></div>
                    </div>
                </div>

                <!-- Specifications Card -->
                <div class="card shadow-sm mb-4 border-0 rounded-3">
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
                                            <input type="text" class="form-control"
                                                   name="specifications[{{ $index }}][key]"
                                                   value="{{ $spec['key'] }}"
                                                   placeholder="Property name (e.g., Brand)">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                   name="specifications[{{ $index }}][value]"
                                                   value="{{ $spec['value'] }}"
                                                   placeholder="Value (e.g., Apple)">
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
                            <div class="col-md-12">
                                <label class="form-label fw-semibold mb-3">Product Badge</label>
                                <div class="d-flex flex-wrap gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="badge" value="trending"
                                               id="badgeTrending" {{ old('badge') == 'trending' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="badgeTrending">
                                            <span class="badge bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">🔥 Trending</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="badge" value="new"
                                               id="badgeNew" {{ old('badge') == 'new' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="badgeNew">
                                            <span class="badge bg-success">✨ New</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="badge" value="best_seller"
                                               id="badgeBestSeller" {{ old('badge') == 'best_seller' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="badgeBestSeller">
                                            <span class="badge bg-warning text-dark">🏆 Best Seller</span>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-muted d-block mt-2">Select one badge to highlight your product</small>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                           id="isActive" style="width: 3em; height: 1.5em;"
                                           {{ old('is_active', 1) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-semibold ms-2" for="isActive">
                                        Active Product
                                    </label>
                                    <div class="form-text ms-5">Enable to make this product visible to customers</div>
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
                        <i class="fas fa-check-circle me-2"></i>Create Product
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .border-dashed {
        border-style: dashed !important;
        border-color: #dee2e6 !important;
    }

    .upload-area:hover {
        background-color: #e9ecef !important;
        border-color: #0d6efd !important;
    }

    .upload-area.drag-over {
        background-color: #cfe2ff !important;
        border-color: #0d6efd !important;
        transform: scale(1.02);
    }

    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08) !important;
    }

    .image-preview-item {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .btn-checkbox-group {
        background: #f8f9fa;
        padding: 10px;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem !important;
        }

        .btn-lg {
            padding: 0.5rem 1rem !important;
            font-size: 0.875rem !important;
        }
    }
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Drag & Drop Image Upload
    const uploadArea = document.getElementById('uploadArea');
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    let filesArray = [];

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

    imageInput.addEventListener('change', function() {
        handleFiles(Array.from(this.files));
    });

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
        imagePreview.innerHTML = '';

        filesArray.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
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

    window.removeImage = function(index) {
        filesArray.splice(index, 1);
        updatePreview();
        updateFileInput();
    };

    function updateFileInput() {
        const dataTransfer = new DataTransfer();
        filesArray.forEach(file => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
    }

    // Dynamic Specifications
    let specCounter = {{ old('specifications') ? count(old('specifications')) : 0 }};
    const container = document.getElementById('specificationsContainer');
    const noSpecMsg = document.getElementById('noSpecMsg');

    document.getElementById('addSpecBtn').addEventListener('click', function() {
        specCounter++;
        const specRow = document.createElement('div');
        specRow.className = 'spec-row row g-2 mb-3';
        specRow.innerHTML = `
            <div class="col-md-5">
                <input type="text" class="form-control"
                       name="specifications[${specCounter}][key]"
                       placeholder="Property name (e.g., Brand)">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control"
                       name="specifications[${specCounter}][value]"
                       placeholder="Value (e.g., Apple)">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm removeSpecBtn w-100">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        `;
        container.appendChild(specRow);
        noSpecMsg.style.display = 'none';

        // Add animation
        specRow.style.animation = 'fadeIn 0.3s ease-in';
    });

    document.addEventListener('click', function(e) {
        if (e.target.closest('.removeSpecBtn')) {
            const row = e.target.closest('.spec-row');
            row.style.animation = 'fadeOut 0.2s ease-out';
            setTimeout(() => {
                row.remove();
                if (container.children.length === 0) {
                    noSpecMsg.style.display = 'block';
                    specCounter = 0;
                }
            }, 200);
        }
    });

    // Auto SKU Generation
    const nameInput = document.querySelector('input[name="name"]');
    const skuInput = document.querySelector('input[name="sku"]');

    nameInput.addEventListener('blur', function() {
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

    // Form submission loading state
    const form = document.getElementById('productForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Creating Product...';
    });

    // Add fadeOut keyframe
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeOut {
            from { opacity: 1; transform: scale(1); }
            to { opacity: 0; transform: scale(0.9); }
        }
    `;
    document.head.appendChild(style);
});
</script>
@endpush
