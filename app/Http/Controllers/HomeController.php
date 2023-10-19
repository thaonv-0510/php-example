<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function list_user() {
        $current_user = Auth::user();
        if (!$current_user) return redirect()->route('sign_in');

        $users = User::all();
        return view('home', ['users'=>$users]);
    }
}
