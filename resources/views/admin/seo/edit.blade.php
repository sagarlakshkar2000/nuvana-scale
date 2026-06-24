@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="h4 mb-0 fw-bold" style="color: #1a1e2b;">
            <i class="fas fa-edit me-2 text-primary"></i>Edit SEO Rule
        </h4>
        <a href="{{ route('admin.seo.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to List
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- URL PATH (CRITICAL) -->
        <div class="card shadow-sm border-0 rounded-3 mb-4">
            <div class="card-header bg-white border-bottom py-3">
                <h6 class="mb-0 fw-bold"><i class="fas fa-link me-2 text-primary"></i>Target URL Path</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-medium">URL Path <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted" id="url-addon">{{ request()->getSchemeAndHttpHost() }}</span>
                        <input type="text" name="url" class="form-control border-start-0 ps-0" placeholder="/about/company" value="{{ old('url', $seo->url) }}" required>
                    </div>
                    <small class="text-muted d-block mt-1">Enter '/' for the home page. For other pages, enter the path like '/products/jewelry-scale' or 'products/jewelry-scale'.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- GENERAL SEO -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white border-bottom py-3">
                        <h6 class="mb-0 fw-bold"><i class="fas fa-search me-2 text-primary"></i>Standard Meta Tags</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-medium">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $seo->meta_title) }}" placeholder="Page Title | Nuvana">
                            <small class="text-muted">Recommended: 50-60 characters</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" placeholder="A brief description of the page...">{{ old('meta_description', $seo->meta_description) }}</textarea>
                            <small class="text-muted">Recommended: 150-160 characters</small>
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-medium">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control" rows="2" placeholder="keyword1, keyword2, keyword3...">{{ old('meta_keywords', $seo->meta_keywords) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- OPEN GRAPH (FACEBOOK/LINKEDIN) -->
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white border-bottom py-3">
                        <h6 class="mb-0 fw-bold"><i class="fab fa-facebook me-2 text-primary"></i>Open Graph (Social Sharing)</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-medium">OG Title</label>
                            <input type="text" name="og_title" class="form-control" value="{{ old('og_title', $seo->og_title) }}" placeholder="Title for Social Sharing">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">OG Description</label>
                            <textarea name="og_description" class="form-control" rows="2" placeholder="Description for Social Sharing...">{{ old('og_description', $seo->og_description) }}</textarea>
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-medium">OG Image</label>
                            <input type="file" name="og_image" class="form-control" accept="image/jpeg,image/png,image/webp">
                            <small class="text-muted d-block mb-2">Recommended size: 1200 x 630 pixels</small>
                            @if($seo->og_image)
                                <div class="mt-2">
                                    <p class="mb-1 text-muted small">Current Image:</p>
                                    <img src="{{ asset('storage/' . $seo->og_image) }}" alt="OG Image" class="img-thumbnail" style="max-height: 100px;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- TWITTER CARDS -->
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white border-bottom py-3">
                        <h6 class="mb-0 fw-bold"><i class="fab fa-twitter me-2 text-info"></i>Twitter Cards</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-medium">Twitter Title</label>
                            <input type="text" name="twitter_title" class="form-control" value="{{ old('twitter_title', $seo->twitter_title) }}" placeholder="Title for Twitter Sharing">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">Twitter Description</label>
                            <textarea name="twitter_description" class="form-control" rows="2" placeholder="Description for Twitter...">{{ old('twitter_description', $seo->twitter_description) }}</textarea>
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-medium">Twitter Image</label>
                            <input type="file" name="twitter_image" class="form-control" accept="image/jpeg,image/png,image/webp">
                            @if($seo->twitter_image)
                                <div class="mt-2">
                                    <p class="mb-1 text-muted small">Current Image:</p>
                                    <img src="{{ asset('storage/' . $seo->twitter_image) }}" alt="Twitter Image" class="img-thumbnail" style="max-height: 100px;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADVANCED SEO -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white border-bottom py-3">
                        <h6 class="mb-0 fw-bold"><i class="fas fa-cogs me-2 text-primary"></i>Advanced Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label fw-medium">Canonical URL</label>
                            <input type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url', $seo->canonical_url) }}" placeholder="https://example.com/canonical-path">
                            <small class="text-muted d-block mt-1">Specify if this page is a duplicate of another URL.</small>
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-medium">Robots Meta</label>
                            <select name="robots_meta" class="form-select">
                                <option value="index, follow" {{ old('robots_meta', $seo->robots_meta) == 'index, follow' ? 'selected' : '' }}>Index, Follow (Default)</option>
                                <option value="noindex, follow" {{ old('robots_meta', $seo->robots_meta) == 'noindex, follow' ? 'selected' : '' }}>No Index, Follow</option>
                                <option value="index, nofollow" {{ old('robots_meta', $seo->robots_meta) == 'index, nofollow' ? 'selected' : '' }}>Index, No Follow</option>
                                <option value="noindex, nofollow" {{ old('robots_meta', $seo->robots_meta) == 'noindex, nofollow' ? 'selected' : '' }}>No Index, No Follow</option>
                            </select>
                            <small class="text-muted d-block mt-1">Instructions for search engine crawlers.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-end mb-5">
            <button type="submit" class="btn btn-primary px-5 py-2 fw-medium">
                <i class="fas fa-save me-2"></i>Update SEO Configuration
            </button>
        </div>
    </form>
</div>
@endsection
