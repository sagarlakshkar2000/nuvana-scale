@extends('layouts.admin')

@section('content')
  <div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0 fw-bold"><i class="fas fa-edit me-2 text-primary"></i>Edit Banner</h4>
      <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back to Banners
      </a>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data" id="bannerForm">
          @csrf
          @method('PUT')

          <div class="card shadow-sm border-0 rounded-3 mb-4">
            <div class="card-header bg-white py-3">
              <h6 class="mb-0 fw-bold">Banner Details</h6>
            </div>
            <div class="card-body p-4">
              
              <!-- Image Upload -->
              <div class="mb-4">
                <label class="form-label fw-semibold">Banner Image</label>
                <div class="p-4 border rounded-3 bg-light text-center @error('image') border-danger @enderror" id="imagePreviewContainer">
                  
                  <input type="file" class="form-control d-none" id="imageInput" name="image" accept="image/*">
                  
                  <div id="previewArea">
                    @if($banner->image)
                      <img src="{{ asset('storage/' . $banner->image) }}" id="imagePreview" class="img-fluid rounded border shadow-sm mb-3" style="max-height: 200px;">
                    @else
                      <img src="" id="imagePreview" class="img-fluid rounded border shadow-sm mb-3 d-none" style="max-height: 200px;">
                    @endif
                    <div class="d-block">
                      <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('imageInput').click()">Change Image</button>
                    </div>
                  </div>
                  
                </div>
                <small class="text-muted d-block mt-2">Leave empty to keep the current image. Recommended size: 1920x600px. Max size: 5MB.</small>
                @error('image')
                  <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $banner->title) }}" placeholder="Main heading">
                  @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Subtitle</label>
                  <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{ old('subtitle', $banner->subtitle) }}" placeholder="Secondary text">
                  @error('subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Button Text</label>
                  <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ old('button_text', $banner->button_text) }}" placeholder="e.g. Shop Now">
                  @error('button_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Link URL</label>
                  <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $banner->link) }}" placeholder="e.g. /products/table-top-scale">
                  @error('link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>

              <hr class="my-4">

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Display Order</label>
                  <input type="number" class="form-control @error('order') is-invalid @enderror" name="order" value="{{ old('order', $banner->order) }}" placeholder="0">
                  <small class="text-muted">Lower numbers appear first.</small>
                  @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6 d-flex align-items-center mt-md-4">
                  <div class="form-check form-switch mt-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', $banner->is_active) ? 'checked' : '' }} style="transform: scale(1.3); margin-right: 10px;">
                    <label class="form-check-label fw-semibold" for="is_active">Active (Visible to users)</label>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer bg-light p-3 text-end rounded-bottom-3">
              <button type="submit" class="btn btn-primary px-4">
                <i class="fas fa-save me-2"></i> Update Banner
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  @push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const imageInput = document.getElementById('imageInput');
      const imagePreview = document.getElementById('imagePreview');

      imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('d-none');
          }
          reader.readAsDataURL(file);
        }
      });
    });
  </script>
  @endpush
@endsection
