<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SessionController extends Controller {
    public function get_sign_in(Request $request) {
        $user = Auth::user();

        return $user ? redirect()->route('home') : view('users/sign_in');
    }

    public function sign_in(Request $request) {
        $params = $request->input();
        $user = User::where('email', $params['email'])->first();
        if(!$user) return response(['status'=>404, 'message'=>'Not found user'], 404);

        if (Hash::check($params['password'], $user->password)) {
            Auth::login($user, $remember = true);
            return response($user);
        }
        return response(['status'=>422], 422);
    }
}
