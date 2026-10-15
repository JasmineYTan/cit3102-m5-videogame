<?php

namespace App\Http\Controllers;

use App\Models\VideoGame;
use Illuminate\Http\Request;    

class VideoGameController extends Controller
{
    public function index(Request $request)
    {
        $allowedFilters = [
            'title',
            'platform',
            'genre',
            'developer',
        ];

        $query = VideoGame::query();

        foreach ($allowedFilters as $field) {
            if ($request->filled($field)) {
                $query->where($field, $request->input($field));
            }
        }

        return response()->json($query->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
        ]);

        $videoGame = VideoGame::create($validated);

        return response()->json($videoGame, 201);
    }

    public function show(VideoGame $videoGame)
    {
        return response()->json($videoGame, 200);
    }

    public function update(Request $request, VideoGame $videoGame)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'platform' => 'sometimes|required|string|max:255',
            'genre' => 'sometimes|required|string|max:255',
            'developer' => 'sometimes|required|string|max:255',
        ]);

        $videoGame->update($validated);

        return response()->json($videoGame, 200);
    }

    public function destroy(VideoGame $videoGame)
    {
        $videoGame->delete();

        return response()->noContent();
    }
}
