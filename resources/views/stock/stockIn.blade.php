@extends('welcome')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Products In Stock</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product datetime</th>
                <th>Product quantity</th>
                <th>Product unitprice</th>
                <th>Product totalprice</th>
                <th>Actions</th>
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
                    <a href="{{ url('/stock-out',$product->id) }}" class="btn btn-success">
                        out-stock
                    </a>
                    <a href="{{ url('/stock-update',$product->id) }}" class="btn  btn-success">
                        update
                    </a>
                    <form action="{{ url('/stock-delete',$product->id) }}" method="post">
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
<div class="container mt-4">
    <h2 class="mb-4">Sold Products</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product datetime</th>
                <th>Product quantity</th>
                <th>Product unitprice</th>
                <th>Product totalprice</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stockout as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->productIn->product->productname }}</td>
                <td>{{ $product->datetime }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->unitprice }}</td>
                <td>{{ $product->totalprice}}</td>
                <td>
                    <a href="{{ url('/stock-updateout',$product->id) }}" class="btn  btn-success">
                        update
                    </a>
                    <form action="{{ url('/stock-deleteout',$product->id) }}" method="post">
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
