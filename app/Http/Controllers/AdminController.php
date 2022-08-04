<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id');

        $tutorial = '';
        if ($id) {
            $tutorial = Tutorial::find($id);
        }

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
        $data = $request->only(['id', 'youtube_id', 'title']);

        Tutorial::updateOrCreate(
            ['id' => $data['id']],
            [
                'youtube_id' => $data['youtube_id'],
                'title' => $data['title']
            ]
        );

        // if ($data['id']) {
        //     $tutorial = Tutorial::find($data['id']);
        // }

        // if (!$data['id']) {
        //     $tutorial = new Tutorial();
        // }

        // $tutorial->fill([
        //     'youtube_id' => $data['youtube_id'],
        //     'title' => $data['title']
        // ]);

        // $tutorial->save();

        return redirect(route('admin.tutorials'));
    }

    public function deleteTutorial(Request $request)
    {
        Tutorial::destroy($request->id);
        return redirect(route('admin.tutorials'));
    }
}
