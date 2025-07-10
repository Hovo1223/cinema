<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\genre;
use App\Models\countries;
use App\Models\Films;
use App\Models\country_slide;
use App\Models\hall;
use App\Models\Carousel_Slides;
use App\Models\promo;
use App\Models\setting;

class PagesController extends Controller
{
    public function index()
    {
        $films= Films::all();

        return view('admin.pages.index', [ 'Selectedfilms' => $films]);
    }

    public function update()
    {
        $Selectedfilms = Films::all();
        $carousel_slides = Carousel_Slides::all();
        $settings = setting::all();

        $settingsArray = [];
        foreach ($settings as $setting) {
            $settingsArray[$setting->key] = $setting->value;
        }
    
        return view('admin.pages.edit', [
            'Selectedfilms' => $Selectedfilms,
            'carousel_slides' => $carousel_slides,
            'settings' => $settingsArray  
        ]);    
    }
    

   

}