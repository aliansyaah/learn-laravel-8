<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;     // import Hash jika ingin memanggil "Hash" tanpa "\"

use Illuminate\Support\Facades\Auth;    // jika ingin menggunakan auth bawaan laravel

class AuthController extends Controller
{
    public function index(){
        // AUTH CARA MANUAL
        // Jika sudah login & akan akses hlm login, redirect ke dashboard
        if(session('login_success')){
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function login(Request $request){
        // echo '<pre>';
        // print_r($request->all());
        // dd($request->all());

        // AUTH CARA MANUAL
        // firstOrFail utk mencari data & jika tidak ketemu, returnnya lgsg 404 not found
        $data = User::where('email', $request->email)->firstOrFail();
        if($data){
            // Check input password & password from DB
            if (\Hash::check($request->password, $data->password)) {
                session(['login_success' => true]);
                return redirect('dashboard');
            }
        }

        // AUTH BAWAAN LARAVEL
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect('/dashboard');
        // }
        return redirect('/')->with('message', 'Email atau password salah');
    }

    public function logout(Request $request){
        // Destroy session manual
        $request->session()->flush();

        // Destroy session bawaan laravel
        // Auth::logout();
        return redirect('/');
    }
}
