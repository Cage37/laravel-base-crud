@extends('layout.app')

<h1 class="text-center pt-3 pb-3">ADD A NEW COMIC</h1>


<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" aria-describedby="titleHelper">
        </div>
        <div class="form-group">
            <label for="author">AUTHOR:</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Add a author" aria-describedby="authorHelper">
        </div>
        <div class="form-group">
            <label for="desc">DESCRIPTION:</label>
            <textarea name="desc" id="desc" class="form-control text-muted" rows="3" placeholder="Add a description"></textarea>
        </div>
        <div class="form-group">
            <label for="image">IMAGE:</label>
            <input type="url" name="image" id="image" class="form-control" placeholder="Add a image" aria-describedby="imageHelper">
        </div>
        <div class="form-group">
            <label for="price">PRICE:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Add a price" aria-describedby="priceHelper">
        </div>
    
        <button type="submit" class="btn btn-primary mr-3">CREATE</button>
        <button class="btn btn-danger"><a class="text-white text-decoration-none" href="{{ route('comics.index') }}">CANCEL</a></button>
    </form>
</div>
