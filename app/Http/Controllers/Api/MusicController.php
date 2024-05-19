<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $music = Music::orderBy('id', 'asc')->get();

        return response()->json($music);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'album' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'image' => 'nullable',
        ]);

        $music = Music::create($request->all());

        return response()->json($music);
    }


    public function show(Music $music)
    {
        return response()->json($music);
    }

    public function update(Request $request, Music $music)
    {
        $request->validate([
            'title' => 'nullable',
            'artist' => 'nullable',
            'album' => 'nullable',
            'genre' => 'nullable',
            'year' => 'nullable',
            'image' => 'nullable',
        ]);

        $music->update($request->all());

        return response()->json($music);
    }

    public function destroy(Music $music)
    {
        $music->delete();

        return response()->json([
            'message' => 'Music deleted successfully'
        ], 204);
    }
}
