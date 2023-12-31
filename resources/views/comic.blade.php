@extends('layouts.main-layout')

@section('page-title', 'Single Comic')

@section('main-content')
    <section id="single-comic">
        <div class="bg-blue"></div>

        {{-- # Immagine copertina --}}
        <div class="img-container">
            <p>{{ $comic['type'] }}</p>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <a href="/comics">View Gallery</a>
        </div>


        <div class="container">

            {{-- # Wrap generico --}}
            <div class="wrap">

                {{-- # Descrizione comic --}}
                <div>

                    <h1>{{ $comic['title'] }}</h1>
                    <div class="info">
                        <div class="cost">
                            <p class="price">U.S Price: <span>{{ $comic['price'] }}</span></p>
                            <p class="available">AVAILABLE</p>
                        </div>
                        <div class="check">
                            <label for="check">Check Availability</label>
                            <select name="check" id="check-select">
                                <option value=""></option>
                                <option value="">available</option>
                                <option value="">not available</option>
                            </select>
                        </div>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>

                {{-- # Pubblicità --}}
                <div class="adv">
                    <img src="{{ Vite::asset('resources/img/pubblicity.jpg') }}" alt="Adv">
                </div>
            </div>

            <div class="other-info">
                <div class="left side">
                    <h3>Talent</h3>
                    <div>
                        <p>Art by:</p>
                        <div>
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{ $artist }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p>Written by:</p>
                        <div>
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{ $writer }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="right side">
                    <h3>Specs</h3>
                    <div>
                        <p>Series:</p>
                        <a href="#">{{ $comic['type'] }}</a>

                    </div>
                    <div>
                        <p>U.S. Price:</p>
                        <span>{{ $comic['price'] }}</span>
                    </div>
                    <div>
                        <p>On Sale Date:</p>
                        <span>{{ $comic['sale_date'] }}</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
