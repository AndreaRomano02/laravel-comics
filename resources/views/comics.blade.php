@php
    $comics = config('comics');
@endphp

@extends('layouts.main-layout')
@section('main-content')
    <section id="comics">
        <div class="container card-container">
            <div class="current">CURRENT SERIES</div>

            @foreach ($comics as $comic)
                <div class="card">
                    <figure>
                        <div class="img-container">
                            <img src="{{ $comic['thumb'] }}" alt="game">
                        </div>
                        <figcaption>{{ $comic['series'] }}</figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
        <div class="button">
            <button>Load more...</button>
        </div>
    </section>
@endsection
