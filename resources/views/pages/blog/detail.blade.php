@extends('layouts.app')

@section('content')

  @if(!$post)
    <div class="container py-5">
      <div class="alert alert-danger">
        <h4>Post not found</h4>
        <p>The requested blog post does not exist.</p>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Blogs</a>
      </div>
    </div>
  @else
    <!-- TITLE BANNER START -->
    <section class="title-banner">
      <div class="container">
        <h2 class="white fw-600 text-center mb-24">{{ $post->post_title }}</h2>
        <p class="white text-center">
          {{ \Carbon\Carbon::parse($post->post_date)->format('d M, Y') }}
          @if(isset($post->author))
            <span class="light-gray">&nbsp; • &nbsp;By
              {{ $post->author->display_name ?? $post->author->user_login ?? 'Admin' }}</span>
          @endif
        </p>
      </div>
    </section>
    <!-- TITLE BANNER END -->

    <!-- Blog Detail Section Start -->
    <div class="blog-detail-page py-40">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="blog-detail-wrapper">
              @php
                  $content = $post->post_content;
                  if ($post->featured_image_url) {
                      // Extract the base filename of the featured image, ignoring WP size suffixes
                      $basename = basename(parse_url($post->featured_image_url, PHP_URL_PATH));
                      $filename_without_ext = pathinfo($basename, PATHINFO_FILENAME);
                      $base_name = preg_replace('/-\d+x\d+$/', '', $filename_without_ext);

                      if (!empty($base_name)) {
                          // Regex to find the first image with this base name, including optional wrapping <figure>, <p>, <a>, or <figcaption>
                          $pattern = '/(?:<figure[^>]*>|<p[^>]*>)?\s*(?:<a[^>]*>)?\s*<img[^>]*src=[\'"][^\'"]*' . preg_quote($base_name, '/') . '[^\'"]*[\'"][^>]*>\s*(?:<\/a>)?\s*(?:\s*<figcaption[^>]*>.*?<\/figcaption>\s*)?(?:<\/figure>|<\/p>)?/is';
                          
                          // Remove only the first occurrence
                          $content = preg_replace($pattern, '', $content, 1);
                      }
                  }
              @endphp

              @if($post->featured_image_url)
                <div class="main-image mb-24">
                  <img src="{{ $post->featured_image_url }}" alt="{{ $post->post_title }}" class="w-100 br-10">
                </div>
              @endif

              <div class="post-content">
                {!! $content !!}
              </div>

              <div class="hr-line bg-light-gray mb-24"></div>

              <div class="d-flex align-items-center justify-content-between flex-wrap gap-24 mb-24">
                <div class="blog-tags-wrapper">
                  <h6 class="black fw-600">Tags:</h6>
                  @if(isset($post->tags) && $post->tags->count() > 0)
                    @foreach($post->tags as $tag)
                      <a href="{{ route('blog.index', ['tag' => $tag]) }}" class="blog-tags black">
                        {{ $tag }}
                      </a>
                    @endforeach
                  @else
                    <span class="text-muted">No tags</span>
                  @endif
                </div>

                <ul class="list-unstyled social-link mb-0 d-flex align-items-center gap-8">
                  <li class="d-flex align-items-center gap-8">
                    <i class="fas fa-share-alt"></i>
                    <h6 class="black fw-600 mb-0">Share:</h6>
                  </li>

                  <!-- Facebook -->
                  <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                      target="_blank" rel="noopener" class="blog-icons facebook" aria-label="Share on Facebook">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>

                  <!-- Twitter/X -->
                  <li>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->post_title) }}"
                      target="_blank" rel="noopener" class="blog-icons twitter" aria-label="Share on Twitter">
                      <i class="fab fa-x"></i>
                    </a>
                  </li>

                  <!-- LinkedIn -->
                  <li>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                      target="_blank" rel="noopener" class="blog-icons linkedin" aria-label="Share on LinkedIn">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>

                  <!-- Pinterest -->
                  <li>
                    <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&media={{ urlencode($post->featured_image_url) }}&description={{ urlencode($post->post_title) }}"
                      target="_blank" rel="noopener" class="blog-icons pinterest" aria-label="Share on Pinterest">
                      <i class="fab fa-pinterest"></i>
                    </a>
                  </li>

                  <!-- WhatsApp -->
                  <li>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($post->post_title) }}%20{{ urlencode(request()->fullUrl()) }}"
                      target="_blank" rel="noopener" class="blog-icons whatsapp" aria-label="Share on WhatsApp">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </li>

                  <!-- Telegram -->
                  <li>
                    <a href="https://t.me/share/url?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->post_title) }}"
                      target="_blank" rel="noopener" class="blog-icons telegram" aria-label="Share on Telegram">
                      <i class="fab fa-telegram-plane"></i>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="hr-line bg-light-gray mb-16"></div>
              <div class="d-flex align-items-center justify-content-between gap-24 mb-64">
                <a href="{{ route('blog.index') }}" class="fw-500 black hover-link">
                  &larr; Back to Blogs
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Detail Section End -->
  @endif
