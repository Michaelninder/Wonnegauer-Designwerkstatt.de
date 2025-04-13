@extends('layouts.app')

@section('layout')

@include('components.header')

<div class="container">
    @if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif
    @yield('content')
</div>

@include('components.footer')

@endsection
