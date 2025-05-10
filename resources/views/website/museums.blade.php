@extends('layouts.app')


@section('styles')
<style>
    .museum-card {
        border: 1px solid #e0d6c5;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.4); /* خلفية بيضاء مع شفافية أقل */

        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }
    .museum-card:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    .museum-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .museum-card-body {
        padding: 20px;
    }
</style>
@endsection


@section('content')
<div class="container mt-5 mb-5">
<h2 style=" font-size: 2rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">
المتاحف</h2>
    <hr class="mb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($museums as $museum)
        <div class="col">
            <div class="museum-card h-100">
            
               <h1></h1>
                <div class="museum-card-body">
                <img src="{{ asset('storage/' . $museum->museum_image) }}" 
     alt="{{ $museum->museum_name }}" 
     class="rounded mb-4 mx-auto d-block" 
     style="width:350px;height:300px">

                    <h5 class="card-title">{{ $museum->museum_name }}</h5>
                    <p class="card-text">{{ $museum->museum_description }}</p>
                    <p class="card-text">{{$museum->Region->name}} - {{ $museum->museum_city}} </p>
                  <p>  <a href="" class=" m-0 text-lg" style="font-size:25px; text-decoration:none; color: green;">
                    {{$museum->museum_enterfee}}   @if($museum->museum_enterfee !== 'مجانا')
                                 ريال
                                @endif </a>
</p>
                    <a href="{{route('website.details',['id'=>$museum->id])}}" class="btn btn-primary btn-sm">عرض التفاصيل</a>
                  
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

