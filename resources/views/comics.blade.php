@section('title')
home
@endsection

@extends('layouts.master')

@section('content')

<div class="container-fluid" style="padding: 0;">
    <img src="{{ asset('img/jumbotron.jpg')}}" alt="jumbotron" height="200" width="100%" style="object-fit: cover; object-position: top;">
</div>

<div class="container-fluid" style="background-color: black; color: white; padding: 0;">
    <div class="container">
        <button class="btn btn-primary m-4">CURRENT SERIES</button>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-md-2 mb-4">
                <!-- Cambiato da col-md-4 a col-md-2 -->
                <!-- Inizio Card Bootstrap -->
                <div class="card bg-dark text-white" style="width: 10rem; height: 23rem;">
                    <!-- Aggiunto height: 18rem; -->
                    <div>
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="cover-comics">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>

                        <!-- Rimosso il bottone -->
                    </div>
                </div>
                <!-- Fine Card Bootstrap -->
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary my-4">LOAD MORE</button>
        </div>
    </div>
</div>

@endsection
