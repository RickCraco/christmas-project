@extends('layouts.app')

@section('title', 'Search')

@section('content')

<main>
    <div class="row m-0">
    <div class="d-flex col-12">
    <div class="d-flex flex-column">
    <h2 class="m-2 text-white">Video per {{$query}}</h2>
    @foreach ($results as $result)
                <div class="m-2">
                <a href="" style="text-decoration: none">
                        <div class="d-flex">
                            <div class="">
                                <a href="{{route('videos.show', $result->id)}}" style="text-decoration: none">
                                <img src="{{ $result->thumb }}" alt="" style="width: 360px; height: 201px;" class="rounded-3">
                            </div>
                            <div class="px-2">
                                <div class="fw-bold text-white" style="font-size: 18px">{{ $result->title }}</div>
                                <div style="font-size: 14px; color: #AAAA;" class="d-flex align-items-center">
                                    <img src="{{ $result->user_thumb }}" alt="{{ $result->username }}" class="rounded-circle me-2" style="width: 24px; height: 24px;">
                                    {{ $result->username }}
                                </div>
                                <div style="font-size: 11px; color: #AAAA;" class="mt-1">{{ $result->description}}</div>
                                <div class="">
                                    <span style="font-size: 13px; color: #AAAA;">{{ $result->views }} Views</span>
                                    <span style="color: #AAAA; font-size: 3px" class="align-middle"><i class="fa-solid fa-circle"></i></span>
                                    <span style="font-size: 13px; color: #AAAA;">
                                        @php
                                            $dataUscita = $result->date;
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
                    </a>
                </div>
            @endforeach
    </div>
    </div>
    </div>

</main>


@endsection