@extends('layout.app')

<h1 class="text-center pt-3 pb-3">EDIT COMIC</h1>


<div class="container pb-5">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">EDIT TITLE:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Edit title" aria-describedby="titleHelper" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="author">EDIT AUTHOR:</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Edit author" aria-describedby="authorHelper" value="{{$comic->author}}">
        </div>
        <div class="form-group">
            <label for="desc">EDIT DESCRIPTION:</label>
            <textarea name="desc" id="desc" class="form-control text-muted" rows="3" placeholder="Edit description">
                {{$comic->desc}}
            </textarea>
        </div>
        <div class="form-group">
            <h4>Current image</h4>
            <img src="{{ $comic->image }}" alt="">
        </div>
        <div class="form-group">
            <label for="image">EDIT IMAGE:</label>
            <input type="url" name="image" id="image" class="form-control" placeholder="Edit image" aria-describedby="imageHelper" value="{{$comic->image}}">
        </div>
        <div class="form-group">
            <label for="price">EDIT PRICE:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Edit price" aria-describedby="priceHelper" value="{{$comic->price}}">
        </div>
    
        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
</div>