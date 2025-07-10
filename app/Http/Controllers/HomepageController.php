<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\genre;
use App\Models\countries;
use App\Models\Films;
use App\Models\country_slide;
use App\Models\hall;
use App\Models\Carousel_Slides;
use App\Models\Languages;
use App\Models\promo;
use App\Models\setting;


class HomepageController extends Controller
{
    
    public function index(Request $request)
    {
        $genres = Genre::all();
        $countries = Languages::all();
        $slides = Films::all();
        $hall = Hall::all();
        $promos = Promo::all();
        $carousel_slides = Carousel_Slides::all();
        $slides_now = Films::where('start_time', '<=', now())
            ->where('end_time', '>=', now())
            ->get();

        $slides_after = Films::where('start_time', '>', now())
            ->where('end_time', '>', now())
            ->orderBy('start_time', 'asc')
            ->get();

        $selectedFilmIds = $request->films ?? session('selectedFilms', []);
        $selectedFilms = collect();
        if (!empty($selectedFilmIds)) {
            session(['selectedFilms' => $selectedFilmIds]);
            Carousel_Slides::whereNotIn('slide_id', $selectedFilmIds)->delete();

            $newSlides = [];
            foreach ($selectedFilmIds as $filmId) {
                if (Films::where('id', $filmId)->exists()) {
                    if (!Carousel_Slides::where('slide_id', $filmId)->exists()) {
                        $newSlides[] = ['slide_id' => $filmId];
                    }
                }
            }

            if (count($newSlides) > 0) {
                Carousel_Slides::insert($newSlides);
            }

            $selectedFilms = Films::whereIn('id', $selectedFilmIds)->get();
        }
        $settings = setting::all()->keyBy('key');

        if (isset($_POST['hiddenInput'])) {
            $ActiveFilmsChecked = isset($_POST['ActiveFilms']) && $_POST['ActiveFilms'] == "on" ? 1 : 0;
            $promoOnOf = isset($_POST['promos']) && $_POST['promos'] == "on" ? 1 : 0;
            $UpcomingMovies = isset($_POST['UpcomingMovies']) && $_POST['UpcomingMovies'] == "on" ? 1 : 0;
            $follow = isset($_POST['follow']) && $_POST['follow'] == "on" ? 1 : 0;

            foreach ($settings as $setting) {
                if ($setting->key == 'ActiveFilms') {
                    $setting->value = $ActiveFilmsChecked;
                } elseif ($setting->key == 'promos') {
                    $setting->value = $promoOnOf;
                } elseif ($setting->key == 'UpcomingMovies') {
                    $setting->value = $UpcomingMovies;
                } elseif ($setting->key == 'follow') {
                    $setting->value = $follow;
                }
                $setting->save();
            }
        } else {
            $ActiveFilmsChecked = isset($settings['ActiveFilms']) ? $settings['ActiveFilms']->value : 0;
            $promoOnOf = isset($settings['promos']) ? $settings['promos']->value : 0; 
            $UpcomingMovies = isset($settings['UpcomingMovies']) ? $settings['UpcomingMovies']->value : 0;
            $follow = isset($settings['follow']) ? $settings['follow']->value : 0;

        }
        
        return view('home.welcome', [
            'genres' => $genres,
            'countries' => $countries,
            'slides' => $slides,
            'hall' => $hall,
            'slides_now' => $slides_now,
            'slides_after' => $slides_after,
            'promos' => $promos,
            'selectedFilms' => $selectedFilms,
            'carousel_slides' => $carousel_slides,
            'ActiveFilmsChecked' => $ActiveFilmsChecked,
            'promoOnOf' => $promoOnOf,
            'UpcomingMovies' => $UpcomingMovies,
            'follow' => $follow
        ]);
    }


    public function view(Request $request, $id)
    {

        $genres = Genre::all();
        $countries = Languages::all();
        $slides = Films::all();
        $hall = Hall::all();
        $promos = Promo::all();

        $slides_now = Films::where('start_time', '<=', now())
            ->where('end_time', '>=', now())
            ->get();

        $slides_after = Films::where('start_time', '>', now())
            ->where('end_time', '>', now())
            ->orderBy('start_time', 'asc')
            ->get();

        $selectedFilms = $request->films ?? session('selectedFilms', []);
        $view = Films::find($id);
        if (!empty($selectedFilms)) {
            session(['selectedFilms' => $selectedFilms]);

            Carousel_Slides::whereNotIn('slide_id', $selectedFilms)->delete();

            $newSlides = [];
            foreach ($selectedFilms as $filmId) {
                if (!Carousel_Slides::where('slide_id', $filmId)->exists()) {
                    $newSlides[] = ['slide_id' => $filmId];
                }
            }

            if (count($newSlides) > 0) {
                Carousel_Slides::insert($newSlides);
            }
        }

        return view('home.view', [
            'genres' => $genres,
            'countries' => $countries,
            'slides' => $slides,
            'hall' => $hall,
            'slides_now' => $slides_now,
            'slides_after' => $slides_after,
            'promos' => $promos,
            'selectedFilms' => $selectedFilms,
            'view' => $view
        ]);
    }
    
    public function about(Request $request)
    {
        return view('home.about');
    }
}
