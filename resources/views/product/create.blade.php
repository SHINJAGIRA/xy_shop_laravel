@extends('welcome')
@section('content')
       <form action="{{ url('/create-product') }}" method="post">
        @csrf
    <input type="text" name="productname" id=""> <br/>
    <input type="submit" value="submit">
    </form>
@endsection