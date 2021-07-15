@extends('layout.app')

@section('header')

<section class="sectionheader">
    <h1 class="text-center mt-1">COMICS</h1>
        <div class="divlink">
            <a href="{{ route('homepage') }}">HOMEPAGE</a>
            <a href="{{ route('comics.index') }}">FUMETTI</a>
            <a href="{{ route('comics.create') }}">CREA FUMETTO</a>
        </div>
</section>

@endsection

@section ('content')

<section class="sectionmain">
    <h1 class="titlehome">HOMEPAGE COMICS!</h1>
    <p class="homep">If you want to visit our comics click <a href="{{route('comics.index')}}">HERE</a></p>
</section>


@endsection