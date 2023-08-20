<?php

namespace App\Http\Controllers;

use App\Models\Number;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = Number::all();

        return response()->json([
            'success' => true,
            'data' => $numbers,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $number = Number::find($id);

        if (!$number) {
            return response()->json([
                'success' => false,
                'message' => 'Number not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $number,
        ]);
    }
}

