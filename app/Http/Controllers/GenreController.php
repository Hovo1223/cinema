<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselSlide;
use App\Models\genre;

class GenreController extends Controller
{
    public function index(request $request)
    {
        $genres = genre::all();
        return view('admin.genres.index', ['genres' => $genres]);
    }

    public function create(request $request)
    {
        $genres = genre::all();

        return view('admin.genres.new', ['genres' => $genres]);

    }

    public function update($id)
    {
        $genres = genre::find($id);

        return view('admin.genres.edit', ['genres' => $genres]);

    }

    public function destroy($id)
    {
        $item = Genre::findOrFail($id);  
        $item->delete();  
        return redirect('admin/genres');
    }
    
}
