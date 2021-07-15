<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
        

{{-- Bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


<h1 class="text-center pt-3 pb-3">ADD A NEW COMIC</h1>


<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Add your title here</small>
        </div>
        <div class="form-group">
            <label for="author">AUTHOR:</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Add a author" aria-describedby="authorHelper">
            <small id="authorHelper" class="text-muted">Add your author here</small>
        </div>
        <div class="form-group">
            <label for="desc">DESCRIPTION:</label>
            <textarea name="desc" id="desc" class="form-control text-muted" rows="3">
                
            </textarea>
        </div>
        <div class="form-group">
            <label for="image">IMAGE:</label>
            <input type="url" name="image" id="image" class="form-control" placeholder="Add a image" aria-describedby="imageHelper">
            <small id="imageHelper" class="text-muted">Add your image here</small>
        </div>
        <div class="form-group">
            <label for="price">PRICE:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Add a price" aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Add your price here</small>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
