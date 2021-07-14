@extends('layout.app')

@section('content')


<div class="maincont">
    @foreach($comics as $comic) 
    <div class="card">
        <img src="{{ $comic->image }}" alt="">
        <div class="row"><span>TITLE: </span><p>{{ $comic->title }}</p></div>
        <div class="row"><span>AUTHOR: </span><p>{{ $comic->author }}</p></div>
        <div class="row"><span>DESCRIPTION: </span><p>{{ $comic->desc }}</p></div>
        <div class="row"><span>PRICE: </span><p>{{ $comic->price }} $</p></div>
    </div>
    @endforeach
</div>


@endsection