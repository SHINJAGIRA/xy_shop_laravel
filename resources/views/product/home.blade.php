@extends('welcome')

@section('content')
<main class="container my-5 flex-grow-1">
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary">Welcome {{ auth()->user()->username }}</h1>
      <p class="text-secondary fs-5">Manage your products, inventory, and store efficiently with our comprehensive dashboard tools</p>
    </div>

    <!-- Stats Section -->
    <div class="row g-4 mb-5 text-center">
      <div class="col-md-3 col-sm-6">
        <div class="bg-white p-4 rounded shadow-sm">
          <i class="fas fa-box-open fs-2 text-primary mb-2"></i>
          <div class="fw-bold fs-4">{{$product}}</div>
          <div class="text-muted">Total Products</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="bg-white p-4 rounded shadow-sm">
          <i class="fas fa-shopping-cart fs-2 text-success mb-2"></i>
          <div class="fw-bold fs-4">{{$productIn}}</div>
          <div class="text-muted">Products in Stock</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="bg-white p-4 rounded shadow-sm">
          <i class="fas fa-chart-line fs-2 text-info mb-2"></i>
          <div class="fw-bold fs-4">{{ $productOut }}</div>
          <div class="text-muted">Products that are Sold(out of the stock)</div>
        </div>
      </div>
    </div>

    

    <!-- Card Grid -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary"><i class="fas fa-plus-circle me-2"></i> Add New Product</h5>
            <p class="card-text">Add new products to your inventory with detailed descriptions, pricing, and images. Keep your store updated.</p>
            <a href="{{ url('/create') }}" class="btn btn-primary">
              <i class="fas fa-plus me-1"></i> Add Product
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary"><i class="fas fa-list me-2"></i> View Products</h5>
            <p class="card-text">Browse, edit, and manage your product catalog. Update details, pricing, and availability with ease.</p>
            <a href="{{ url('/read') }}" class="btn btn-primary">
              <i class="fas fa-eye me-1"></i> View Products
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary"><i class="fas fa-boxes me-2"></i> Stock Management</h5>
            <p class="card-text">Monitor inventory levels, set low stock alerts, and manage your warehouse efficiently to avoid stockouts.</p>
            <a href="{{ url('/stocks') }}" class="btn btn-primary">
              <i class="fas fa-chart-bar me-1"></i> View Stock Status
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
