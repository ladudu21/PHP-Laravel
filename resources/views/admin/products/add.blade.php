@extends('admin.main')

@section('content')
<form action="/admin/products/add" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group w-25">
                <input type="number" class="form-control" id="price" name="price">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">$</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" id="upload">
            <div id="image_show"></div>
            <input type="hidden" name="thumb" id="thumb">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
    @csrf
</form>
@endsection