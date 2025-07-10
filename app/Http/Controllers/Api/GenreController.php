<?php

namespace App\Http\Controllers\Api;

use App\Models\genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GenreController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genreInputName' => 'required|string|max:255',
        ]);
    
        try {
            $genre = new Genre(); 
            $genre->genre = $request->input('genreInputName'); 
            $genre->save(); 
    
            return response()->json([
                'success' => true,
                'message' => 'Ժանրը հաջողությամբ ավելացվեց',
                'data' => $genre
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Սխալ տեղի ունեցավ։',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    

    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'genreInputNameUpdate' => 'required|string|max:255',
        ]);
    
        $genre = Genre::find($id);
    
        if ($genre) {

            $genre->genre = $request->input('genreInputNameUpdate');
            $genre->save();
        } 
        return response()->json([
            'success' => true,
        ], 201);
    }
}    
