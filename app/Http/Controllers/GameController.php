<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'release_year' => 'required|integer',
        ]);

        $game = Game::create($validatedData);

        return response()->json($game, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return response()->json($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        // 'sometimes' means it only validates the field IF the user sent it
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'platform' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|string|max:255',
            'release_year' => 'sometimes|required|integer',
        ]);

        $game->update($validatedData);

        return response()->json($game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response()->json(['message' => 'Game deleted successfully']);
    }
}
