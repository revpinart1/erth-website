@extends('layouts.dashboard')
@section('content')
<div class="container " style="margin-top: 100px; ">
    <h1><strong>المتاحف</strong></h1>
    <hr>
   
 <div class="row">
    <div class="col px-4 d-block justify-content-center">
        <div class="card">
            <div class="card-header text-lg d-flex justify-content-between align-items-center">
                <span>إضافة متحف</span>
                <button class="btn btn-sm btn-outline-primary toggle-body">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
            <div class="card-body" id="cardBody" style="display: none;">
                <form action="{{route('dashboard.createmuseums')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">اسم المتحف</label>
                            <input type="text" class="form-control" name="museum_name">
                            @error('museum_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">المنطقة</label>
                            <select name="museum_region_id" class="form-select mb-5">
                                @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                            @error('museum_region_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">المدينة</label>
                            <input type="text" class="form-control" name="museum_city">
                            @error('museum_city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">نوع المتحف</label>
                            <input type="text" class="form-control" name="museum_type">
                            @error('museum_type')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">أيام العمل</label>
                            <input type="text" class="form-control" name="museum_workdays">
                            @error('museum_workdays')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">ساعات العمل</label>
                            <input type="text" class="form-control" name="museum_openinghours">
                            @error('museum_openinghours')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">وصف المتحف</label>
                            <input type="text" class="form-control" name="museum_description">
                            @error('museum_description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">صورة المتحف</label>
                            <input type="file" class="form-control" name="museum_image">
                            @error('museum_image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">موقع المتحف</label>
                            <input type="text" class="form-control" name="museum_location">
                            @error('museum_location')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">إتاحة الحجز</label><br>
                            <input type="checkbox" name="museum_bookingavaliable" value="1" checked>
                            <span>متاح</span>
                            @error('museum_bookingavaliable')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">رسوم الحجز</label>
                            <input type="text" class="form-control" name="museum_enterfee">
                            @error('museum_enterfee')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- إضافة Font Awesome للأيقونات -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- إضافة jQuery وكود الـ toggle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.toggle-body').click(function() {
        $('#cardBody').slideToggle();
        $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
    });
});
</script>


    <div class="row ">
        <div class="col p-4">
            <div class="card ">
                <div class="card-header  text-center">سجل المتاحف</div>
                <div class="card-body table-responsive">
                    <table class="table ">

                    <thead class="text-center " >
                        <tr style="font-size:13px" >
                       <td class="text-center " > رقم المتحف</td>
                            <td class="text-center">اسم المتحف</td>
                            <td class="text-center" >وصف المتحف</td>
                            <td class="text-center">رقم المنطقة</td>
                            <td class="text-center">المنطقة</td>
                            <td class="text-center">المدينة</td>
                            <td class="text-center">نوع المتحف</td>
                            <td class="text-center">ايام العمل </td>
                            <td class="text-center">ساعات العمل </td>
                            <td class="text-center">صورة المتحف</td>
                            <td class="text-center">موقع المتحف</td>
                            <td class="text-center">اتاحة الحجز </td>
                            <td class="text-center">رسوم الحجز </td>


                            <td colspan=2>اجراء</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($museums as $item)
                        <tr style="font-size:13px"  >

                        <td>{{$item->id}}</td>
                    <td>{{$item->museum_name}}</td>
                    <td class="description-column">{{$item->museum_description}}</td>
                    <td>{{$item->museum_region_id}}</td>
                    <td>{{$item->Region->name}}</td>
                    <td>{{$item->museum_city}}</td>
                    <td>{{$item->museum_type}}</td>
                    <td>{{$item->museum_workdays}}</td>
                    <td>{{$item->museum_openinghours}}</td>
                    <td>
                        <img src="{{Storage::url($item->museum_image)}}" style="width: 200px; height: auto; border: 1px solid red;" alt="">
                   </td>
                    <td>{{$item->museum_location}}</td>
                    <td>{{$item->museum_bookingavaliable}}</td>
                    <td>{{$item->museum_enterfee}}</td>
                    <td colspan="2 " class="px-2">
                        <a href="{{route('dashboard.editmuseums',$item->id)}}"class="text-danger"> <i class="bi bi-pen px-3"></i></a>   
                        <a  href="{{route('dashboard.deletemuseums',$item->id)}}" class="text-danger"><i class="bi bi-trash"></i> </a></td>
                                                
                             

                              

                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>
@section('styles')
<style>
    .table-responsive {
        overflow-x: auto;
    }

    .description-column {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .table th, .table td {
        vertical-align: middle;
        font-size: 10px;
    }
</style>
@endsection
@endsection
