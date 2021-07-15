{{-- Bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

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

@section('content')

<section class="sectionmain">
    <div class="maincontcomic">
        @foreach($comics as $comic) 
        <div class="cardcomic">
            <a href="{{ route('comics.show', $comic->id) }}">
            <img src="{{ $comic->image }}" alt="">
            <div class="rowcomic"><span>TITLE: </span><p>{{ $comic->title }}</p></div>
            <div class="rowcomic"><span>AUTHOR: </span><p>{{ $comic->author }}</p></div>
            <div class="rowcomic"><span>DESCRIPTION: </span><p>{{ $comic->desc }}</p></div>
            <div class="rowcomic"><span>PRICE: </span><p>{{ $comic->price }} $</p></div>
            </a>
        </div>
        @endforeach
    </div>
</section>


@endsection