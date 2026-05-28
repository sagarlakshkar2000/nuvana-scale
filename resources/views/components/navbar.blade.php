@props(['menuItems' => null])

@php
  $items = $menuItems ?? $this->menuItems ?? [];
@endphp

<header>
  <!-- Main Header Start -->
  <div class="header-section bg-white dark-black main-menu">
    <div class="header-bottom-area bg-light-black">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-3 col-md-6 col-4">
            <a href="{{ route('home') }}" class="header-logo">
              <img src="{{ asset('assets/media/logo.png') }}" alt="Logo">
            </a>
          </div>
          <div class="col-xl-6 d-xl-block d-none">
            <nav class="navigation d-flex align-items-center justify-content-center">
              <div class="menu-button-right">
                <div class="main-menu__nav">
                  @if(!empty($items))
                    <ul class="main-menu__list">
                      @foreach($items as $item)
                        <li class="{{ $item->class ?? '' }} {{ $item->active ? 'active' : '' }}">
                          <a href="{{ $item->url ?? '#' }}" class="{{ $item->active ? 'active' : '' }}">
                            {{ $item->name ?? 'Menu' }}
                            @if(!empty($item->submenu) && !empty($item->icon))
                              <i class="{{ $item->icon }} d-lg-block d-none"></i>
                            @endif
                          </a>

                          @if(!empty($item->submenu))
                            <ul class="sub-menu">
                              @foreach($item->submenu as $subItem)
                                <li class="{{ $subItem->active ? 'active' : '' }}">
                                  <a href="{{ $subItem->url ?? '#' }}">{{ $subItem->name ?? 'Submenu' }}</a>
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
          <div class="col-xl-3 col-md-6 col-8">
            <div class="header-buttons">
              <div class="logo-icon d-sm-block d-none">
                <form action="https://uiparadox.co.uk/templates/powerup/v3/index.html">
                  <div class="search-block">
                    <input type="search" class="input-search form-control" name="search" id="search"
                      placeholder="Search...">
                    <a href="javascript:;" id="magnifying-btn"><i class="fa-light fa-magnifying-glass"></i></a>
                  </div>
                </form>
              </div>
              <a href="{{ route('contact') }}" class="account-btn">
                <i class="fa-light fa-user"></i>
              </a>
              <a href="javascript:;" class="cart-button">
                <i class="fa-light fa-cart-shopping"></i>
              </a>
              <a href="#" class="main-menu__toggler mobile-nav__toggler">
                Menu
                <img src="{{ asset('assets/media/icons/menu-2.png') }}" alt="">
              </a>
            </div>
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
  <!-- Sticky Header End  -->
</header>
<!-- Header Menu End -->
