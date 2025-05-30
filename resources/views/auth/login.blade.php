<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .card h1 {
            color: #007c91;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d3dce6;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        .btn {
            background-color: #00acc1;
            color: white;
            border: none;
            padding: 0.75rem;
            border-radius: 6px;
            width: 100%;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
        }
        .btn:hover {
            background-color: #008ba3;
        }
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
        .login-link a {
            color: #00acc1;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
<form action="{{ url('/login') }}" method="post">
    <h1>Login</h1>
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        </div>
</body>
</html>