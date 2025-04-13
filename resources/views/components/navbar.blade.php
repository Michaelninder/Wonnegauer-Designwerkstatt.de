<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    <div class="container">
        <a class="navbar-brand" href="{{ route('page.home') }}">
            <img src="{{ asset('logo1.jpg') }}" width="56" height="56" alt="Logo" class="d-inline-block align-middle">
            <span class="navbar-text ms-3" style="font-size: 1.5rem; font-weight: bold;">
                {{ env('APP_NAME') }}
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('page.current') }}">Aktuell</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.dates') }}">Termine</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.about') }}">Wir</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.links') }}">Links</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.contact') }}">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.design') }}">Design</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.art') }}">Kunst</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('page.culture') }}">Kultur</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="{{ url('gaestefuehrungen.html') }}">Gästeführungen/Radführungen</a></li> -->
            </ul>
        </div>
    </div>
</nav>
