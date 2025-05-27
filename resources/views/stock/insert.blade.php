@extends('welcome')
@section('content')
    <form action="{{ url('/stockin-product') }}" method="post">
        @csrf
    <input type="hidden" value={{ $product->id }} name='product_id'>

    <input type="number" name="quantity" id=""> <br/>
    <input type="number" name="unitprice" id=""> <br/>
    <input type="date" name="datetime" id=""> <br/>
    <input type="submit" value="submit">
    </form>
@endsection
