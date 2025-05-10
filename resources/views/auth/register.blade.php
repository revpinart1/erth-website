@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->



<section class="vh-100" dir="rtl">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background-color:rgba(255, 255, 255, 0.7);">
          <div class="row g-0">

            <!-- النموذج على اليمين -->
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-end">

                <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="d-flex align-items-start mb-5 pb-1 justify-content-start">
                    <i class="fas fa-user-plus fa-2x ms-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">إنشاء حساب جديد</span>
                  </div>

                  <!-- الاسم -->
                  <div class="form-outline mb-4">
                    <label for="name" class="form-label">الاسم الكامل</label>
                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                      name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <!-- البريد الإلكتروني -->
                  <div class="form-outline mb-4">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <!-- كلمة المرور -->
                  <div class="form-outline mb-4">
                    <label for="password" class="form-label">كلمة المرور</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                      name="password" required autocomplete="new-password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <!-- تأكيد كلمة المرور -->
                  <div class="form-outline mb-4">
                    <label for="password-confirm" class="form-label">تأكيد كلمة المرور</label>
                    <input id="password-confirm" type="password" class="form-control form-control-lg"
                      name="password_confirmation" required autocomplete="new-password">
                  </div>

                  <!-- زر التسجيل -->
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-primary px-4"
                      style="background-color:#6c655a;font-size:20px">
                      تسجيل
                    </button>
                  </div>

                  <!-- رابط تسجيل الدخول -->
                  <p class="mx-2">
                    لديك حساب؟ <a href="{{ route('login') }}" style="color: darkred; font-size:17px">سجل الدخول هنا</a>
                  </p>

                </form>

              </div>
            </div>

            <!-- الصورة على اليسار -->
            <div class="col-md-6 col-lg-5 d-none d-md-block p-3">
              <img src="{{ asset('images/login.png') }}"
                alt="نموذج التسجيل" class="img-fluid h-100"
                style="border-radius: 1rem 0 0 1rem; object-fit: cover; opacity: 0.4;" />
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
