@extends('layouts.main')

@section('content')
<h2>Willkommen auf der Seite der Wonnegauer Designwerkstatt.</h2>
<div class="content-wrapper">
    <img src="{{ asset('img/img_index1.jpg') }}" alt="" class="left-image">
    <div class="right-content">
        <p>Wir, Brigitte und Wolfgang Ternis, sind in den Bereichen Design, Kunst, Kultur und Tourismus in Rheinhessen tätig.</p>
        <p>Unser Ziel ist die Förderung von Kreativität, Lebensqualität und Wohlbefinden.</p>
        <p>Dies wollen wir durch eigenes kreatives Gestalten, die Kontakte zu Mitmenschen und Veranstaltungen erreichen.</p>
    </div>
</div>
<div>
    <img src="{{ asset('img/lyon.JPG') }}" alt="" class="left-image">
</div>

@endsection
