@extends('layouts.app')

@section('content')
<!-- <div class="container" style="height: 100vh; ">
    <div class="row justify-content-center align-items-center" style="height: 100%; ">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تسجيل الدخول') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('عنوان البريد الإلكتروني') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('هل نسيت كلمة المرور؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="vh-100" dir="rtl">
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background-color:rgba(255, 255, 255, 0.7);">
          <div class="row g-0">

     

            <!-- النصوص على اليمين -->
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-end">

                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="d-flex align-items-start mb-5 pb-1 justify-content-start">
                    <i class="fas fa-cubes fa-2x ms-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0 ">تسجيل الدخول إلى حسابك</span>
                  </div>


                  <div class="form-outline mb-4">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('عنوان البريد الإلكتروني') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                             </span>
                    @enderror
                    </div>


                  <div class="form-outline mb-4">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>
                            
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                  </div>

                  <div class="pt-1 mb-4">
                  <button type="submit" class=" btn btn-primary px-3 " style="background-color:#6c655a;font-size:20px">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                               
                  </div>

                  @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}" style="font-size:17px">
                                        {{ __('هل نسيت كلمة المرور؟') }}
                                    </a>
                                @endif


                 <p class="mx-2">
                    ليس لديك حساب؟ <a href="{{route('register')}}" style="color: darkred; font-size:17px">سجل هنا</a>
                  </p>
                  
                </form>

              </div>
            </div>

                   <!-- الصورة على اليسار -->
             <div class="col-md-6 col-lg-5 d-none d-md-block p-3">
                   <img src="{{ asset('images/login.png') }}" style="height: 70px; width: auto;border-radius:15px; opacity:0.4;"
                   alt="نموذج تسجيل الدخول" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem; object-fit: cover;" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    
@endsection
