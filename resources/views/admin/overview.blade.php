@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Admin-Übersicht</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Benutzer</h5>
                        <p class="card-text">Verwalte die Benutzer der Website.</p>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Benutzer verwalten</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Links</h5>
                        <p class="card-text">Verwalte die Links auf der Website.</p>
                        <a href="{{ route('admin.links.index') }}" class="btn btn-primary">Links verwalten</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Termine</h5>
                        <p class="card-text">Verwalte die Termine auf der Website.</p>
                        <a href="{{ route('admin.dates.index') }}" class="btn btn-primary">Termine verwalten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
