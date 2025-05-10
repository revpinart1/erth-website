<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museums;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Storage;

class ReservationController extends Controller
{
    public function createReservation($id)
{
    $museum = Museums::findOrFail($id); 
    $user = auth()->user();
    return view('website.checkout', compact('museum', 'user'));

}
public function storeReservation(Request $request)
{
   // التحقق من صحة المدخلات
   $request->validate([
    'museum_id' => 'required|exists:museums,id', // تأكد من أن المتحف موجود
    'visit_date' => 'required|date', // تأكد من أن التاريخ صحيح
    'number_of_visitors' => 'required|integer|min:1', // عدد الزوار يجب أن يكون 1 أو أكثر
    'payment_method' => 'required|in:free,cash,mada,visa,apple_pay', // التأكد من طرق الدفع
]);

// إنشاء الحجز في قاعدة البيانات
Reservation::create([
    'user_id' => auth()->id(),
    'museum_id' => $request->museum_id,
    'visit_date' => $request->visit_date,
    'number_of_visitors' => $request->number_of_visitors,
    'payment_method' => $request->payment_method,
    'status' => 'pending', // حالة الحجز مبدئياً تكون "قيد الانتظار"
]);

// إعادة توجيه المستخدم مع رسالة نجاح
return redirect()->route('website.confirmation', ['id' => $request->museum_id])->with('success', 'تم إرسال الحجز بنجاح');
}
public function confirmation($id)
{
    // محاولة إيجاد الحجز مع تحميل العلاقات
    $reservation = Reservation::with('user', 'museums')->find($id);

    // إذا لم يتم العثور على الحجز
    if (!$reservation) {
        return redirect()->route('website.homepage')->with('error', 'الحجز غير موجود.');
    }

    return view('website.confirmation', compact('reservation'));
}
public function myReservations()
{
    // جلب جميع الحجوزات المرتبطة بالمستخدم الحالي
    $reservations = auth()->user()->reservations;

    // إرسال البيانات إلى الصفحة
    return view('website.myreservations', compact('reservations'));
}
}
