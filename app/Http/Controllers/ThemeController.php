<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function switch()
    {
        $theme = Session::get('theme');

        if ($theme == 'light') {
            Session::put('theme', 'dark');
            return 'dark';
        }

        Session::put('theme', 'light');
        return 'light';
    }
}
