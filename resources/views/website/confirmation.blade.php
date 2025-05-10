@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg p-4 rounded-4">
        <h2 class="text-center mb-4">تأكيد الحجز</h2>
        <hr>

        <p><strong>اسم المتحف:</strong> {{$reservation->museums->museum_name}}</p>
        <p><strong>اسم المستخدم:</strong> {{ $reservation->user->name }}</p>
        <p><strong>تاريخ الزيارة:</strong> {{ $reservation->visit_date }}</p>
        <p><strong>عدد الزوار:</strong> {{ $reservation->number_of_visitors }}</p>
        <p><strong>طريقة الدفع:</strong> 
            @switch($reservation->payment_method)
                @case('free') مجاني @break
                @case('cash') نقدي @break
                @case('mada') مدى @break
                @case('visa') فيزا @break
                @case('apple_pay') Apple Pay @break
            @endswitch
        </p>
        <p><strong>حالة الحجز:</strong> 
            @switch($reservation->status)
                @case('pending') قيد المراجعة @break
                @case('confirmed') تم التأكيد @break
                @case('cancelled') ملغي @break
            @endswitch
        </p>

        <div class="text-center mt-4">
            <a href="{{ route('website.homepage') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
        </div>
    </div>
</div>
@endsection
