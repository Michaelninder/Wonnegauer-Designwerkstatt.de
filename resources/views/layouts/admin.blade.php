@extends('layouts.app')

@section('layout')
    <div class="d-flex">
        @include('components.sidebar')

        <div class="container-fluid">
            @if(isset($error))
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    @include('components.footer')

@endsection
