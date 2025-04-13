@extends('layouts.admin')

@section('content')
    <h1>Termin bearbeiten</h1>

    <form action="{{ route('admin.dates.update', $date->uuid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $date->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschreibung</label>
            <textarea class="form-control" id="description" name="description" required>{{ $date->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Datum und Uhrzeit</label>
            <input type="datetime-local" class="form-control" id="date" name="date" value="{{ $date->date->format('Y-m-d\TH:i') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
@endsection
