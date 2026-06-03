@props(['menuItems' => null])

@php
  $items = $menuItems ?? $this->menuItems ?? [];
  $currentRoute = request()->route() ? request()->route()->getName() : '';
  $currentUrl = request()->url();

  // Function to check active menu item
  function isActive($item, $currentRoute, $currentUrl)
  {
    if (isset($item->active) && $item->active === true) {
      return true;
    }
    if (isset($item->url) && $item->url !== 'javascript:void(0);') {
      return $currentUrl === url($item->url);
    }
    return false;
  }
@endphp

<header>
  <!-- Main Header Start -->
  <div class="header-section bg-white main-menu ">
    <div class="header-bottom-area bg-white">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-3 col-md-6 col-4">
            <a href="{{ route('home') }}" class="header-logo">
              <img src="{{ asset('assets/media/logo/nuvana-logo.jpeg') }}" alt="Nuvana - Weighing Solutions">
            </a>
          </div>

          <div class="col-xl-9 d-xl-block d-none">
            <nav class="navigation d-flex align-items-center justify-content-end">
              <div class="header-buttons">
                <div class="logo-icon d-sm-block d-none">
                  <form action="{{ route('search') }}" method="GET">
                    <div class="search-block">
                      <input type="search" class="input-search form-control" name="search" id="search"
                        placeholder="Search products..." value="{{ request('search') }}">
                      <button type="submit" id="magnifying-btn"
                        style="background: none; border: none; cursor: pointer;">
                        <i class="fa-light fa-magnifying-glass"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                  Menu
                  <img src="{{ asset('assets/media/icons/menu-2.png') }}" alt="Menu Icon">
                </a>
              </div>

              <div class="menu-button-right">
                <div class="main-menu__nav">
                  @if(!empty($items))
                    <ul class="main-menu__list">
                      @foreach($items as $item)
                        @php
                          $hasSubmenu = !empty($item->submenu);
                          $isActive = isActive($item, $currentRoute, $currentUrl);
                          $activeClass = $isActive ? 'active' : '';
                        @endphp

                        <li class="{{ $item->class ?? '' }} {{ $hasSubmenu ? 'dropdown' : '' }} {{ $activeClass }}">
                          <a href="{{ $item->url ?? '#' }}" class="{{ $activeClass }}">
                            {{ $item->name ?? 'Menu' }}
                            @if($hasSubmenu && !empty($item->icon))
                              <i class="{{ $item->icon }} d-lg-block d-none"></i>
                            @endif
                          </a>

                          @if($hasSubmenu)
                            <ul class="sub-menu">
                              @foreach($item->submenu as $subItem)
                                @php
                                  $isSubActive = isset($subItem->url) && $currentUrl === url($subItem->url);
                                  $subActiveClass = $isSubActive ? 'active' : '';
                                @endphp
                                <li class="{{ $subActiveClass }}">
                                  <a href="{{ $subItem->url ?? '#' }}" class="{{ $subActiveClass }}">
                                    {{ $subItem->name ?? 'Submenu' }}
                                  </a>
                                </li>
                              @endforeach
                            </ul>
                          @endif
                        </li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Header End -->

  <!-- Sticky Header Start-->
  <div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
  </div>
  <!-- Sticky Header End -->
</header>
<!-- Header Menu End -->
