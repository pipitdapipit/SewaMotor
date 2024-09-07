<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function loginInsert(Request $req){
        $inputs = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $email = $req->input('email');

        if(Auth::attempt($inputs)){
            // session(['email' => $email]);
            return redirect()->route('dashboard-page');
        }
        return back()->withErrors([
            'inputs' => 'Input invalid'
        ]);

        return redirect()->route('dashboard-page');
    }

    public function registerPage(){
        return view('register');
    }

    public function registerInsert(Request $req){
        $user = new User;
        $user->username = $req->input('username');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->phone_num = $req->input('phone_num');
        $user->city = $req->input('city');
        $user->save();

        return redirect()->route('login');
    }

    public function logout(Request $req){
        Auth::logout();
        return redirect()->route('login');
   }

    public function dashboard(){
        return view('dashboard');
    }

    public function rentPage(){
        return view('page.rent');
    }

    public function insertRent(Request $req){
        $motor = new Motor;
        $motor->name = $req->input('name') == null ? 'Unknown' : $req->input('name');
        $motor->motorcycle = $req->input('motorcycle');
        $motor->model = $req->input('model');
        $motor->rental_time = $req->input('rental_time');
        $motor->rental_price = $motor->rental_time * 50000;
        $motor->returned = false == false ? 0 : 1;
        $motor->save();

        return redirect()->route('rent-page');
    }
}
