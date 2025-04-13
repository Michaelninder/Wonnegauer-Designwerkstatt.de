@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Links verwalten</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.links.create') }}" class="btn btn-primary mb-3">Neuen Link hinzufügen</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Beschreibung</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{ $link->name }}</td>
                    <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                    <td>{{ $link->description }}</td>
                    <td>
                        <a href="{{ route('admin.links.edit', $link->id) }}" class="btn btn-warning btn-sm">Bearbeiten</a>
                        <form action="{{ route('admin.links.destroy', $link->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $links->links() }} 
@endsection
