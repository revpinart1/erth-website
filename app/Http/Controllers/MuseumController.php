<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Museums;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Storage;


class MuseumController extends Controller
{
  public function Index(){
$regions=Regions::All();
$museums=Museums::with('Region')->get();
return view('dashboard.museums', ['regions' => $regions, 'museums' => $museums]);

  }

  public function CreateRegions(Request $request)
      {
       
        $validate=$request->validate([

            'name'=>'required|string|max:255',
           ]);
           $arr=[
            'name'=>$request->name,
            
        ];
        $region=Regions::create($arr);// عشان تنحفظ البيانات يلي موجوده في اراي على جدول الفئات في الداتابيس
        $region->save();
        dd($region);
        return redirect()->route('dashboard.museums');

    } 

        public function MuseumCreate(Request $request){

            $validate=$request->validate([
                'museum_name'=>'required|string|max:255',
                'museum_region_id'=>'required|string|max:255',
                'museum_city'=>'required',
                'museum_type'=>'required',
                'museum_workdays'=>'required',
                'museum_openinghours'=>'required',
                'museum_description'=>'required',
                'museum_location'=>'required',
                'museum_bookingavaliable'=>'nullable',
                'museum_enterfee'=>'required',
                'museum_image'=>'required|image',
                
    
    
               ]);
               $validate['museum_bookingavaliable'] = $request->has('museum_bookingavaliable'); // إذا كان الـ checkbox مفعلاً سيكون true

               // php artisan storage:link عشان يزبط الربط 
             $image=$request->file('museum_image');
            //    //    //تخزين ملف الصوره في الستورج 
            $path=$image->store('images','public');


            $arr=[
            'museum_name'=>$request->museum_name,
            'museum_region_id'=>$request->museum_region_id,
            'museum_city'=>$request->museum_city,
            'museum_type'=>$request->museum_type,
            'museum_workdays'=>$request->museum_workdays,
            'museum_openinghours'=>$request->museum_openinghours,
            'museum_description'=>$request->museum_description,
            'museum_location'=>$request->museum_location,
            'museum_bookingavaliable'=>$request->has('museum_bookingavaliable'),
            'museum_enterfee'=>$request->museum_enterfee,
            'museum_image'=>$path
            
                ];
        
               
                $items=Museums::Create($arr);
                $items->save();
                return redirect()->route('dashboard.museums');

        }
        //عدد المتاحف

        public function DeleteMuseum($id){
            $data= Museums::find($id);
            if ($data) {
                // حذف الصورة من التخزين أيضاً
                if ($data->museum_image && Storage::disk('public')->exists($data->museum_image)) {
                    Storage::disk('public')->delete($data->museum_image);
                }
                $data->delete();
            return redirect()->route('dashboard.museums');
        }}
        public function EditMuseum($id){
            $data= Museums::find($id);
            $regions=Regions::All();
            return view('dashboard.editmuseums',['museums'=>$data, 'regions'=> $regions]);

        }

            public function UpdateMuseum(Request $request ,$id){
                $data= Museums::find($id);
                $validate=$request->validate([
                    'museum_name'=>'required|string|max:255',
                    'museum_region_id'=>'required|string|max:255',
                    'museum_city'=>'required',
                    'museum_type'=>'required',
                    'museum_workdays'=>'required',
                    'museum_openinghours'=>'required',
                    'museum_description'=>'required',
                    'museum_location'=>'required',
                    'museum_bookingavaliable'=>'nullable',
                    'museum_enterfee'=>'required',
                    'museum_image'=>'required|image',
                    
        
        
                   ]);
                   $validate['museum_bookingavaliable'] = $request->has('museum_bookingavaliable'); // إذا كان الـ checkbox مفعلاً سيكون true
    

                   if ($request->hasFile('museum_image')) {
                    if ($data->museum_image && Storage::disk('public')->exists($data->museum_image)) {
                        Storage::disk('public')->delete($data->museum_image);
                    }
        
                    $image = $request->file('museum_image');
                    $path = $image->store('images', 'public');
                    $data->museum_image = $path;
                }
        
                 $data->update([



                    
                'museum_name'=>$request->museum_name,
                'museum_region_id'=>$request->museum_region_id,
                'museum_city'=>$request->museum_city,
                'museum_type'=>$request->museum_type,
                'museum_workdays'=>$request->museum_workdays,
                'museum_openinghours'=>$request->museum_openinghours,
                'museum_description'=>$request->museum_description,
                'museum_location'=>$request->museum_location,
                'museum_bookingavaliable'=>$request->has('museum_bookingavaliable'),
                'museum_enterfee'=>$request->museum_enterfee,
                
                
                
                  ]);
            
                $data->save();
                    return redirect()->route('dashboard.museums');
        }

 }

 