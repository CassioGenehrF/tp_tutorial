<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function switch()
    {
        $theme = Session::get('theme');

        if ($theme == 'dark') {
            Session::put('theme', 'normal');
            return 'normal';
        }

        Session::put('theme', 'dark');
        return 'dark';
    }
}
