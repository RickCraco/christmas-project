@extends('layouts.app')

@section('title', 'Shorts')

@section('content')

<script>
    function scrollDown(){
        window.scrollBy(0, 1250);
    }
    function scrollUp(){
        window.scrollBy(0, -1250);
    }
</script>


<main style="height: 100%; width: 100%;" class="d-flex flex-column gap-5 justify-content-center align-items-center">
    <div style="position: fixed; top: 95px; right: 20px; height: calc(100% - 95px); z-index: 1000;" class="d-flex flex-column justify-content-between">
        <div class="mt-2" style="cursor: pointer;">
            <i class="fa-solid fs-1 fa-circle-arrow-up" onclick="scrollUp()" style="color: #6d7178;"></i>
        </div>
        <div class="mb-2" style="cursor: pointer;">
            <i class="fa-solid fs-1 fa-circle-arrow-down" onclick="scrollDown()" style="color: #6d7178;"></i>
        </div>
    </div>
    @foreach ($shorts as $item)
    <div class="h-100 w-100 mt-1 d-flex justify-content-center position-relative">
        <video src="shorts/Dancing_Cat_Funny_.mp4" controls style="border-radius: 20px; height: 1200px;"></video>
        <div style="position: absolute; bottom: 50px; left: 780px; font-size: 14px;" class="text-white">
            <img src="{{ $item->user_thumb }}" class="rounded-circle" alt="">
            <span>{{ $item->username }}</span>
            <button class="border-0 p-2 rounded-pill bg-white">Iscriviti</button>
            <p>{{ $item->description }}</p>
        </div>
        <div class="text-white ms-3 d-flex flex-column justify-content-end">
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-thumbs-up" style="color: #ffffff; transform: translate(0, 14px); font-size: 20px"></i>
                <p class="mt-4">{{ $item->likes }}</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-thumbs-down" style="color: #ffffff; transform: translate(0, 14px); font-size: 20px"></i>
                <p class="mt-4">Dislike</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-regular fa-comment" style="color: #ffffff; transform: translate(0, 14px); font-size: 20px"></i>
                <p class="mt-4">{{ $item->comments }}</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-share" style="color: #ffffff; transform: translate(0, 14px); font-size: 20px"></i>
                <p class="mt-4">Share</p>
            </div>
            <div class="rounded-circle text-center mb-5" style="width: 50px; height: 50px; background-color: rgba(128, 128, 128, 0.3); cursor: pointer;">
                <i class="fa-solid fa-ellipsis" style="color: #ffffff; transform: translate(0, 14px); font-size: 20px"></i>
            </div>
        </div>
    </div>
    @endforeach
</main>

@endsection


