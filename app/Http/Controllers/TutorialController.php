<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('tutorials')
            ->with('tutorials', $tutorials);
    }

    public function show($tutorialId)
    {
        $tutorial = Tutorial::find($tutorialId);

        return view('tutorial')
            ->with('tutorial', $tutorial);
    }
}
