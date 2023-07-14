<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user-> IBM = $request->IBM;
        $user-> firstname = $request->firstname;
        $user-> lastname = $request->lastname;
        $user-> password = Hash::make($request->password);
        $user-> assignRole($request->role);
        $user->save();
        
        return redirect(route('login'));

    }
    public function login( Request $request){
        $credentials =[
            "IBM" => $request->IBM,
            "password"=> $request->password
        ];
        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();

            return redirect()->intended(route('turnos'));
        }else{
            return redirect('/');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
