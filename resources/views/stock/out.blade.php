@extends('welcome')
@section('content')
    <form action="{{ url('/stockout-product') }}" method="post">
        @csrf
    <input type="hidden" value={{ $product->id }} name='product_in_id'>

    <input type="number" name="quantity" id=""> <br/>
    <input type="number" name="unitprice" id=""> <br/>
    <input type="date" name="datetime" id=""> <br/>
    <input type="submit" value="submit">
    </form>
    @if (session('msg'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
    @endif

@endsection
