@extends('layout.app')

<h1 class="text-center pt-3 pb-3">ADD A NEW COMIC</h1>


<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">TITLE:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add a title" aria-describedby="titleHelper" value="{{old('title')}}" required>
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="author">AUTHOR:</label>
            <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" placeholder="Add a author" aria-describedby="authorHelper" value="{{old('author')}}" required>
        </div>
        @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="desc">DESCRIPTION:</label>
            <textarea name="desc" id="desc" class="form-control text-muted @error('desc') is-invalid @enderror" rows="3" placeholder="Add a description">{{ old('desc') }}</textarea>
        </div>
        @error('desc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="image">IMAGE:</label>
            <input type="url" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Add a image" aria-describedby="imageHelper" value="{{old('image')}}">
        </div>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="price">PRICE:</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Add a price" aria-describedby="priceHelper" value="{{old('price')}}" required>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
        <button type="submit" class="btn btn-primary mr-3">CREATE</button>
        <button class="btn btn-danger"><a class="text-white text-decoration-none" href="{{ route('comics.index') }}">CANCEL</a></button>
    </form>
</div>
