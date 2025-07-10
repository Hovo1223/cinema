<?php

namespace App\Http\Controllers\Api;
use App\Models\Films;
use App\Models\genre;
use App\Models\countries;
use App\Models\country_slide;
use App\Models\hall;
use App\Models\CarouselSlide;
use App\Models\promo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HallController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'hallName' => 'required|string|max:255',
        ]);
    
        try {
            $halls = new hall(); 
            $halls->hall_name = $request->input('hallName'); 
            $halls->color = $request->input('color'); 

            $halls->save(); 
    
            return response()->json([
                'success' => true,
                'message' => 'Ժանրը հաջողությամբ ավելացվեց',
                'data' => $halls
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
            'hallNameUpdate' => 'required|string|max:255',

        ]);
    
        $halls = hall::find($id);
    
        if ($halls) {

            $halls->hall_name = $request->input('hallNameUpdate');
            $halls->color = $request->input('colorUpdate');

            $halls->save();
        } 
        return response()->json([
            'success' => true,
        ], 201);
    }
}