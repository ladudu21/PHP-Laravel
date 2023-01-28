@extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Update</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr id="row{{ $category->id }}">
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->updated_at }}</td>
            <td>
                <a href="/admin/categories/edit/{{$category->id}}">
                    <i class="fas fa-edit"></i></a>
                <a href="#" onclick="removeRow({{ $category->id }}, '/admin/categories/delete')">
                    <i class="fas fa-trash" style="color:red"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection