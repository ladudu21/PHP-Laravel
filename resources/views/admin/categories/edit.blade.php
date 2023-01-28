@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    @csrf
</form>
@endsection