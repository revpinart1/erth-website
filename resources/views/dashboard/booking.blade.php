@extends('layouts.dashboard')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg p-4 rounded-4">
    <h1><strong>حجوزات المستخدمين</strong></h1>
    <hr>
        <hr>

        @if($reservations->isEmpty())
            <p>لا توجد حجوزات حالياً.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>اسم المتحف</th>
                        <th>اسم المستخدم</th>
                        <th>تاريخ الزيارة</th>
                        <th>عدد الزوار</th>
                        <th>طريقة الدفع</th>
                        <th>حالة الحجز</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->museums->museum_name }}</td>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->visit_date }}</td>
                            <td>{{ $reservation->number_of_visitors }}</td>
                            <td>
                                @switch($reservation->payment_method)
                                    @case('free') مجاني @break
                                    @case('cash') نقدي @break
                                    @case('mada') مدى @break
                                    @case('visa') فيزا @break
                                    @case('apple_pay') Apple Pay @break
                                @endswitch
                            </td>
                            <td>
                                @switch($reservation->status)
                                    @case('pending') قيد المراجعة @break
                                    @case('confirmed') تم التأكيد @break
                                    @case('cancelled') ملغي @break
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
