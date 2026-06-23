@extends('layouts.app')

@section('content')

  <!-- TITLE BANNER START -->
  <section class="title-banner">
    <div class="container">
      <h2 class="white fw-600 text-center">Blog</h2>
    </div>
  </section>
  <!-- TITLE BANNER END -->

  <!-- BLOGS SECTION START -->
  <div class="blog-section py-40">
    <div class="container-fluid">
      <div class="row row-gap-3 align-items-center justify-content-between mb-24">
        <div class="col-xl-4 col-lg-6 col-md-12">
          <form action="https://uiparadox.co.uk/templates/Nuvana/v3/blog-grid.html" method="post" class="newsletter-form">
            <input type="email" class="form-control search-input" placeholder="Search Here...">
            <button type="submit" class="search-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path
                  d="M8.11719 0C12.593 0 16.2344 3.64137 16.2344 8.11719C16.2344 10.1445 15.4873 12.0007 14.2539 13.4247L19.8284 18.9998C20.0572 19.2286 20.0572 19.5996 19.8284 19.8284C19.5995 20.0573 19.2286 20.0572 18.9997 19.8284L13.4254 14.2534C12.0012 15.4871 10.1448 16.2344 8.11719 16.2344C3.64137 16.2344 0 12.593 0 8.11719C0 3.64137 3.64137 0 8.11719 0ZM8.11719 15.0625C11.9469 15.0625 15.0625 11.9468 15.0625 8.11719C15.0625 4.28754 11.9468 1.17188 8.11719 1.17188C4.28754 1.17188 1.17188 4.28754 1.17188 8.11719C1.17188 11.9468 4.28754 15.0625 8.11719 15.0625Z"
                  fill="#EAEAEC" />
              </svg>
            </button>
          </form>
        </div>
      </div>
      <div class="row row-gap-4">
        @foreach($posts as $post)
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            @if($post->featured_image_url)
            <a href="{{ route('blog.detail', $post->post_name) }}" class="card-image">
              <img src="{{ $post->featured_image_url }}" alt="{{ $post->post_title }}">
            </a>
            @endif
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">{{ \Carbon\Carbon::parse($post->post_date)->format('d M, Y') }}</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By {{ $post->author->display_name ?? 'Admin' }}</p>
                </div>
                <a href="{{ route('blog.detail', $post->post_name) }}" class="h6">{{ $post->post_title }}</a>
              </div>
              <a href="{{ route('blog.detail', $post->post_name) }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="row row-gap-3 align-items-center justify-content-between mt-48 mb-24">
        <div class="col-xl-4 col-lg-4 col-md-3">
          <div class="d-flex align-items-center gap-16">
            <p class="black d-lg-block d-none">
              Showing {{ $posts->firstItem() ?? 0 }} - {{ $posts->lastItem() ?? 0 }} of {{ $posts->total() }} Results
            </p>
          </div>
        </div>

        <div class="col-xl-8 col-lg-5 col-md-12">
          {{ $posts->links() }}
        </div>
      </div>
    </div>
    <!-- BLOGS SECTION END -->
@endsection
