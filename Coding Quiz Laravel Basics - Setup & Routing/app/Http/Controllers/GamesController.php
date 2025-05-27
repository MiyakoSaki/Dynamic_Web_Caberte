<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Step 3. Your code here
        return view('games.list', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Step 4.
        $selectedGame = null;

            foreach ($this->game_list as $game) {
                if ((string) $game['id'] === $id) {
                    $selectedGame = $game;
                    break;
                }
            }

            if (!$selectedGame) {
                abort(404, "Game not found.");
            }

            return view('games.show', ['game' => $selectedGame]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $results = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] == $id;
        });
        return response()->json([
            'message' => 'Record Successfull Deleted.',
            'content' => $results
        ], 200);
    }
}
