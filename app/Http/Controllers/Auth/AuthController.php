<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;     // import Hash jika ingin memanggil "Hash" tanpa "\"

class AuthController extends Controller
{
    public function index(){
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

        // firstOrFail utk mencari data & jika tidak ketemu, returnnya lgsg 404 not found
        $data = User::where('email', $request->email)->firstOrFail();
        if($data){
            // Check input password & password from DB
            if (\Hash::check($request->password, $data->password)) {
                session(['login_success' => true]);
                return redirect('dashboard');
            }
        }
        return redirect('/')->with('message', 'Email atau password salah');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
