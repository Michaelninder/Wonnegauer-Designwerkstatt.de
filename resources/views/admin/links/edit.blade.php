@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Link bearbeiten</h1>

    <form action="{{ route('admin.links.update', $link->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name des Links</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $link->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $link->url) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschreibung</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $link->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Link aktualisieren</button>
    </form>
@endsection
