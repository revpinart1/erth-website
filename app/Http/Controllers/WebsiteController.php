<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museums;
use Illuminate\support\facades\DB;

class WebsiteController extends Controller
{
    public function HomePage(){
        $value=session()->get('mykey');
        
        $data=DB::table('museums')
       // ->where('categories_id','=',$categories_id)//حسب الفئات زي تقسيم للمنتجات علي
        ->get();

        return view('website.homepage',['museums'=>$data]);
    }
    public function ShowMuseums(){
        $museums=Museums::with('Region')->get();
       
         
 
         return view('website.museums',['museums'=>$museums]);
    }
    public function ShowDetails($id){
        $data=Museums::with('Region')
        ->where('id','=',$id)//حسب الفئات زي تقسيم للمنتجات علي
        ->first();// اول سجل يلي احنا حددناه
        return view('website.details',['museum'=>$data]);
    }
    public function Checkout(){
        return view('website.checkout');
    }
    public function About(){
        return view('website.about');
    }
    public function Contact(){
        return view('website.contact');
    }
    public function FAQ(){
        return view('website.commonquestions');
    }

//     public function List($id){
//         $value=session()->get('mykey');
        
//         $data=DB::table('museums')
//        // ->where('categories_id','=',$categories_id)//حسب الفئات زي تقسيم للمنتجات علي
//         ->get();
        
// return view('website.homepage',['museums'=>$data]);
// } 
}
