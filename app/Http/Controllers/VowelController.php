<?php

namespace App\Http\Controllers;

use App\Models\Vowel;

class VowelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vowels = Vowel::all();

        return response()->json([
            'success' => true,
            'data' => $vowels,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vowel = Vowel::find($id);

        if (!$vowel) {
            return response()->json([
                'success' => false,
                'message' => 'Vowel not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $vowel,
        ]);
    }
}

