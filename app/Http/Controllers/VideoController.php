<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all();
        return view('home', compact('videos'));
    }

    //aggiungere funzione show per visualizzare video player
}
