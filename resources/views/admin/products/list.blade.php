@extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Update</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr id="row{{ $product->id }}">
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }} $</td>
            <td>{{ $product->updated_at }}</td>
            <td></td>
            <td>
                <a href="/admin/products/edit/{{$product->id}}">
                    <i class="fas fa-edit"></i></a>
                <a href="#" onclick="removeRow({{ $product->id }}, '/admin/products/delete')">
                    <i class="fas fa-trash" style="color:red"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@endsection