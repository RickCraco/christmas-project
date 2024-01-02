@extends('layouts.app')

@section ('title', 'Show')
<main class="" style="background-color: #0F0F0F;">
<div class="row m-0 flex-nowrap">
    <div class="text-white col-9 p-0">
        <div class="my-3">
            <video width="1200" height="650" src="/videos/Rick_Astley_-_Never_Gonna_Give_You_Up_Official_Music_Video.mp4" controls style="object-fit: cover;"></video>
        </div>
        <h4 class="">{{$video->title}}</h3>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img class="rounded-5" src="{{$video->user_thumb}}" alt="logo-user" style="width: 40px; height: 40px;">
                    <div class="d-flex flex-column p-2">
                        <span class="">{{$video->username}}</span>
                        <span>{{$video->subscribers}} Iscritti</span> 
                    </div>
                    <span class="p-2 bg-white align-center text-dark rounded-5">Iscriviti</span>
                </div>
                <!-- <div class="flex-column align-items-center">
                </div> -->
                <div class="d-flex">
                    <span class="px-3 p-2 m-1 align-center text-white rounded-5" style="background-color: #272727; font-size: 15px;"><i class="fa-regular fa-thumbs-up"></i> {{$video->likes}}</span>
                    <span class="px-3 p-2 m-1 align-center text-white rounded-5" style="background-color: #272727; font-size: 15px;"><i class="fa-solid fa-share"></i> Condividi</span>
                    <span class="px-3 p-2 m-1 align-center text-white rounded-5" style="background-color: #272727; font-size: 15px;"><i class="fa-solid fa-download"></i> Scarica</span>
                    <span class="px-3 p-2 m-1 align-center text-white rounded-5" style="background-color: #272727; font-size: 15px;"><i class="fa-solid fa-scissors"></i> Clip</span>
                    <span class="px-3 p-2 m-1 align-center text-white rounded-5" style="background-color: #272727; font-size: 15px;"><i class="fa-solid fa-cloud-arrow-up"></i> Salva</span>
                </div>
            </div>
        <div class="my-3 p-3 rounded-4" style="background-color: #272727;">
            <h5 class="fs-6">{{$video->views}} visualizzazioni</h5>
            <span>@php
                    $dataUscita = $video->date;
                    $dataUscita = new DateTime($dataUscita);
                    $now = new DateTime();
                    $differenza = $now->diff($dataUscita);
                    $differenzaFormattata = '';
                    if ($differenza->y >= 1 && $differenza->m >= 1) {
                        $differenzaFormattata .= $differenza->y . ' anni ' . $differenza->m . ' mesi fa';
                    } elseif ($differenza->y >= 1) {
                        $differenzaFormattata .= $differenza->y . ' anni fa';
                    } elseif ($differenza->m >= 1) {
                        $differenzaFormattata .= $differenza->m . ' mesi fa';
                    }

                    if ($differenza->d > 0 && !($differenza->y > 0 || $differenza->m > 0)) {
                        $differenzaFormattata .= $differenza->d . ' giorni fa';
                    }

                    echo "$differenzaFormattata";
                @endphp
            </span>
            <p>{{$video->description}}</p>
        </div>
        <div>
            <div class="my-3">
                <h4>20 Commenti</h4>
            </div>        
            @foreach ($comments as $comment)
            <div class=" my-3 d-flex align-items-center ">
                <img class="rounded-5" src="{{$comment->user_thumb}}" alt="logo-user" style="width: 40px; height: 40px;">
                <div class="d-flex flex-column px-3" style="font-size: 16px;">
                    <span class="" style="font-weight: bold;">{{$comment->username}}</span>
                    <span>{{$comment->text}}</span>
                    <span class="align-center text-white rounded-5"><i class="fa-regular fa-thumbs-up"></i> {{$comment->likes}}</span>
                </div>
                </div>
                
            @endforeach
        </div>
    </div>
    <div class="d-flex col-3 justify-content-center">
    <div class="d-flex flex-column">
    @foreach ($videos as $video)
                <div class="m-2" style="width: 323px;"><a href="" style="text-decoration: none">                    
                        <div class="d-flex">
                            <div class="">
                                <a href="{{route('videos.show', $video->id)}}" style="text-decoration: none">
                                <img src="{{ $video->thumb }}" alt="" style="width: 150px; height: 94px;" class="rounded-3">
                            </div>
                            <div class="d-flex flex-column px-2" style="width: 150px; height: 90px;">
                                <span class="fw-bold text-white overflow-hidden" style="font-size: 18px">{{ $video->title }}...</span>
                                <span style="font-size: 13px; color: #AAAA;" class="">{{ $video->username }}</span>
                                <div>
                                    <span style="font-size: 14px; color: #AAAA;">{{ $video->views }} Views</span>
                                    <span style="color: #AAAA; font-size: 6px" class="align-middle"><i class="fa-solid fa-circle"></i></span>
                                    <span style="font-size: 14px; color: #AAAA;">
                                        @php
                                            $dataUscita = $video->date;
                                            $dataUscita = new DateTime($dataUscita);
                                            $now = new DateTime();
                                            $differenza = $now->diff($dataUscita);
                                            $differenzaFormattata = '';
                                            if ($differenza->y >= 1) {
                                                $differenzaFormattata .= $differenza->y . ' anni fa';
                                            } elseif ($differenza->m >= 1) {
                                                $differenzaFormattata .= $differenza->m . ' mesi fa';
                                            }

                                            if ($differenza->d > 0 && !($differenza->y > 0 || $differenza->m > 0)) {
                                                $differenzaFormattata .= $differenza->d . ' giorni fa';
                                            }

                                            echo "$differenzaFormattata";
                                        @endphp
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a></div>
            @endforeach
    </div>
    </div>
</div>
</main>