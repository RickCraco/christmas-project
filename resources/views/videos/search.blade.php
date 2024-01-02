@extends('layouts.app')

@section('title', 'Search')

@section('content')

<main>
        <div class="row m-0 flex-column">
            @foreach ($results as $result)
                <div class="col-3 my-4 d-flex" style="width: 323px; height: 274px;"><a href="" style="text-decoration: none">
                    <a href="{{route('videos.show', $result->id)}}" style="text-decoration: none">
                        <div><img src="{{ $result->thumb }}" alt="" style="width: 360px; height: 201px;" class="rounded-4"></div>
                        <div class="d-flex">
                            <img src="{{ $result->user_thumb }}" alt="" class="rounded-circle"
                                style="width: 36px; height:36px; margin-top: 12px; margin-right: 12px">
                            <div style="margin-top: 12px">
                                <h2 class="text-white" style="font-size: 16px">{{ $result->title }}</h2>
                                <h4 style="font-size: 14px; color: #AAAA;" class="m-0">{{ $result->username }}</h4>
                                <div>
                                    <span style="font-size: 14px; color: #AAAA;">{{ $result->views }} visualizzazioni</span>
                                    <span style="color: #AAAA">-</span>
                                    <span style="font-size: 14px; color: #AAAA;">
                                        @php
                                            $dataUscita = $result->date;
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
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </main>


@endsection