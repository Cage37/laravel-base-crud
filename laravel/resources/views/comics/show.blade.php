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
        <div class="cardcomic ml-5">
            <img src="{{ $comic->image }}" alt="">
            <div class="rowcomic "><span>TITLE: </span><p>{{ $comic->title }}</p></div>
            <div class="rowcomic"><span>AUTHOR: </span><p>{{ $comic->author }}</p></div>
            <div class="rowcomic"><span>DESCRIPTION: </span><p>{{ $comic->desc }}</p></div>
            <div class="rowcomic mb-5"><span>PRICE: </span><p>{{ $comic->price }} $</p></div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <form action="{{ route('comics.edit', $comic->id) }}">
            <button type="submit" class="btn btn-warning mr-5">Edit</button>
        </form>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mr-5">Delete</button>
        </form>
    </div>
</section>

@endsection