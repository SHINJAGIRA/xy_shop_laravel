@extends('welcome')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Add New Product</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/update-product') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="productname" class="form-label fw-semibold">Product Name</label>
                            <input type="text" name="productname" id="productname" class="form-control" value="{{ $product->name }}" placeholder="Enter product name" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fas fa-plus-circle me-1"></i> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
