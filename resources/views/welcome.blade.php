<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XY SHOP Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light text-dark" style="font-family: 'Inter', sans-serif;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
    <div class="container-fluid px-4">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <i class="fas fa-store text-warning"></i>
        <strong>XY SHOP Dashboard</strong>
      </a>
      <div class="d-flex align-items-center gap-3">
        <div class="nav">
          <a class="nav-link text-white active" href="{{ url('/') }}">
            <i class="fas fa-home me-1"></i> Home
          </a>
          <a class="nav-link text-white" href="{{ url('/create') }}">
            <i class="fas fa-plus-circle me-1"></i> Add Product
          </a>
          <a class="nav-link text-white" href="{{ url('/read') }}">
            <i class="fas fa-eye me-1"></i> View Products
          </a>
          <a class="nav-link text-white" href="{{ url('/stocks') }}">
            <i class="fas fa-boxes me-1"></i> Stock Status
          </a>
        </div>
        <form action="{{ url('/logout') }}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-outline-light btn-sm">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
 <div class="">
  @yield('content')
 </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container text-center">
      <p class="mb-2">XY SHOP — Your trusted inventory and sales dashboard</p>
      <div class="d-flex justify-content-center gap-3 mb-2">
        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
      </div>
      <small class="text-muted">&copy; {{ date('Y') }} XY SHOP. All rights reserved.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
