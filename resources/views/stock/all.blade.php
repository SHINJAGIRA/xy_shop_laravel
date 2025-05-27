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
                <td>{{ $product->product->productname }}</td>
                <td>{{ $product->datetime }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->unitprice }}</td>
                <td>{{ $product->totalprice}}</td>
                <td>
                    <a href="{{ url('/stock-in',$product->id) }}" class="btn btn-sm btn-success">
                        Product Out of stock
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
