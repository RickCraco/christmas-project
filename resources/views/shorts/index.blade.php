@extends('layouts.app')

@section('title', 'Shorts')

@section('content')
<main style="background-color: #0F0F0F; height: 100%; width: 100%;" class="d-flex flex-column gap-5 justify-content-center align-items-center">
    @foreach ($shorts as $item)
    <div class="h-100 w-100 d-flex justify-content-center">
        <video src="shorts/Dancing_Cat_Funny_.mp4" controls autoplay style="border-radius: 20px; height: 1200px;"></video>
        <div class="text-white ms-3 d-flex flex-column justify-content-end ">
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-thumbs-up" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
                <p class="mt-4">{{ $item->likes }}</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-thumbs-down" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
                <p class="mt-4">Dislike</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-regular fa-comment" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
                <p class="mt-4">{{ $item->comments }}</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-share" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
                <p class="mt-4">Share</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-ellipsis" style="color: #ffffff; transform: translate(0, 12px); font-size: 20px"></i>
            </div>
        </div>
    </div>
    @endforeach
</main>

@endsection
