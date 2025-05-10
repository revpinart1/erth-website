@extends('layouts.dashboard')

@section('content')
<div class="container " style="margin-top: 100px; ">
    <h1><strong>المستخدمين</strong></h1>
    <hr>
    <div class="row ">
        <div class="col p-4">
            <div class="card ">
                <div class="card-header  text-center">سجل المستخدمين</div>
                <div class="card-body table-responsive">
                  <table class="table">
                     <thead>
                        <tr >
                             <th class="text-center">الاسم</th>
                             <th class="text-center">البريد الإلكتروني</th>
                             <th class="text-center">تاريخ الإنشاء</th>
                             <th class="text-center" colspan=2>اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="text-center">
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                <td colspan="2 " class="px-2">
                                        <a href="{{route('dashboard.users.edit',$user->id)}}" class="text-danger"> <i class="bi bi-pen px-3"></i></a>
                                    
                                        <a href="{{route('dashboard.users.delete',$user->id)}}" class="text-danger">
                        <i class="bi bi-trash"></i>
                                                </a>

                                                </td>
                            </tr>
                            @endforeach
                        </tbody>
    </table>
    </div> 
</div>
</div>
</div>
</div>
@endsection