<h1>ADD A NEW COMIC</h1>


<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">TITLE:</label>
        <input type="text" name="title" id="title" placeholder="Add a title">
        <small>Add your title here</small>
    </div>
    <div class="form-group">
        <label for="author">AUTHOR:</label>
        <input type="text" name="author" id="author" placeholder="Add a author">
        <small>Add your author here</small>
    </div>
    <div class="form-group">
        <label for="desc">DESCRIPTION:</label>
        <input type="text" name="desc" id="desc" placeholder="Add a description">
        <small>Add your description here</small>
    </div>
    <div class="form-group">
        <label for="image">IMAGE:</label>
        <input type="url" name="image" id="image" placeholder="Add a image">
        <small>Add your image here</small>
    </div>
    <div class="form-group">
        <label for="price">PRICE:</label>
        <input type="text" name="price" id="price" placeholder="Add a price">
        <small>Add your price here</small>
    </div>

    <button type="submit">Submit</button>
</form>