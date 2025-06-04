@extends('welcome')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Products List</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->productname }}</td>
                <td>
                    <a href="{{ url('/stock-in',$product->id) }}" class="btn btn-sm btn-success">
                        Product In Stock
                    </a>
                    <a href="{{ url('/update-product',$product->id) }}" class="btn btn-sm btn-success">
                        update
                    </a>
                    <form action="{{ url('/delete-product',$product->id) }}" method="post">
                        @csrf
                        @method('delete')
                    <button class="btn btn-success" type="submit">
                        delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
