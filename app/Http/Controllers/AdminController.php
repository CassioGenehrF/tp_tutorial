<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.create_tutorial');
    }

    public function tutorials()
    {
        return view('admin.tutorials')
            ->with('tutorials', Tutorial::all());
    }

    public function createTutorial(Request $request)
    {
        $data = $request->only(['youtube_id', 'title']);

        $tutorial = new Tutorial([
            'youtube_id' => $data['youtube_id'],
            'title' => $data['title']
        ]);

        $tutorial->save();

        return redirect(route('admin'));
    }
}
