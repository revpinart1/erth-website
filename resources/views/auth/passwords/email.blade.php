@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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

                <form method="POST" action="{{ route('password.email') }}">
                  @csrf

                  <div class="d-flex align-items-start mb-5 pb-1 justify-content-start">
                    <i class="fas fa-unlock-alt fa-2x ms-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">إعادة تعيين كلمة المرور</span>
                  </div>

                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                  @endif

                  <!-- البريد الإلكتروني -->
                  <div class="form-outline mb-4">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input id="email" type="email"
                      class="form-control form-control-lg @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <!-- زر إرسال الرابط -->
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-primary px-4"
                      style="background-color:#6c655a;font-size:20px">
                      إرسال رابط إعادة التعيين
                    </button>
                  </div>

                  <!-- رابط الرجوع -->
                  <p class="mx-2">
                    تذكرت كلمة المرور؟ <a href="{{ route('login') }}" style="color: darkred; font-size:17px">سجل الدخول</a>
                  </p>

                </form>

              </div>
            </div>

            <!-- الصورة على اليسار -->
            <div class="col-md-6 col-lg-5 d-none d-md-block p-3">
              <img src="{{ asset('images/login.png') }}"
                alt="نسيت كلمة المرور" class="img-fluid h-100"
                style="border-radius: 1rem 0 0 1rem; object-fit: cover; opacity: 0.4;" />
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


