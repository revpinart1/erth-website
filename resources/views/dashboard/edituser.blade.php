@extends('layouts.dashboard')


@section('content')
<div class="container mt-5">
<h2><strong>تعديل بيانات المستخدم</strong></h2>
<hr>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
         

            <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">الاسم:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success w-100">تحديث</button>
                </div>
                <div class="form-group">
                    <a href="{{ route('dashboard.users') }}" class="btn btn-secondary w-100">رجوع</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection


