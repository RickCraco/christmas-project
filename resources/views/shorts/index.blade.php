@extends('layouts.app')

@section('title', 'Shorts')

@section('content')
<main style="background-color: #0F0F0F; height: 100vh; width: 100%;" class="d-flex justify-content-center align-items-center">
    <video src="shorts/Dancing_Cat_Funny_.mp4" controls autoplay style="border-radius: 20px; height: 95%;"></video>
    <div class="text-white ms-3" style="transform: translate(0, 300px);">
        <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
            <i class="fa-solid fa-thumbs-up" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
            <p class="mt-4">{{ $shorts[0]->likes }}</p>
        </div>
        <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
            <i class="fa-solid fa-thumbs-down" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
            <p class="mt-4">Dislike</p>
        </div>
        <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
            <i class="fa-regular fa-comment" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
            <p class="mt-4">{{ $shorts[0]->comments }}</p>
        </div>
        <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
            <i class="fa-solid fa-share" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
            <p class="mt-4">Share</p>
        </div>
        <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
            <i class="fa-solid fa-ellipsis" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
        </div>
    </div>
</main>

@endsection
