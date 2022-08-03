<?php

namespace App\Http\Controllers;

use App\Helpers\WordpressAuthenticator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('login');
        }

        if (Auth::user()->role == 'administrator') {
            return redirect('/admin');
        }

        return redirect('/');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only(['user_login', 'password']);

        $user = User::query()
            ->where('user_login', $credentials['user_login'])
            ->first();

        if (!$user) {
            return back()->withErrors([
                'username' => 'O login e/ou senha informados estão incorretos.',
            ]);
        }

        $wp_auth = new WordpressAuthenticator();

        if ($wp_auth->checkPassword($credentials['password'], $user->user_pass)) {
            Auth::login($user);
            $request->session()->regenerate();

            if ($user->role == 'administrator') {
                return redirect('/admin');
            }

            $this->logout($request);
        }

        return back()->withErrors([
            'username' => 'O login e/ou senha informados estão incorretos.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
