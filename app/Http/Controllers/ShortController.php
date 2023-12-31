<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Short;

class ShortController extends Controller
{
    public function index(){
        $shorts = Short::all();
        return view('shorts.index', compact('shorts'));
    }
}
