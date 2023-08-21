@extends('layouts.main-layout')

@section('page-title', 'Comics')

@section('main-content')
    <section id="comics">
        <div class="container card-container">
            <div class="current">CURRENT SERIES</div>

            @foreach ($comics as $comic)
                <div class="card">
                    <a href="/comic">
                        <figure>
                            <div class="img-container">
                                <img src="{{ $comic['thumb'] }}" alt="game">
                            </div>
                            <figcaption>{{ $comic['series'] }}</figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="button">
            <button>Load more...</button>
        </div>
    </section>
@endsection
