<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" width="50" height="50" style="margin: 0 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/characters') }}"><strong>CHARACTERS</strong> </a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/comics') }}"><strong>COMICS</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies') }}"><strong>MOVIES</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tv') }}"><strong>TV</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/games') }}"><strong>GAMES</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/collectibles') }}"><strong>COLLECTIBLES</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/videos') }}"><strong>VIDEOS</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/fans') }}"><strong>FANS</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/news') }}"><strong>NEWS</strong></a>
                    <div class="underline"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/shop') }}"><strong>SHOP</strong></a>
                    <div class="underline"></div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<style>
    .navbar-nav .nav-link.active {
        color: blue;
    }

    .navbar-nav .nav-item .underline {
        height: 0;
        background-color: blue;
        transition: height 0.3s;
    }

    .navbar-nav .nav-item .nav-link.active+.underline {
        height: 2px;
    }

    .navbar-nav .nav-link {
        font-size: 150%;
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('.navbar-nav .nav-link');
        links.forEach(function(link) {
            if (link.href === window.location.href) {
                link.classList.add('active');
            }
            link.addEventListener('click', function() {
                links.forEach(function(l) {
                    l.classList.remove('active');
                });
                link.classList.add('active');
            });
        });
    });

</script>
