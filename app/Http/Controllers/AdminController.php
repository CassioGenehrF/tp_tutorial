<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id');
        $tutorial = $id ? Tutorial::find($id) : '';

        return view('admin.create_tutorial')
            ->with('tutorial', $tutorial);
    }

    public function tutorials()
    {
        return view('admin.tutorials')
            ->with('tutorials', Tutorial::all());
    }

    public function createTutorial(Request $request)
    {
        Tutorial::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'youtube_id' => $request->youtube_id,
                'title' => $request->title
            ]
        );

        return redirect(route('admin.tutorials'));
    }

    public function deleteTutorial(Request $request)
    {
        Tutorial::destroy($request->id);
        return redirect(route('admin.tutorials'));
    }
}
