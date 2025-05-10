@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h2 class="text-center mb-4" style="font-weight: bold;">تفاصيل الحجز</h2>

    <div class="card shadow-sm mb-4 p-4">
        <h4 class="mb-3">معلومات المتحف</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>الاسم:</strong> {{ $museum->museum_name }}</li>
            <li class="list-group-item"><strong>النوع:</strong> {{ $museum->museum_type }}</li>
            <li class="list-group-item"><strong>المنطقة:</strong> {{ $museum->Region->name }}</li>
            <li class="list-group-item"><strong>المدينة:</strong> {{ $museum->museum_city }}</li>
            <li class="list-group-item"><strong>الأيام المتاحة:</strong> {{ $museum->museum_workdays }}</li>
            <li class="list-group-item"><strong>ساعات العمل:</strong> {{ $museum->museum_openinghours }}</li>
            <li class="list-group-item"><strong>هل الحجز متاح؟</strong> {{ $museum->museum_bookingavaliable ? 'نعم' : 'لا' }}</li>
            <li class="list-group-item"><strong>رسوم الدخول:</strong> {{ $museum->museum_enterfee }}</li>
            <li class="list-group-item"><strong>الوصف:</strong> {{ $museum->museum_description }}</li>
        </ul>
    </div>

    <div class="card shadow-sm mb-4 p-4">
        <h4 class="mb-3">معلومات المستخدم</h4>
        <p><strong>الاسم:</strong> {{ $user->name }}</p>
        <p><strong>البريد الإلكتروني:</strong> {{ $user->email }}</p>
    </div>

    <form method="POST" action="{{ route('website.Reservation') }}">
        @csrf

        <input type="hidden" name="museum_id" value="{{ $museum->id }}">

        <div class="mb-3">
            <label for="visit_date" class="form-label">تاريخ الزيارة</label>
            <input type="date" class="form-control" name="visit_date" id="visit_date" required>
        </div>

        <div class="mb-3">
            <label for="number_of_visitors" class="form-label">عدد الزوار</label>
            <input type="number" class="form-control" name="number_of_visitors" id="number_of_visitors" required>
        </div>

        <div class="mb-3" style="max-width: 50%;">
    <label for="payment_method" class="form-label">طريقة الدفع</label>
    <select class="form-control w-100" name="payment_method" id="payment_method" required>
        <option value="free">مجاني</option>
        <option value="cash">نقدي</option>
        <option value="mada">مدى</option>
        <option value="visa">فيزا</option>
        <option value="apple_pay">Apple Pay</option>
    </select>
</div>

        <button type="submit" class="btn btn-primary w-100">تأكيد الحجز</button>
    </form>
</div>
@endsection
