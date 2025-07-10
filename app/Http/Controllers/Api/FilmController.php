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

class FilmController extends Controller
{
    public function store(Request $request)
    {
        
        $imagePath = null;
        if ($request->hasFile('carouselImage') && $request->hasFile('carouselImagePost')) {
            $image = $request->file('carouselImage');
            $imagePost = $request->file('carouselImagePost');
        
            $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $filenamePost = Str::uuid() . '.' . $imagePost->getClientOriginalExtension();
        
            $image->move(public_path('uploads/films'), $filename);
            $imagePost->move(public_path('uploads/films'), $filenamePost);
        
            $imagePath = 'uploads/films/' . $filename;
            $imagePostPath = 'uploads/films/' . $filenamePost;
        }
        
        
        $film = new Films();  
        $film->title = $request->carouselTitle;
        $film->image = $imagePath;
        $film->post_image = $imagePostPath;

        $film->director = $request->carouselDirector;
        $film->cast = $request->carouselCast;
        $film->language_id = $request->language;
        $film->duration = $request->carouselDuration;
        $film->age = $request->carouselAge;
        $film->start_time = $request->start_time;
        $film->end_time = $request->end_time;
        $film->halls_id = $request->hallIdSelect;
        $film->price = $request->price;
        $film->description = $request->carouselDescriptiontId;
        $film->special_price = $request->special_price ? 1 : 0;
        $film->save();
        
        if ($request->has('genre')) {
            $film->genres()->sync($request->genre);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Ֆիլմը հաջողությամբ ավելացվեց',
            'data' => $film,
        ]);
        
    }

    public function edit(Request $request, $id) {
       
        $slide = Films::find($id); 
        $film = Films::with('genres')->find($id);
        if ($slide) {
            if ($request->hasFile('image') ){

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $slide->image = 'uploads/' . $imageName;
            
            }

            if($request->hasFile('carouselImagePostUpdate')) {
                $imagePost = $request->file('carouselImagePostUpdate');
                $filenamePost = Str::uuid() . '.' . $imagePost->getClientOriginalExtension();
                $imagePost->move(public_path('uploads'), $filenamePost);
                $slide->post_image = 'uploads/' . $filenamePost;

            }
            
            $slide->title = $request->input('titleUpdate');
            $slide->director = $request->input('director');
            $slide->cast = $request->input('cast');
            $slide->language_id = $request->input('language');
            $slide->duration = $request->input('duration');
            $slide->age = $request->input('age_limit');
            $slide->description = $request->input('description');
            $slide->start_time = $request->input('start_time');
            $slide->end_time = $request->input('end_time');
            $slide->price = $request->input('price');
            $slide->halls_id = $request->input('hall');
            $slide->special_price = $request->has('special_price') ? 1 : 0;
            $genres = $request->input('genre', []);

            $slide->genres()->sync($genres);
            $slide->save(); 

            return response()->json(['success' => true, 'message' => 'Ֆիլմը թարմացվել է']);
        }
    
        return response()->json(['success' => false, 'message' => 'Ֆիլմը չի գտնվել'], 404);
    }
    

    
}
