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

class PromoController extends Controller
{
    public function store(Request $request)
    {

        $imagePath = null;
        if ($request->hasFile('carouselImagePromo')) {
            $imagePath = $request->file('carouselImagePromo')->store('promo_images', 'public');
        }
        
        $promo = new Promo();  
        $promo->title = $request->input('promoName');
        $promo->image = $imagePath; 
        $promo->description = $request->input('promodescName');
        $promo->subtitle = $request->input('promoSubtitleName');
        $promo->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Ֆիլմը հաջողությամբ ավելացվեց',
            'data' => $promo,
        ]);
    }
    
    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'promoName' => 'required|string|max:255',
            'promoSubtitleNameUpdate' => 'required|string|max:255',
            'promodescNameUpdate' => 'required|string|max:255',
        ]);
    
        $promo = promo::find($id);
    
        if (!$promo) {
            return response()->json([
                'success' => false,
                'message' => 'Promo not found.'
            ], 404);
        }
    
        $promo->title = $request->input('promoName');
        $promo->subtitle = $request->input('promoSubtitleNameUpdate');
        $promo->description = $request->input('promodescNameUpdate');
    
        if ($request->hasFile('carouselImagePromoUpdate')) {
            $imagePath = $request->file('carouselImagePromoUpdate')->store('promo_images', 'public');
            $promo->image = $imagePath;
        }
    
        $promo->save();
    
        return response()->json([
            'success' => true,
        ], 201);
    }
    
}