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
          <form action="https://uiparadox.co.uk/templates/powerup/v3/blog-grid.html" method="post"
            class="newsletter-form">
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
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/2.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Discover the Best Vitamins and Minerals
                  for Boosting Your Peak Performance and Strength</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/3.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Stay Hydrated During Intense Workouts:
                  Top
                  Hydration Tips for Fitness Enthusiasts</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/4.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Amino Acids vs. BCAAs: Which Supplement
                  is
                  More Effective for Muscle Growth?</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/5.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">How Meal Replacements Can Help You
                  Achieve
                  Your Weight Loss and Fitness Goals</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/6.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Why Creatine is Essential for Building
                  Strength and Enhancing Your Workout Results</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/7.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Superfoods You Need to Add to Your Diet
                  for Better Fitness and Recovery</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/8.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Probiotics and Gut Health: Their Impact
                  on
                  Fitness and Your Overall Well-being</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/9.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">How to Use Mass Gainers Effectively for
                  Muscle Building and Workout Recovery</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/10.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">The Ultimate Guide to Post-Workout
                  Nutrition: Fuel Your Recovery Like a Pro</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/11.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">The Role of Amino Acids in Muscle
                  Recovery
                  and Boosting Workout Performance</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/12.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">How Proper Hydration Can Enhance
                  Endurance
                  and Strength During High-Intensity Workouts</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="blog-card main d-flex flex-column gap-16 bg-lightest-gray br-16">
            <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="card-image">
              <img src="assets/media/blogs/13.png" alt="blog image">
            </a>
            <div class="d-flex flex-column gap-32">
              <div class="d-flex flex-column gap-16 black">
                <div class="create-by">
                  <p class="fw-500">20 Nov, 2025</p>
                  <div class="dot"></div>
                  <p class="dark-gray">By Rosalie Jones</p>
                </div>
                <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="h6">Effective Weight Loss Tips: Combine Meal
                  Replacements with Regular Fitness for Results</a>
              </div>
              <a href="{{ route('blog.detail', 'test-blog-slug') }}" class="text-16 medium black card-btn">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-gap-3 align-items-center justify-content-between mt-48 mb-24">
        <div class="col-xl-4 col-lg-4 col-md-3">
          <div class="d-flex align-items-center gap-16">
            <p class="black d-lg-block d-none">Showing 01 - 09 of 30 Results</p>
          </div>
        </div>

        <div class="col-xl-8 col-lg-5 col-md-12">
          <div class="pagination">
            <ul id="border-pagination">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M15.1883 19.7337C15.5432 19.3788 15.5433 18.8031 15.1882 18.4481L6.74014 10.0002L15.1883 1.55191C15.5432 1.19694 15.5433 0.621303 15.1882 0.266273C14.8332 -0.0887576 14.2576 -0.0887576 13.9026 0.266273L4.81165 9.35742C4.64117 9.52791 4.54541 9.75912 4.54541 10.0002C4.54541 10.2413 4.64123 10.4726 4.81171 10.643L13.9026 19.7337C14.2576 20.0888 14.8332 20.0888 15.1883 19.7337Z"
                      fill="#141516" />
                  </svg>
                </a>
              </li>
              <li><a href="#">01</a></li>
              <li><a href="#">02</a></li>
              <li><a href="#">03</a></li>
              <li>
                <a href="#" class="active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M4.81165 0.266265C4.45668 0.621235 4.45662 1.19687 4.81171 1.5519L13.2598 9.99978L4.81165 18.4481C4.45668 18.8031 4.45662 19.3787 4.81171 19.7337C5.16674 20.0888 5.74232 20.0888 6.09735 19.7337L15.1883 10.6426C15.3587 10.4721 15.4545 10.2409 15.4545 9.99978C15.4545 9.75869 15.3587 9.52742 15.1882 9.35699L6.09729 0.266326C5.74232 -0.088765 5.16668 -0.0887653 4.81165 0.266265Z"
                      fill="#141516" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOGS SECTION END -->
@endsection
