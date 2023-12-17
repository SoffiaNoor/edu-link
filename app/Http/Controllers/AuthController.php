<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Murid;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Email atau Password tidak sesuai');
        }
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role_id' => 3
            ];

            $user = User::create($data);
            $id_nama = $user->name;
            $id_user = $user->id; 
            $dataMurid = [
                'namamurid' => $id_nama,
                'user_id' => $id_user,
            ];

            Murid::create($dataMurid); 

            return redirect()->route('login')->with('success', 'Akun berhasil dibuat');

        } catch (\Exception $e) {

            return redirect()->route('register')->with('error', 'Gagal membuat Akun');

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
