@extends('layouts.app')

@section('content')

<!-- TITLE BANNER START -->
<section class="title-banner">
    <div class="container">
        <h2 class="white fw-600 text-center">Shop</h2>
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

                    <form action="{{ route('products.index') }}" method="GET" class="newsletter-form mb-32" id="filterForm">
                        <input type="search" name="keyword" class="form-control search-input" placeholder="Search products..."
                            value="{{ $search_keyword ?? request('keyword') }}">
                        <button type="submit" class="search-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.11719 0C12.593 0 16.2344 3.64137 16.2344 8.11719C16.2344 10.1445 15.4873 12.0007 14.2539 13.4247L19.8284 18.9998C20.0572 19.2286 20.0572 19.5996 19.8284 19.8284C19.5995 20.0573 19.2286 20.0572 18.9997 19.8284L13.4254 14.2534C12.0012 15.4871 10.1448 16.2344 8.11719 16.2344C3.64137 16.2344 0 12.593 0 8.11719C0 3.64137 3.64137 0 8.11719 0ZM8.11719 15.0625C11.9469 15.0625 15.0625 11.9468 15.0625 8.11719C15.0625 4.28754 11.9468 1.17188 8.11719 1.17188C4.28754 1.17188 1.17188 4.28754 1.17188 8.11719C1.17188 11.9468 4.28754 15.0625 8.11719 15.0625Z" fill="#EAEAEC" />
                            </svg>
                        </button>
                    </form>

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

                    <button type="button" class="cus-btn-arrow w-100 justify-content-center mt-4" id="resetFilters">
                        Reset All Filters
                    </button>
                </div>
            </div>
            <!-- Sidebar END -->

            <!-- Products Grid START -->
            <div class="col-xl-9 col-lg-8">
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
                                @if(!$product['in_stock'])
                                    <div class="sold-out-label subtitle" style="background: #999; left: auto; right: 12px;">Sold Out</div>
                                @endif
                                <div class="shopping-btns">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productQuickView" data-product-id="{{ $product['sku'] }}">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="add-to-wishlist" data-product-id="{{ $product['sku'] }}">
                                        <i class="fa-light fa-heart"></i>
                                    </a>
                                    <a href="#" class="compare-btn" data-product-id="{{ $product['sku'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.2238 20C16.0216 20 15.8197 19.922 15.6667 19.7665C15.3642 19.4588 15.3683 18.9642 15.676 18.6617L18.3019 16.0796C18.448 15.9333 18.5284 15.7393 18.5284 15.5331C18.5284 15.3275 18.4485 15.1341 18.3033 14.988L15.679 12.435C14.9636 11.6854 16.0002 10.6208 16.7685 11.315L19.397 13.8721C19.3993 13.8743 19.4016 13.8765 19.4038 13.8788C19.8469 14.3206 20.0909 14.9081 20.0909 15.5332C20.0909 16.1582 19.8468 16.7457 19.4038 17.1875C19.4025 17.1887 19.4012 17.19 19.3999 17.1913L16.7715 19.7759C16.6194 19.9254 16.4215 20 16.2238 20ZM16.2238 16.25H4.77844C2.19375 16.25 0.0909424 14.1472 0.0909424 11.5625V9.57032C0.129341 8.53485 1.6154 8.53563 1.65344 9.57032V11.5625C1.65344 13.2856 3.05532 14.6875 4.77844 14.6875H16.2238C17.2592 14.7259 17.2584 16.212 16.2238 16.25ZM19.3097 11.2109C18.8782 11.2109 18.5284 10.8612 18.5284 10.4297V8.43751C18.5284 6.71438 17.1266 5.31251 15.4034 5.31251H3.95813C2.92266 5.27411 2.92344 3.78806 3.95813 3.75001H15.4034C17.9881 3.75001 20.0909 5.85282 20.0909 8.43751V10.4297C20.0909 10.8612 19.7412 11.2109 19.3097 11.2109ZM3.95805 8.90626C3.76172 8.90626 3.5652 8.83274 3.41336 8.68497L0.784849 6.1279C0.782544 6.12567 0.780278 6.12345 0.778052 6.12118C0.334966 5.67942 0.0909424 5.09192 0.0909424 4.46688C0.0909424 3.84184 0.334966 3.25431 0.778052 2.81259C0.779341 2.8113 0.780591 2.81005 0.78188 2.8088L3.4104 0.224188C3.71805 -0.0783121 4.2127 -0.0741715 4.5152 0.233485C4.8177 0.541141 4.81356 1.03579 4.5059 1.33829L1.87997 3.9204C1.58047 4.20829 1.57985 4.72337 1.87856 5.012L4.5029 7.56501C4.81215 7.86587 4.81895 8.36048 4.51809 8.66977C4.36501 8.82716 4.16157 8.90626 3.95805 8.90626Z" fill="#141516" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="content-box">
                                <p class="eyebrow mb-12">{{ $product['category'] }}</p>
                                <a href="{{ route('products.show', $product['slug']) }}" class="product-title h6 fw-500 mb-12">{{ $product['title'] }}</a>

                                @if(!empty($product['feature']))
                                    <p class="caption mb-8 dark-gray">{{ $product['feature'] }}</p>
                                @endif

                                <!-- Rating Stars -->
                                <div class="d-flex align-items-center gap-8 mb-16">
                                    <p class="caption">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa-solid fa-star-sharp {{ $i <= $product['rating'] ? 'color-quant' : 'color-gray-400' }}"></i>
                                        @endfor
                                    </p>
                                    @if(!empty($product['reviews']))
                                        <span class="caption dark-gray">({{ $product['reviews'] }} reviews)</span>
                                    @endif
                                </div>

                                <!-- Price and Add to Cart -->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        @if(!empty($product['old_price']) && $product['old_price'] > $product['price'])
                                            <span class="h6 text-decoration-line-through dark-gray">₹{{ number_format($product['old_price'], 2) }}</span>
                                        @endif
                                        <h5 class="black mt-1">₹{{ number_format($product['price'], 2) }}</h5>
                                    </div>
                                    @if($product['in_stock'])
                                        <a href="#" class="sm-btn light add-to-cart" data-product-id="{{ $product['sku'] }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M18.6356 17.8959C18.1471 14.4776 16.9554 6.13472 16.9554 6.13472C16.9141 5.84569 16.6666 5.63102 16.3746 5.63102H13.8194V3.70419C13.6313 -1.23661 6.54869 -1.23285 6.36241 3.70419V5.63102H3.80728C3.51533 5.63102 3.26784 5.84569 3.22654 6.13472C3.22654 6.13472 2.03482 14.4776 1.5463 17.8959C1.47062 18.4253 1.62823 18.9606 1.97862 19.3644C2.32901 19.7684 2.83657 20 3.37121 20H16.8107C17.3453 20 17.8528 19.7683 18.2033 19.3644C18.5536 18.9606 18.7113 18.4254 18.6356 17.8959ZM7.53575 3.70419C7.66462 0.318209 12.5184 0.320751 12.6461 3.70419V5.63102H7.53575V3.70419ZM17.317 18.5956C17.1896 18.7425 17.005 18.8267 16.8107 18.8267H3.37121C3.17683 18.8267 2.99231 18.7425 2.86489 18.5956C2.73755 18.4488 2.68029 18.2543 2.70779 18.0619C3.12415 15.1487 4.05121 8.65872 4.3161 6.80432H6.36245V8.10277C6.39132 8.88031 7.50716 8.87973 7.53575 8.10277V6.80432H12.6461V8.10277C12.675 8.88031 13.7908 8.87973 13.8194 8.10277V6.80432H15.8658C16.1307 8.65872 17.0578 15.1487 17.4741 18.0619C17.5016 18.2543 17.4443 18.4488 17.317 18.5956Z" class="fill-black" />
                                            </svg>
                                        </a>
                                    @else
                                        <a href="#" class="sm-btn light disabled" style="opacity: 0.5; pointer-events: none;">
                                            <i class="fa-light fa-cart-shopping"></i>
                                        </a>
                                    @endif
                                </div>
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
    // Filter form auto-submit on change
    document.querySelectorAll('.filter-checkbox, .category-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });

    // Sort option handling
    document.querySelectorAll('.sort-option').forEach(option => {
        option.addEventListener('click', function() {
            const sortValue = this.dataset.sort;
            const sortInput = document.getElementById('sort_by_input');
            if(sortInput) sortInput.value = sortValue;
            document.getElementById('filterForm').submit();
        });
    });

    // Reset filters
    document.getElementById('resetFilters')?.addEventListener('click', function() {
        window.location.href = '{{ route("products.index") }}';
    });

    document.getElementById('resetFiltersEmpty')?.addEventListener('click', function() {
        window.location.href = '{{ route("products.index") }}';
    });

    // Add to wishlist
    document.querySelectorAll('.add-to-wishlist').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.dataset.productId;
            const icon = this.querySelector('i');
            icon.classList.remove('fa-light');
            icon.classList.add('fa-solid', 'color-primary');
            setTimeout(() => {
                icon.classList.remove('fa-solid', 'color-primary');
                icon.classList.add('fa-light');
            }, 1000);

            // AJAX call to add to wishlist
            fetch(`/wishlist/add/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).catch(error => console.error('Error:', error));
        });
    });

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

        function submitFilter() {
            const form = document.getElementById('filterForm');
            if(form) form.submit();
        }

        let timeout;
        rangeMin.addEventListener('input', updateSlider);
        rangeMax.addEventListener('input', updateSlider);

        if(inputMin) {
            inputMin.addEventListener('change', function() {
                rangeMin.value = this.value;
                updateSlider();
                clearTimeout(timeout);
                timeout = setTimeout(submitFilter, 500);
            });
        }

        if(inputMax) {
            inputMax.addEventListener('change', function() {
                rangeMax.value = this.value;
                updateSlider();
                clearTimeout(timeout);
                timeout = setTimeout(submitFilter, 500);
            });
        }

        updateSlider();
    }
</script>
@endpush
