<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hall;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index');
    }

    public function create()
    {
        return view('admin.about.new');
    }
}