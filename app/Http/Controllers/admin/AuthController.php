<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_index()
    {
        return view('admin.auth.login');
    }
    public function register_index()
    {
        return view('admin.auth.register');
    }

    public function login_store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/jasa-perushaan');
        }

        return back()->with('danger', 'Authenticated Failed');
    }

    public function register_store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user,username',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
