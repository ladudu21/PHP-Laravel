@extends('admin.main')

@section('content')
<form action="/admin/categories/add" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
    @csrf
</form>
@endsection