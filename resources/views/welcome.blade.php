<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XY SHOP Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa; /* Sky blue */
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #00acc1;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links {
            display: flex;
            gap: 1rem;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            background-color: #008ba3;
            padding: 0.5rem 1rem;
            border-radius: 6px;
        }
        .nav-links a:hover {
            background-color: #006978;
        }
        .logout-form {
            margin: 0;
        }
        .logout-form input {
            background-color: #ff7043;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
        }
        .container {
            padding: 2rem;
        }
        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 1rem auto;
            max-width: 600px;
        }
        .card h2 {
            color: #007c91;
        }
        .btn {
            display: inline-block;
            background-color: #00acc1;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 1rem;
        }
        .btn:hover {
            background-color: #008ba3;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>
            XY SHOP Dashboard
        </div>

        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/create') }}">Add Product</a>
            <a href="{{ url('/read') }}">View Products</a>
            <a href="{{ url('/stocks') }}">Stock Status</a>
        </div>

        <form action="{{ url('/logout') }}" method="post" class="logout-form">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
