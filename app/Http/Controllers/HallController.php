<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hall;

class HallController extends Controller
{
    public function index(request $request)
    {
        $halls = hall::all();
        return view('admin.halls.index', ['halls' => $halls]);
    }


    public function destroy($id)
    {
        $item = hall::findOrFail($id);  
        $item->delete();  
        return redirect('admin/halls');
    }

    public function create()
    {
        $halls = hall::all();
        return view('admin.halls.new', ['halls' => $halls]);
    }

    public function update($id)
    {
        $halls = hall::find($id);
        return view('admin.halls.edit', ['halls' => $halls]);
    }

//     public function store(request $request)
//     {
       
//         $halls = hall::all();
        
//         $validated = $request->validate([
//             'hallName' => 'required|max:255',
//         ]);

//         if($request->input('hallName')) {
//             hall::create([
//                 'hall_name'=> $request->input('hallName')
//             ]);

//             return redirect('hall');
//         }
//     }

//     public function update(request $request, $id)
//     {
      
//         $validated = $request->validate([
//             'HallInputName' => 'required|string|max:255',
//         ]);
    
//         $halls = hall::find($id);
    
//         if ($halls) {
//             $halls->hall_name = $request->input('HallInputName');
//             $halls->save();
    
//             return redirect('hall')->with('ստացվեց', 'Ժանրը հաջողությամբ թարմացվեց');
//         } 
//     }



}