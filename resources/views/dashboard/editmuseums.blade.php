@extends('layouts.dashboard')
@section('content')
<div class="container mt-5">

<hr>
<div class="row">
    <div class="col px-4 d-block justify-content-center">
        <div class="card">
            <div class="card-header text-lg d-flex justify-content-between align-items-center">
                <span>تعديل متحف</span>
                
            </div>
            <div class="card-body" id="cardBody" >
                <form action="{{route('dashboard.updatemuseums',$museums->id)}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">اسم المتحف</label>
                            <input type="text" class="form-control" name="museum_name" value="{{ old('museum_name', $museums->museum_name) }}">
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
                            <input type="text" class="form-control" name="museum_city" value="{{ old('museum_city', $museums->museum_city) }}">
                            @error('museum_city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">نوع المتحف</label>
                            <input type="text" class="form-control" name="museum_type" value="{{ old('museum_type', $museums->museum_type) }}">
                            @error('museum_type')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">أيام العمل</label>
                            <input type="text" class="form-control" name="museum_workdays" value="{{ old('museum_workdays', $museums->museum_workdays) }}">
                            @error('museum_workdays')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">ساعات العمل</label>
                            <input type="text" class="form-control" name="museum_openinghours" value="{{ old('museum_openinghours', $museums->museum_openinghours) }}">
                            @error('museum_openinghours')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">وصف المتحف</label>
                            <input type="text" class="form-control" name="museum_description" value="{{ old('museum_description', $museums->museum_description) }}">
                            @error('museum_description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">صورة المتحف</label>
                            <input type="file" class="form-control" name="museum_image" >
                            @error('museum_image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">موقع المتحف</label>
                            <input type="text" class="form-control" name="museum_location"  value="{{ old('museum_location', $museums->museum_location) }}">
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
                            <input type="text" class="form-control" name="museum_enterfee"  value="{{ old('museum_enterfee', $museums->museum_enterfee) }}">
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
   
        @endsection