@extends('welcome')
@section('content')
    <form action="{{ url('/stock-updateout-product') }}" method="post">
        @csrf
        @method('put')
    <input type="hidden" value={{ $product->id }} name='product_id'>

    <input type="number" name="quantity" value={{ $product->quantity }} id=""> <br/>
    <input type="number" name="unitprice" value={{ $product->unitprice }} id=""> <br/>
    <input type="date" name="datetime" value={{ $product->datetime }} id=""> <br/>
    <input type="submit" value="submit">
    </form>
@endsection
