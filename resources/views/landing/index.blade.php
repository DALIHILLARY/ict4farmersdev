<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Silicon | Mobile App Showcase Landing v.1</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="muhindo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="muhindo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="muhindo/favicon/favicon-16x16.png">
    <link rel="manifest" href="muhindo/favicon/site.webmanifest">
    <link rel="mask-icon" href="muhindo/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="muhindo/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="muhindo/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="muhindo/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="muhindo/vendor/swiper/swiper-bundle.min.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="muhindo/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #0b0f19;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html'+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>


  <!-- Body -->
  <body>
    
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="../external.html?link=http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        <div class="container px-3">
          <a href="index-2.html" class="navbar-brand pe-3">
            <img src="muhindo/img/logo.svg" width="47" alt="Silicon">
            Silicon
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-current="page">Landings</a>
                  <div class="dropdown-menu p-0">
                    <div class="d-lg-flex">
                      <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0" style="background-image: url(muhindo/img/landings.jpg); margin: -1px;"></div>
                      <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                        <ul class="list-unstyled mb-0">
                          <li><a href="index-2.html" class="dropdown-item">Template Intro Page</a></li>
                          <li><a href="landing-mobile-app-showcase-v1.html" class="dropdown-item">Mobile App Showcase v.1</a></li>
                          <li><a href="landing-mobile-app-showcase-v2.html" class="dropdown-item">Mobile App Showcase v.2</a></li>
                          <li><a href="landing-saas-v1.html" class="dropdown-item">SaaS v.1</a></li>
                          <li><a href="landing-saas-v2.html" class="dropdown-item">SaaS v.2</a></li>
                          <li><a href="landing-saas-v3.html" class="dropdown-item">SaaS v.3</a></li>
                          <li><a href="landing-financial.html" class="dropdown-item">Financial Consulting</a></li>
                          <li><a href="landing-online-courses.html" class="dropdown-item">Online Courses</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                        <ul class="list-unstyled mb-0">
                          <li><a href="landing-medical.html" class="dropdown-item">Medical</a></li>
                          <li><a href="landing-software-company.html" class="dropdown-item">IT (Software) Company</a></li>
                          <li><a href="landing-conference.html" class="dropdown-item">Conference</a></li>
                          <li><a href="landing-digital-agency.html" class="dropdown-item">Digital Agency</a></li>
                          <li><a href="landing-blog.html" class="dropdown-item">Blog Homepage</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                  <div class="dropdown-menu">
                    <div class="d-lg-flex pt-lg-3">
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">About</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="about-v1.html" class="dropdown-item py-1">About v.1</a></li>
                          <li><a href="about-v2.html" class="dropdown-item py-1">About v.2</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Blog</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="blog-list-with-sidebar.html" class="dropdown-item py-1">List View with Sidebar</a></li>
                          <li><a href="blog-grid-with-sidebar.html" class="dropdown-item py-1">Grid View with Sidebar</a></li>
                          <li><a href="blog-list-no-sidebar.html" class="dropdown-item py-1">List View no Sidebar</a></li>
                          <li><a href="blog-grid-no-sidebar.html" class="dropdown-item py-1">Grid View no Sidebar</a></li>
                          <li><a href="blog-simple-feed.html" class="dropdown-item py-1">Simple Feed</a></li>
                          <li><a href="blog-single.html" class="dropdown-item py-1">Single Post</a></li>
                          <li><a href="blog-podcast.html" class="dropdown-item py-1">Podcast</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Portfolio</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="portfolio-grid.html" class="dropdown-item py-1">Grid View</a></li>
                          <li><a href="portfolio-list.html" class="dropdown-item py-1">List View</a></li>
                          <li><a href="portfolio-slider.html" class="dropdown-item py-1">Slider View</a></li>
                          <li><a href="portfolio-courses.html" class="dropdown-item py-1">Courses</a></li>
                          <li><a href="portfolio-single-project.html" class="dropdown-item py-1">Single Project</a></li>
                          <li><a href="portfolio-single-course.html" class="dropdown-item py-1">Single Course</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Services</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="services-v1.html" class="dropdown-item py-1">Services v.1</a></li>
                          <li><a href="services-v2.html" class="dropdown-item py-1">Services v.2</a></li>
                          <li><a href="services-single-v1.html" class="dropdown-item py-1">Service Details v.1</a></li>
                          <li><a href="services-single-v2.html" class="dropdown-item py-1">Service Details v.2</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Pricing</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="pricing.html" class="dropdown-item py-1">Pricing Page</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Contacts</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="contacts-v1.html" class="dropdown-item py-1">Contacts v.1</a></li>
                          <li><a href="contacts-v2.html" class="dropdown-item py-1">Contacts v.2</a></li>
                          <li><a href="contacts-v3.html" class="dropdown-item py-1">Contacts v.3</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Specialty</h6>
                        <ul class="list-unstyled">
                          <li><a href="404-v1.html" class="dropdown-item py-1">404 Error v.1</a></li>
                          <li><a href="404-v2.html" class="dropdown-item py-1">404 Error v.2</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li><a href="account-details.html" class="dropdown-item">Account Details</a></li>
                    <li><a href="account-security.html" class="dropdown-item">Security</a></li>
                    <li><a href="account-notifications.html" class="dropdown-item">Notifications</a></li>
                    <li><a href="account-messages.html" class="dropdown-item">Messages</a></li>
                    <li><a href="account-saved-items.html" class="dropdown-item">Saved Items</a></li>
                    <li><a href="account-collections.html" class="dropdown-item">My Collections</a></li>
                    <li><a href="account-payment.html" class="dropdown-item">Payment Details</a></li>
                    <li><a href="account-signin.html" class="dropdown-item">Sign In</a></li>
                    <li><a href="account-signup.html" class="dropdown-item">Sign Up</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="components/typography.html" class="nav-link">UI Kit</a>
                </li>
                <li class="nav-item">
                  <a href="docs/getting-started.html" class="nav-link">Docs</a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-header border-top">
              <a href="../external.html?link=https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
              </a>
            </div>      
          </div>
          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="../external.html?link=https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i>
            &nbsp;Buy now
          </a>
        </div>
      </header>


      <!-- Hero -->
      <section class="overflow-hidden pt-5" style="background: radial-gradient(116.18% 118% at 50% 100%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 41.83%, rgba(241, 244, 253, 0.07) 82.52%);">
        <div class="container pt-3 pt-sm-4 pt-xl-5">
          <div class="row pt-md-2 pt-lg-5">
            <div class="col-md-5 d-flex flex-column mt-md-4 pt-5 pb-3 pb-sm-4 py-md-5">
              <h1 class="display-4 text-center text-md-start mb-4">Manage All Your Money in One App</h1>
              <p class="fs-lg text-center text-md-start pb-2 pb-md-3 mb-4 mb-lg-5">We offer you a new generation of the mobile banking.<br>Save, spend & manage money in your pocket.</p>
              <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                <a href="#" class="btn btn-dark btn-lg px-3 py-2 me-sm-3 me-lg-4 mb-3">
                  <img src="muhindo/img/market/appstore-light.svg" class="light-mode-img" width="124" alt="App Store">
                  <img src="muhindo/img/market/appstore-dark.svg" class="dark-mode-img" width="124" alt="App Store">
                </a>
                <a href="#" class="btn btn-dark btn-lg px-3 py-2 mb-3">
                  <img src="muhindo/img/market/googleplay-light.svg" class="light-mode-img" width="139" alt="Google Play">
                  <img src="muhindo/img/market/googleplay-dark.svg" class="dark-mode-img" width="139" alt="Google Play">
                </a>
              </div>
              <div class="position-relative d-inline-flex align-items-center justify-content-center justify-content-md-start mt-auto pt-3 pt-md-4 pb-xl-2">
                <a href="#features" class="btn btn-icon btn-light bg-white stretched-link rounded-circle me-3" data-scroll data-scroll-offset="120">
                  <i class="bx bx-chevron-down"></i>
                </a>
                <span class="fs-sm">Discover more</span>
              </div>     
            </div>
            <div class="col-md-7 align-self-end">
              <div class="position-relative overflow-hidden mt-4 pb-3 pt-4 mx-auto me-md-0" style="max-width: 632px;">
                <div class="ratio ratio-1x1"></div>
                <img src="muhindo/img/landing/app-showcase/hero-phone-1.png" class="rellax position-absolute top-0 start-0 zindex-2"  data-rellax-speed="1.6" data-disable-parallax-down="md" alt="Phone">
                <img src="muhindo/img/landing/app-showcase/hero-phone-2.png" class="rellax position-absolute top-0 start-0"  data-rellax-speed="2.8" data-disable-parallax-down="md" alt="Phone">
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Brands (carousel on screens < 1100px) -->
      <section class="container py-5 mt-md-2 mt-lg-4">
        <div class="swiper pt-2 mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="muhindo/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
      </section>


      <!-- Features -->
      <section id="features" class="container pt-lg-2 pt-xl-3 pb-3 pb-xl-5 mt-n2 mt-sm-0 mb-2 mb-md-4 mb-lg-5">
        <div class="row pb-xl-3">

          <!-- Parallax gfx -->
          <div class="col-lg-5 d-none d-lg-block">
            <div class="position-relative" style="max-width: 348px;">
              <img src="muhindo/img/landing/app-showcase/features/phone.png" alt="Phone">
              <div class="rellax position-absolute top-0" data-rellax-vertical-scroll-axis="x" data-rellax-horizontal-speed="0.75" data-disable-parallax-down="lg" style="max-width: 348px; right: -2.75rem;">
                <img src="muhindo/img/landing/app-showcase/features/card.png" alt="Card">
              </div>
            </div>
          </div>

          <!-- Feature list -->
          <div class="col-lg-7">
            <h2 class="h1 text-center text-md-start mb-4">App Features</h2>
            <p class="fs-lg text-muted text-center text-md-start mb-4 mb-xl-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat ligula est. Mattis fermentum, at nec lacus.</p>
            <div class="row row-cols-1 row-cols-sm-2 pt-2 pt-sm-3 pt-xl-2">

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start pe-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/payments.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Easy Payments</h3>
                    <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo.</p>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start ps-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/security.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Data Security</h3>
                    <p class="mb-0">Augue pulvinar justo, fermentum fames aliquam accumsan vestibulum non.</p>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start pe-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/statistics.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Cost Statistics</h3>
                    <p class="mb-0">Mattis urna ultricies non amet, purus in auctor non. Odio vulputate ac nibh.</p>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start ps-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/support.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Support 24/7</h3>
                    <p class="mb-0">A elementum, imperdiet enim, pretium etiam facilisi in aenean quam mauris.</p>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start pe-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/cashback.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Regular Cashback</h3>
                    <p class="mb-0">Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet eleifend.</p>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                <div class="d-flex align-items-start ps-xl-3">
                  <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                    <img src="muhindo/img/landing/app-showcase/features/happy.svg" alt="Icon">
                  </div>
                  <div class="ps-4 ps-sm-3 ps-md-4">
                    <h3 class="h5 pb-1 mb-2">Top Standards</h3>
                    <p class="mb-0">Faucibus cursus maecenas lorem cursus nibh. Sociis sit risus id. Sit facilisis dolor arcu.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- How it works (Slider) -->
      <section class="position-relative bg-secondary py-5">
        <div class="container mt-3 pt-md-2 pt-lg-4 pb-2 pb-md-4 pb-lg-5">
          <h2 class="h1 text-center pb-2 pb-md-0 mb-4 mb-md-5">How Does It Work?</h2>
          <div class="position-relative mx-5">
 
            <!-- Slider prev/next buttons -->
            <button type="button" id="prev-screen" class="btn btn-prev btn-icon position-absolute top-50 start-0 ms-n5 translate-middle-y">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-screen" class="btn btn-next btn-icon position-absolute top-50 end-0 me-n5 translate-middle-y">
              <i class="bx bx-chevron-right"></i>
            </button>

            <!-- Phone frame -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33 zindex-5">
              <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto" style="max-width: 328px; background-image: url(muhindo/img/landing/app-showcase/screens/phone-frame.png);"></div>
            </div>

            <!-- Phone screen -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33">
              <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto" style="max-width: 328px; background-image: url(muhindo/img/landing/app-showcase/screens/phone-screen.png);"></div>
            </div>

            <!-- Swiper slider -->
            <div class="swiper mobile-app-slider" data-swiper-options='{
              "slidesPerView": 1,
              "centeredSlides": true,
              "loop": true,
              "tabs": true,
              "pagination": {
                "el": "#swiper-progress",
                "type": "progressbar"
              },
              "navigation": {
                "prevEl": "#prev-screen",
                "nextEl": "#next-screen"
              },
              "breakpoints": {
                "768": { "slidesPerView": 3 }
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#text-1">
                  <img src="muhindo/img/landing/app-showcase/screens/01.png" class="d-block mx-auto" width="328" alt="Screen">
                </div>

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#text-2">
                  <img src="muhindo/img/landing/app-showcase/screens/02.png" class="d-block mx-auto" width="328" alt="Screen">
                </div>

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#text-3">
                  <img src="muhindo/img/landing/app-showcase/screens/03.png" class="d-block mx-auto" width="328" alt="Screen">
                </div>

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#text-4">
                  <img src="muhindo/img/landing/app-showcase/screens/04.png" class="d-block mx-auto" width="328" alt="Screen">
                </div>

              </div>
            </div>
          </div>

          <!-- Swiper tabs (Description text) -->
          <div class="row justify-content-center pt-4 mt-2 mt-md-3">
            <div class="swiper-tabs col-xl-6 col-lg-7 col-md-8 text-center">

              <!-- Text 1 -->
              <div id="text-1" class="swiper-tab active">
                <h3 class="h4 pb-1 mb-2">Step 1. Advanced budget management</h3>
                <p class="mb-0">Consequat ut cras nisl, enim purus in facilisi. Ipsum amet, lectus malesuada risus sollicitudin accumsan. Id sem elit vel vel lectus risus senectus.</p>
              </div>

              <!-- Text 2 -->
              <div id="text-2" class="swiper-tab">
                <h3 class="h4 pb-1 mb-2">Step 2. Latest transaction history</h3>
                <p class="mb-0">Enim, et amet praesent pharetra. Mi non ante hendrerit amet sed. Arcu sociis tristique quisque hac in consectetur condimentum.</p>
              </div>

              <!-- Text 3 -->
              <div id="text-3" class="swiper-tab">
                <h3 class="h4 pb-1 mb-2">Step 3. Transfers to people from your contact list</h3>
                <p class="mb-0">Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat ligula est. Mattis fermentum, at nec lacus.</p>
              </div>

              <!-- Text 4 -->
              <div id="text-4" class="swiper-tab">
                <h3 class="h4 pb-1 mb-2">Step 4. Card-to-card transfers</h3>
                <p class="mb-0">A sed lorem felis, pulvinar pharetra. At tempus, vel sed faucibus amet sit elementum sed erat. Id nunc blandit pharetra facilisis.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slider progress -->
        <div id="swiper-progress" class="swiper-pagination bottom-0" style="top: auto;"></div>
      </section>


      <!-- Fetures -->
      <section class="container pt-5 pb-2 pb-md-3 py-lg-5">
        <div class="row align-items-center my-3 py-md-3 py-lg-5">
          <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 mb-2 mb-md-0 pb-4 pb-md-0">
            <div class="position-relative mx-auto mx-md-0" style="max-width: 469px;">
              <img src="muhindo/img/landing/app-showcase/features/screen01.png" class="rellax d-block" alt="Screen" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="md">
              <div class="rellax position-absolute top-0 end-0 w-100 h-100" data-rellax-percentage="0.5" data-rellax-speed="0.75" data-disable-parallax-down="md">
                <img src="muhindo/img/landing/app-showcase/features/screen02.png" alt="Screen">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 pb-md-4">
            <h2 class="pb-3">Make your money transfer simple and clear</h2>
            <ul class="list-unstyled pb-3 mb-3">
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                Banking transactions are free for you
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                No monthly cash commission
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                Manage payments and transactions online
              </li>
            </ul>
            <a href="#" class="btn btn-primary">
              Learn more
              <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
            </a>
          </div>
        </div>
        <div class="row align-items-center mt-2 mt-md-0 pt-5 pt-md-4 pt-lg-0 pb-md-3 pb-lg-5">
          <div class="col-md-6 col-lg-5 offset-xl-1 mb-2 mb-md-0 pb-4 pb-md-0">
            <div class="position-relative mx-auto mx-md-0" style="max-width: 462px;">
              <img src="muhindo/img/landing/app-showcase/features/screen03.png" class="rellax d-block" alt="Screen" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="md">
              <div class="rellax position-absolute top-0 end-0 w-100 h-100 me-md-n3" data-rellax-percentage="0.5" data-rellax-speed="0.75" data-disable-parallax-down="md">
                <img src="muhindo/img/landing/app-showcase/features/screen04.png" alt="Screen">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-lg-1">
            <h2 class="pb-3">Receive payment from international bank details</h2>
            <div class="row row-cols-1 row-cols-sm-2 text-start pb-3">
              <div class="col pb-4">
                <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                  <img src="muhindo/img/landing/app-showcase/features/payments.svg" alt="Easy Payments">
                </div>
                <p class="mb-0">Manage your payments online. Mollis congue egestas egestas fermentum fames.</p>
              </div>
              <div class="col pb-4">
                <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                  <img src="muhindo/img/landing/app-showcase/features/cashback.svg" alt="Regular Cashback">
                </div>
                <p class="mb-0">A elementur and imperdiet enim, pretium etiam facilisi aenean quam mauris.</p>
              </div>
            </div>
            <a href="#" class="btn btn-primary">
              Learn more
              <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
            </a>
          </div>
        </div>
        <!-- Extra spacing for dark mode only -->
        <div class="pt-5 d-none d-dark-mode-block"></div>
      </section>


      <!-- Testimonials -->
      <section class="py-5 mb-md-2" style="background: radial-gradient(116.18% 118% at 50% 100%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 41.83%, rgba(241, 244, 253, 0.07) 82.52%);">
        <div class="container py-lg-4">
          <div class="row py-md-3">
            <div class="col-xl-3 col-lg-4 pt-2">
              <h2 class="h1 text-center text-lg-start pb-2">Clients are Loving Our App</h2>
              
              <!-- Slider prev/next buttons -->
              <div class="d-flex justify-content-center justify-content-lg-start pt-lg-5">
                <button type="button" id="prev-review" class="btn btn-prev btn-icon btn-sm me-3">
                  <i class="bx bx-chevron-left"></i>
                </button>
                <button type="button" id="next-review" class="btn btn-next btn-icon btn-sm">
                  <i class="bx bx-chevron-right"></i>
                </button>
              </div>
            </div>
            <div class="col-lg-8 offset-xl-1 pt-4 mt-2 mt-md-3 mt-lg-0 pt-lg-0">
              <div class="px-2 px-sm-0">
                <div class="swiper mx-n2" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 8,
                  "navigation": {
                    "prevEl": "#prev-review",
                    "nextEl": "#next-review"
                  },
                  "loop": true,
                  "breakpoints": {
                    "600": { "slidesPerView": 2 }
                  }
                }'>
                  <div class="swiper-wrapper">
      
                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4 pb-3 px-2">
                      <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                        <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                          <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                            <i class="bx bxs-quote-left"></i>
                          </span>
                          <blockquote class="card-body pb-4 mb-0">
                            <div class="text-nowrap pt-1 mb-3">
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bx-star text-muted opacity-75"></i>
                              <i class="bx bx-star text-muted opacity-75"></i>
                            </div>
                            <p class="fs-lg mb-0">Sit pretium aliquam tempor, orci dolor sed maecenas rutrum sagittis. Laoreet posuere rhoncus, egestas lacus, egestas justo aliquam vel. Nisi vitae lectus hac hendrerit. Montes justo turpis sit amet.</p>
                          </blockquote>
                          <div class="card-footer d-flex align-items-center border-0 pt-0">
                            <img src="muhindo/img/avatar/42.png" width="48" class="rounded-circle ms-n1" alt="Fannie Summers">
                            <div class="ps-2 ms-1">
                              <h6 class="fs-base fw-semibold mb-0">Fannie Summers</h6>
                              <span class="fs-sm text-muted">Designer</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <!-- Item -->
                    <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                      <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                        <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                          <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                            <i class="bx bxs-quote-left"></i>
                          </span>
                          <blockquote class="card-body pb-4 mb-0">
                            <div class="text-nowrap pt-1 mb-3">
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                            </div>
                            <p class="fs-lg mb-0">Nunc senectus leo vel venenatis accumsan vestibulum sollicitudin amet porttitor. Nisl bibendum nulla tincidunt eu enim ornare dictumst sit amet. Dictum pretium dolor tincidunt egestas eget nunc.</p>
                          </blockquote>
                          <div class="card-footer d-flex align-items-center border-0 pt-0">
                            <img src="muhindo/img/avatar/43.png" width="48" class="rounded-circle ms-n1" alt="Robert Fox">
                            <div class="ps-2 ms-1">
                              <h6 class="fs-base fw-semibold mb-0">Robert Fox</h6>
                              <span class="fs-sm text-muted">QA Engineer</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <!-- Item -->
                    <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                      <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                        <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                          <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                            <i class="bx bxs-quote-left"></i>
                          </span>
                          <blockquote class="card-body pb-4 mb-0">
                            <div class="text-nowrap pt-1 mb-3">
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bx-star text-muted opacity-75"></i>
                            </div>
                            <p class="fs-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum odio, bibendum ornare mi at, efficitur urna. Sit pretium aliquam tempor, orci dolor sed maecenas.</p>
                          </blockquote>
                          <div class="card-footer d-flex align-items-center border-0 pt-0">
                            <img src="muhindo/img/avatar/44.png" width="48" class="rounded-circle ms-n1" alt="Annette Black">
                            <div class="ps-2 ms-1">
                              <h6 class="fs-base fw-semibold mb-0">Annette Black</h6>
                              <span class="fs-sm text-muted">Project Manager</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <!-- Item -->
                    <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                      <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                        <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                          <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                            <i class="bx bxs-quote-left"></i>
                          </span>
                          <blockquote class="card-body pb-4 mb-0">
                            <div class="text-nowrap pt-1 mb-3">
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                              <i class="bx bxs-star text-warning"></i>
                            </div>
                            <p class="fs-lg mb-0">Etiam augue ante, imperdiet et nunc sed, bibendum faucibus est. Suspendisse egestas facilisis erat eu eleifend. Pellentesque finibus congue egestas egestas suspendisse blandit justo.</p>
                          </blockquote>
                          <div class="card-footer d-flex align-items-center border-0 pt-0">
                            <img src="muhindo/img/avatar/45.png" width="48" class="rounded-circle ms-n1" alt="Jerome Bell">
                            <div class="ps-2 ms-1">
                              <h6 class="fs-base fw-semibold mb-0">Jerome Bell</h6>
                              <span class="fs-sm text-muted">Developer</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- FAQ -->
      <section class="container py-5 mb-lg-2">
        <div class="row py-2 py-md-4 py-lg-5">
          <div class="col-xl-4 col-md-5 text-center text-md-start pt-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
            <h2 class="pb-3 mb-1 mb-lg-3">Any questions? <br class="d-none d-md-inline">Check out the FAQs</h2>
            <p class="fs-lg pb-3 mb-2 mb-lg-3">Still have unanswered questions and need to get in touch?</p>
            <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
              <div class="col">
                <div class="card card-hover">
                  <div class="card-body pb-3">
                    <i class="bx bxs-phone-call d-block fs-2 text-primary mb-2 py-1"></i>
                    <p class="fs-sm mb-2">Still have  questions?</p>
                    <a href="#" class="btn btn-link stretched-link px-0">
                      Call us
                      <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover">
                  <div class="card-body pb-3">
                    <i class="bx bx-message-rounded-dots d-block fs-2 text-success mb-2 py-1"></i>
                    <p class="fs-sm mb-2">Still have  questions?</p>
                    <a href="#" class="btn btn-link text-success stretched-link px-0">
                      Chat with us
                      <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 offset-xl-1">
            <div class="accordion" id="faq">
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h2 class="accordion-header" id="q1-heading">
                  <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                    Is any of my personal information stored in the App?
                  </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h2 class="accordion-header" id="q2-heading">
                  <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                    What formats can I download my transaction history in?
                  </button>
                </h2>
                <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h2 class="accordion-header" id="q3-heading">
                  <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                    Can I schedule future transfers?
                  </button>
                </h2>
                <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h2 class="accordion-header" id="q4-heading">
                  <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                    When can I use Banking App services?
                  </button>
                </h2>
                <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h2 class="accordion-header" id="q5-heading">
                  <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false" aria-controls="q5">
                    Can I create my own password that is easy for me to remember?
                  </button>
                </h2>
                <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0 rounded-3 shadow-sm">
                <h2 class="accordion-header" id="q6-heading">
                  <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false" aria-controls="q6">
                    What happens if I forget or lose my password?
                  </button>
                </h2>
                <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6-heading" data-bs-parent="#faq">
                  <div class="accordion-body fs-sm pt-0">
                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Subscription CTA -->
      <section class="container">
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-lg-5 px-xl-0">
          <div class="row align-items-center py-lg-4">
            <div class="col-xl-5 col-md-6 offset-xl-1 mb-4 mb-md-0">
              <div class="d-flex align-items-center">
                <img src="muhindo/img/landing/app-showcase/notification-icon.svg" width="78" alt="Bell icon">
                <div class="ps-3 ms-sm-3">
                  <h2 class="h4 mb-0">Subscribe to our newsletter to stay informed about latest updates</h2>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-md-6">
              <div class="ps-lg-5 ms-xl-2">
                <form class="input-group input-group-lg needs-validation" novalidate>
                  <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                  <i class="bx bx-envelope fs-xl text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                  <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                  <button type="submit" class="btn btn-primary px-sm-4">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer pt-5 pb-4 pb-lg-5">
      <div class="container text-center pt-lg-3">
        <div class="navbar-brand justify-content-center text-dark mb-2 mb-lg-4">
          <img src="muhindo/img/logo.svg" class="me-2" width="60" alt="Silicon">
          <span class="fs-4">Silicon</span>
        </div>
        <ul class="nav justify-content-center pt-3 pb-4 pb-lg-5">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Overview</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Account</a></li>
        </ul>
        <div class="d-flex flex-column flex-sm-row justify-content-center">
          <a href="#" class="btn btn-dark btn-lg px-3 py-2 me-sm-4 mb-3">
            <img src="muhindo/img/market/appstore-light.svg" class="light-mode-img" width="124" alt="App Store">
            <img src="muhindo/img/market/appstore-dark.svg" class="dark-mode-img" width="124" alt="App Store">
          </a>
          <a href="#" class="btn btn-dark btn-lg px-3 py-2 mb-3">
            <img src="muhindo/img/market/googleplay-light.svg" class="light-mode-img" width="139" alt="Google Play">
            <img src="muhindo/img/market/googleplay-dark.svg" class="dark-mode-img" width="139" alt="Google Play">
          </a>
        </div>
        <div class="d-flex justify-content-center pt-4 mt-lg-3">
          <a href="#" class="btn btn-icon btn-secondary btn-facebook mx-2">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-instagram mx-2">
            <i class="bx bxl-instagram"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-twitter mx-2">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-youtube mx-2">
            <i class="bx bxl-youtube"></i>
          </a>
        </div>
        <p class="nav d-block fs-sm text-center pt-5 mt-lg-4 mb-0">
          <span class="opacity-80">&copy; All rights reserved. Made by </span>
          <a class="nav-link d-inline-block p-0" href="../external.html?link=https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a>
        </p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="muhindo/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="muhindo/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="muhindo/vendor/rellax/rellax.min.js"></script>
    <script src="muhindo/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="muhindo/js/theme.min.js"></script>
  </body>

</html>