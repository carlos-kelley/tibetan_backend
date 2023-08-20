<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        return response()->json([
            'success' => true,
            'data' => $characters,
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $character = Character::create([
            'tibetan' => $request->tibetan,
            'english' => $request->english,
        ]);


    return response()->json([
        'success' => true,
        'data' => $character,
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $character,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $character->update([
            'tibetan' => $request->tibetan,
            'english' => $request->english,
        ]);

        return response()->json([
                'success' => true,
                'data' => $character,
        ]);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $character->delete();

        return response()->json([
            'success' => true,
            'message' => 'Character deleted successfully',
        ]);
    }
}

