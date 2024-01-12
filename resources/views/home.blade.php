@extends('layouts.app')

@section('content')
    <div class="jumbotron"> </div>

    <section class="comics-section">
        <div class="container d-flex flex-column flex-center">

            <div class="current-title">
                <h3 class="m-0 fw-bold fs-3">
                    CURRENT SERIES
                </h3>
            </div>

            <div class="row d-flex">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="comic-card">

                        <div class="comic-cover">
                            <img src="{{ $comic['thumb'] }}" alt="" class="cover">
                        </div>

                        <p class="comic-title"> {{ $comic['series'] }}</p>
                    </div>
                </div>
                    @endforeach
            </div>

            <button class="load-btn">
                LOAD MORE
            </button>
        </div>
    </section>
@endsection