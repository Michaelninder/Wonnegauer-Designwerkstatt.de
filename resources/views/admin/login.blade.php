@extends('layouts.app')

@section('direct')
<main class="form-signin w-100 m-auto text-center" style="max-width: 330px; padding: 1rem;">
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container mt-5 dark">
        <form action="{{ route('admin.login.post') }}" method="POST" class="background-dark">
            @csrf
            <img class="mb-4" src="{{ asset('logo1.jpg') }}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Admin Anmeldung</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                <label for="floatingInput">Email-Adresse</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Passwort" required>
                <label for="floatingPassword">Passwort</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember"> Angemeldet bleiben
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Anmelden</button>
            <p class="mt-5 mb-3 text-muted">Wonnegauer-Designwerkstatt.de <br> &copy; 2024 - 2025</p>
        </form>
    </div>
</main>
@endsection
