@extends('layouts.admin')

@section('content')
    <h1>Neuen Termin hinzufügen</h1>

    <form action="{{ route('admin.dates.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschreibung</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Datum und Uhrzeit</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
@endsection
