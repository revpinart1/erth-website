<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    @yield('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
          a{
            color:black;
            text-decoration: none;
        }
        *{
            font-family: Almarai; 
            text-decoration: none;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(203, 174, 136 , 0.7)), url('/images/background.webp');            /* ضمان ألا يتكرر التدرج */
            background-repeat: no-repeat;
            /* جعل التدرج يغطي الصفحة بالكامل */
            background-size: cover;
            /* تثبيت الخلفية عند التمرير */
            background-attachment: fixed;
            /* لون النصوص ليكون واضحًا */
            color: #333;
            font-family: Arial, sans-serif;
            min-height: 100vh; /* ضمان أن الخلفية تغطي الصفحة بالكامل */
           
           
        }
    
        .nav-link-header {
    transition: background-color 0.3s ease, padding 0.3s ease;
    border-radius: 40px;
   padding: 10px 15px;
   font-size:15px;
}

.nav-link-header:hover {
    background-color: #f3e8db;
}

/* رابط الصفحة الحالية */
.nav-link-header.active {
    background-color: #f3e8db;
    font-weight: bold;
}
    </style>
</head>
<body dir="rtl">
@if(!request()->routeIs('login','register'))
<header>
    <nav class="navbar navbar-expand-lg bg-light mt-3 rounded-pill mx-3 px-4" style="background-color: #cab9a3 !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('website.homepage') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link-header mx-1 nav-link {{ request()->routeIs('website.homepage') ? 'active' : '' }}" href="{{ route('website.homepage') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-header mx-1 nav-link {{ request()->routeIs('website.museums') ? 'active' : '' }}" href="{{ route('website.museums') }}">المتاحف</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-header mx-1 nav-link {{ request()->routeIs('website.about') ? 'active' : '' }}" href="{{ route('website.about') }}">نبذة عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-header mx-1 nav-link {{ request()->routeIs('website.contact') ? 'active' : '' }}" href="{{ route('website.contact') }}">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-header  mx-1 nav-link {{ request()->routeIs('website.faq') ? 'active' : '' }}" href="{{ route('website.faq') }}">الأسئلة الشائعة</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link-header  mx-1 nav-link {{ request()->routeIs('website.myReservations') ? 'active' : '' }}" href="{{ route('website.myReservations') }}">حجوزاتي</a>
                    </li>
                    @endauth
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link-header" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f3e8db;">
                            مرحباً، {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('website.myReservations') }}">الحجوزات</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-dark" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
@endif


<main >
 @yield('content')    
</main>
    
    @if(!request()->routeIs('login','register')) <!-- إذا لم تكن الصفحة هي صفحة تسجيل الدخول -->

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted bg-light" >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>تواصل معنا عبر مواقع التواصل الاجتماعي: </span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div class="mx-5" >
      <a href="" class="me-4 text-reset">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-twitter-x"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="mt-1" >
    <div class="container text-end mt-4" >
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3  mb-3">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
           ارث
          </h6>
          <p>
          "إرث" هو منصّة إلكترونية لحجز زيارات المتاحف في مختلف مناطق المملكة العربية السعودية. نهدف إلى تسهيل الوصول إلى التاريخ والثقافة، وتمكين الزوّار من استكشاف كنوز الوطن بكل سهولة.

          </p>
        </div>

        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:#eae0d4;">
    © 2025 Copyright:
    <a class="text-reset fw-bold" href="/">erth.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    @endif



    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>
