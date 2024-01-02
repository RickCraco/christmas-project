@extends('layouts.app')

@section ('title', 'Show')
<main class="" style="background-color: #0F0F0F;">
<div class="row m-0">
    <div class="text-white col-9">   
        <img src="{{$video->thumb}}" alt="" style="width: 1200px; height: 650px;">
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
                    <span class="p-2 m-1 align-center text-white rounded-5" style="background-color: #272727;"><i class="fa-regular fa-thumbs-up"></i> {{$video->likes}}</span>
                    <span class="p-2 m-1 align-center text-white rounded-5" style="background-color: #272727;"><i class="fa-solid fa-share"></i> Condividi</span>
                    <span class="p-2 m-1 align-center text-white rounded-5" style="background-color: #272727;"><i class="fa-solid fa-download"></i> Scarica</span>
                    <span class="p-2 m-1 align-center text-white rounded-5" style="background-color: #272727;"><i class="fa-solid fa-scissors"></i> Clip</span>
                    <span class="p-2 m-1 align-center text-white rounded-5" style="background-color: #272727;"><i class="fa-solid fa-cloud-arrow-up"></i> Salva</span>
                </div>
            </div>
        <div class="p-3 rounded-4" style="background-color: #272727;">
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
            <span>{{$video->description}}</span>
        </div>
        <div>
            <h4>20 Commenti</h4>
        </div>
    </div>
</div>
</main>