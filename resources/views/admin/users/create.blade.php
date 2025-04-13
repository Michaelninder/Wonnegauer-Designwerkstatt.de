@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Neuen Benutzer erstellen</h1>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email-Adresse</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwort</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Benutzer erstellen</button>
            </div>
        </form>
    </div>
@endsection
