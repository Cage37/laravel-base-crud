@extends('layout.app')

@section('content')


<div class="maincontcomic">
    <div class="cardcomic">
        <img src="{{ $comic->image }}" alt="">
        <div class="rowcomic"><span>TITLE: </span><p>{{ $comic->title }}</p></div>
        <div class="rowcomic"><span>AUTHOR: </span><p>{{ $comic->author }}</p></div>
        <div class="rowcomic"><span>DESCRIPTION: </span><p>{{ $comic->desc }}</p></div>
        <div class="rowcomic"><span>PRICE: </span><p>{{ $comic->price }} $</p></div>
        </a>
    </div>
</div>


@endsection