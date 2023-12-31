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

    public function show($id){
        $video = Video::findOrFail($id);
        $videos = Video::all();
        $comments = Comment::all();

        return view('videos.show', compact('video', 'videos', 'comments'));
    }
}
