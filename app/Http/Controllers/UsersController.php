<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    // عرض جميع المستخدمين
    public function index()
    {
        $users = User::all(); 
        return view('dashboard.users', compact('users'));
    }

    // عرض نموذج تعديل مستخدم
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.edituser', compact('user'));
    }

    // تحديث بيانات المستخدم
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('dashboard.users')->with('success', 'تم تحديث المستخدم بنجاح');
    }

    // حذف مستخدم
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.users')->with('success', 'تم حذف المستخدم بنجاح');
    }
}
