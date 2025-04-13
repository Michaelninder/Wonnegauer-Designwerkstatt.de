@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Benutzer bearbeiten</h1>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="email" class="form-label">Email-Adresse</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwort (Leer lassen, um das aktuelle Passwort zu behalten)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Benutzer aktualisieren</button>
            </div>
        </form>
    </div>
@endsection
