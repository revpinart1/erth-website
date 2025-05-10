@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 1100px; margin: auto;">
        <div class="row g-0">
            <div class="col-md-7">
            <img src="{{ asset('storage/' . $museum->museum_image) }}" 
                     alt="{{ $museum->museum_name }}" 
                     class=" p-2  mb-4" 
                     style="width: 100%; height: 100%; max-width: 700px; border-radius: 15px">
                         </div>
            <div class="col-md-5 d-flex align-items-center">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4" style="color: #5f4c34; font-weight: bold;">{{$museum->museum_name }}</h2>
                    <h5 class="card-title mb-4" style="color: #5f4c34; font-weight: bold;">{{$museum->Region->name}} - {{ $museum->museum_city}} </h5>
                   
                    <p class="card-text fs-5"><strong>نوع المتحف:</strong> <span class="text-success">{{ $museum->museum_type }} </span></p>
                    <p class="card-text fs-5"><strong>ايام العمل :</strong> <span class="text-success">{{ $museum->museum_workdays }} </span></p>
                    <p class="card-text fs-5"><strong>ساعات العمل :</strong> <span class="text-success">{{ $museum->museum_openinghours }} </span></p>
                    <p class="card-text fs-5"><strong>هل الحجز متاح حاليا؟</strong> <span class="text-success">{{ $museum->museum_bookingavaliable? 'نعم' : 'لا' }} </span></p>
                    <p class="card-text fs-5"><strong>رسوم الحجز :</strong> <span class="text-success">{{ $museum->museum_enterfee}}  
                        @if($museum->museum_enterfee !== 'مجانا')
                                 ريال
                                @endif</span></p>
                                        
                    <p class="card-text mb-3" style="font-size: 1.1rem;">{{ $museum->museum_description }}</p>

                    <div class="d-flex flex-column gap-3 mt-4">
                       
                     
                    @auth
                        <a href="{{ route('website.checkout', ['id' => $museum->id]) }}" class="btn btn-success btn-lg w-100">شراء تذكرة</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success btn-lg w-100">تسجيل الدخول للحجز</a>
                    @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
