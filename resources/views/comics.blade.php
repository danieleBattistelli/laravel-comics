@section('title')
home
@endsection

@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Ecco le mie card</h1>

    <div class="row">
        @for ($i = 0; $i < 9; $i++) <div class="col-md-4 mb-4">
            <!-- Inizio Card Bootstrap -->
            <div class="card" style="width: 18rem;">
                <img src="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titolo della Card {{ $i + 1 }}</h5>
                    <p class="card-text">Alcuni contenuti di esempio per la card {{ $i + 1 }}.</p>
                    <a href="#" class="btn btn-primary">Vai da qualche parte</a>
                </div>
            </div>
            <!-- Fine Card Bootstrap -->
    </div>
    @endfor
</div>

</div>

@endsection
