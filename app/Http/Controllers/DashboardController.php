<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museums;
use App\Models\User;
use App\Models\Reservation;

use Illuminate\support\facades\DB;
use Illuminate\support\facades\Storage;

class DashboardController extends Controller
{
    public function HomePage(){
        //عدد المتاحف
        $Museumscount = DB::table('museums')->count();
        $reservationcount = DB::table('reservations')->count();
        //عدد المستخدمين
        $Userscount = DB::table('Users')->count();
        $reservations=Reservation::with('user', 'museums')->get();

        return view('dashboard.index',compact('Museumscount','Userscount','reservationcount','reservations'));
    }
    public function ShowReservation(){
        $reservations = Reservation::with('user', 'museums')->get();

        // تمرير الحجوزات إلى العرض
        return view('dashboard.booking', compact('reservations'));
    // public function MuseumsCounts(){
        
    //   //  dd($count);
    //     return view('dashboard.index',['count'=>$count]);
    // }
}
}