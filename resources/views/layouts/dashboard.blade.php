<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="importmap"></script>

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/material-dashboard.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css.map')}}">

    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        a{
            color:#ffffff
        }
        *{
            font-family: Almarai;
            backgroun
        }
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            background-color: #343a40;
            padding-top: 0.3rem;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            transition: 0.2s;
        }
        .sidebar a:hover {
            background-color: pink;
        }
        .sidebar i {
            margin-left: 10px;
        }
    </style>
    <title>Dasboard</title>
</head>

<body dir="rtl" >

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-end ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header px-4 py-3 m-0">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absoluted-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
 
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">لوحة التحكم</span>
     
    </div>
    <hr class="horizontal dark mt-0 ">
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <ul class="navbar-nav  p-1 ">
        <li class="nav-item ">
          <a class="nav-link  bg-gradient-dark text-dark {{ Route::is('dashboard.index') ? 'active bg-gradient-dark text-dark' : 'text-dark' }}" href="{{route('dashboard.index')}}">

            <span class="nav-link-text ms-1">الرئيسية</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark {{ Route::is('dashboard.museums') ? 'active bg-gradient-dark text-dark' : 'text-dark' }}" href="{{route('dashboard.museums')}}">
            <span class="nav-link-text ms-1">المتاحف</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark {{ Route::is('dashboard.reservations') ? 'active bg-gradient-dark text-dark' : 'text-dark' }}" href="{{route('dashboard.reservations')}}">
            <span class="nav-link-text ms-1">الحجوزات</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark {{ Route::is('dashboard.users') ? 'active bg-gradient-dark text-dark' : 'text-dark' }}" href="{{route('dashboard.users')}}">

            <span class="nav-link-text ms-1">المستخدمين</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="">
            <span class="nav-link-text ms-1">الاحصائيات</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="">
            <span class="nav-link-text ms-1">الاعدادات</span>
          </a>
        </li>
        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> -->
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      <a  type="button" class="dropdown-item btn  w-100" href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    تسجيل الخروج
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<a class="btn bg-gradient-dark w-100" href="/" type="button">الذهاب الى الموقع</a>
      </div>
    </div>
  </aside>


<div style="margin-inline-start: 230px;">
@yield('content') 
@stack('scripts')

</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  
 

     
<!-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->

    <script  src="{{asset('assets/js/material-dashboard.js')}}"></script>
    <script  src="{{asset('assets/js/material-dashboard.js.map')}}"></script>
    <script  src="{{asset('assets/js/material-dashboard.min.js')}}"></script>

    <!-- <script  src="{{asset('assets/js/material-dashboard.js')}}"></script>
    <script  src="{{asset('assets/js/material-dashboard.js.map')}}"></script>
    <script  src="{{asset('assets/js/material-dashboard.min.js')}}"></script> -->

  

</body>
</html>