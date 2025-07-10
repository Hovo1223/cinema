<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\genre;
use App\Models\languages;
use App\Models\Films;
use App\Models\country_slide;
use App\Models\hall;
use App\Models\Carousel_Slides;
use App\Models\promo;

class MovesController extends Controller
{ 
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index(Request $request)
{
    
    $countries = languages::all();
    $genres = genre::all();
    $slides = Films::all();
    $hall = hall::all();
    $slides_now = Films::where('end_time', '>=', now())->get();
    
    return view('admin.films.index', [
        'genres' => $genres,
        'countries' => $countries,
        'slides' => $slides,
        'hall' => $hall,
    ]);
}

public function create()
{
    $countries = languages::all();
    $genres = genre::all();
    $slides = Films::all();
    $hall = hall::all();
    return view('admin.films.new', [
        'genres' => $genres,
        'countries' => $countries,
        'slides' => $slides,
        'hall' => $hall,
    ]);
}
    

public function update($id)
{

    $countries = languages::all();
    $genres = genre::all();
    $film = Films::find($id);
    $hall = hall::all();
    $slides_now = Films::where('end_time', '>=', now())->get();
    
    return view('admin.films.edit', [
        'genres' => $genres,
        'countries' => $countries,
        'film' => $film,
        'hall' => $hall,
    ]);
}

    public function destroy($id)
    {
        $item = Films::findOrFail($id);  
        $item->delete();  
        return redirect('admin/films');
    }  
}