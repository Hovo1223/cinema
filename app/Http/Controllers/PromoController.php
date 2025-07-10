<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promo;

class PromoController extends Controller
{
    public function index(Request $request){

        $promos = promo::all();

      return view('admin.promo.index', [ 'promos' =>$promos]);
    }

    public function destroy($id)
    {
        $promos = promo::findOrFail($id);  
        $promos->delete();  
        return redirect('admin/promos');
    }

    public function create()
    {
        $promos = promo::all();

        return view('admin.promo.new', [ 'promos' =>$promos]);
    }

    public function update($id)
    {
        $promos = promo::find($id);

        return view('admin.promo.edit', [ 'promos' =>$promos,]);
    }

    
}
