@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Termine verwalten</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.dates.create') }}" class="btn btn-primary mb-4">Neuen Termin hinzufügen</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Datum</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dates as $date)
                <tr>
                    <td>{{ $date->id }}</td>
                    <td>{{ $date->name }}</td>
                    <td>{{ $date->description }}</td>
                    <td>{{ $date->date->format('d.m.Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.dates.edit', $date->uuid) }}" class="btn btn-warning btn-sm">Bearbeiten</a>
                        <form action="{{ route('admin.dates.destroy', $date->uuid) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Löschen</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dates->links() }}
@endsection
