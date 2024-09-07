<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function all_data(Request $req){
        $motors = Motor::all();

        $search= $req->query('search');
        $motors = Motor::where('name', 'like', "%{$search}%")
        ->paginate(8);

        return view('page.datas', compact('motors'));
    }

    public function deleteRent(Request $req){
        $motor_id = $req->input('id');
        $motor = Motor::findOrFail($motor_id);
        $motor->delete();

        return redirect()->route('all_data-page');
    }

    public function updatePage(Request $req){
        $motors = Motor::all();

        $search= $req->query('search');
        $motors = Motor::where('name', 'like', "%{$search}%")
        ->paginate(7);

        return view('page.update', compact('motors'));
    }

    public function updateRent(Request $req){
        $motor_id = $req->input('id');
        $motor = Motor::findOrFail($motor_id);
        $motor->rental_time = $req->input('rental_time');
        $motor->rental_price = $motor->rental_time * 50000;
        $motor->returned = $req->input('returned') == "on" ? 1 : 0;
        $motor->save();

        return redirect()->route('all_data-page');
    }
}
