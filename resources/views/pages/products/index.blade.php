@extends('layouts.app')

@push('styles')
<style>
    .products-loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.7);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99;
    }
    .products-loading-overlay.active {
        display: flex !important;
    }
    .products-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-top-color: #141516;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endpush

@section('content')

<!-- TITLE BANNER START -->
<section class="title-banner">
    <div class="container">
        <h2 class="white fw-600 text-center">Products</h2>
    </div>
</section>
<!-- TITLE BANNER END -->

<!-- Shop Page START -->
<section class="feature-products py-40">
    <div class="container-fluid">
        <div class="row row-gap-4">
            <!-- Sidebar START -->
            <div class="col-xl-3 col-lg-4">
                <div class="shop-sidebar p-24 br-15 bg-lightest-gray">

                    <form action="{{ route('products.index') }}" method="GET" id="filterForm">
                        <div class="newsletter-form mb-32">
                            <input type="search" name="keyword" class="form-control search-input" placeholder="Search products..."
                                value="{{ $search_keyword ?? request('keyword') }}">
                            <button type="submit" class="search-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.11719 0C12.593 0 16.2344 3.64137 16.2344 8.11719C16.2344 10.1445 15.4873 12.0007 14.2539 13.4247L19.8284 18.9998C20.0572 19.2286 20.0572 19.5996 19.8284 19.8284C19.5995 20.0573 19.2286 20.0572 18.9997 19.8284L13.4254 14.2534C12.0012 15.4871 10.1448 16.2344 8.11719 16.2344C3.64137 16.2344 0 12.593 0 8.11719C0 3.64137 3.64137 0 8.11719 0ZM8.11719 15.0625C11.9469 15.0625 15.0625 11.9468 15.0625 8.11719C15.0625 4.28754 11.9468 1.17188 8.11719 1.17188C4.28754 1.17188 1.17188 4.28754 1.17188 8.11719C1.17188 11.9468 4.28754 15.0625 8.11719 15.0625Z" fill="#EAEAEC" />
                                </svg>
                            </button>
                        </div>

                    <!-- Availability Filter -->
                    <div class="category-block box-9 mb-32">
                        <div class="title" data-count="9">
                            <h6 class="fw-600 black">Availability</h6>
                            <span>
                                <i class="fa-light fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="content-block mt-24 mb-32">
                            <div class="d-flex align-items-center justify-content-between mb-12">
                                <div class="cus-checkBox">
                                    <input type="checkbox" id="stock" class="inp-cbx filter-checkbox" name="in_stock" value="1" {{ request('in_stock') ? 'checked' : '' }}>
                                    <label for="stock" class="cbx black">In stock</label>
                                </div>
                                <p>({{ $in_stock_count }})</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-12">
                                <div class="cus-checkBox">
                                    <input type="checkbox" id="out" class="inp-cbx filter-checkbox" name="out_of_stock" value="1" {{ request('out_of_stock') ? 'checked' : '' }}>
                                    <label for="out" class="cbx black">Out of Stock</label>
                                </div>
                                <p>({{ $out_of_stock_count }})</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Categories -->
                    <div class="category-block box-1 mb-32">
                        <div class="title" data-count="1">
                            <h6 class="fw-600 black">Product Categories</h6>
                            <span>
                                <i class="fa-light fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="content-block mt-24 mb-32">
                            @foreach($categories as $category)
                            <div class="d-flex align-items-center justify-content-between mb-12">
                                <div class="cus-checkBox">
                                    <input type="checkbox" id="cat_{{ Str::slug($category['name']) }}" class="inp-cbx category-checkbox" name="category[]" value="{{ $category['name'] }}" {{ in_array($category['name'], $selected_categories ?? []) ? 'checked' : '' }}>
                                    <label for="cat_{{ Str::slug($category['name']) }}" class="cbx black">{{ $category['name'] }}</label>
                                </div>
                                <p>({{ $category['count'] }})</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Filter By Price -->
                    <div class="category-block box-2 mb-32">
                        <div class="title" data-count="2">
                            <h6 class="fw-600 black">Filter By Price</h6>
                            <span>
                                <i class="fa-light fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="content-block mt-24">
                            <div class="wrapper">
                                <div class="price-input mb-24">
                                    <div class="field">
                                        <div class="fw-500 font-primary mb-4p">From</div>
                                        <div class="sidebar-price-block">
                                            <p class="price-sign">₹</p>
                                            <input type="number" class="input-min dark-gray price-input-min" name="min_price" value="{{ request('min_price', $min_price_range) }}">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="fw-500 font-primary mb-4p">To</div>
                                        <div class="sidebar-price-block">
                                            <p class="price-sign">₹</p>
                                            <input type="number" class="input-max dark-gray price-input-max" name="max_price" value="{{ request('max_price', $max_price_range) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress-range"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="{{ $min_price_range }}" max="{{ $max_price_range }}" value="{{ request('min_price', $min_price_range) }}" step="100">
                                    <input type="range" class="range-max" min="{{ $min_price_range }}" max="{{ $max_price_range }}" value="{{ request('max_price', $max_price_range) }}" step="100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="sort_by" id="sort_by_input" value="{{ $sort_by ?? 'featured' }}">
                    <input type="hidden" name="page" id="page_input" value="1">
                    </form>

                    <button type="button" class="cus-btn-arrow w-100 justify-content-center mt-4" id="resetFilters">
                        Reset All Filters
                    </button>
                </div>
            </div>
            <!-- Sidebar END -->

            <!-- Products Grid START -->
            <div class="col-xl-9 col-lg-8" id="products-container" style="position: relative; min-height: 400px;">
                <div class="products-loading-overlay" id="loadingOverlay">
                    <div class="products-spinner"></div>
                </div>
                <!-- Sort and Results Info -->
                <div class="row row-gap-3 justify-content-between align-items-center mb-16">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-8">
                        <p class="black fw-500">Showing {{ $start_count }} - {{ $end_count }} of {{ $total_products }} Results</p>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7 d-sm-block d-none">
                        <div class="d-flex align-items-center gap-16 justify-content-end">
                            <div class="d-flex align-items-center gap-8">
                                <p class="dark-gray font-primary black fw-600">Sort by:</p>
                                <div class="drop-container shop-dropdown">
                                    <div class="wrapper-dropdown" id="dropdown8">
                                        <span class="selected-display" id="destination8">
                                            @foreach($sort_options as $opt)
                                                @if($opt['value'] == ($sort_by ?? 'featured')) {{ $opt['label'] }} @endif
                                            @endforeach
                                        </span>
                                        <svg id="drp-arrow8" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                            <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <ul class="topbar-dropdown bg-lightest-gray">
                                            @foreach($sort_options as $option)
                                                <li class="item dark-black sort-option" data-sort="{{ $option['value'] }}">{{ $option['label'] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products List -->
                <div class="row row-gap-4">
                    @forelse($current_products as $product)
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="product-block">
                            <div class="image-box mb-16">
                                <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" loading="lazy">
                                @if(!empty($product['badge']))
                                    <div class="sale-label subtitle">{{ $product['badge'] }}</div>
                                @endif
                            </div>
                            <div class="content-box">
                                <p class="eyebrow mb-12">{{ $product['category'] }}</p>
                                <a href="{{ route('product-detail', ['slug' => $product['slug']]) }}" class="product-title h6 fw-500 mb-12">{{ $product['title'] }}</a>

                                @if(!empty($product['feature']))
                                    <p class="caption mb-8 dark-gray">{{ $product['feature'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <div class="empty-state">
                            <i class="fa-light fa-box-open fa-4x mb-3 color-gray-400"></i>
                            <h5>No products found</h5>
                            <p class="dark-gray">Please try different filters or search terms.</p>
                            <button type="button" class="cus-btn-arrow mt-3" id="resetFiltersEmpty">
                                Reset All Filters
                            </button>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($total_pages > 1)
                <div class="pagination mt-48">
                    <ul id="border-pagination">
                        <li>
                            <a href="{{ route('products.index', array_merge(request()->all(), ['page' => max(1, $current_page - 1)])) }}" class="{{ $current_page == 1 ? 'disabled' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M15.1883 19.7337C15.5432 19.3788 15.5433 18.8031 15.1882 18.4481L6.74014 10.0002L15.1883 1.55191C15.5432 1.19694 15.5433 0.621303 15.1882 0.266273C14.8332 -0.0887576 14.2576 -0.0887576 13.9026 0.266273L4.81165 9.35742C4.64117 9.52791 4.54541 9.75912 4.54541 10.0002C4.54541 10.2413 4.64123 10.4726 4.81171 10.643L13.9026 19.7337C14.2576 20.0888 14.8332 20.0888 15.1883 19.7337Z" fill="#141516" />
                                </svg>
                            </a>
                        </li>
                        @php
                            $start_page = max(1, min($current_page - 2, $total_pages - 4));
                            $end_page = min($total_pages, $start_page + 4);
                        @endphp
                        @for($i = $start_page; $i <= $end_page; $i++)
                            <li><a href="{{ route('products.index', array_merge(request()->all(), ['page' => $i])) }}" class="{{ $current_page == $i ? 'active' : '' }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a></li>
                        @endfor
                        <li>
                            <a href="{{ route('products.index', array_merge(request()->all(), ['page' => min($total_pages, $current_page + 1)])) }}" class="{{ $current_page == $total_pages ? 'disabled' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.81165 0.266265C4.45668 0.621235 4.45662 1.19687 4.81171 1.5519L13.2598 9.99978L4.81165 18.4481C4.45668 18.8031 4.45662 19.3787 4.81171 19.7337C5.16674 20.0888 5.74232 20.0888 6.09735 19.7337L15.1883 10.6426C15.3587 10.4721 15.4545 10.2409 15.4545 9.99978C15.4545 9.75869 15.3587 9.52742 15.1882 9.35699L6.09729 0.266326C5.74232 -0.088765 5.16668 -0.0887653 4.81165 0.266265Z" fill="#141516" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Shop Page END -->

@endsection

@push('scripts')
<script>
    // AJAX loading functionality
    function submitFilterAjax() {
        const form = document.getElementById('filterForm');
        if (!form) return;

        const formData = new FormData(form);
        const params = new URLSearchParams(formData);

        // Remove empty values to keep URL clean
        const cleanParams = new URLSearchParams();
        for (const [key, value] of params.entries()) {
            if (value !== '') {
                cleanParams.append(key, value);
            }
        }

        const baseUrl = form.getAttribute('action') || window.location.pathname;
        const url = `${baseUrl}?${cleanParams.toString()}`;

        loadProductsAjax(url);
    }

    function loadProductsAjax(url) {
        const container = document.getElementById('products-container');
        const overlay = document.getElementById('loadingOverlay');

        if (overlay) {
            overlay.classList.add('active');
        }

        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Network error');
            return response.text();
        })
        .then(html => {
            // Update browser URL
            history.pushState(null, '', url);

            // Parse returned HTML
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContainer = doc.getElementById('products-container');

            if (newContainer && container) {
                // Swap container contents
                container.innerHTML = newContainer.innerHTML;

                // Re-initialize dropdown toggle event listeners
                reinitDropdowns();

                // Smooth scroll to top of products grid
                container.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        })
        .catch(error => {
            console.error('Error loading products:', error);
            if (overlay) {
                overlay.classList.remove('active');
            }
        });
    }

    // Event delegation for wishlist click
    document.addEventListener('click', function(e) {
        const wishlistBtn = e.target.closest('.add-to-wishlist');
        if (wishlistBtn) {
            e.preventDefault();
            const productId = wishlistBtn.dataset.productId;
            const icon = wishlistBtn.querySelector('i');
            icon.classList.remove('fa-light');
            icon.classList.add('fa-solid', 'color-primary');
            setTimeout(() => {
                icon.classList.remove('fa-solid', 'color-primary');
                icon.classList.add('fa-light');
            }, 1000);

            fetch(`/wishlist/add/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).catch(error => console.error('Error:', error));
        }
    });

    // Event delegation for pagination links
    document.addEventListener('click', function(e) {
        const pageLink = e.target.closest('#border-pagination a');
        if (pageLink && !pageLink.classList.contains('disabled') && !pageLink.classList.contains('active')) {
            e.preventDefault();
            const url = pageLink.getAttribute('href');
            loadProductsAjax(url);
        }
    });

    // Event delegation for sort options
    document.addEventListener('click', function(e) {
        const sortOption = e.target.closest('.sort-option');
        if (sortOption) {
            const sortValue = sortOption.dataset.sort;
            const sortInput = document.getElementById('sort_by_input');
            if(sortInput) sortInput.value = sortValue;

            const display = document.getElementById('destination8');
            if (display) display.innerHTML = sortOption.innerHTML;

            submitFilterAjax();
        }
    });

    // Reset filters
    function resetSidebarInputs() {
        const form = document.getElementById('filterForm');
        if (form) {
            form.reset();
            form.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
            form.querySelectorAll('input[type="search"]').forEach(input => input.value = '');

            // Reset price inputs
            const minInput = form.querySelector('.price-input-min');
            const maxInput = form.querySelector('.price-input-max');
            const minRange = form.querySelector('.range-min');
            const maxRange = form.querySelector('.range-max');

            if (minRange && minInput) {
                minRange.value = minRange.getAttribute('min') || 0;
                minInput.value = minRange.value;
            }
            if (maxRange && maxInput) {
                maxRange.value = maxRange.getAttribute('max') || 350000;
                maxInput.value = maxRange.value;
            }

            if (typeof updateSlider === 'function') {
                updateSlider();
            }
        }
    }

    document.addEventListener('click', function(e) {
        const resetBtn = e.target.closest('#resetFilters, #resetFiltersEmpty');
        if (resetBtn) {
            e.preventDefault();
            resetSidebarInputs();
            const resetUrl = '{{ route("products.index") }}';
            loadProductsAjax(resetUrl);
        }
    });

    // Re-initialize dropdown toggle listeners for wrapper-dropdown
    function reinitDropdowns() {
        const dropdowns = document.querySelectorAll("#products-container .wrapper-dropdown");
        dropdowns.forEach((selected) => {
            const optionsList = selected.querySelectorAll("li");

            selected.addEventListener("click", function(e) {
                e.stopPropagation();
                let arrow = this.children[1];

                if (this.classList.contains("active")) {
                    this.classList.remove("active");
                    if (arrow) arrow.classList.remove("rotated");
                } else {
                    document.querySelectorAll(".wrapper-dropdown.active").forEach(activeEl => {
                        activeEl.classList.remove("active");
                        const activeArrow = activeEl.children[1];
                        if (activeArrow) activeArrow.classList.remove("rotated");
                    });

                    this.classList.add("active");
                    if (arrow) arrow.classList.add("rotated");
                }
            });

            optionsList.forEach(o => {
                o.addEventListener("click", function() {
                    selected.querySelector(".selected-display").innerHTML = this.innerHTML;
                });
            });
        });
    }

    // Handle browser back/forward buttons
    window.addEventListener('popstate', function() {
        loadProductsAjax(window.location.href);
    });

    // Sidebar filter changes
    document.addEventListener('change', function(e) {
        if (e.target.matches('.filter-checkbox, .category-checkbox')) {
            submitFilterAjax();
        }
    });

    // Search form submit
    const filterForm = document.getElementById('filterForm');
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            submitFilterAjax();
        });
    }

    // Price range slider
    const rangeMin = document.querySelector('.range-min');
    const rangeMax = document.querySelector('.range-max');
    const inputMin = document.querySelector('.price-input-min');
    const inputMax = document.querySelector('.price-input-max');
    const progress = document.querySelector('.progress-range');

    if (rangeMin && rangeMax) {
        function updateSlider() {
            let minVal = parseInt(rangeMin.value);
            let maxVal = parseInt(rangeMax.value);
            if (maxVal - minVal < 100) {
                if (this === rangeMin) {
                    rangeMin.value = maxVal - 100;
                } else {
                    rangeMax.value = minVal + 100;
                }
            }
            if(inputMin) inputMin.value = rangeMin.value;
            if(inputMax) inputMax.value = rangeMax.value;
            if(progress) {
                progress.style.left = (rangeMin.value / rangeMin.max) * 100 + '%';
                progress.style.right = 100 - (rangeMax.value / rangeMax.max) * 100 + '%';
            }
        }

        let timeout;
        rangeMin.addEventListener('input', updateSlider);
        rangeMax.addEventListener('input', updateSlider);

        rangeMin.addEventListener('change', function() {
            clearTimeout(timeout);
            timeout = setTimeout(submitFilterAjax, 500);
        });
        rangeMax.addEventListener('change', function() {
            clearTimeout(timeout);
            timeout = setTimeout(submitFilterAjax, 500);
        });

        if(inputMin) {
            inputMin.addEventListener('change', function() {
                rangeMin.value = this.value;
                updateSlider();
                clearTimeout(timeout);
                timeout = setTimeout(submitFilterAjax, 500);
            });
        }

        if(inputMax) {
            inputMax.addEventListener('change', function() {
                rangeMax.value = this.value;
                updateSlider();
                clearTimeout(timeout);
                timeout = setTimeout(submitFilterAjax, 500);
            });
        }

        updateSlider();
    }
</script>
@endpush
