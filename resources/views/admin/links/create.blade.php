@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Neuen Link hinzufügen</h1>

    <form action="{{ route('admin.links.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name des Links</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschreibung</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Link speichern</button>
    </form>
@endsection
