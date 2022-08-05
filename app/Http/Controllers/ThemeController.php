<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function switch()
    {
        $theme = Session::get('theme');

        if ($theme == 'normal') {
            Session::put('theme', 'dark');
            return 'dark';
        }

        Session::put('theme', 'normal');
        return 'normal';
    }
}