@endsection

@push('meta')
  <meta property="og:title" content="{{ $post->post_title ?? 'Blog Post' }}">
  <meta property="og:description" content="{{ Str::limit(strip_tags($post->post_content ?? ''), 150) }}">
  @if(isset($post->featured_image_url))
    <meta property="og:image" content="{{ $post->featured_image_url }}">
  @endif
  <meta property="og:url" content="{{ request()->fullUrl() }}">
  <meta name="twitter:card" content="summary_large_image">
@endpush

@push('styles')
  <style>
    .post-content {
      line-height: 1.8;
      color: #333;
      font-size: 1.05rem;
    }

    .post-content img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin: 20px 0;
    }

    .post-content p {
      margin-bottom: 1.5rem;
    }

    .post-content h1,
    .post-content h2,
    .post-content h3,
    .post-content h4,
    .post-content h5 {
      margin-top: 2rem;
      margin-bottom: 1rem;
      font-weight: 600;
      color: #1a1a1a;
    }

    .post-content ul,
    .post-content ol {
      margin-bottom: 1.5rem;
      padding-left: 2rem;
    }

    .post-content li {
      margin-bottom: 0.5rem;
    }

    .post-content blockquote {
      border-left: 4px solid var(--color-primary, #0056b3);
      padding: 1rem 1.5rem;
      font-style: italic;
      color: #555;
      margin: 1.5rem 0;
      background: #f8f9fa;
      border-radius: 0 10px 10px 0;
    }

    .post-content a {
      color: var(--color-primary, #0056b3);
      text-decoration: underline;
    }

    .blog-icons {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      background: #0056b3;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .blog-icons:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    /* Social Share Icons - Colorful Version */
    .social-link .blog-icons {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      transition: all 0.3s ease;
      text-decoration: none;
      position: relative;
    }

    /* Individual Social Media Colors */
    .social-link li:nth-child(2) .blog-icons {
      background: #1877f2;
      /* Facebook Blue */
      box-shadow: 0 4px 12px rgba(24, 119, 242, 0.3);
    }

    .social-link li:nth-child(3) .blog-icons {
      background: #0a66c2;
      /* LinkedIn Blue */
      box-shadow: 0 4px 12px rgba(10, 102, 194, 0.3);
    }

    .social-link li:nth-child(4) .blog-icons {
      background: #000000;
      /* Twitter/X Black */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .social-link li:nth-child(5) .blog-icons {
      background: #e60023;
      /* Pinterest Red */
      box-shadow: 0 4px 12px rgba(230, 0, 35, 0.3);
    }

    /* SVG Icon Colors - Make them white */
    .social-link .blog-icons svg {
      width: 20px;
      height: 20px;
      fill: #ffffff;
      transition: all 0.3s ease;
    }

    /* Hover Effects */
    .social-link .blog-icons:hover {
      transform: translateY(-4px) scale(1.05);
    }

    .social-link li:nth-child(2) .blog-icons:hover {
      box-shadow: 0 8px 20px rgba(24, 119, 242, 0.5);
      background: #1b7ff5;
    }

    .social-link li:nth-child(3) .blog-icons:hover {
      box-shadow: 0 8px 20px rgba(10, 102, 194, 0.5);
      background: #0b72d4;
    }

    .social-link li:nth-child(4) .blog-icons:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
      background: #1a1a1a;
    }

    .social-link li:nth-child(5) .blog-icons:hover {
      box-shadow: 0 8px 20px rgba(230, 0, 35, 0.5);
      background: #ff0027;
    }

    /* Active/Click Effect */
    .social-link .blog-icons:active {
      transform: scale(0.92);
    }

    /* Optional: Add tooltip on hover */
    .social-link .blog-icons::after {
      content: attr(aria-label);
      position: absolute;
      bottom: calc(100% + 10px);
      left: 50%;
      transform: translateX(-50%) scale(0.8);
      background: rgba(0, 0, 0, 0.8);
      color: #ffffff;
      padding: 4px 12px;
      border-radius: 4px;
      font-size: 12px;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .social-link .blog-icons:hover::after {
      opacity: 1;
      transform: translateX(-50%) scale(1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .social-link .blog-icons {
        width: 36px;
        height: 36px;
      }

      .social-link .blog-icons svg {
        width: 16px;
        height: 16px;
      }
    }

    /* Dark Mode Support */
    @media (prefers-color-scheme: dark) {
      .social-link .blog-icons {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
      }

      .social-link li:nth-child(4) .blog-icons {
        background: #1a1a1a;
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
      }

      .social-link li:nth-child(4) .blog-icons:hover {
        background: #333333;
      }
    }

    /* Animation on page load */
    .social-link .blog-icons {
      animation: socialFadeIn 0.5s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    .social-link li:nth-child(2) .blog-icons {
      animation-delay: 0.1s;
    }

    .social-link li:nth-child(3) .blog-icons {
      animation-delay: 0.2s;
    }

    .social-link li:nth-child(4) .blog-icons {
      animation-delay: 0.3s;
    }

    .social-link li:nth-child(5) .blog-icons {
      animation-delay: 0.4s;
    }

    @keyframes socialFadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Alternative: Gradient Colors for Modern Look */
    .social-link li:nth-child(2) .blog-icons {
      color: #ffffff;
      background: linear-gradient(135deg, #1877f2, #4b8ff5);
    }

    .social-link li:nth-child(3) .blog-icons {
      color: #ffffff;
      background: linear-gradient(135deg, #0a66c2, #3b8fd4);
    }

    .social-link li:nth-child(4) .blog-icons {
      color: #ffffff;

      background: linear-gradient(135deg, #333333, #555555);
    }

    .social-link li:nth-child(5) .blog-icons {
      color: #ffffff;

      background: linear-gradient(135deg, #e60023, #ff4d6d);
    }

    /* Glowing effect on hover */
    .social-link .blog-icons::before {
      content: '';
      position: absolute;
      inset: -2px;
      border-radius: 50%;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .social-link .blog-icons:hover::before {
      color: #ffffff;
      opacity: 1;
    }

    .social-link li:nth-child(2) .blog-icons::before {
      color: #ffffff;
      background: radial-gradient(circle, rgba(24, 119, 242, 0.3), transparent);
    }

    .social-link li:nth-child(3) .blog-icons::before {
      color: #ffffff;
      background: radial-gradient(circle, rgba(10, 102, 194, 0.3), transparent);
    }

    .social-link li:nth-child(4) .blog-icons::before {
      color: #ffffff;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.2), transparent);
    }

    .social-link li:nth-child(5) .blog-icons::before {
      background: radial-gradient(circle, rgba(230, 0, 35, 0.3), transparent);
    }
  </style>
@endpush
